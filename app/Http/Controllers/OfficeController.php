<?php namespace App\Http\Controllers;

use App\Http\Requests\OfficeRequest;

use App\Office;
use App\OfficeGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class OfficeController extends Controller {

	private $path_img_galery = 'images/oficinas';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$offices = Office::all();
		$galleryOffices = OfficeGallery::all();

		return view('admin.office.index', compact('offices', 'galleryOffices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$office = new Office();
		$action = route('storeOffice');

		return view('admin.office.form', compact('office', 'action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(OfficeRequest $request)
	{
		Office::create($request->all());

		return redirect()->route('officesIndex');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$office = Office::find($id);
		$action = route('updateOffice', $id);

		return view('admin.office.form', compact('office', 'action'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(OfficeRequest $request, $id)
	{
		$office = Office::find($id);
		$office->fill($request->all());
		$office->save();

		return redirect()->route('officesIndex');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Office::destroy($id);

		return redirect()->back();
	}

	// Office Gallery
	public function createGallery() {
		$action = route('storeGalleryOffice');

		return view('admin.office.gallery-form', compact('action'));
	}

	public function storeGallery(Request $request) {
		$params = $request->all();
		$rules = [
			'name' => 'required',
			'image' => 'required|image|max:1500'
		];

		$v = Validator::make($params, $rules);
		if ($v->fails()) {
			return redirect()->back()->withInput($params)->withErrors($v->errors());
		}

		$image = $request->file('image');
		$params['image'] = str_slug(substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4), '_')
			.'.'.$image->getClientOriginalExtension();

		$request->file('image')->move($this->path_img_galery, $params['image']);

		OfficeGallery::create($params);

		return redirect()->route('officesIndex');
	}

	public function deleteGallery($id) {
		$galleryOffice = OfficeGallery::find($id);

		File::delete($this->path_img_galery . '/' . $galleryOffice->image);
		$galleryOffice->delete();

		return redirect()->back();
	}
}

<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Validator;
use File;

class PageController extends Controller {

    private $rules = [
        'name' => 'required',
        'type' => 'in:AREAS',
        'text_en' => 'required',
        'text_en' => 'required',
        'images' => 'required|image'
    ];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($type)
	{
	    $pages = Page::where('type', strtoupper($type))->get(['id', 'type', 'name', 'image']);
		return view('admin.areas.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $area = new Page;
        $action = route('storeArea');

        return view('admin.areas.create', compact('area', 'action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $params = $request->all();
        $rules = $this->rules;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $params['image'] = str_slug(substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4), '_')
                .'.'.$image->getClientOriginalExtension();
            $params['images'] = $image;
        }

        $v = Validator::make($params, $rules);

        if ($v->fails()) {
            return redirect()->back()->withInput($params)->withErrors($v->errors());
        }

        if ($request->hasFile('image')) {
            $request->file('image')->move($this->getPathImagePageByType($params['type']), $params['image']);
        }

		Page::create($params);

        return redirect()->route('areaIndex', $params['type']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $area = Page::find($id);
        $action = route('areaEdit', $area->id);

        return view('admin.areas.create', compact('area', 'action'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
		$page = Page::find($id);
		$params = $request->all();
		$rules = $this->rules;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $params['image'] = str_slug(substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4), '_')
                .'.'.$image->getClientOriginalExtension();
            $params['images'] = $image;
        }

        $v = Validator::make($params, $rules);

        if ($v->fails()) {
            return redirect()->back()->withInput($params)->withErrors($v->errors());
        }

        if ($request->hasFile('image')) {
            if ($page->image) {
                File::delete($this->getPathImagePageByType($params['type']) . '/' . $page->image);
            }

            $request->file('image')->move($this->getPathImagePageByType($params['type']), $params['image']);
        }

        $page->fill($params);
        $page->save();

        return redirect()->route('areaIndex', $params['type']);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function getPathImagePageByType($type) {
	    return 'images/' . strtolower($type);
    }
}

<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller {

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
        $rules = [
            'name' => 'required',
            'type' => 'in:AREAS',
            'text_en' => 'required',
            'text_en' => 'required',
            'images' => 'required|image'
        ];

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
            $request->file('image')->move('images/' . strtolower($params['type']), $params['image']);
        }

		Page::create($params);

        return redirect()->route('areaIndex');
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
	public function edit($id)
	{
		//
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

}

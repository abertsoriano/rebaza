<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use App\Lawyer;

class LawyerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $lawyers = Lawyer::paginate(20, ['id', 'name', 'job_es']);
		return view('admin.lawyers', compact('lawyers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $types = $this->getTypes();

        $lawyer = new Lawyer();

        $action = route('storeLawyer');

		return view('admin.add-lawyer', compact('types', 'lawyer', 'action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $params = $request->all();
        $params['list_es'] = $this->convertJsonList($request->input('test_es'), $request->input('items_es'), 'es');
        $params['list_en'] = $this->convertJsonList($request->input('test_en'), $request->input('items_en'), 'en');

        Lawyer::create($params);

        return redirect()->route('lawyers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $types = $this->getTypes();

		$lawyer = Lawyer::find($id);

        $action = route('editLawyer', $lawyer->id);

		return view('admin.add-lawyer', compact('types', 'lawyer', 'action'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
        $lawyer = Lawyer::find($id);
        $params = $request->all();

        $params['list_es'] = $this->convertJsonList($request->input('test_es'), $request->input('items_es'), 'es');
        $params['list_en'] = $this->convertJsonList($request->input('test_en'), $request->input('items_en'), 'en');

        $lawyer->fill($params);
        $lawyer->save();

        return redirect()->route('lawyers');
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

	private function getTypes() {
	    return [['id' => '', 'name' => 'Seleccione'], ['id' => 1, 'name' => 'Socio'], ['id' => 2, 'name' => 'Asociados'], ['id' => 3, 'name' => 'Consultores']];
    }

    private function convertJsonList($dataList, $dataItem, $lang) {

        $result = [];
        $items = [];
        $i = 0;

        if ($dataList) {
            foreach ($dataList as $list => $value) {
                $result[$i] = ['list' => $value, 'items_' . $lang => []];

                if (isset($dataItem[$list])) {
                    foreach ($dataItem[$list] as $item) {
                        $items[] = $item;
                    }
                }

                $result[$i]['items_' . $lang] = $items;
                $items = [];
                $i++;
            }
        }

        return json_encode($result);
    }
}

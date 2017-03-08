<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	const image = 'imagen';
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::paginate(20);
		return view('admin.home', compact('articles'));
	}


	public function add()
	{
		return view('admin.add');
	}


	public function store(Request $request)
	{
	    $params = $request->all();

	    if ($request->hasFile(self::image)) {
	        $file = $request->file(self::image);

	        $newName = str_replace(' ', '_', $file->getClientOriginalName());
	        $file->move('images/articles', $newName);

	        $params['imagen'] = $newName;
            Article::create($params);

            return redirect()->route('home');
        } else {
	        return redirect()->back()->with('error', 'No se ha subido imagen alguna');
        }
	}

}

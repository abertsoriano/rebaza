<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Article;
use File;

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

	const IMAGE = 'imagen';
	const IMAGE_PATH = 'images/articles';

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest()->paginate(20);
		return view('admin.home', compact('articles'));
	}

	public function add()
	{
		return view('admin.add');
	}

	public function edit($id) {
	    $article = Article::find($id);
	    return view('admin.edit', compact('article'));
    }

	public function store(Request $request)
	{
	    $params = $request->all();

	    if ($request->hasFile(self::IMAGE)) {
	        $file = $request->file(self::IMAGE);

	        $newName = str_replace(' ', '_', $file->getClientOriginalName());
	        $file->move(self::IMAGE_PATH, $newName);

	        $params[self::IMAGE] = $newName;
        } else {
            $params[self::IMAGE] = '';
        }

        Article::create($params);

        return redirect()->route('home');
	}

	public function update(Request $request, $id)
    {
        $params = $request->all();

        $article = Article::find($id);

        if ($request->has('delete_picture')) {
            File::delete(self::IMAGE_PATH . '/' . $article->imagen);
            $params[self::IMAGE] = '';

        } else if ($request->hasFile(self::IMAGE)) {
            $file = $request->file(self::IMAGE);

            $newName = str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(self::IMAGE_PATH, $newName);

            $params[self::IMAGE] = $newName;
        }

        $article->fill($params);

        $article->save();

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }
}

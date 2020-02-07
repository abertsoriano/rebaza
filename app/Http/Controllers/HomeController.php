<?php namespace App\Http\Controllers;

use App\OtherImages;
use App\Page;
use Illuminate\Support\Facades\Validator;
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
	    $homePage = Page::find(1);

		return view('admin.home', compact('homePage'));
	}

	public function updateHomeData(Request $request)
    {
        $params = $request->all();
        $data = Page::find(1);

        $data->fill($params);
        $data->save();

        return redirect()->back();
    }

    public function articles($status)
    {
        $articles = Article::latest()->where('status', $status)->paginate(20);

        $pathView = 'admin.articles.index';
        if ($status == 2) {
			$pathView = 'admin.home_notice.index';
		}

        return view($pathView, compact('articles'));
    }

	public function add()
	{
		return view('admin.articles.add');
	}

	public function edit($id) {
	    $article = Article::find($id);
	    return view('admin.articles.edit', compact('article'));
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
            $params[self::IMAGE] = ' ';
        }

        Article::create($params);

        return redirect()->route('articles', $params['status']);
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

        return redirect()->route('articles', $params['status']);
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }

    // Home notices
	public function homeCreate() {

		$notice = new Article;
		$action = route('storeArticle');

		return view('admin.home_notice.form', compact('action', 'notice'));
	}

	public function homeArticlesView($id) {

		$notice = Article::find($id);
		$action = route('updateArticle', $id);

		return view('admin.home_notice.form', compact('action', 'notice'));
	}

	// Home Banners
	public function homeBannerIndex() {
		$banners = OtherImages::where('type', 3)->get(['id', 'image']);

		return view('admin.home_banner.index', compact('banners'));
	}

	public function homeBannerCreate()
	{
		return view('admin.home_banner.create');
	}

	public function homeBannerStore(Request $req)
	{
		$params = $req->all();
		$params['type'] = 3;

		$rules = [
			'image' => 'required|image|max:1500'
		];

		$v = Validator::make($params, $rules);

		if ($v->fails()) {
			return redirect()->back()->withInput($params)->withErrors($v->errors());
		}

		$image = $req->file('image');
		$params['image'] = str_slug(substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4), '_')
			.'.'.$image->getClientOriginalExtension();
		$req->file('image')->move('images/banners', $params['image']);

		OtherImages::create($params);

		return redirect()->route('bannerImages');
	}

	public function homeBannerDelete($id)
	{
		$image = OtherImages::find($id);

		File::delete('images/banners/' . $image->image);
		$image->delete();

		return redirect()->back();
	}
}

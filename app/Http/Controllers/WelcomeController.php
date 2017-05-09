<?php namespace App\Http\Controllers;

use App\Quotes;
use Illuminate\Http\Request;
use Cache;
use App\Article;
use App\Lawyer;
use App\Http\Requests\SendCvRequest;
use File;
use Mail;
use App\Page;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	private $fields = array('title_es', 'title_en', 'imagen', 'desc_es', 'desc_en');

	private $locale = '';

	private $pages;

	public function __construct()
    {
        if (Cache::has('locale')) {
            $this->locale = Cache::get('locale') == 'en' ? Cache::get('locale') : 'es';
        }

        $pages = Page::all(['id', 'page_slug', 'name_es', 'name_en', 'type']);

        $areas = $pages->where('type', 'AREAS')->toArray();
        $estudios = $pages->where('type', 'ESTUDIO')->toArray();

        $this->pages = ['estudios' => $estudios, 'areas' => $areas];
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $articles = Article::where('status', 1)->latest()->get($this->fields)->take(4)->toArray();
	    $homeData = Page::find(1);

	    $locale = $this->locale;
	    $pages = $this->pages;

        $quotes = Quotes::latest()->get();

		return view('index', compact('articles', 'locale', 'homeData', 'pages', 'quotes'));
	}

	public function abogadoasociados()
	{
        $asociados = Lawyer::where('type', 2)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;

		return view('abogadoasociados', compact('asociados', 'locale', 'pages'));
	}

	public function abogadoconsultores()
	{
        $consultores = Lawyer::where('type', 3)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;

		return view('abogadoconsultores', compact('consultores', 'locale', 'pages'));
	}

	public function abogadosocios()
	{
	    $socios = Lawyer::where('type', 1)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;

		return view('abogadosocios', compact('socios', 'locale', 'pages'));
	}

    public function pages($page_slug)
    {
        $locale = $this->locale;
        $page = Page::where('page_slug', $page_slug)->first();
        $pages = $this->pages;

        return view('pages', compact('page', 'locale', 'pages'));
    }

	public function galeria()
	{
        $locale = $this->locale;
        $pages = $this->pages;

		return view('galeria', compact('locale', 'pages'));
	}

	public function oficinas()
	{
        $locale = $this->locale;
        $pages = $this->pages;

		return view('oficinas', compact('locale', 'pages'));
	}

	public function reconocimiento()
	{
        $articles = Article::where('status', 1)->latest()->paginate(12, $this->fields);

        $locale = $this->locale;
        $pages = $this->pages;

		return view('reconocimiento', compact('articles', 'locale', 'pages'));
	}

	public function responsabilidadsocial()
	{
        $locale = $this->locale;
        $pages = $this->pages;

		return view('responsabilidadsocial', compact('locale', 'pages'));
	}

	public function trabaja()
	{
        $locale = $this->locale;
        $pages = $this->pages;

		return view('trabaja', compact('locale', 'pages'));
	}

	public function trabajaformulario()
	{
        $locale = $this->locale;
        $pages = $this->pages;

		return view('trabajaformulario', compact('locale', 'pages'));
	}

	public function changeLocale(Request $request)
	{
		$locale = $request->input('locale');

		Cache::forever('locale', $locale, 7200);

		return redirect()->back();
	}

	public function sendCv(SendCvRequest $request) {

        $data = $request->all();
        $data['cv'] = $request->file('cv')->getClientOriginalName();
        $request->file('cv')->move('cv', $data['cv']);

        Mail::send('emails.sendcv', $data, function($message) use ($data)
        {
            $message->from(env('MAIL_FROM'), env('MAIL_FROM_NAME'))->to(env('MAIL_TO'))->subject('CV de ' . $data['nombre']);

            $message->attach('cv/' . $data['cv']);
        });

        File::delete('cv/' . $data['cv']);

        return redirect()->back()->with('success', trans('links.success_message_cv'));
    }
}

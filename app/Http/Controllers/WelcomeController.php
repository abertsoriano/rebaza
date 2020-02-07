<?php namespace App\Http\Controllers;

use App\Gallery;
use App\Office;
use App\Quotes;
use App\RseGallery;
use Illuminate\Http\Request;
use Cache;
use App\Article;
use App\Lawyer;
use App\OtherImages;
use App\Http\Requests\SendCvRequest;
use File;
use App;
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

	private $socials;

	private $banners;

	public function __construct()
    {
        if (Cache::has('locale')) {
            $this->locale = Cache::get('locale') == 'en' ? Cache::get('locale') : 'es';
        } else {
			$this->locale = 'es';
			Cache::forever('locale', $this->locale, 17200);
		}
		App::setLocale($this->locale);

        $pages = Page::all(['id', 'page_slug', 'name_es', 'name_en', 'type']);

        $areas = $pages->where('type', 'AREAS')->toArray();
        $estudios = $pages->where('type', 'ESTUDIO')->toArray();
        $trabaja = $pages->find(30)->toArray();

        $this->pages = ['estudios' => $estudios, 'areas' => $areas, 'trabaja' => $trabaja];

        $this->socials = OtherImages::where('type', 2)->latest()->get(['link', 'image']);
        $this->banners = OtherImages::where('type', 3)->latest()->get(['image']);
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::where('status', 2)->latest()->get($this->fields)->toArray();
		$homeData = Page::find(1);

		$locale = $this->locale;
		$pages = $this->pages;

		$quotes = Quotes::latest()->get();

		$sidebarImages = OtherImages::where('type', 1)->latest()->get(['image']);
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('index', compact('articles', 'locale', 'homeData', 'pages', 'quotes', 'sidebarImages', 'socialIcons', 'banners'));
	}

	public function indexDemo() {
		$articles = Article::where('status', 2)->latest()->get($this->fields)->toArray();
		$homeData = Page::find(1);

		$locale = $this->locale;
		$pages = $this->pages;

		$quotes = Quotes::latest()->get();

		$sidebarImages = OtherImages::where('type', 1)->latest()->get(['image']);
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('index-demo', compact('articles', 'locale', 'homeData', 'pages', 'quotes', 'sidebarImages', 'socialIcons', 'banners'));
	}

	public function abogadoasociados()
	{
        $asociados = Lawyer::where('type', 2)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('abogadoasociados', compact('asociados', 'locale', 'pages', 'socialIcons', 'banners'));
	}

	public function abogadoconsejeros()
	{
        $consultores = Lawyer::where('type', 3)->orderBy('name')->get();
        $consultoresExternos = Lawyer::where('type', 4)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;
		$all = $consultores->merge($consultoresExternos);

		return view('abogadoconsejeros', compact('consultores', 'locale', 'pages', 'socialIcons', 'consultoresExternos', 'all', 'banners'));
	}

	public function abogadosocios()
	{
	    $socios = Lawyer::where('type', 1)->orderBy('name')->get();
        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('abogadosocios', compact('socios', 'locale', 'pages', 'socialIcons', 'banners'));
	}

    public function pages($page_slug)
    {
        $locale = $this->locale;
        $page = Page::where('page_slug', $page_slug)->first();
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

        return view('pages', compact('page', 'locale', 'pages', 'socialIcons', 'banners'));
    }

	public function galeria()
	{
        $locale = $this->locale;
        $pages = $this->pages;

        $galleries = Gallery::all();
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('galeria', compact('locale', 'pages', 'galleries', 'socialIcons', 'banners'));
	}

	public function oficinas()
	{
        $locale = $this->locale;
        $pages = $this->pages;

        $offices = Office::all();
        $galleryOffices = App\OfficeGallery::all();
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('oficinas', compact('locale', 'pages', 'offices', 'socialIcons', 'galleryOffices', 'banners'));
	}

	public function reconocimiento()
	{
        $articles = Article::where('status', 1)->latest()->paginate(12, $this->fields);

        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('reconocimiento', compact('articles', 'locale', 'pages', 'socialIcons', 'banners'));
	}

	public function responsabilidadsocial()
	{
		$rseGalleries = RseGallery::all();

        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('responsabilidadsocial', compact('locale', 'pages', 'socialIcons', 'rseGalleries', 'banners'));
	}

	public function trabaja()
	{
        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

		return view('trabaja', compact('locale', 'pages', 'socialIcons', 'banners'));
	}

	public function trabajaformulario()
	{
        $locale = $this->locale;
        $pages = $this->pages;
		$socialIcons = $this->socials;
		$banners = $this->banners;

	 	return view('trabajaformulario', compact('locale', 'pages', 'socialIcons', 'banners'));
	}

	public function changeLocale(Request $request)
	{
		$locale = $request->input('locale');

		Cache::forever('locale', $locale, 17200);

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

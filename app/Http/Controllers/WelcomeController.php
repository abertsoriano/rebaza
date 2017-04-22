<?php namespace App\Http\Controllers;

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

	private $fields = array('title', 'title_en', 'imagen', 'desc', 'desc_en');

	private $locale = '';

	public function __construct()
    {
        if (Cache::has('locale')) {
            $this->locale = Cache::get('locale') == 'en' ? Cache::get('locale') : 'es';
        }
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $articles = Article::where('status', 1)->latest()->get($this->fields)->take(4)->toArray();

	    $locale = $this->locale;

		return view('index', compact('articles', 'locale'));
	}

	public function abogadoasociados()
	{
		return view('abogadoasociados');
	}

	public function abogadoconsultores()
	{
		return view('abogadoconsultores');
	}

	public function abogadosocios()
	{
	    $socios = Lawyer::where('type', 1)->get();
        $locale = $this->locale;

		return view('abogadosocios', compact('socios', 'locale'));
	}

	public function areaconseciones()
	{
		return view('areaconseciones');
	}

	public function areacorporativo()
	{
		return view('areacorporativo');
	}

	public function areafinanciamientos()
	{
		return view('areafinanciamientos');
	}

	public function areafunciones()
	{
		return view('areafunciones');
	}

	public function arealaboral()
	{
		return view('arealaboral');
	}

	public function arealibre()
	{
		return view('arealibre');
	}

	public function arealitigios()
	{
		return view('arealitigios');
	}

	public function areamercado()
	{
		return view('areamercado');
	}

	public function areamineria()
	{
		return view('areamineria');
	}

	public function areaprivate()
	{
		return view('areaprivate');
	}

	public function areapropiedad()
	{
		return view('areapropiedad');
	}

	public function arearegulacion()
	{
		return view('arearegulacion');
	}

	public function arearestructuracion()
	{
		return view('arearestructuracion');
	}

	public function areatributario()
	{
		return view('areatributario');
	}

	public function areawhitecollarcrime()
	{
		return view('areawhitecollarcrime');
	}

	public function estudiodiferencia()
	{
		return view('estudiodiferencia');
	}

	public function estudiopresentacion()
	{
	    $locale = $this->locale;
        $page = Page::where('page_slug', 'estudiopresentacion')->first();
		return view('estudiopresentacion', compact('page', 'locale'));
	}

    public function pages($page_slug)
    {
        $locale = $this->locale;
        $page = Page::where('page_slug', $page_slug)->first();
        return view('pages', compact('page', 'locale'));
    }

	public function galeria()
	{
		return view('galeria');
	}

	public function oficinas()
	{
		return view('oficinas');
	}

	public function reconocimiento()
	{
        $articles = Article::where('status', 1)->latest()->paginate(12, $this->fields);

        $locale = $this->locale;

		return view('reconocimiento', compact('articles', 'locale'));
	}

	public function responsabilidadsocial()
	{
		return view('responsabilidadsocial');
	}

	public function trabaja()
	{
		return view('trabaja');
	}

	public function trabajaformulario()
	{
		return view('trabajaformulario');
	}

	public function changeLocale(Request $request)
	{
		$locale = $request->input('locale');

		Cache::forever('locale', $locale, 7200);

		return redirect()->back();
	}

	public function areaventure() {
		return view('areaventure');
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

<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use App\Article;

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

	const fields = ['title', 'title_en', 'imagen', 'desc', 'desc_en'];

	private $locale = 'es';

	public function __construct()
    {
        if (Cache::has('locale')) {
            $this->locale = Cache::get('locale') == 'en' ? '_' . Cache::get('locale') : '';
        }
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $articles = Article::where('status', 1)->latest()->get(self::fields)->take(4)->toArray();

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
		return view('abogadosocios');
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
		return view('estudiopresentacion');
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
        $articles = Article::where('status', 1)->latest()->paginate(12, self::fields);

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
}

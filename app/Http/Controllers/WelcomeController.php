<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use App;

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

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
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
		return view('reconocimiento');
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
		$redirect = '';

		Cache::forever('locale', $locale, 7200);

		return redirect()->back();
	}
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


$locale = 'es';
if (Cache::has('locale')) {
	$locale = Cache::get('locale');
	App::setLocale($locale);
}

$index = '';
$prefix = '';
if ($locale == 'es') {
	$index = '/';
} else {
	$index = 'en/';
	$prefix = $locale . '/';
}

Route::get('language', ['as' => 'changeLocale', 'uses' => 'WelcomeController@changeLocale']);

Route::get($index, ['as' => 'index', 'uses' => 'WelcomeController@index']);
Route::get($prefix . 'abogadoasociados', ['as' => 'abogadoasociados', 'uses' => 'WelcomeController@abogadoasociados']);
Route::get($prefix . 'abogadoconsultores', ['as' => 'abogadoconsultores', 'uses' => 'WelcomeController@abogadoconsultores']);
Route::get($prefix . 'abogadosocios', ['as' => 'abogadosocios', 'uses' => 'WelcomeController@abogadosocios']);
Route::get($prefix . 'areaconseciones', ['as' => 'areaconseciones', 'uses' => 'WelcomeController@areaconseciones']);
Route::get($prefix . 'areacorporativo', ['as' => 'areacorporativo', 'uses' => 'WelcomeController@areacorporativo']);
Route::get($prefix . 'areafinanciamientos', ['as' => 'areafinanciamientos', 'uses' => 'WelcomeController@areafinanciamientos']);
Route::get($prefix . 'areafunciones', ['as' => 'areafunciones', 'uses' => 'WelcomeController@areafunciones']);
Route::get($prefix . 'arealaboral', ['as' => 'arealaboral', 'uses' => 'WelcomeController@arealaboral']);
Route::get($prefix . 'arealibre', ['as' => 'arealibre', 'uses' => 'WelcomeController@arealibre']);
Route::get($prefix . 'arealitigios', ['as' => 'arealitigios', 'uses' => 'WelcomeController@arealitigios']);
Route::get($prefix . 'areamercado', ['as' => 'areamercado', 'uses' => 'WelcomeController@areamercado']);
Route::get($prefix . 'areamineria', ['as' => 'areamineria', 'uses' => 'WelcomeController@areamineria']);
Route::get($prefix . 'areaprivate', ['as' => 'areaprivate', 'uses' => 'WelcomeController@areaprivate']);
Route::get($prefix . 'areapropiedad', ['as' => 'areapropiedad', 'uses' => 'WelcomeController@areapropiedad']);
Route::get($prefix . 'arearegulacion', ['as' => 'arearegulacion', 'uses' => 'WelcomeController@arearegulacion']);
Route::get($prefix . 'arearestructuracion', ['as' => 'arearestructuracion', 'uses' => 'WelcomeController@arearestructuracion']);
Route::get($prefix . 'areatributario', ['as' => 'areatributario', 'uses' => 'WelcomeController@areatributario']);
Route::get($prefix . 'areawhitecollarcrime', ['as' => 'areawhitecollarcrime', 'uses' => 'WelcomeController@areawhitecollarcrime']);
Route::get($prefix . 'estudiodiferencia', ['as' => 'estudiodiferencia', 'uses' => 'WelcomeController@estudiodiferencia']);
Route::get($prefix . 'estudiopresentacion', ['as' => 'estudiopresentacion', 'uses' => 'WelcomeController@estudiopresentacion']);
Route::get($prefix . 'galeria', ['as' => 'galeria', 'uses' => 'WelcomeController@galeria']);
Route::get($prefix . 'oficinas', ['as' => 'oficinas', 'uses' => 'WelcomeController@oficinas']);
Route::get($prefix . 'reconocimiento', ['as' => 'reconocimiento', 'uses' => 'WelcomeController@reconocimiento']);
Route::get($prefix . 'responsabilidadsocial', ['as' => 'responsabilidadsocial', 'uses' => 'WelcomeController@responsabilidadsocial']);
Route::get($prefix . 'trabaja', ['as' => 'trabaja', 'uses' => 'WelcomeController@trabaja']);
Route::get($prefix . 'trabajaformulario', ['as' => 'trabajaformulario', 'uses' => 'WelcomeController@trabajaformulario']);


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

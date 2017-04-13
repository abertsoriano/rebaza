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

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function ($route) {

    $route->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    $route->get('add-article', ['as' => 'addArticle', 'uses' => 'HomeController@add']);
    $route->post('add-article', ['as' => 'storeArticle', 'uses' => 'HomeController@store']);

    $route->get('edit-article/{id}', ['as' => 'editArticle', 'uses' => 'HomeController@edit']);
    $route->post('update-article/{id}', ['as' => 'updateArticle', 'uses' => 'HomeController@update']);
    $route->get('delete-article/{id}', ['as' => 'deleteArticle', 'uses' => 'HomeController@delete']);
    $route->get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

    $route->get('lawyers', ['as' => 'lawyers', 'uses' => 'LawyerController@index']);
    $route->get('lawyers/create', ['as' => 'addLawyer', 'uses' => 'LawyerController@create']);
    $route->post('lawyers/store', ['as' => 'storeLawyer', 'uses' => 'LawyerController@store']);
    $route->get('lawyers/{id}/view', ['as' => 'showLawyer', 'uses' => 'LawyerController@show']);
    $route->post('lawyers/{id}/edit', ['as' => 'editLawyer', 'uses' => 'LawyerController@edit']);
});

$locale = 'es';
if (Cache::has('locale')) {
	$locale = Cache::get('locale');
	App::setLocale($locale);
}

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('language', ['as' => 'changeLocale', 'uses' => 'WelcomeController@changeLocale']);

Route::get('/', ['as' => 'index', 'uses' => 'WelcomeController@index']);
Route::get('abogadoasociados', ['as' => 'abogadoasociados', 'uses' => 'WelcomeController@abogadoasociados']);
Route::get('abogadoconsultores', ['as' => 'abogadoconsultores', 'uses' => 'WelcomeController@abogadoconsultores']);
Route::get('abogadosocios', ['as' => 'abogadosocios', 'uses' => 'WelcomeController@abogadosocios']);
Route::get('areaconseciones', ['as' => 'areaconseciones', 'uses' => 'WelcomeController@areaconseciones']);
Route::get('areacorporativo', ['as' => 'areacorporativo', 'uses' => 'WelcomeController@areacorporativo']);
Route::get('areafinanciamientos', ['as' => 'areafinanciamientos', 'uses' => 'WelcomeController@areafinanciamientos']);
Route::get('areafunciones', ['as' => 'areafunciones', 'uses' => 'WelcomeController@areafunciones']);
Route::get('arealaboral', ['as' => 'arealaboral', 'uses' => 'WelcomeController@arealaboral']);
Route::get('arealibre', ['as' => 'arealibre', 'uses' => 'WelcomeController@arealibre']);
Route::get('arealitigios', ['as' => 'arealitigios', 'uses' => 'WelcomeController@arealitigios']);
Route::get('areamercado', ['as' => 'areamercado', 'uses' => 'WelcomeController@areamercado']);
Route::get('areamineria', ['as' => 'areamineria', 'uses' => 'WelcomeController@areamineria']);
Route::get('areaprivate', ['as' => 'areaprivate', 'uses' => 'WelcomeController@areaprivate']);
Route::get('areapropiedad', ['as' => 'areapropiedad', 'uses' => 'WelcomeController@areapropiedad']);
Route::get('arearegulacion', ['as' => 'arearegulacion', 'uses' => 'WelcomeController@arearegulacion']);
Route::get('arearestructuracion', ['as' => 'arearestructuracion', 'uses' => 'WelcomeController@arearestructuracion']);
Route::get('areatributario', ['as' => 'areatributario', 'uses' => 'WelcomeController@areatributario']);
Route::get('areaventure', ['as' => 'areaventure', 'uses' => 'WelcomeController@areaventure']);
Route::get('areawhitecollarcrime', ['as' => 'areawhitecollarcrime', 'uses' => 'WelcomeController@areawhitecollarcrime']);
Route::get('estudiodiferencia', ['as' => 'estudiodiferencia', 'uses' => 'WelcomeController@estudiodiferencia']);
Route::get('estudiopresentacion', ['as' => 'estudiopresentacion', 'uses' => 'WelcomeController@estudiopresentacion']);
Route::get('galeria', ['as' => 'galeria', 'uses' => 'WelcomeController@galeria']);
Route::get('oficinas', ['as' => 'oficinas', 'uses' => 'WelcomeController@oficinas']);
Route::get('reconocimiento', ['as' => 'reconocimiento', 'uses' => 'WelcomeController@reconocimiento']);
Route::get('responsabilidadsocial', ['as' => 'responsabilidadsocial', 'uses' => 'WelcomeController@responsabilidadsocial']);
Route::get('trabaja', ['as' => 'trabaja', 'uses' => 'WelcomeController@trabaja']);
Route::get('trabajaformulario', ['as' => 'trabajaformulario', 'uses' => 'WelcomeController@trabajaformulario']);

Route::post('send-cv', ['as' => 'sendCv', 'uses' => 'WelcomeController@sendCv']);

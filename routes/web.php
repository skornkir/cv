<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cv.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contact', 'ContactController');

Route::group(['prefix' => 'admin'], function (){
    CRUD::resource('education', 'Admin\EducationCrudController');
    CRUD::resource('work', 'Admin\WorkCrudController');
    Route::group(['prefix' => 'portfolio'], function (){
        Route::get('/', 'PortfolioController@index');
        Route::get('create', 'PortfolioController@create');
        Route::post('create', 'PortfolioController@store');
        Route::delete('{id}/delete', 'PortfolioController@delete');
        //Route::delete('{id}/delete', 'PortfolioController@delete');
    });
});

Route::post('/savecontact', function (){
    $req = Request;
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});

Route::resource('blog', 'BlogController');

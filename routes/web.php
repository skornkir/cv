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
//   CRUD::resource('tag','Admin\TagCrudController');
//   CRUD::resource('tag2', 'Admin\Tag2CrudController');
    CRUD::resource('test', 'Admin\TestCrudController');
    CRUD::resource('product', 'Admin\ProductCrudController');

});

Route::post('/savecontact', function (){
    $req = Request;
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});

//myroute
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/adminpanel', function(){
//	return View::make('adminpanel::hello2');
//});

Route::group(array('prefix' => 'adminpanel'), function () {
  Route::get('/', 'Sheremet\Adminpanel\AdminpanelController@index');
  Route::get('/article', 'Sheremet\Adminpanel\ArticleController@index');
  Route::get('/article/create', 'Sheremet\Adminpanel\ArticleController@create');
  Route::post('/article/store', 'Sheremet\Adminpanel\ArticleController@store');
  Route::post('/uploadfile/imageupload', 'Sheremet\Adminpanel\UploadfileController@imageUpload');
});



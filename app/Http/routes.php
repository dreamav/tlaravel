<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);

Route::get('/about',['uses'=>'Admin\AboutController@show','as'=>'about']);


Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);


Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article']);

Route::get('/contact',['middleware' => ['auth'],'uses'=>'Admin\ContactController@show','as'=>'contact']);
Route::post('/contact',['uses'=>'Admin\ContactController@store']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    ////
    
    
    ///
    
});

/*Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});*/
Route::auth();
Route::group(['prefix'=>'admin','middleware'=>['web','auth']], function(){
    Route::get('/',['uses'=>'Admin\AdminController@show','as'=>'admin_index']);
    Route::get('/add/post',['uses'=>'Admin\AdminPostController@create','as'=>'admin_add_post']);
});













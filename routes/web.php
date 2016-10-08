<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/aa', function () {
    return 'qq';
});
Route::get("/","homeController@index");
Route::get("/admin","AdminController@index");


// Route::get('/user','UserController@index');


//基础路由
// Route::get('/hello',function(){
// 	return 'Hello get';
// });

// Route::post('/hello', function()
// {
//     return 'Hello post';
// });

// Route::put('/hello', function()
// {
//     //
//     return 'Hello put';
// });

// Route::delete('/hello', function()
// {
//     //
//     return 'Hello delete';
// });

//多种请求的路由
// Route::match(['get', 'post','put'], '/aa', function()
// {
//     return 'Hello World';
// });

// 带参数路由
// Route::get('/test/{id?}', function($id='')
// {
//     return 'Hello World'.$id;
// });

// 带限制条件的路由
// Route::get('/test/{id?}', function($id='')
// {
//     return 'Hello World'.$id;
// })->where('id',"[0-9]+");


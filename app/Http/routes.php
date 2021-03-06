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
//
Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/about', function () {
//    return 'Hi about page';
//});
//
//Route::get('/contact', function () {
//    return 'Hi, I am contact';
//});
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return 'This is post no. '.$id.' and name '.$name;
//});
//
//Route::get('/admin/posts/example', array('as'=>'admin.home', function() {
//    $url = route('admin.home');
//
//     return 'This url is '.$url;
////    return '<a href="'.route("admin.home").'">CLICK HERE</a>';
//}));


//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('post/{id}/{name}/{pass}', 'PostsController@show_post');
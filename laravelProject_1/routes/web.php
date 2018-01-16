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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    //return view('welcome');
    return 'home';
});
Route::get('/about', function() {
    return "<h1>This is the about page</h1>";
});
Route::get('/another', function() {
    return "this is Another page";
});

Route::get('/contact', function() {
    return view('contact');
});
Route::get('/user', function() {
    return view('user');
});
Route::get('user/{id}', function($id) {
    return 'User '.$id;
});
Route::get('user2/{id}/{name}', function($id, $name) {
    return 'User '.$id.' '.$name;
})->where('id', '[0-9]+');;//that means id must be integer
Route::get('home', 'myController@index');
Route::get('user', 'myController@user');












?>

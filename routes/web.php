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
Route::view('authorization', 'admin/authorization');


Route::get('/', 'FaqControllers\FaqController@faq');


Route::get('/faq/ask_question', function (){
    return view('faq/ask_question');
});


Route::get('/admin', 'AdminControllers\AdminController@admin');












// Route::get('authorization', function (){
//     return view('admin/authorization');
// });

// Route::get('/admin/authorization', function () {
//   return view('authorization');
// });
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function (){
//     return view('faq/index');
// });
// Route::get('/', function ($id) {
// return view('admin/authorization');
// });
// Route::get('foo', function () {
//     return 'Hello World';
// });

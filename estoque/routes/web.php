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
     return view('admin.formLogin');
 });

//  return redirect()->route('produtos.index');
// Route::get('/' ,function() {
//     return view('admin.dashboard');
// });



Route::resource('produtos','ProdutoController');
Route::resource('fornecedores','FornecedorController');

Route::get('/admin','AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do','AuthController@login')->name('admin.login.do');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('produtos/busca','ProdutoController@busca');

Route::get('/calendario', 'FullCalendarController@index')->name('index');
Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');
Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');
Route::post('/event-store', 'EventController@store')->name('routeEventStore');
Route::delete('/event-destroy', 'EventController@destroy')->name('routeEventDelete');

Route::delete('/fast-event-destroy', 'FastEventController@destroy')->name('routeFastEventDelete');
Route::put('/fast-event-update', 'FastEventController@update')->name('routeFastEventUpdate');
Route::post('/fast-event-store', 'FastEventController@store')->name('routeFastEventStore');




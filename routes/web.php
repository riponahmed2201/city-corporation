<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['uses'=>'AdminController@showLoginForm']);

Auth::routes();

Route::middleware('auth')->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
        // ALL PROJECTS ROUTES
        Route::get('/complain/create-complain', 'ComplainController@create_complain')->name('create_complain');
        Route::post('/complain/store-complain', 'ComplainController@store_complain')->name('store_complain');
        Route::get('/complain/show-complain', 'ComplainController@show_complain')->name('show_complain');
        Route::get('/complain/all-datatable','ComplainController@show_Data');
        Route::get('/complain/edit-complain/{id}', 'ComplainController@edit_complain')->name('edit_complain');
        Route::post('/complain/update-complain/{id}', 'ComplainController@update_complain')->name('update_complain');
        Route::get('/complain/delete-complain/{id}', 'ComplainController@delete_complain')->name('delete_complain');

});
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::namespace('Projects')->prefix('')->name('.')->group(function () {
    Route::resource('/projects', 'ProjectsController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/getRequest', function () {
    if (Request::ajax()) {
        return view('projects/addProjectForm');
        //return '<div>TEst data</div>';
    }
});

//
//Route::get('/{any}', function () {
//    return view('home');
//})->where('any', '.*');


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('{path}','HomeController@index')->where( 'path', '([A-z]+)?' );

//Route::get('/home', "HomeController@Home");
//
//Route::get('/dbchack', "HomeController@dbConn");
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/projects', 'AllProjects@index')->name('projects');

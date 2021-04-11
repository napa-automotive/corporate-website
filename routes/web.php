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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::name('home')->get('/', 'App\Http\Controllers\FrontController@index');
Route::name('about')->get('/about', 'App\Http\Controllers\FrontController@about');
Route::name('new')->get('/new', 'App\Http\Controllers\FrontController@new');
Route::name('team')->get('/team', 'App\Http\Controllers\FrontController@team');
Route::name('services')->get('/services', 'App\Http\Controllers\FrontController@services');
Route::name('faq')->get('/faq', 'App\Http\Controllers\FrontController@faq');
Route::name('testimonial')->get('/testimonial', 'App\Http\Controllers\FrontController@testimonial');
Route::name('project')->get('/project', 'App\Http\Controllers\FrontController@project');
Route::name('contact')->get('/contact', 'App\Http\Controllers\FrontController@contact');




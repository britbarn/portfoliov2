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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/projects/blichmann', function () {
    return view('project');
});

Route::get('/projects/matchbook', function () {
    return view('mbweb');
});

Route::get('/projects/indyhumane', function () {
    return view('indyhumane');
});

Route::get('/projects/revracing', function () {
    return view('revracing');
});

Route::get('/projects/gunsafetyinfo', function () {
    return view('gunsafetyinfo');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', 'ContactController@sendContact');
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


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/donation', function () {
    return view('frontend.donation');
});
Route::get('/jobs', function () {
    return view('frontend.jobs');
});
Route::get('/team', function () {
    return view('frontend.team');
});
Route::get('/steps-to-apply', function () {
    return view('frontend.admission');
});
Route::get('/new-application', function () {
    return view('frontend.new-application');
});
Route::get('/prospectus', function () {
    return view('frontend.course');
});



Route::get('/admin', function () {
    return view('backend.index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

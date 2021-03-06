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
    return redirect('admin');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('images', function () {
    $images = \App\Image::all();

    return view('images', compact('images'))->render();
});

Route::get('categories', function (){
    $categories = \App\ImagesCategory::all();

    return view('categories', compact('categories'))->render();
});

Route::get('interested_mail', 'ContactController@mail')->name('interested_mail');

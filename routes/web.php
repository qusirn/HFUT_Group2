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

Route::get('/room/{id}', function () {
    return view('room', [
        'name' => 'Victoria',
        'user' => '-1',
        'statue' => [
            'value' => 'none'
        ],
    ]);
});

Route::get('/joinus', function () {
    return view('joinus', [
        'name' => -1,
        'user' => -1,
        'statue' => [
            'value' => 'none'
        ],
    ]);
});

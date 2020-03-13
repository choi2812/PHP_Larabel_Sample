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
    $books=[
        'Abook',
        'Bbook',
        '<script>alert("hello")</script>'
    ];

    return view('welcome',['books'=>$books]);
});

Route::get('/hello', function () {
    $books=[
        'Atestbook',
        'Btestbook',
        '<script>alert("hello")</script>'
    ];
    return view('hello')->with(['books' => $books]);
});

Route::get('/contact', function () {
    $books=[
        'Atest1book',
        'Btest1book',
        '<script>alert("hello")</script>'
    ];
    return view('contact')->withBooks($books);
});

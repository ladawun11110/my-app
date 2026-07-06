<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index'); 

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login-process', function (Request $request) {
    $username = $request->input('username');  
    return redirect()->route('home')->with('user_logged_in', $username);
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/logout', function () {
    return redirect()->route('login');
})->name('logout');

Route::get('/add', function () {
    return view('add'); 
})->name('add');

Route::get('/about', function () {
    $name = "Ladawan Puangyod";
    $date = "20 มิถุนายน 2547";
    return view('about',compact('name','date'));
})->name('about');

Route::get('/blog', function () {
    $blog = [
        [
            'title' => 'บทความที่ 1', 
            'content' => 'เนื้อหาบทความที่ 1', 
            'status' => true
        ],
        [
            'title' => 'บทความที่ 2', 
            'content' => 'เนื้อหาบทความที่ 2', 
            'status' => true
        ],
        [
            'title' => 'บทความที่ 3', 
            'content' => 'เนื้อหาบทความที่ 3', 
            'status' => false
        ],
    ];
    return view('blog',compact('blog')); 
})->name('blog');


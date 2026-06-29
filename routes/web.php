<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return "
    <!DOCTYPE html>
    <html lang='th'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>ยินดีต้อนรับ</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap' rel='stylesheet'>
        <style>
            body { font-family: 'Noto Sans Thai', sans-serif; background-color: #f8f9fa; }
            .welcome-box { margin-top: 15%; text-align: center; }
        </style>
    </head>
    <body>
        <div class='container welcome-box'>
            <div class='card p-5 shadow-sm d-inline-block' style='max-width: 500px;'>
                <h1 class='fw-bold text-primary mb-3'>ยินดีต้อนรับสู่ระบบ</h1>
                <p class='text-muted mb-4'>ยินดีต้อนรับเข้าสู่ระบบจัดการข้อมูลสมาชิก (เวอร์ชันทดสอบ)</p>
                <a href='" . route('login') . "' class='btn btn-primary btn-lg fw-bold px-4'>
                    เข้าสู่ระบบที่นี่
                </a>
            </div>
        </div>
    </body>
    </html>
    ";
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


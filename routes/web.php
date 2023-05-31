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
// ADMIN DAN USER PENDAFTARAN SEMINAR,SKRIPSI,YUDISIUM

Route::get('/dahsboard', function () {
    return view('dahsboard');
});
Route::get('/skripsi', function () {
    return view('skripsi');
});
Route::get('/seminar', function () {
    return view('seminar');
});
Route::get('/yudisium', function () {
    return view('yudisium');
});
Route::get('/daftarseminar', function () {
    return view('pendaftaranseminar_user');
});
Route::get('/daftarskripsi', function () {
    return view('pendaftaranskripsi_user');
});
Route::get('/daftaryudisium', function () {
    return view('pendaftaranyudisium_user');
});

// ADMIN KELOLA JADWAL SEMINAR,SKRIPSI,YUDISIUM
Route::get('/jadwalseminar_admin', function () {
    return view('jadwalseminar_admin');
});
Route::get('/jadwalskripsi_admin', function () {
    return view('jadwalskripsi_admin');
});
Route::get('/jadwalyudisium_admin', function () {
    return view('jadwalyudisium_admin');
});
Route::get('/jadwalseminar_user', function () {
    return view('jadwalseminar_user');
});
Route::get('/jadwalskripsi_user', function () {
    return view('jadwalskripsi_user');
});
Route::get('/jadwalyudisium_user', function () {
    return view('jadwalyudisium_user');
});

// ADMIN KELOLA PERSYARATAN SEMINAR,SKRIPSI,YUDISIUM
Route::get('/persyaratan_userSeminar', function () {
    return view('persyaratan_userSeminar');
});
Route::get('/persyaratan_userskripsi', function () {
    return view('persyaratan_userskripsi');
});
Route::get('/persyaratan_useryudisium', function () {
    return view('persyaratan_useryudisium');
});
Route::get('/syaratseminar_admin', function () {
    return view('syaratseminar_admin');
});
Route::get('/syaratskripsi_admin', function () {
    return view('syaratskripsi_admin');
});


























// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/iren', function () {
//     return view('dashboard');
// });


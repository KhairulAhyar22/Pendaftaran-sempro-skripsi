<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdSemproController;
use App\Http\Controllers\PdSkripsiController;

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

Route::get('/dashboard', function () {
    return view('page.general.dashboard');
});
// ==================== SEMINAR PROPOSAL =====================
Route::resource('proposal', PdSemproController::class);
Route::get('/proposal/create/dokumentpersyaratan/{id}', [PdSemproController::class, 'createdokumentproposal']);
Route::post('/proposal/store/dokumentpersyaratan/{id}', [PdSemproController::class, 'storedokumentproposal']);

// ==================== UJIAN SKRIPSI =======================
Route::resource('skripsi', PdSkripsiController::class);
Route::get('/skripsi/create/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'createdokumentskripsi']);
Route::post('/skripsi/store/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'storedokumentskripsi']);

// Route::get('/daftaryudisium', function () {
//     return view('pendaftaranyudisium_user');
// });

// ADMIN KELOLA JADWAL SEMINAR,SKRIPSI,YUDISIUM
Route::get('/jadwalseminar_admin', function () {
    return view('page.proposal.jadwalseminar_admin');
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
    return view('page.proposal.persyaratan_userSeminar');
});
Route::get('/persyaratan_userskripsi', function () {
    return view('page.skripsi.persyaratan_userskripsi');
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
Route::get('/syaratyudisium_admin', function () {
    return view('syaratyudisium_admin');
});
Route::get('/tambahdaftarseminar', function () {
    return view('tambahdaftarseminar');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


























// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/iren', function () {
//     return view('dashboard');
// });


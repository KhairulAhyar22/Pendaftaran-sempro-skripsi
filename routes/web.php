<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::group(['middleware' => ['guest']], function () {
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->middleware('guest');
    Route::get('/login', function () {
        return view('page.general.login');
    })->name('login');
});
// ADMIN DAN USER PENDAFTARAN SEMINAR,SKRIPSI,YUDISIUM
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/dashboard', function () {
        return view('page.general.dashboard');
    });
    Route::get('/mhs_dashboard', function () {
        return view('page.general.mhs_dashboard');
    });
    // ==================== SEMINAR PROPOSAL =====================
    Route::resource('/proposal', PdSemproController::class);

    Route::get('/proposal/create/dokumentpersyaratan/{id}', [PdSemproController::class, 'createdokumentproposal']);
    Route::post('/proposal/store/dokumentpersyaratan/{id}', [PdSemproController::class, 'storedokumentproposal']);
    Route::get('/proposal/hasilformproposal/{id}', [PdSemproController::class, 'hasilformproposal']);

    // ==================== UJIAN SKRIPSI =======================
    Route::resource('skripsi', PdSkripsiController::class);
    Route::get('/skripsi/create/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'createdokumentskripsi']);
    Route::post('/skripsi/store/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'storedokumentskripsi']);
    Route::get('/skripsi/hasilformskripsi/{id}', [PdSkripsiController::class, 'hasilformskripsi']);


    //=======SEMPRO MAHASISWA========
    // Route::resource('/mhs_proposal', [PdSemproController::class,'index_mhs']);



    // Route::get('/daftaryudisium', function () {
    //     return view('pendaftaranyudisium_user');
    // });

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
    Route::get('/register', function () {
        return view('page.general.register');
    });

    Route::get('/buatakun', function () {
        return view('page.general.buatakun');
    });
    Route::post('/storebuatakun', [LoginController::class, 'buatakun']);
});


// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/iren', function () {
//     return view('dashboard');
// });
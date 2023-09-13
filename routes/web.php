<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PdSemproController;
use App\Http\Controllers\PdSkripsiController;
use App\Http\Controllers\PdYudisiumController;
use App\Http\Controllers\JadwalSemproController;
use App\Http\Controllers\JadwalSkripsiController;
use App\Http\Controllers\JadwalYudisiumController;

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

/////////////////////LANDING PAGE////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('/landingpage', LandingController::class);


Route::group(['middleware' => ['guest']], function () {
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->middleware('guest');
    Route::get('/', [LoginController::class, 'index'])->name('login');
    // Route::get('/login', [LoginController::class, 'index'])->name('login');
    // Route::get('/login', function () {

    //     return view('page.general.login.content.login');
    // })->name('login');
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
    Route::get('/proposal/create/mhs', [PdSemproController::class, 'createbymahasiswa']);
    Route::get('/proposal/create/dokumentpersyaratan/{id}', [PdSemproController::class, 'createdokumentproposal']);
    Route::post('/proposal/store/dokumentpersyaratan/{id}', [PdSemproController::class, 'storedokumentproposal']);
    Route::get('/proposal/hasilformproposal/{id}', [PdSemproController::class, 'hasilformproposal']);
    Route::get('/proposal/vetifikasi/{id}', [PdSemproController::class, 'verifikasiproposal']);
    Route::get('/proposal/unvetifikasi/{id}', [PdSemproController::class, 'unverifikasiproposal']);

    // ==================== UJIAN SKRIPSI =======================
    Route::resource('skripsi', PdSkripsiController::class);
    Route::get('/skripsi/create/mhs', [PdSkripsiController::class, 'createbymahasiswa']);
    Route::get('/skripsi/create/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'createdokumentskripsi']);
    Route::post('/skripsi/store/dokumentpersyaratan/{id}', [PdSkripsiController::class, 'storedokumentskripsi']);
    Route::get('/skripsi/hasilformskripsi/{id}', [PdSkripsiController::class, 'hasilformskripsi']);
    Route::get('/skripsi/vetifikasi/{id}', [PdSkripsiController::class, 'verifikasiskripsi']);
    Route::get('/skripsi/unvetifikasi/{id}', [PdSkripsiController::class, 'unverifikasiskripsi']);


    // ==================== SURAT JADWAL SEMINAR PROPOSAL =======================
    Route::get('/jadwal/seminarproposal', [JadwalSemproController::class, 'index']);
    Route::get('/jadwal/seminarproposal/create', [JadwalSemproController::class, 'create']);
    Route::get('/jadwal/seminarproposal/crePdashbate/{id}', [JadwalSemproController::class, 'createbyid']);
    Route::post('/jadwal/seminarproposal/store', [JadwalSemproController::class, 'store']);
    Route::get('/jadwal/seminarproposal/download/{id}', [JadwalSemproController::class, 'downloadjadwal']);
    
    // ==================== SURAT JADWAL SEMINAR SKRIPSI =======================
    Route::get('/jadwal/ujianskripsi', [JadwalSkripsiController::class, 'index']);
    Route::get('/jadwal/ujianskripsi/create', [JadwalSkripsiController::class, 'create']);
    Route::get('/jadwal/ujianskripsi/create/{id}', [JadwalSkripsiController::class, 'createbyid']);
    Route::post('/jadwal/ujianskripsi/store', [JadwalSkripsiController::class, 'store']);
    Route::get('/jadwal/ujianskripsi/download/{id}', [JadwalSkripsiController::class, 'downloadjadwal']);

    /////////////////////// YUDISIUM ///////////////////////////
    // ==================== DAFTAR =======================
    Route::resource('yudisium', PdYudisiumController::class);
    Route::get('/yudisium/create/mhs', [PdYudisiumController::class, 'createbymahasiswa']);
    Route::get('/yudisium/create/dokumentpersyaratan/{id}', [PdYudisiumController::class, 'createdokumentyudisium']);
    Route::post('/yudisium/store', [PdYudisiumController::class, 'store']);
    Route::get('/yudisium/hasilformyudisium/{id}', [PdYudisiumController::class, 'hasilformyudisium']);
    Route::get('/yudisium/vetifikasi/{id}', [PdYudisiumController::class, 'verifikasiyudisium']);
    Route::get('/yudisium/unvetifikasi/{id}', [PdYudisiumController::class, 'unverifikasiyudisium']);

    // ==================== JADWAL =======================
    Route::get('/jadwal/yudisium', [JadwalYudisiumController::class, 'index']);
    Route::get('/jadwal/yudisium/create', [JadwalYudisiumController::class, 'create']);
    Route::get('/jadwal/yudisium/crePdashbate/{id}', [JadwalYudisiumController::class, 'createbyid']);
    Route::post('/jadwal/yudisium/store', [JadwalYudisiumController::class, 'store']);
    Route::get('/jadwal/yudisium/download/{id}', [JadwalYudisiumController::class, 'downloadjadwal']);
 
    Route::get('/buatakun', function () {
        return view('page.general.buatakun');
    });
    Route::post('/storebuatakun', [LoginController::class, 'buatakun']);


//___________________________________________________________________________
    // ADMIN KELOLA PERSYARATAN SEMINAR,SKRIPSI,YUDISIUM
    Route::get('/persyaratan_userSeminar', function () {
        return view('page.proposal.persyaratan_userSeminar');
    });
    Route::get('/persyaratan_userskripsi', function () {
        return view('page.skripsi.persyaratan_userskripsi');
    });
    Route::get('/register', function () {
        return view('page.general.register');
    });
    // Route::get('/persyaratan_useryudisium', function () {
    //     return view('persyaratan_useryudisium');
    // });
    // Route::get('/syaratseminar_admin', function () {
    //     return view('syaratseminar_admin');
    // });
    // Route::get('/syaratskripsi_admin', function () {
    //     return view('syaratskripsi_admin');
    // });
    // Route::get('/syaratyudisium_admin', function () {
    //     return view('syaratyudisium_admin');
    // });
    // Route::get('/tambahdaftarseminar', function () {
    //     return view('tambahdaftarseminar');
    // });

    //=======SEMPRO MAHASISWA========
    // Route::resource('/mhs_proposal', [PdSemproController::class,'index_mhs']);
    // Route::get('/daftaryudisium', function () {
    //     return view('pendaftaranyudisium_user');
    // });
});

<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSempro;
use App\Models\PdSkripsi;
use App\Models\PdYudisium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $daftardosen = Dosen::all();
        $yudisium = PdYudisium::where('user_create', Auth::user()->id)->get();

        $proposal = PdSempro::where('tb_daftar_sempro.user_create', Auth::user()->id)
            ->leftJoin('tb_dok_sempro', 'tb_dok_sempro.id_daftar_sempro', '=', 'tb_daftar_sempro.id')
            ->leftJoin('tb_jadwal_sempro', 'tb_jadwal_sempro.id_proposal', '=', 'tb_daftar_sempro.id')
            ->select(
                'tb_daftar_sempro.*',
                'tb_dok_sempro.file_kartu_konsul',
                'tb_dok_sempro.file_khs',
                'tb_dok_sempro.file_lunas_spp',
                'tb_dok_sempro.file_slip_pembayaran',
                'tb_jadwal_sempro.id as id_jadwal',
            )
            ->get();

        $skripsi = PdSkripsi::where('tb_daftar_skripsi.user_create', Auth::user()->id)
            ->leftJoin('tb_dok_skripsi', 'tb_dok_skripsi.id_daftar_skripsi', '=', 'tb_daftar_skripsi.id')
            ->leftJoin('tb_jadwal_skripsi', 'tb_jadwal_skripsi.id_skripsi', '=', 'tb_daftar_skripsi.id')
            ->select(
                'tb_daftar_skripsi.*',
                'tb_dok_skripsi.file_skripsi',
                'tb_dok_skripsi.file_bukti_acc',
                'tb_dok_skripsi.file_spus',
                'tb_dok_skripsi.file_pengesahan_proposal',
                'tb_dok_skripsi.file_krs',
                'tb_dok_skripsi.file_ktm',
                'tb_dok_skripsi.file_bukti_lunasspp',
                'tb_jadwal_skripsi.id as id_jadwal',
            )
            ->get();
        
            $yudis= PdYudisium::where('tb_daftar_yudis.user_create', Auth::user()->id)
            ->leftJoin('tb_daftar_skripsi', 'tb_daftar_skripsi.id', '=', 'tb_daftar_yudis.user_create')
            ->leftJoin('tb_jadwal_skripsi', 'tb_jadwal_skripsi.id_skripsi', '=', 'tb_daftar_yudis.user_create')
            ->select(
                'tb_daftar_yudis.*',
                'tb_daftar_skripsi.nim',
                'tb_daftar_skripsi.nama_mahasiswa',
                'tb_daftar_skripsi.judul_skripsi',
                'tb_daftar_skripsi.no_hp',
                'tb_jadwal_skripsi.tanggal',
                'tb_jadwal_skripsi.waktu_mulai',

            )
            ->orderByDesc('tb_daftar_yudis.created_at')
            ->get();
        // $status_proposal = PdSempro::where('tb_daftar_sempro.user_create', Auth::user()->id)
        //     ->first('status');
        // // dd($status_proposal);

        // $status_skripsi = PdSkripsi::where('tb_daftar_skripsi.user_create', Auth::user()->id)
        //     ->first('status');

        // $status_yudisium = PdYudisium::where('tb_daftar_yudis.user_create', Auth::user()->id)
        //     ->first('status');
        // dd($status_skripsi);
// Mendapatkan ID pengguna yang sedang login
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::user()->id;

        // Mengambil status dari tabel Seminar Proposal
        $statusSempro = PdSempro::where('user_create', $userId)->first();
        $statusSempro = $statusSempro ? $statusSempro->status : 'belum daftar';

        // Mengambil status dari tabel Ujian Skripsi
        $statusSkripsi = PdSkripsi::where('user_create', $userId)->first();
        $statusSkripsi = $statusSkripsi ? $statusSkripsi->status : 'belum daftar';

        // Mengambil status dari tabel Yudisium
        $statusYudisium = PdYudisium::where('user_create', $userId)->first();
        $statusYudisium = $statusYudisium ? $statusYudisium->status : 'belum daftar';

        // dd($skripsi);
        return view('layout.landingpage.content.content', compact(
            'daftardosen',
            'proposal',
            'skripsi',
            'statusSempro',
            'statusSkripsi',
            'statusYudisium',
            'yudisium',
            'yudis'
        ));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSempro;
use App\Models\PdSkripsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $daftardosen = Dosen::all();
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

        $status_proposal = PdSempro::where('tb_daftar_sempro.user_create', Auth::user()->id)
            ->first('status');
        // dd($status_proposal);

        $status_skripsi = PdSkripsi::where('tb_daftar_skripsi.user_create', Auth::user()->id)
            ->first('status');
        // dd($status_skripsi);

        // dd($skripsi);
        return view('layout.landingpage.content.content', compact(
            'daftardosen',
            'proposal',
            'skripsi',
            'status_proposal',
            'status_skripsi',
        ));
    }
}

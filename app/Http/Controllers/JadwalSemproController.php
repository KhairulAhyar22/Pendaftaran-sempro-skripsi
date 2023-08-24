<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSempro;
use App\Models\JadwalSempro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JadwalSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JadwalSempro::join('tb_daftar_sempro', 'tb_daftar_sempro.id', '=', 'tb_jadwal_sempro.id_proposal')
            ->select(
                'tb_jadwal_sempro.*',
                'tb_daftar_sempro.nama_mahasiswa',
                'tb_daftar_sempro.nim'
            )
            ->orderByDesc('tb_jadwal_sempro.created_at')
            ->get();

        if (Auth::user()->level == 'Mahasiswa') {
            $datas = JadwalSempro::where('user_create', Auth::user()->id)
                ->join('tb_daftar_sempro', 'tb_daftar_sempro.id', '=', 'tb_jadwal_sempro.id_proposal')
                ->select(
                    'tb_jadwal_sempro.*',
                    'tb_daftar_sempro.nama_mahasiswa',
                    'tb_daftar_sempro.nim'
                )
                ->orderByDesc('tb_jadwal_sempro.created_at')
                ->get();
        }

        // dd($datas);
        return view('Page.JadwalSempro.JadwalSempro', ["datas" => $datas,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listsempro = PdSempro::where('status', 'Terverifikasi')->orderByDesc('created_at')->get();
        // dd($listsempro);
        return view('Page.JadwalSempro.createjadwalsempro', compact(
            'listsempro'
        ));
    }
    public function createbyid($id)
    {
        $listsempro = PdSempro::where('status', 'Terverifikasi')->orderByDesc('created_at')->get();
        $semprobyid = PdSempro::find($id);
        // dd($listsempro);
        return view('Page.JadwalSempro.createjadwalsemprobyID', compact(
            'listsempro',
            'semprobyid'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal = [
            'id_proposal' => $request->id_proposal,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'no_surat' => $request->no_surat,
            'ketua_tim' => $request->ketua_tim,
            'anggota' => $request->anggota,
        ];
        $jadwalSempro = JadwalSempro::create($jadwal);
        $test = PdSempro::where('id', $jadwalSempro->id_proposal)->update([
            'status' => 'Terjadwal'
        ]);

        return redirect('/jadwal/seminarproposal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadjadwal($id)
    {
        $data = DB::table('tb_jadwal_sempro')
            ->join('tb_daftar_sempro', 'tb_daftar_sempro.id', '=', 'tb_jadwal_sempro.id_proposal')
            ->where('tb_jadwal_sempro.id', $id)
            ->select(
                'tb_jadwal_sempro.*',
            'tb_daftar_sempro.nama_mahasiswa',
            'tb_daftar_sempro.nim',
            )
            ->first();
        // dd($data);
        return view('page.JadwalSempro.suratjadwalsempro', compact('data'));
    }
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

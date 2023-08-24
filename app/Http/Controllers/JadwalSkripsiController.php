<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSkripsi;
use Illuminate\Http\Request;
use App\Models\JadwalSkripsi;

class JadwalSkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JadwalSkripsi::leftJoin('tb_daftar_skripsi', 'tb_daftar_skripsi.id', '=', 'tb_jadwal_skripsi.id_skripsi')
        ->select(
            'tb_jadwal_skripsi.*',
            'tb_daftar_skripsi.nama_mahasiswa',
            'tb_daftar_skripsi.nim'
        )
            ->orderByDesc('tb_jadwal_skripsi.created_at')
            ->get();

        // dd($datas);
        return view('Page.JadwalSkripsi.JadwalSkripsi', ["datas" => $datas,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listskripsi = PdSkripsi::where('status', 'Terverifikasi')->orderByDesc('created_at')->get();
        // dd($listsempro);
        return view('Page.JadwalSkripsi.createjadwalujianskripsi', compact(
            'listskripsi'
        ));
    }
    public function createbyid($id)
    {
        $listskripsi = PdSkripsi::where('status', 'Terverifikasi')->orderByDesc('created_at')->get();
        $skripsibyid = PdSkripsi::find($id);
        $daftardosen = Dosen::all();
        // dd($skripsibyid);
        return view('Page.JadwalSkripsi.createjadwalujianskripsibyid', compact(
            'listskripsi',
            'skripsibyid',
            'daftardosen',
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
            'id_skripsi' => $request->id_skripsi,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'no_surat' => $request->no_surat,
            'ketua_tim' => $request->ketua_tim,
            'anggota1' => $request->anggota1,
            'anggota2' => $request->anggota2,
            'anggota3' => $request->anggota3,
        ];
        // dd($jadwal);
        $jadwalskripsi = JadwalSkripsi::create($jadwal);
        $test = PdSkripsi::where('id', $jadwalskripsi->id_skripsi)->update([
            'status' => 'Terjadwal'
        ]);

        return redirect('/jadwal/ujianskripsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

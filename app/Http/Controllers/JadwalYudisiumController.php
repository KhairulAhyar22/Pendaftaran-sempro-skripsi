<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSkripsi;
use Illuminate\Http\Request;
use App\Models\JadwalSkripsi;
use App\Models\JadwalYudisium;
use Illuminate\Support\Facades\DB;

class JadwalYudisiumController extends Controller
{

    //db skripsi diganti yudis nnti

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JadwalYudisium::orderByDesc('tb_jadwal_yudis.created_at')
            ->get();

        // dd($datas);
        return view('Page.Yudisium.jadwalyudis-kelola', ["datas" => $datas]);
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
        return view('Page.Yudisium.jadwalyudis-create', compact(
            'listskripsi'
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
            'periode' => $request->periode,
            'tahun' => $request->tahun,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
        ];
        // dd($jadwal);
        $jadwalyudisium = JadwalYudisium::create($jadwal);

        return redirect('/jadwal/yudisium');
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
        $data = JadwalYudisium::where('id', $id)
            ->first();
        // dd($data);
        // return view('Page.Yudisium.createdokumenskripsi', compact('data'));
        return view('Page.Yudisium.jadwalyudis-edit', compact('data'));
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
        $datainput = [
            'periode' => $request->periode,
            'tahun' => $request->tahun,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'waktu' => $request->waktu,
        ];
        JadwalYudisium::find($id)->update($datainput);
        return redirect('/jadwal/yudisium');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JadwalYudisium::find($id)->delete();
        return redirect('/jadwalyudisium');
    }
}

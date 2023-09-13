<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSkripsi;
use App\Models\PdYudisium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DokumenPdUjianSkripsi;
use Illuminate\Support\Facades\Auth;

class PdYudisiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = DB::table('tb_daftar_yudis')
        //     ->orderByDesc('created_at')->get();

        $datas = PDSkripsi::join('tb_daftar_yudis', 'tb_daftar_skripsi.user_create', 'tb_daftar_yudis.user_create')
            ->select(
                'tb_daftar_yudis.*',
                'tb_daftar_skripsi.nim',
                'tb_daftar_skripsi.nama_mahasiswa',
                'tb_daftar_skripsi.judul_skripsi',
                'tb_daftar_skripsi.no_hp',
            )
            ->orderByDesc('tb_daftar_yudis.created_at')
            ->get();

        // dd($datas);

        return view(
            'Page.Yudisium.kelolayudisium',
            [
                "datas" => $datas,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createbymahasiswa()
    {
        $daftardosen = Dosen::all();
        return view('Page.Yudisium.daftaryudis', compact(
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

        $request->validate([
            'file_PPT_yudis' => 'required',
        ]);

        $file_PPT_yudis = $request->file('file_PPT_yudis');
        // dd($file_PPT_yudis);
        $filename_PPT = time() . ' ' . $file_PPT_yudis->getClientOriginalName();

        $file_PPT_yudis->move(public_path('Dokument/Yudisium/PPT'), $filename_PPT);

        $data = [
            'status' => 'Terbuat',
            'file_ppt' => $filename_PPT,
            'user_create' => Auth::user()->id,
        ];
        // dd($data);

        $yudisium = PdYudisium::create($data);
        // return redirect('/skripsi/hasilformskripsi/'.$skripsi->id);
        // return redirect('/landingpage/' . $yudisium->id);
        return redirect('/landingpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = PdSkripsi::find($id);
        // $dokument = DokumenPdUjianSkripsi::where('id_daftar_skripsi', $id)->first();

        $skripsi = PdSkripsi::leftJoin('tb_dok_skripsi', 'tb_dok_skripsi.id_daftar_skripsi', '=', 'tb_daftar_skripsi.id')
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
            )->find($id);
        // dd($skripsi);
        return view('Page.Yudisium.detaildaftarujianskripsi', [
            'skripsi' => $skripsi,
            // 'dokument' => $dokument,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $daftardosen = Dosen::all();
        $skripsi = PdSkripsi::find($id);
        // dd($skripsi);
        return view('Page.Yudisium.editdaftarujianskripsi', [
            'skripsi' => $skripsi,
            'daftardosen' => $daftardosen,
        ]);
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
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'status_mahasiswa' => $request->status_mahasiswa,
            'judul_skripsi' => $request->judul_skripsi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'tglacc_proposal' => $request->tglacc_proposal,
            'no_hp' => $request->no_hp,
            'nama_pa' => $request->nama_pa,
        ];
        PdSkripsi::find($id)->update($datainput);
        return redirect('/skripsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PdSkripsi::find($id)->delete();
        return redirect('/skripsi');
    }

    public function createdokumentskripsi($id)
    {
        $skripsi = PdSkripsi::find($id);
        // dd($skripsi);
        return view('Page.Yudisium.createdokumenskripsi', compact('skripsi'));
    }

    public function storedokumentskripsi(Request $request, $id)
    {
        $request->validate([
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file_skripsi' => 'required|mimes:pdf',
            'file_bukti_acc' => 'required|mimes:pdf',
            'file_spus' => 'required|mimes:pdf',
            'file_pengesahan_proposal' => 'required|mimes:pdf',
            'file_krs' => 'required|mimes:pdf',
            'file_ktm' => 'required|mimes:pdf',
            'file_bukti_lunasspp' => 'required|mimes:pdf',
        ]);

        // dd($request->all());
        $file_skripsi = $request->file('file_skripsi');
        $filename_skripsi = time() . ' ' . $file_skripsi->getClientOriginalName();

        $file_bukti_acc = $request->file('file_bukti_acc');
        $filename_bukti_acc = time() . ' ' . $file_bukti_acc->getClientOriginalName();

        $file_spus = $request->file('file_spus');
        $filename_spus = time() . ' ' . $file_spus->getClientOriginalName();

        $file_pengesahan_proposal = $request->file('file_pengesahan_proposal');
        $filename_pengesahan_proposal = time() . ' ' . $file_pengesahan_proposal->getClientOriginalName();

        $file_krs = $request->file('file_krs');
        $filename_krs = time() . ' ' . $file_krs->getClientOriginalName();

        $file_ktm = $request->file('file_ktm');
        $filename_ktm = time() . ' ' . $file_ktm->getClientOriginalName();

        $file_bukti_lunasspp = $request->file('file_bukti_lunasspp');
        $filename_bukti_lunasspp = time() . ' ' . $file_bukti_lunasspp->getClientOriginalName();

        // ============ UPLOAD FILE GAMBAR ==================
        $file_skripsi->move(public_path('UjianSkripsi/Skripsi'), $filename_skripsi);
        $file_bukti_acc->move(public_path('UjianSkripsi/BuktiACC'), $filename_bukti_acc);
        $file_spus->move(public_path('UjianSkripsi/SPUS'), $filename_spus);
        $file_pengesahan_proposal->move(public_path('UjianSkripsi/PengesahanProposal'), $filename_pengesahan_proposal);
        $file_krs->move(public_path('UjianSkripsi/KRS'), $filename_krs);
        $file_ktm->move(public_path('UjianSkripsi/KTM'), $filename_ktm);
        $file_bukti_lunasspp->move(public_path('UjianSkripsi/BuktiLunasSPP'), $filename_bukti_lunasspp);

        // dd($request->all());
        // =============== SAVE KE DATABASE ====================
        DokumenPdUjianSkripsi::create([
            'id_daftar_skripsi' => $id,
            'file_skripsi' => $filename_skripsi,
            'file_bukti_acc' => $filename_bukti_acc,
            'file_spus' => $filename_spus,
            'file_pengesahan_proposal' => $filename_pengesahan_proposal,
            'file_krs' => $filename_krs,
            'file_ktm' => $filename_ktm,
            'file_bukti_lunasspp' => $filename_bukti_lunasspp,
        ]);

        PdSkripsi::find($id)->update([
            'status_dok' => 'Lengkap'
        ]);
        return redirect('/landingpage');
        // return redirect('/skripsi');
    }
    // public function hasilformskripsi($id)
    // {
    //     $daftardosen = Dosen::all();
    //     $skripsi = DB::table('tb_daftar_skripsi')->find($id);
    //     return view('Page.Yudisium.hasilformskripsi', compact(
    //         'daftardosen',
    //         'skripsi'
    //     ));
    // }
    public function verifikasiskripsi($id)
    {
        PdSkripsi::find($id)->update([
            // ini masih belum tau apa bagusnya
            'status' => 'Terverifikasi',
        ]);
        return redirect()->back();
    }
    public function unverifikasiskripsi($id)
    {
        PdSkripsi::find($id)->update([
            // ini masih belum tau apa bagusnya
            'status' => 'Terbuat',
        ]);
        return redirect()->back();
    }
}

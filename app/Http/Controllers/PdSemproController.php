<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSempro;
use Illuminate\Http\Request;
use App\Models\DokumenPdSempro;
use Illuminate\Support\Facades\DB;

class PdSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('tb_daftar_sempro')
            ->orderByDesc('created_at')
            ->get();

        // dd($datas);
        return view('Page.Proposal.Seminarproposal', ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftardosen = Dosen::all();
        return view('Page.Proposal.createdaftarseminarproposal', compact(
            'daftardosen'
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
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file_krs' => 'required',
            'jenis_kelamin' => 'required',
            'file_proposal' => 'required',
        ]);
        
        $file_krs = $request->file('file_krs');
        // dd($file_krs);
        $filename_krs = time() . ' ' . $file_krs->getClientOriginalName();
                
        $file_proposal = $request->file('file_proposal');
        $filename_proposal = time() . ' ' . $file_proposal->getClientOriginalName();

        $file_krs->move(public_path('Dokument/Proposal/KRS'), $filename_krs);
        $file_proposal->move(public_path('Dokument/Proposal/Proposal'), $filename_proposal);

        $datainput = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'judul_proposal' => $request->judul_proposal,   
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_mahasiswa' =>$request->status_mahasiswa,    
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'tgl_accp1' => $request->tgl_accp1,
            'tgl_accp2' => $request->tgl_accp2,
            'no_hp' => $request->no_hp,
            'file_krs' => $filename_krs,
            'file_proposal' => $filename_proposal,
            'status_dok' => 'Belum Lengkap',
            'status' => 'Terbuat',
        ];
        $sempro = PdSempro::create($datainput);
        // dd($sempro);
        return redirect('/proposal/hasilformproposal/'. $sempro->id);
        return redirect('/proposal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('tb_daftar_sempro')->find($id);
        $dokument = DokumenPdSempro::where('id_daftar_sempro', $id)->first();
        // dd($dokument);
        return view('Page.Proposal.detaildaftarproposal', [
            'data' => $data,
            'dokument' => $dokument,
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
        $data = DB::table('tb_daftar_sempro')->find($id);
        // dd($data);
        return view('Page.Proposal.editdaftarseminarproposal', [
            'data' => $data,
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
            'judul_proposal' => $request->judul_proposal,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'tgl_accp1' => $request->tgl_accp1,
            'tgl_accp2' => $request->tgl_accp2,
            'no_hp' => $request->no_hp,
            'status_dok' => 'Belum Lengkap',
            'status' => 'Terbuat',
        ];
        PdSempro::find($id)->update($datainput);
        return redirect('/proposal');
    }

    public function destroy($id)
    {
        PdSempro::find($id)->delete();
        return redirect('/proposal');
    }

    public function createdokumentproposal($id)
    {
        $proposal = PdSempro::find($id);
        // dd($proposal);
        return view('Page.Proposal.createdokumenproposal', compact('proposal'));
    }
    public function storedokumentproposal(Request $request, $id)
    {
        $request->validate([
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file_krs' => 'required',
            'file_kartu_konsul' => 'required',
            'file_khs' => 'required',
            'file_lunas_spp' => 'required',
            'file_slip_pembayaran' => 'required',
        ]);

        // dd($request->all());
        $file_krs = $request->file('file_krs');
        $filename_krs = time() . ' ' . $file_krs->getClientOriginalName();

        $file_kartu_konsul = $request->file('file_kartu_konsul');
        $filename_kartu_konsul = time() . ' ' . $file_kartu_konsul->getClientOriginalName();

        $file_khs = $request->file('file_khs');
        $filename_khs = time() . ' ' . $file_khs->getClientOriginalName();

        $file_lunas_spp = $request->file('file_lunas_spp');
        $filename_lunas_spp = time() . ' ' . $file_lunas_spp->getClientOriginalName();

        $file_slip_pembayaran = $request->file('file_slip_pembayaran');
        $filename_slip_pembayaran = time() . ' ' . $file_slip_pembayaran->getClientOriginalName();

        // ============ UPLOAD FILE GAMBAR ==================
        $file_krs->move(public_path('Proposal/KRS'), $filename_krs);
        $file_kartu_konsul->move(public_path('Proposal/KartuKonsul'), $filename_kartu_konsul);
        $file_khs->move(public_path('Proposal/KHS'), $filename_khs);
        $file_lunas_spp->move(public_path('Proposal/LunasSPP'), $filename_lunas_spp);
        $file_slip_pembayaran->move(public_path('Proposal/SlipPembayaran'), $filename_slip_pembayaran);

        // =============== SAVE KE DATABASE ====================
        DokumenPdSempro::create([
            'id_daftar_sempro' => $id,
            'file_krs' => $filename_krs,
            'file_kartu_konsul' => $filename_kartu_konsul,
            'file_khs' => $filename_khs,
            'file_lunas_spp' => $filename_lunas_spp,
            'file_slip_pembayaran' => $filename_slip_pembayaran,
        ]);

        PdSempro::find($id)->update(['status_dok' => 'Lengkap']);
        return redirect('/proposal');
    }
    public function hasilformproposal($id)
    {
        $daftardosen = Dosen::all();
        $data = DB::table('tb_daftar_sempro')->find($id);
        return view('page.proposal.hasilformproposal', compact(
            'daftardosen',
            'data'
        ));
    }
}

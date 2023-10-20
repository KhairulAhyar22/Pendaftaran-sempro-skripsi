<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PdSempro;
use Illuminate\Http\Request;
use App\Models\DokumenPdSempro;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


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

        if (Auth::user()->level == 'Mahasiswa') {
            $datas = DB::table('tb_daftar_sempro')
                ->where('user_create', Auth::user()->id)
                ->orderByDesc('created_at')
                ->get();
        }

        // dd($datas);
        return view('Page.Proposal.Seminarproposal', ["datas" => $datas,]);
    }
    // public function index_mhs()
    // {
    //     $datas = DB::table('tb_daftar_sempro')
    //         ->orderByDesc('created_at')
    //         ->get();

    //     // dd($datas);
    //     return view('Page.Proposal.createdaftarseminarproposal', ["datas" => $datas]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $daftardosen = Dosen::all();
    //     return view('Page.Proposal.createdaftarseminarproposal', compact(
    //         'daftardosen'
    //     ));
    // }
    public function createbymahasiswa()
    {
        $daftardosen = Dosen::all();
        return view('Page.Proposal.createdsproposalmhs', compact(
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
            'status_mahasiswa' => $request->status_mahasiswa,
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'tgl_accp1' => $request->tgl_accp1,
            'tgl_accp2' => $request->tgl_accp2,
            'no_hp' => $request->no_hp,
            'file_krs' => $filename_krs,
            'file_proposal' => $filename_proposal,
            'status_dok' => 'Belum Lengkap',
            'user_create' => Auth::user()->id,
            'status' => 'Terbuat',
        ];
        $sempro = PdSempro::create($datainput);
        // dd($sempro);
        // return redirect('/proposal/hasilformproposal/'. $sempro->id);
        // return redirect('/proposal/create/dokumentpersyaratan/'. $sempro->id);
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
        $data = DB::table('tb_daftar_sempro')->find($id);
        $file = DB::table('tb_dok_sempro')->where('id_daftar_sempro', $id)->first();
        // dd($data);
        return view('Page.Proposal.detaildaftarproposal', [
            'data' => $data,
            'file' => $file
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
            // 'file_krs' => 'required',
            'file_kartu_konsul' => 'required|mimes:pdf',
            'file_khs' => 'required|mimes:pdf',
            'file_lunas_spp' => 'required|mimes:pdf',
            'file_slip_pembayaran' => 'required|mimes:pdf',
        ]);

        // dd($request->all());
        // $file_krs = $request->file('file_krs');
        // $filename_krs = time() . ' ' . $file_krs->getClientOriginalName();

        $file_kartu_konsul = $request->file('file_kartu_konsul');
        $filename_kartu_konsul = time() . ' ' . $file_kartu_konsul->getClientOriginalName();

        $file_khs = $request->file('file_khs');
        $filename_khs = time() . ' ' . $file_khs->getClientOriginalName();

        $file_lunas_spp = $request->file('file_lunas_spp');
        $filename_lunas_spp = time() . ' ' . $file_lunas_spp->getClientOriginalName();

        $file_slip_pembayaran = $request->file('file_slip_pembayaran');
        $filename_slip_pembayaran = time() . ' ' . $file_slip_pembayaran->getClientOriginalName();

        // ============ UPLOAD FILE GAMBAR ==================
        // $file_krs->move(public_path('Dokument/Proposal/KRS'), $filename_krs);
        $file_kartu_konsul->move(public_path('Dokument/Proposal/KartuKonsul'), $filename_kartu_konsul);
        $file_khs->move(public_path('Dokument/Proposal/KHS'), $filename_khs);
        $file_lunas_spp->move(public_path('Dokument/Proposal/LunasSPP'), $filename_lunas_spp);
        $file_slip_pembayaran->move(public_path('Dokument/Proposal/SlipPembayaran'), $filename_slip_pembayaran);

        // =============== SAVE KE DATABASE ====================
        DokumenPdSempro::create([
            'id_daftar_sempro' => $id,
            // 'file_krs' => $filename_krs,
            'file_kartu_konsul' => $filename_kartu_konsul,
            'file_khs' => $filename_khs,
            'file_lunas_spp' => $filename_lunas_spp,
            'file_slip_pembayaran' => $filename_slip_pembayaran,
        ]);

        PdSempro::find($id)->update(['status_dok' => 'Lengkap']);
        if (Auth::user()->level == 'Mahasiswa') {
            return redirect('/landingpage');
        }
        return redirect('/proposal/hasilformproposal/'. $id);
    }
    public function hasilformproposal($id)
    {
        $daftardosen = Dosen::all();
        $data = DB::table('tb_daftar_sempro')->find($id);
        $file = DB::table('tb_dok_sempro')->find($id);
        return view('page.proposal.hasilformproposal', compact(
            'daftardosen',
            'data',
            'file'
        ));
    }
    public function verifikasiproposal($id)
    {
        PdSempro::find($id)->update([
            // ini masih belum tau apa bagusnya
            'status' => 'Terverifikasi',
        ]);
        return redirect()->back();
    }
    public function unverifikasiproposal($id)
    {
        PdSempro::find($id)->update([
            // ini masih belum tau apa bagusnya
            'status' => 'Terbuat',
        ]);
        return redirect()->back();
    }


  // public function destroy($id)
    // {
    //     PdSempro::find($id)->delete();
    //     return redirect('/proposal');
    // }




public function destroy($id)
{
    try {
        $data = PdSempro::find($id);

        if (!$data) {
            return redirect('/proposal')->with('error', 'Data tidak ditemukan');
        }

        // Hapus file terkait dari folder penyimpanan
        $krsPath = 'Dokument/Proposal/KRS/' . $data->file_krs;
        $proposalPath = 'Dokument/Proposal/Proposal/' . $data->file_proposal;

        // ...

        // Hapus data dari tabel DokumenPdSempro berdasarkan id_daftar_sempro yang sama
        $dokumen = DokumenPdSempro::where('id_daftar_sempro', $id)->get();

        foreach ($dokumen as $dok) {
            // Hapus file terkait dari folder penyimpanan
            $kartuKonsulPath = 'Dokument/Proposal/KartuKonsul/' . $dok->file_kartu_konsul;
            $khsPath = 'Dokument/Proposal/KHS/' . $dok->file_khs;
            $lunasSppPath = 'Dokument/Proposal/LunasSPP/' . $dok->file_lunas_spp;
            $slipPembayaranPath = 'Dokument/Proposal/SlipPembayaran/' . $dok->file_slip_pembayaran;

            if (Storage::exists($kartuKonsulPath)) {
                Storage::delete($kartuKonsulPath);
            }

            if (Storage::exists($khsPath)) {
                Storage::delete($khsPath);
            }

            if (Storage::exists($lunasSppPath)) {
                Storage::delete($lunasSppPath);
            }

            if (Storage::exists($slipPembayaranPath)) {
                Storage::delete($slipPembayaranPath);
            }

            // Hapus data dari tabel DokumenPdSempro
            $dok->delete();
        }

        // Hapus data dari database
        $data->delete();

        return redirect('/proposal')->with('success', 'Data berhasil dihapus');
    } catch (\Exception $e) {
        Log::error('Terjadi kesalahan: ' . $e->getMessage());
        return redirect('/proposal')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

public function completeProposal($id)
{
    // Cari proposal berdasarkan ID
    $proposal = PdSempro::find($id);

    if (!$proposal) {
        // Proposal tidak ditemukan, lakukan penanganan kesalahan yang sesuai
    }

    // Ubah status proposal menjadi "Selesai"
    $proposal->status = 'Selesai';
    $proposal->save();
    return redirect()->back();
    // Redirect atau lakukan tindakan lain yang sesuai
}

}

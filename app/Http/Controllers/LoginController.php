<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\JadwalSempro;
use Illuminate\Http\Request;
use App\Models\JadwalSkripsi;
use App\Models\JadwalYudisium;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $withusername = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        $withnim = [
            'nim' => $request->username,
            'password' => $request->password,
        ];
        // $credentials = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($withusername)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard')->with('success', 'berhasil');
        // }
        // if (Auth::attempt($withnim)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard')->with('success', 'berhasil');
        // }
        // return back()->with('loginError', 'Login failed, wrong username or password!');

        if (Auth::attempt($withusername) || Auth::attempt($withnim)) {
            $request->session()->regenerate();

            // Cek level pengguna yang login
            $user = Auth::user();
            if ($user->level === 'Mahasiswa') {
                return redirect('/landingpage')->with('success', 'Berhasil login sebagai mahasiswa.');
            } else {
                return redirect('/dashboard')->with('success', 'Berhasil login.');
            }
            return back()->with('loginError', 'Login failed, wrong username or password!');
        }
        return back()->with('loginError', 'Login failed, wrong username or password!');
    }
    public function logout(Request $request)
    {
        // dd('konek'); 
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function buatakun(Request $request)
    {
        // dd($request->all());
        $buatakun = [
            'username' => $request->username,
            'level' => $request->level,
            'nim' => $request->nim,
            'confirm_password' => $request->password,
            'password' => bcrypt($request->password),
        ];
        User::create($buatakun);
        return redirect()->back();
    }

    // public function index()
    // {
    //     $datas = JadwalSempro::join('tb_daftar_sempro', 'tb_daftar_sempro.id', '=', 'tb_jadwal_sempro.id_proposal')
    //         ->select(
    //             'tb_jadwal_sempro.*',
    //             'tb_daftar_sempro.nama_mahasiswa',
    //             'tb_daftar_sempro.nim'
    //         )
    //         ->orderByDesc('tb_jadwal_sempro.created_at')
    //         ->get();

    //     // dd($datas);
    //     return view('page.general.login.content.login', ["datas" => $datas,]);
    // }
public function index()
{
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $datasByDate = [];
    $jadwalyudis =JadwalYudisium::all();
    foreach ($daysOfWeek as $day) {
        // Mendapatkan tanggal hari ini
        $today = Carbon::now();
        // Menghitung selisih hari antara hari saat ini dengan hari dalam loop
        $dayOfWeek = Carbon::parse($day);
        $daysDiff = $today->dayOfWeek - $dayOfWeek->dayOfWeek;
        
        // Mengubah tanggal saat ini berdasarkan selisih hari
        $formattedDate = $today->subDays($daysDiff)->startOfDay();
        $datasForDayS = JadwalSempro::join('tb_daftar_sempro', 'tb_daftar_sempro.id', '=', 'tb_jadwal_sempro.id_proposal')
            ->select(
                'tb_jadwal_sempro.*',
                'tb_daftar_sempro.nama_mahasiswa',
                'tb_daftar_sempro.nim'
            )
            ->whereDate('tb_jadwal_sempro.tanggal', $formattedDate)
            ->orderBy('tb_jadwal_sempro.tanggal')
            ->get();
        $datasForDayU = JadwalSkripsi::join('tb_daftar_skripsi', 'tb_daftar_skripsi.id', '=', 'tb_jadwal_skripsi.id_skripsi')
            ->select(
                'tb_jadwal_skripsi.*',
                'tb_daftar_skripsi.nama_mahasiswa',
                'tb_daftar_skripsi.nim'
            )
            ->whereDate('tb_jadwal_skripsi.tanggal', $formattedDate)
            ->orderBy('tb_jadwal_skripsi.tanggal')
            ->get();

        $datasByDateS[$day] = $datasForDayS;
        $datasByDateU[$day] = $datasForDayU;
    }

    return view('page.general.login.content.login', [
        "datasByDateS" => $datasByDateS,
        "datasByDateU" => $datasByDateU,
        "jadwalyudis"=>$jadwalyudis,
]);
}

private function getDayOfWeek($day)
{
    switch ($day) {
        case 'senin':
            return 2;
        case 'selasa':
            return 3;
        case 'rabu':
            return 4;
        case 'kamis':
            return 5;
        case 'jumat':
            return 6;
        case 'sabtu':
            return 7;
        default:
            return 1;
    }
}

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        if (Auth::attempt($withusername)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'berhasil');
        }
        if (Auth::attempt($withnim)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'berhasil');
        }
        return back()->with('loginError', 'Login failed, wrong username or password!');
    }
    public function logout(Request $request)
    {
        // dd('konek'); 
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
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
}

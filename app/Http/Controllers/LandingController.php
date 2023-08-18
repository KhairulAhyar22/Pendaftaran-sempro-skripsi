<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $daftardosen = Dosen::all();
        return view(
        'layout.landingpage.content.content', compact(
            'daftardosen'
        ));
    }
    
    
}

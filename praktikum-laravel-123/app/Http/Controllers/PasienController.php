<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        // return Pasien::get();
        $pasien = Pasien::get();
        $no = 1;
        return view('pasien.index', compact('pasien', 'no'));
    }
}

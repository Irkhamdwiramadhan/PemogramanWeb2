<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index()
    {
        /**
         * - definisiin modelnya
         * - lakukan dd()/return, echo
         */
        $kelurahan =  Kelurahan::get();
        // return  $kelurahan;
        $no = 1;
        return view('kelurahan.index', compact('kelurahan', 'no'));
    }
}

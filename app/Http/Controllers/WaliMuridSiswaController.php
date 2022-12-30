<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class WaliMuridSiswaController extends Controller
{
    public function index()
    {
        $data['models'] = Auth::user()->siswa;
        return view('wali.siswa_index', $data);
    }
}

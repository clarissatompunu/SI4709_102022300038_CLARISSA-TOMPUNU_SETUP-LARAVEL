<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasMahasiswaController extends Controller
{
    public function index()
    {
        $nim = 102022300038;
        $nama = "Clarissa Tompunu";
        $kelas = "SI4709";

        return view('identitasmahasiswanew', compact('nim', 'nama', 'kelas'));
    }
}

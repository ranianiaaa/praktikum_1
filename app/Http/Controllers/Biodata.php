<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{


    public function index()
    {
        $nama = "Rania nurzaneta amirah";
        $NIM = "253107050008";
        $alamat = "pocan";

        return view('biodata.P4', [
            'jeneng' => $nama,
            'NIM' => $NIM,
            'omah' => $alamat
        ]);
    }

    public function show($nama, $nim, $alamat)
    {
        return view('biodata.P4', [
            'jeneng' => $nama,
            'NIM' => $nim,
            'omah' => $alamat
        ]);
    }

    public function tampil()
    {
        return view('halaman.produk');
    
}
}

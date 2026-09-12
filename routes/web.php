<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/biodata', function () { 
    return view('biodata');
});

Route::get('/orangtua', function () { 
    return view('orangtua');
});

Route::get('/sekolah', function () { 
    return view('sekolah');
});

Route::get('/apaya', function () { 
    $nama = "jane doe";
    //return view('biodata.data', compact('nama'));
    return view('biodata.data', ['nyamah' => $nama]);
});

Route::get('/coba', function () { 
    $judul = "BIODATA";
    $nama = "Rania nurzaneta amirah";
    $tl = "Lamongan, 10 november 2006";
    $nim = "253778866";
    $prodi = "Manajemen infroatika";
    $jurusan = "Teknologi informasi";
    $alamat = "jln.giyasanta";
    $hp = "09876117";
    //return view('biodata.data', compact('nama'));
    return view('biodata.biodata', ['judul' => $judul,
        'nama' => $nama,
        'tl' => $tl,
        'nim' => $nim,
        'prodi' => $prodi,
        'jurusan' => $jurusan,
        'alamat' => $alamat,
        'hp' => $hp,]);
});
    // Data orangtua (bapak)
Route::get('/bapak', function () { 
    $judul = "Biodata Orang Tua";
    $nama = "R. Deddy aryanto";
    $tl = "Pamekasan, 01 desember 1972";
    $nip = "345168799";
    $pekerjaan = "PNS";
    $pekerjaan = "PNS";
    $alamat = "jln.stadion gg.buntu";
    $hp = "087123667986";
    //return view('biodata.data', compact('nama'));
    return view('biodata.orangtua', ['judul' => $judul,
        'nama' => $nama,
        'tl' => $tl,
        'nip' => $nip,
        'pekerjaan' => $pekerjaan,
        'pekerjaan' => $pekerjaan,
        'alamat' => $alamat,
        'hp' => $hp,]);
});





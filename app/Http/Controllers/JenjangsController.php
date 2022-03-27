<?php

namespace App\Http\Controllers;
use App\Models\Jenjang;

use Illuminate\Http\Request;

class JenjangsController extends Controller
{
    public function index()
    {
        return view('jenjangs', [
            "title" => "Kategori Butir Kegiatan",
            "jenjangs" => Jenjang::all()
        ]);
    }

    public function show(Jenjang $jenjang)
    {
        return view('butirs', [
            "title" => "Butir Kegiatan pada jenjang $jenjang->jen_jenjang",
            "active" => "data",
            "butirs" => $jenjang->butir->load('kategori02','jenjang')
        ]);
    }
}

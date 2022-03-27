<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori02;

class Kategori2sController extends Controller
{
    public function index()
    {
        return view('kategori2s', [
            "title" => "Sub Usur Butir Kegiatan",
            "active" => "data",
            "kategoris" => Kategori02::all()
        ]);
    }

    public function show(Kategori02 $kategori)
    {
        return view('butirs', [
            "title" => "Butir kegiatan pada unsur $kategori->kat02_kategori",
            "active" => "data",
            "butirs" => $kategori->butir->load('kategori02','jenjang')
        ]);
    }
}

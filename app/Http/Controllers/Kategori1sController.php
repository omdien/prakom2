<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori01;
use App\Models\Kategori02;

class Kategori1sController extends Controller
{
    public function index()
    {
        return view('kategori1s', [
            "title" => "Usur Butir Kegiatan",
            "active" => "data",
            "kategoris" => Kategori01::all()
        ]);
    }

    public function show(Kategori01 $kategori)
    {
        return view('kategori1', [
            "title" => $kategori->kat01_kategori,
            "active" => "data",
            "kategori2" => $kategori->kategori02,
            'kategori' => $kategori->kat01_kategori
        ]);
    }
}

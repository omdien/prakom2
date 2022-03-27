<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Butir;
use App\Models\Jenjang;
use App\Models\Kategori02;

class ButirsController extends Controller
{
    //
    public function index()

    {
        $title = '';
        if(request('kategori02')) {
            $kategori02 = Kategori02::firstwhere('kat02_slug',request('kategori02'));
            $title = ' dalam kategori ' . $kategori02->kat02_kategori;
        }
    
        if(request('jenjang')) {
            $jenjang = Jenjang::firstwhere('jen_slug',request('jenjang'));
            $title = ' dalam jenjang ' . $jenjang->jen_jenjang;
        }

        return view('butirs', [
            "title" => "Butir Kegiatan Pranata Komputer" . $title,
            "active" => "data",
            "butirs" => Butir::latest()->filter(request(['cari','kategori02','jenjang']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Butir $butir)
    {
        return view('butir', [
            "title" => "Single Butir Kegiatan",
            "active" => "data",
            "butir" => $butir
        ]);
    }
}

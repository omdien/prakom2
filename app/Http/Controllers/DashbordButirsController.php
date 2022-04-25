<?php

namespace App\Http\Controllers;

use App\Models\Butir;
use App\Models\Kategori02;
use App\Models\Jenjang;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
// use Illuminate\Validation\Rule;

class DashbordButirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.butirs.index', [
            'butirs' => Butir::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.butirs.create', [
            'kategories' => Kategori02::all(),
            'jenjangs' => Jenjang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'but_id' => 'required',
            'kategori02_id' => 'required',
            'but_kegiatan' => 'required|max:255',
            'but_slug' => 'required|unique:butirs',
            'but_key' => 'required',
            'but_desc' => 'required',
            'but_satuan' => 'required',
            'but_kredit' => 'required',
            'but_batasan' => 'required',
            'but_fisik' => 'required',
            'jenjang_id' => 'required',
            'but_contoh' => 'required'
        ]);

        $validateData['but_excerpt'] = Str::limit($request->but_desc, 200);

        Butir::create($validateData);

        return redirect('dashboard/butirs')->with('success', 'Butir baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function show(Butir $butir)
    {
        return view('dashboard.butirs.show', [
            'butir' => $butir
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function edit(Butir $butir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Butir $butir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Butir $butir)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Butir::class, 'but_slug', $request->but_kegiatan);
        return response()->json(['but_slug => $slug']);
    }
}

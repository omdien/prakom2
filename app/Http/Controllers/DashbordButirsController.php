<?php

namespace App\Http\Controllers;

use App\Models\Butir;
use Illuminate\Http\Request;

class DashbordButirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.butirs.index',[
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
        return view('dashboard.butirs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Butir  $butir
     * @return \Illuminate\Http\Response
     */
    public function show(Butir $butir)
    {
        return view('dashboard.butirs.show',[
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
}

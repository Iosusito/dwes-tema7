<?php

namespace App\Http\Controllers;

use App\Models\Corto;
use Illuminate\Http\Request;

class CortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cortos = Corto::with('director')->orderBy('created_at')->get();
        return view('corto.lista', compact('cortos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Corto  $corto
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $corto = Corto::with('usuario')->with('director')->findOrFail($id);
        return view('corto.detalle', compact('corto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Corto  $corto
     * @return \Illuminate\Http\Response
     */
    public function edit(Corto $corto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Corto  $corto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corto $corto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corto  $corto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corto $corto)
    {
        //
    }
}

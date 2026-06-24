<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;
class AtletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atlet = Atlet::all();

        return view('atlet.index', compact('atlet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atlet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Atlet::create([

            'kode_atlet' => $request->kode_atlet,
            'nama_atlet' => $request->nama_atlet,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'cabang_olahraga' => $request->cabang_olahraga

        ]);

        return redirect()->route('atlet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $atlet = Atlet::findOrFail($id);

        return view('atlet.edit', compact('atlet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $atlet = Atlet::findOrFail($id);

        $atlet->update([

            'kode_atlet' => $request->kode_atlet,
            'nama_atlet' => $request->nama_atlet,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
            'cabang_olahraga' => $request->cabang_olahraga

        ]);

        return redirect()->route('atlet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Atlet::destroy($id);

        return redirect()->route('atlet.index');
    }
}

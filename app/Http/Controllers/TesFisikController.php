<?php

namespace App\Http\Controllers;

use App\Models\TesFisik;
use App\Models\Atlet;
use Illuminate\Http\Request;

class TesFisikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tesfisik = TesFisik::with('atlet')->get();

        return view('tesfisik.index', compact('tesfisik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $atlet = Atlet::all();

        return view('tesfisik.create', compact('atlet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TesFisik::create([

            'atlet_id' => $request->atlet_id,
            'tanggal_tes' => $request->tanggal_tes,
            'beep_test' => $request->beep_test,
            'sprint_20m' => $request->sprint_20m,
            'illinois_agility' => $request->illinois_agility,
            'vertical_jump' => $request->vertical_jump,
            'push_up' => $request->push_up,
            'fatigue_index' => $request->fatigue_index

        ]);

        return redirect()->route('tesfisik.index');
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
        $tesfisik = TesFisik::findOrFail($id);

        $atlet = Atlet::all();

        return view(
            'tesfisik.edit',
            compact('tesfisik', 'atlet')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tesfisik = TesFisik::findOrFail($id);

        $tesfisik->update([

            'atlet_id' => $request->atlet_id,
            'tanggal_tes' => $request->tanggal_tes,
            'beep_test' => $request->beep_test,
            'sprint_20m' => $request->sprint_20m,
            'illinois_agility' => $request->illinois_agility,
            'vertical_jump' => $request->vertical_jump,
            'push_up' => $request->push_up,
            'fatigue_index' => $request->fatigue_index

        ]);

        return redirect()->route('tesfisik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TesFisik::destroy($id);

        return redirect()->route('tesfisik.index');
    }
}

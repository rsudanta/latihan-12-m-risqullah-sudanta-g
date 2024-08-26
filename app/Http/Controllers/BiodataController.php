<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::get();
        return view('biodata.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biodata::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Biodata::find($id);
        return view('biodata.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Biodata::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
            ]);
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Biodata::where('id', $id)->delete();
        return redirect()->route('biodata.index');
    }
}

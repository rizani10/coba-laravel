<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;;
use App\Models\Guru;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mapel.index', [
            'collection' => Mapel::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mapel.create', [
            'guru' => Guru::where('jabatan', 'Guru Mata Pelajaran')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMapelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mapel' => 'required|max:255',
            'guru_id' => 'required'
        ]); 

        Mapel::create($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/mapel')->with('success', 'Data mata pelajaran berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('dashboard.mapel.edit', [
            'mapel' => $mapel,
            'guru' => Guru::where('jabatan', 'Guru Mata Pelajaran')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMapelRequest  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $validatedData = $request->validate([
            'mapel' => 'required|max:255',
            'guru_id' => 'required'
        ]); 

        Mapel::where('id', $mapel->id)
                ->update($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/mapel')->with('success', 'Data mata pelajaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        Mapel::destroy($mapel->id);

         // redirect ke halaman index sambi kirim pesan sukses
         return redirect('/dashboard/mapel')->with('success', 'Data mata pelajaran berhasil dihapus');
    }
}

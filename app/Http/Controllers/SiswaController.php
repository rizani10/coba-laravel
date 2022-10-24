<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.siswa.create', [
            'kelas' => Kelas::all(),
            'siswas' => Siswa::where('jns_kelamin')->get()
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
        // // buat validasi
        $validatedData = $request->validate([
            'kelas_id' => 'required',
            'nis'=> 'required|numeric|unique:siswas',
            'nisn'=> 'required|numeric|unique:siswas',
            'nama'=> 'required',
            'tempat_lahir'=> 'required|string',
            'tgl_lahir'=> 'required|date',
            'jns_kelamin'=> 'required',
            'agama'=> 'required', 
            'alamat'=> 'required',
            'telp'=> 'required|numeric',
            'email'=> 'required|email',
            'nik'=> 'required|min:16',
            'nama_ibu'=> 'required',
            'nama_ayah'=> 'required',
            'pekerjaan_ayah'=> 'required',
            'pekerjaan_ibu'=> 'required',
        ]);

        // insert
        Siswa::create($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/siswa')->with('success', 'Data siswa berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\GuruExport;
use App\Models\Guru;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.guru.index', [
            'guru' => Guru::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip'=> 'numeric|nullable',
            'nuptk'=> 'numeric|nullable',
            'nik'=> 'required|min:16',
            'nama'=> 'required|string',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required|date',
            'jns_kelamin' => 'required',
            'agama' => 'required',
            'alamat'=> 'required',
            'telp'=> 'numeric|required',
            'email'=> 'email|required',
            'jabatan'=> 'required'
        ]);

        Guru::create($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
         return redirect('/dashboard/guru')->with('success', 'Data guru berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('dashboard.guru.edit', [
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $validatedData = $request->validate([
            'nip'=> 'numeric|nullable',
            'nuptk'=> 'numeric|nullable',
            'nik'=> 'required|min:16',
            'nama'=> 'required|string',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required|date',
            'jns_kelamin' => 'required',
            'agama' => 'required',
            'alamat'=> 'required',
            'telp'=> 'numeric|required',
            'email'=> 'email|required',
            'jabatan'=> 'required'
        ]);



        Guru::where('id', $guru->id)
                ->update($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
         return redirect('/dashboard/guru')->with('success', 'Data guru berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        Guru::destroy($guru->id);

        // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/guru')->with('success', 'Data guru berhasil dihapus');
    }


    public function export()
    {
        return Excel::download(new GuruExport, 'guru.xlsx');
    }
}

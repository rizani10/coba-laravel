<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\RuangKelas;
use Illuminate\Http\Request;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'collection' => RuangKelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas.create',[
            'guru' => Guru::all()
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
        $validatedData = $request->validate([
            'class' => 'required',
            'guru_id' => 'required'
        ]);

        RuangKelas::create($validatedData);
        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RuangKelas  $ruangKelas
     * @return \Illuminate\Http\Response
     */
    public function show(RuangKelas $ruangKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RuangKelas  $ruangKelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = RuangKelas::find($id);
        return view('dashboard.kelas.edit', [
            'kelas' => $kelas,
            'guru' => Guru::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RuangKelas  $ruangKelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RuangKelas::find($id)->update($request->all());

        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RuangKelas  $ruangKelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangKelas = RuangKelas::findOrFail($id);
        $ruangKelas->delete();

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil dihapus');
    }
}

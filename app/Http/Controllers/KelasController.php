<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\RuangKelas;
use Illuminate\Http\Request;


class KelasController extends Controller
{

    public function index()
    {
        return view('dashboard.kelas.index', [
            'collection' => RuangKelas::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.kelas.create',[
            'guru' => Guru::all()
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class' => 'required',
            'guru_id' => 'required'
        ]);

        RuangKelas::create($validatedData);
        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil ditambah');
    }


    public function edit($id)
    {
        $kelas = RuangKelas::find($id);
        return view('dashboard.kelas.edit', [
            'kelas' => $kelas,
            'guru' => Guru::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        RuangKelas::find($id)->update($request->all());

        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil diubah');
    }


    public function destroy($id)
    {
        $ruangKelas = RuangKelas::findOrFail($id);
        $ruangKelas->delete();

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/ruangkelas')->with('success', 'Data kelas berhasil dihapus');
    }
}

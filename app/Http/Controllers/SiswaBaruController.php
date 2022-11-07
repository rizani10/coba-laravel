<?php

namespace App\Http\Controllers;

use App\Models\SiswaBaru;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Writer\Pdf as WriterPdf;

class SiswaBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswabaru.index', [
            'collection' => SiswaBaru::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $randomNumber = "PPDB.NO/" . random_int(001, 999) . "/" . date('Y');
        
        return view('home.ppdb', [
            'randomNumber' => $randomNumber
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaBaruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {


        $validatedData = $request->validate([
            'no_pendaftaran' => 'required',
            'nisn' => 'required|unique:siswa_barus',
            'nama'=> 'required',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required|date',
            'jns_kelamin'=> 'required',
            'agama'=> 'required', 
            'alamat'=> 'required',
            'telp'=> 'required',
            'email'=> '',
            'nik'=> 'required|min:16',
            'nilai_raport'=> 'required',
            'asal_sekolah'=> 'required',
            'nama_ibu'=> 'required',
            'nama_ayah'=> 'required',
            'pekerjaan_ayah'=> 'required',
            'pekerjaan_ibu'=> 'required',
            'telp_ortu'=> 'required',
        ]);
        
        if ($request->session->put($validatedData)) {
            echo $request->session()->get($validatedData);
        } 
        
                
                // insert
                SiswaBaru::create($validatedData);

         // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/home/ppdb-sukses')->with('success', 'Pendaftaran kamu berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaBaru  $siswaBaru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswaBaru = SiswaBaru::FindOrFail($id);
        return view('dashboard.siswabaru.show', [
            'siswabaru' => $siswaBaru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaBaru  $siswaBaru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswaBaru = SiswaBaru::FindOrFail($id);
        return view('dashboard.siswabaru.editsiswabaru',[
            'siswabaru' => $siswaBaru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaBaruRequest  $request
     * @param  \App\Models\SiswaBaru  $siswaBaru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswaBaru = SiswaBaru::FindOrFail($id);
        $validatedData = $request->validate([
            'no_pendaftaran' => 'required',
            'nisn' => 'required|unique:siswa_barus',
            'nama'=> 'required',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required|date',
            'jns_kelamin'=> 'required',
            'agama'=> 'required', 
            'alamat'=> 'required',
            'telp'=> 'required',
            'email'=> '',
            'nik'=> 'required|min:16',
            'nilai_raport'=> 'required',
            'asal_sekolah'=> 'required',
            'nama_ibu'=> 'required',
            'nama_ayah'=> 'required',
            'pekerjaan_ayah'=> 'required',
            'pekerjaan_ibu'=> 'required',
            'telp_ortu'=> 'required',
        ]);

        $siswaBaru->update($validatedData);
                 // redirect ke halaman index sambi kirim pesan sukses
                 return redirect('/dashboard/newstudent')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaBaru  $siswaBaru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswaBaru = SiswaBaru::FindOrFail($id);
        $siswaBaru->delete();

         // redirect ke halaman index sambi kirim pesan sukses
         return redirect('/dashboard/newstudent')->with('success', 'Data berhasil dihapus');
    }


    public function sukses()
    {

        

        return view('home.ppdb-sukses');
    }

    public function cetakpdf($id)
    {

        $siswaBaru = SiswaBaru::FindOrFail($id);

        $pdf = PDF::loadView('dashboard.siswabaru.cetak-pdf',[
            'siswabaru' => $siswaBaru
        ]);
        return $pdf->download('kartuppdf.pdf');
    }
}

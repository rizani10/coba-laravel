<?php

namespace App\Http\Controllers;

use App\Models\Nilai_uts;
use Illuminate\Http\Request;

class NilaiUtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.nilai.index', [
            'nilai' => Nilai_uts::all()
        ]);
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
     * @param  \App\Models\Nilai_uts  $nilai_uts
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai_uts $nilai_uts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai_uts  $nilai_uts
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai_uts $nilai_uts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai_uts  $nilai_uts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai_uts $nilai_uts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai_uts  $nilai_uts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai_uts $nilai_uts)
    {
        //
    }
}

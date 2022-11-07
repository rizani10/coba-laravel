@extends('dashboard.layouts.main')

@section('container')


  <div class="row mt-5">
    <div class="col-lg-3">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header text-bold text-center">Total Siswa</div>
        <div class="card-body">
          <h1 class="card-title">{{ $siswa }}</h1>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-success mb-3">
        <div class="card-header text-bold text-center">Total Guru</div>
        <div class="card-body">
          <h1 class="card-title">{{ $guru }}</h1>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-header text-bold text-center">Total Ruang Kelas</div>
        <div class="card-body">
          <h1 class="card-title">{{ $ruang_kelas }}</h1>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-info mb-3">
        <div class="card-header text-bold text-center">Total Berita</div>
        <div class="card-body">
          <h1 class="card-title">{{ $total_post }}</h1>
        </div>
      </div>
    </div>
 
    <div class="container-fluid">

      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang, {{ auth()->user()->name }}</h4>
        <p>Pada Aplikasi Sistem Informasi Akademik</p>
        <hr>
      </div>
    </div>

@endsection
@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcom Back, {{ auth()->user()->name }}</h1>
  </div>
  {{-- ambil data hitung total post database --}}
  <div class="row">
    <div class="col-md-4">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header text-bold text-center">Total Post</div>
        <div class="card-body">
          <h1 class="card-title">{{ $total_post }}</h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-success mb-3">
        <div class="card-header text-bold text-center">Total Category</div>
        <div class="card-body">
          <h1 class="card-title">{{ $total_category }}</h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-header text-bold text-center">Total Author</div>
        <div class="card-body">
          <h1 class="card-title">{{ $total_author }}</h1>
        </div>
      </div>
    </div>
@endsection
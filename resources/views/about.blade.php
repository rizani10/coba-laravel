@extends('layouts.app')
@section('content')
    <h1>Halaman About</h1>
    <h3> {{ $name }} </h3>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="100">
    
@endsection
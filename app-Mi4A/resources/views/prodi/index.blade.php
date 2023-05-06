@extends('layout.master')
@section('judul_halaman', 'Halaman prodi')

@section('content')
    <h2>Prodi</h2>
    ini adalah halaman prodi
    @foreach ($prodi as $item)
        <li> {{ $item['nama_prodi'] }}</li>
     @endforeach
 @endsection
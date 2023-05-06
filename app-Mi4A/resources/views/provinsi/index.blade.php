@extends('layout.master')
@section('judul_halaman', 'Halaman provinsi')

@section('content')
    <h2>provinsi</h2>
    ini adalah halaman provinsi
    @foreach ($provinsi as $item)
        <li> {{ $item['nama_provinsi'] }}</li>
     @endforeach
 @endsection
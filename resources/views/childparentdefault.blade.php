@extends('parent')

@section('title', 'Halaman Utama')

@section('header')
    @parent
    <h1>Deskripsi Header</h1>
@endsection

@section('content')
    @parent
    <p>Ini adalah halaman utama</p>
@endsection

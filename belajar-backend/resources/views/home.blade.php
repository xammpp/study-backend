@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Home')

@section('container')
    <h1>Ini Halaman Home</h1>
    Selamat Datang {{ $name }}, {{ $role }}
@endsection
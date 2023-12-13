@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Extra')

@section('container')

<h2>
    Detail Extracurricular dari {{ $extra->name }}
</h2>

<div class="mt-5">
    <h4>List Peserta Extra : </h4>
    <ol>
        @foreach ($extra->students as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ol>
</div>

@endsection
@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Teacher')

@section('container')

<h3>Detail Teacher Dari {{ $teacher->name }}</h3>

<div class="mt-5">
    <h4>
        Class : 
        @if ($teacher->class)
            {{ $teacher->class->name }}
            @else
            -
        @endif
    </h4>
</div>

<div class="mt-5">
    <h4>List Students :</h4>
    @if ($teacher->class)
    <ol>
        @foreach ($teacher->class->students as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ol>
    @endif
</div>

@endsection
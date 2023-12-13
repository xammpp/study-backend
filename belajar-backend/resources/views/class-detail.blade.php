@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Class')

@section('container')

    <div class="mt-5">
        <h2>Detail Class dari {{ $class->name }}</h2>
    </div>

    <div class="mt-4">
        <h2>Teacher : {{$class->roomTeachers->name}}</h2>
    </div>

    <div class="mt-4">
        <h4>Student List :</h4>
        <ol>
            @foreach ($class->students as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    </div>

@endsection
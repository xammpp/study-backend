@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student')

@section('container')

    <div class="mt-3">
        <h2>Kamu yakin ingin menghapus data ini ? {{ $student->name }} ({{ $student->nim }})</h2>
    </div>

    <div class="mt-3">
        <form class="d-inline-block" type="submit" action="/student-destroy/{{ $student->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
        </form>
        <a href="/student" class="btn btn-primary">Cancel</a>
    </div>

@endsection
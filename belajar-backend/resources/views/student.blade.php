@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student')

@section('container')
    <h1>Halaman Students</h1>

    <div class="my-3 d-flex justify-content-between">
        <a href="student-add" class="btn btn-primary">Add Data</a>
        <a href="/student-deleted" class="btn btn-info">Deleted</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data -> name }}</td>
                <td>{{ $data -> gender }}</td>
                <td>{{ $data -> nim }}</td>
                <td>
                    <a class="btn btn-success" href="student-detail/{{ $data->id }}" role="button">Detail</a>
                    <a class="btn btn-warning" href="student-edit/{{ $data->id }}" role="button">Edit</a>
                    <a class="btn btn-danger" href="student-delete/{{ $data->id }}" role="button">Delete</a>
                </td>
            </tr>                
            @endforeach
        </tbody>
    </table>

@endsection

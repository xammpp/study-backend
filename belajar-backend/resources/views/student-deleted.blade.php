@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student')

@section('container')

    <div class="mt-3">
        <h3>Halaman Deleted Data</h3>
    </div>

    <div class="mt-3">
        <a href="/student" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIM</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $data)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> gender }}</td>
                    <td>{{ $data -> nim }}</td>
                    <td>
                        <a href="/student/{{ $data->id }}/restore" class="btn btn-primary">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
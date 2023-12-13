@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Class')

@section('container')
    <h1>Ini Halaman Class</h1>

    <div class="my-5">
        <a href="class-add" class="btn btn-primary">Add Data</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $data -> name }}</td>
                <td>
                    <a class="btn btn-primary" href="class-detail/{{ $data->id }}" role="button">Detail</a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection
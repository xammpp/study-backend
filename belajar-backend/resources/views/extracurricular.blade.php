@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Extra')

@section('container')
    <h1>Ini Halaman Extracurricular</h1>

    <div class="my-5">
        <a href="" class="btn btn-primary">Add Data</a>
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
            @foreach ($extraList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data -> name }}</td>
                <td>
                    <a class="btn btn-primary" href="extracurricular-detail/{{ $data->id }}" role="button">Detail</a>
                </td>
            </tr>                
            @endforeach
        </tbody>
    </table>

@endsection
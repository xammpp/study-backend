@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student')

@section('container')

    <div class="mt-5">
        <h2>Detail Student dari {{ $student->name }}</h2>
    </div>

    <div class="my-4 d-flex justify-content-center">
        @if($student->image != '')
            <img src="{{ asset('storage/photo/' .$student->image) }}" alt="" width="200">
        @else
            <img src="{{ asset('images/user.png') }}" alt="" width="200">
        @endif
    </div>

    <div class="mt-5 mb-5">
        <table class="table table-bordered">
            <tr>
                <th>NIS</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Teacher</th>
            </tr>
            <tr>
                <td>{{ $student->nim }}</td>
                <td>
                    @if ($student->gender == 'P')
                        Perempuan
                    @else
                        Laki-Laki
                    @endif
                </td>
                <td>{{ $student->class->name }}</td>
                <td>{{ $student->class->roomTeachers->name }}</td>
            </tr>
        </table>
    </div>

    <div>
        <h3>Extraculiculars</h3>
        <ol>
            @foreach ($student->extracurriculars as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>

        
    </div>
    <br>
    <a href="/student">back</a>

    <style>
        th{
            width: 25%;
        }
    </style>

@endsection
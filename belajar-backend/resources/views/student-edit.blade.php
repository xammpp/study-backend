@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student|Edit')

@section('container')

<div class="mt-5 col-5 m-auto">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/student/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" placeholder="Enter name" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                @if ($student->gender == 'L')
                    <option value="P">P</option>
                    @else
                    <option value="L">L</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" value="{{ $student->nim }}" placeholder="Enter NIM" required>
        </div>

        <div class="mb-3">
            <label for="class">Class</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection
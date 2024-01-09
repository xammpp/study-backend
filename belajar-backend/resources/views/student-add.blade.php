@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Student|Add-Data')

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

    <form action="student" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="">Select One</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM">
        </div>

        <div class="mb-3">
            <label for="class">Class</label>
            <select name="class_id" id="class" class="form-control">
                <option value="">Select One</option>
                @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="photo">Image</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
    </form>
</div>

@endsection
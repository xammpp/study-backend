@extends('layouts.main')
@extends('layouts.navbar')

@section('title', 'Class|Add-Data')

@section('container')

<div class="mt-5 col-5 m-auto">
    <form action="class" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name Class</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
        </div>

        <div class="mb-3">
            <label for="teacher">Teacher Class</label>
            <select name="teacher_id" id="teacher" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($teacher as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
    </form>
</div>

@endsection
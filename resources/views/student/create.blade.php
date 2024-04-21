@extends('layouts.layout')
@section('title', 'Create student')
@section('content')
    <div class="container-custom">
        <h1 class="text-center mt-4 mb-4">Create Student</h1>
        <div>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name:</label>
                    <input type="text" name="name" class="form-control" id="nameStudent" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label fw-bold">Last Name:</label>
                    <input type="text" name="lastName" class="form-control" id="lastNameStudent" required>
                </div>
                <div class="mb-3">
                    <label for="group" class="form-label fw-bold">Group:</label>
                    <select name="group" class="form-select" id="group" required>
                        <option selected>Select Group</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label fw-bold">Rating:</label>
                    <input type="number" name="rating" class="form-control" id="rating" min="0" max="5" required>
                </div>
                <div class="d-flex gap-3 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection


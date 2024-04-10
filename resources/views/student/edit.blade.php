@extends('layouts.layout')

@section('content')
    <div class="container-custom">
        <h1 class="text-center mt-3 mb-3">Edit Student</h1>
{{--        @dd('')--}}
        <div>
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name:</label>
                    <input type="text" name="name" class="form-control" id="nameStudent" value="{{ $student->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label fw-bold">Last Name:</label>
                    <input type="text" name="lastName" class="form-control" id="lastNameStudent" value="{{ $student->lastName }}" required>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label fw-bold">Rating:</label>
                    <select name="rating" class="form-select" id="rating" required>
                        <option selected>Select Rating</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}"
                                    @if($i == $student->rating) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update</button>

            </form>
        </div>
    </div>
@endsection


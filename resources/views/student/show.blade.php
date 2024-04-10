@extends('layouts.layout')

@section('content')
    <div class="container-custom text-center">
        <div class="mb-4 mt-4">
            <h1>Student Details</h1>
            @if($student)
                <h3>Name: {{ $student->name }}</h3>
                <h3>Last Name: {{ $student->lastName }}</h3>
            @endif
        </div>
        @if($student)
            <div>
                <h3>Rating {{ $student->rating }}</h3>
            </div>
            <div class="d-flex justify-content-center gap-4 mt-3 mb-3">
                <a href="{{ route('students.edit', $student) }}" class="btn btn-primary" style="width: 130px">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this group?')" style="width: 130px">Delete
                    </button>
                </form>
            </div>
        @endif
    </div>
@endsection


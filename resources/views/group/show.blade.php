@extends('layouts.layout')
@section('title', 'group')
@section('content')
    <div class="container-custom">
        <div class="text-center mt-3 mb-3">
            <h1>Group Details</h1>
            <h3>Group Name: {{ $group->name }}</h3>
            <h3>Students in Group: {{ $group->name }}</h3>
        </div>
        <div class="mt-5 mb-5">
            <ol>
                @foreach($group->students as $student)
                    <li><a href="{{ route('students.edit', ['student' => $student->id]) }}" class="text-decoration-none text-secondary">{{ $student->name }}</a></li>
                @endforeach

            </ol>
        </div>
        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('groups.edit', $group) }}" class="btn btn-primary" style="width: 130px">Edit</a>

            <form action="{{ route('groups.destroy', $group) }}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="width: 130px" onclick="return confirm('Are you sure you want to delete this group?')">Delete</button>
            </form>
        </div>


    </div>


@endsection



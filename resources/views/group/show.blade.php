@extends('layouts.layout')
@section('title', 'Details of group')
@section('content')
    <div class="container-custom">
        <div class="text-center mt-3 mb-3">
            <h1>Group Details</h1>
            <h3>Group Name: {{ $group->name }}</h3>
            <h3>Students in Group: {{ $group->name }}</h3>
        </div>
        <table class="table">
            <thead>
            <tr class="text-center">
                <th>Full Name</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td class="color text-secondary">
                        {{ $student->name }} {{ $student->lastName }}</td>
                    <td class="text-center">{{ $student->rating }}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-primary" style="width: 100px">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this group?')"
                                    style="width: 100px">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center pt-3">
            <a href="{{ route('groups.index') }}" class="btn btn-primary">Back to List of Groups</a>
        </div>
    </div>
@endsection



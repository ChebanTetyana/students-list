@extends('layouts.layout')
@section('title', 'Student list')
@section('content')
    <div class="container-custom">
        <h1 class="text-center">List of Students</h1>
        <div class="d-flex justify-content-between mt-3 mb-4">
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Create Student</a>
            <a href="{{ route('students.sortByRating') }}" class="btn btn-primary btn-sm">Sort by Rating</a>
            <a href="{{ route('students.sortByCreationDate') }}" class="btn btn-primary btn-sm">Sort by Creation Date</a>
        </div>

        <table class="table">
            <thead>
            <tr class="text-center">
                <th>Full Name</th>
                <th>Group</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td><a href="{{ route('students.show', $student) }}" class="text-decoration-none color text-secondary">{{ $student->name }} {{ $student->lastName }}</a></td>
                    <td>{{ $student->group->name }}</td>
                    <td class="text-center">{{ $student->rating }}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-primary" style="width: 100px">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this group?')" style="width: 100px">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            @if($students->count())
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination">
                        @if ($students->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        @else
                            <li class="page-item"><a href="{{ $students->previousPageUrl() }}" class="page-link">Previous</a></li>
                        @endif
                        @for ($i = 1; $i <= $students->lastPage(); $i++)
                            <li class="page-item {{ ($i == $students->currentPage()) ? 'active' : '' }}"><a href="{{ $students->url($i) }}" class="page-link">{{ $i }}</a></li>
                        @endfor
                        @if ($students->hasMorePages())
                            <li class="page-item"><a href="{{ $students->nextPageUrl() }}" class="page-link">Next</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                        @endif
                    </ul>
                </nav>
            @endif
        </div>
    </div>
@endsection


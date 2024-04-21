@extends('layouts.layout')
@section('title', 'List of groups')
@section('content')
    <div class="container-custom">
        <div class="mt-3 mb-4 text-center">
            <h1>List of Groups</h1>
            <a href="{{ route('groups.create') }}" class="btn btn-primary fs-4">Create Group</a>
       </div>
        <table class="table">
            <thead>
            <tr class="text-center">
                <th>Group</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($groups as $group)
                   <tr>
                       <td class="color text-secondary>">{{ $group->name }}</td>
                       <td class="d-flex gap-3 justify-content-center">
                           <a href="{{ route('groups.edit', $group) }}" class="btn btn-primary" style="width: 100px">Edit</a>
                           <a href="{{ route('groups.show', $group) }}" class="btn btn-info" style="width: 100px">Details</a>
                           <form action="{{ route('groups.destroy', $group) }}" method="POST">
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
            @if($groups->count())
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination">
                        @if ($groups->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        @else
                            <li class="page-item"><a href="{{ $groups->previousPageUrl() }}" class="page-link">Previous</a></li>
                        @endif
                        @for ($i = 1; $i <= $groups->lastPage(); $i++)
                            <li class="page-item {{ ($i == $groups->currentPage()) ? 'active' : '' }}"><a href="{{ $groups->url($i) }}" class="page-link">{{ $i }}</a></li>
                        @endfor
                        @if ($groups->hasMorePages())
                            <li class="page-item"><a href="{{ $groups->nextPageUrl() }}" class="page-link">Next</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                        @endif
                    </ul>
                </nav>
            @endif
        </div>
    </div>
@endsection



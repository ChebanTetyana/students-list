@extends('layouts.layout')
@section('title', 'Group list')
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
           <td><a href="{{ route('groups.show', $group) }}" class="text-decoration-none color text-secondary">{{ $group->name }}</a></td>
           <td class="d-flex gap-3 justify-content-center">
               <a href="{{ route('groups.edit', $group) }}" class="btn btn-primary" style="width: 100px">Edit</a>
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
{{--        <ol>--}}
{{--            @foreach($groups as $group)--}}
{{--                <li class="text-secondary">--}}
{{--                   <a href="{{ route('groups.show', $group) }}" class="text-decoration-none text-secondary">{{ $group->name }}</a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ol>--}}
</div>
@endsection



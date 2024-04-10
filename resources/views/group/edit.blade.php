@extends('layouts.layout')
@section('title', 'Edit group')
@section('content')
    <div class="container-custom">
        <h1 class="text-center">Edit Group</h1>
        <form action="{{ route('groups.update', $group) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Group name:</label>
                <input type="text" name="name" class="form-control" id="nameGroup" value="{{ $group->name }}" required>
            </div>
            <div class="mb-3">
                <label for="speciality_id" class="form-label">Group name:</label>
                <select name="speciality_id" class="form-select" id="speciality_id" required>
                    <option selected>Select Speciality</option>
                    @foreach($specialities as $speciality)
                        <option value="{{ $speciality->id }}"
                                @if($speciality->id == $group->speciality_id) selected @endif>{{ $speciality->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection



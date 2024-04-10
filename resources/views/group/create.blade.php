@extends('layouts.layout')
@section('title', 'group')
@section('content')
    <div class="container-custom">
        <h1 class="text-center">Create Group</h1>
        <div>
            <form action="{{ route('groups.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Group name:</label>
                    <input type="text" name="name" class="form-control" id="nameGroup" required>
                </div>
                <div class="mb-3">
                    <label for="speciality_id" class="form-label">Group name:</label>
                    <select name="speciality_id" class="form-select" id="speciality_id" required>
                        <option selected>Select Speciality</option>
                        @foreach($specialities as $speciality)
                            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>
        </div>
    </div>
@endsection



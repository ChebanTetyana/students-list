<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Speciality;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $groups = Group::paginate(10);
//        dd('group');
        return view('group.index', ['groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialities = Speciality::all();
        return view('group.create', compact('specialities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Group::create($request->all());
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        Group::with('students')->find('group_id');
        $students = $group->students()->get();
        return view('group.show', compact('group', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::find($id);
        $specialities = Speciality::all();
        return view('group.edit', compact('group', 'specialities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }
}

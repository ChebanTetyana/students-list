<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Speciality;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $students = Student::paginate(10);
        $specialities = Speciality::all();
        return view('student.index', compact('students','specialities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        return view('student.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (!array_key_exists('group_id', $data)) {
        $data['group_id'] = rand(1, 36);
        }

        Student::create($data);
        return redirect()->route('students.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $groups = Group::all();
        return view('student.edit', compact('student', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }

    public function sortByRating()
    {
        $studentsByRating = Student::orderBy('rating', 'desc')->paginate(10);
        return view('student.index', ['students' => $studentsByRating]);
    }

    public function sortByCreationDate()
    {
        $studentsByCreationDate = Student::orderBy('created_at', 'asc')->paginate(10);
        return view('student.index', ['students' => $studentsByCreationDate]);
    }
}

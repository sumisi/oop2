<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Index() 
    {
        $students = Student::all();
        $groups = Group::all();
        return view('students.index', compact('students', 'groups'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request, Student $student)
    {
        $data = $request->validate([
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'middle_name' => 'string|nullable',
            'birthday' => 'date|required',
        ]);

        $student->create($data);
        return redirect()->back();
    }

    public function destroy(Student $student)
    {
       
        $student->delete();
        return redirect()->back();
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'middle_name' => 'string|nullable',
            'birthday' => 'date|required',
        ]);

        $student->update($data);
        return redirect()->route('students.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Phone;
use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::with('grade','phone')->paginate(40);
        return view('student.index',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'fname' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'birthday' => 'required|before:today',
            ],[
                'fname.required' => 'father name required!',
            ]);
        $student=$request->all();
        $phoneId=Phone::create([
            'phone' => $student['phone'],
        ]);
        Student::create([
            'name' => $student['name'],
            'fname' => $student['fname'],
            'address' => $student['address'],
            'phone_id' => $phoneId->id,
            'grade_id' => $student['grade_id'],
            'gender' => $student['gender'],
            'birthday' => $student['birthday'],
        ]);
        return redirect()->route('student.index')->with([
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Student Info Saved!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
        ]);
        $student->update($request->all());
        return redirect()->route('student.index')->with([
            'type' => 'success',
            'title' => 'Updated!',
            'message' => 'Student Info Updated!',
        ]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $u=$student->name;
        $student->delete();
        return redirect()->route('student.index')->with([
            'type' => 'warning',
            'title' => 'Deleted!',
            'message' => "Student <b>$u</b> Info Deleted!",
        ]);
    }
}

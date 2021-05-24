<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('auth.login');
    }
    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        // dd('submitted');

        //check validation
        $this->validate($request, [
            'name' => 'required',
            'registration_no' => 'required',
            'department_name' => 'required',
            'info' => 'required',
        ]);

        // store data in student table
        $student = new Student;
        $student->name = $request->name;
        $student->registration_no = $request->registration_no;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save(); //this save method is used for save data into database

        return redirect()->route('index');
    }

    public function edit($id)
    {

        $student = Student::find($id);
        // dd($student);
        return view('edit')->with('student', $student);
    }
    public function update(Request $request, $id)
    {
        // at first get single student data & update it
        $student = Student::find($id);
        $student->name = $request->name;
        $student->registration_no = $request->registration_no;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();
        return redirect()->route('index');
    }
    public function delete($id)
    {
        // at first get single student data & update it
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}

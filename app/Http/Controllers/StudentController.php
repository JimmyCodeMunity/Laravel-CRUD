<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('Students.index');

    }

    public function viewstudents(){
        $students = Student::all();
        return view('Students.view',['students'=>$students]);
    }

    public function registerstudent(){
        return view('Students.register');

    }

    public function addstudent(Request $request){
        //dd($request->studentname);
        //INSERT DATA
        $data = $request->validate([
            'studentname'=>'required',
            'admission'=>'required',
            'class'=>'required|numeric',
            'age' => 'required|numeric',
        ]);

        $newStudent = Student::create($data);

        return redirect(route('students.viewstudents'));

    }
}

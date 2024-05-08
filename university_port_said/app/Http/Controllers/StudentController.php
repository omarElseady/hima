<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function create(Request $request){
        $student = Student::create([
            "name"=>$request->name,
            "gender"=>$request->gender,
            "birth_date"=>$request->birth_date,
            "dept_id"=>$request->dept_id,
            "GPA"=>$request->GPA,
            "email"=>$request->email,
            "years_of_study"=>$request->years_of_study
        ]);

        return $student;
    } 
}

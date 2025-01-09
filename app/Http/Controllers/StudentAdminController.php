<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentAdminController extends Controller
{
    public function index()
    {
        $students = student::with(['Grade','Department'])->get();
        return view('student-admin', [
            'title' => 'Student',
            'students' => $students,
            //'students' => Student::all(),
        ]);
    }
}

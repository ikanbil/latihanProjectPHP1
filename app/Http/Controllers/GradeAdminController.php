<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;


class GradeAdminController extends Controller
{
    public function index()
    {
        $grades = Grade::with('students','Department')->get();
        return view('grade-admin', [
            'title' => 'Grade',
            'grades' => $grades
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with('students','Department')->get();
        return view('grades', [
            'title' => 'Grade',
            'grades' => $grades
        ]);
    }

}

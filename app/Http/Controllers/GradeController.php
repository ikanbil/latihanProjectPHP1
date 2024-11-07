<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();

        return view('Grades', [
            'title' => 'Grade',
            'grades' => $grades->load('students')
        ]);
    }
}

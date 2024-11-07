<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DepartementController extends Controller
{
    public function index()
    {
        // $students = Student::with(['grade'])->get();

        return view('home', ['title' => 'Departement']);

    }
}

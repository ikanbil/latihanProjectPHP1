<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentAdminController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('department-admin', [
            'title' => 'Department',
            'department' => $department->load('students')
        ]);
    }}

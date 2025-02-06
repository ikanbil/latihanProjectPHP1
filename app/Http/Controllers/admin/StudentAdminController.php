<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Department;


class StudentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('q');

        // Use paginate instead of get
        $students = Student::with(['grade', 'department'])
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->orWhere('alamat', 'like', '%' . $query . '%')
                    ->orWhere('telepon', 'like', '%' . $query . '%')
                    ->orWhereHas('grade', function ($q) use ($query) {
                        $q->where('name', 'like', '%' . $query . '%');
                    });
            })
            ->paginate(20); // Fetch 15 students per page

        return view('admin.student.student2-admin', [
            'title' => 'Student',
            'students' => $students,
            'searchQuery' => $query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all(); // Ambil data grade dari database
        $departments = Department::all(); // Ambil data grade dari database
        return view('admin.student.create', compact('grades','departments'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'grade_id'  => 'required|exists:grades,id',
            'email'     => 'required',
            'telepon'   => 'required|string|max:255',
            'alamat'    => 'required|string|max:255',
        ]);


        $grade = Grade::findOrFail($request->grade_id);
        $validated['department_id'] = $grade->department_id;

        Student::create($validated);



        // Redirect atau response sukses
        return redirect('/admin/students/student-admin')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data siswa berdasarkan ID
        $student = Student::findOrFail($id);

        // Ambil data grades untuk pilihan pada form
        $grades = grade::all();
        $departments = Department::all();


        // Tampilkan halaman edit dengan data siswa dan grades
        return view('admin.student.edit', [
            'title' => 'Edit Student Data',
            'student' => $student,
            'grades' => $grades,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    // Validasi data yang dikirimkan
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'grade_id' => 'required|exists:grades,id',
        'telepon' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'alamat' => 'nullable|string|max:1000',
    ]);
    // Cari data siswa berdasarkan ID
    $student = Student::findOrFail($id);

    // Update data siswa
    $student->update([
        'name'     => $validated['name'],
        'grade_id' => $validated['grade_id'],
        'email'    => $validated['email'],
        'telepon'  => $validated['telepon'],
        'alamat'   => $validated['alamat'],
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect('/admin/students/student-admin')->with('success', 'Student updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data siswa berdasarkan ID
        $student = Student::findOrFail($id);

        // Hapus data siswa
        $student->delete();

        // Redirect kembali dengan pesan sukses
        return redirect('/admin/students/student-admin')->with('success', 'Student deleted successfully.');
    }

}

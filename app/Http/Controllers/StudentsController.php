<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->NIM = $request->NIM;
        // $student->email = $request->jurusan;
        // $student->jurusan = $request->email;

        // $student->save();
        // Student::create([
        //     'nama' => $request->nama,
        //     'NIM' => $request->NIM,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
            
        // ]);
        $validatedData = $request->validate([
            'nama' => 'required  ',
            'NIM' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        Student::where('id', $student->id)
                        ->update([
                            'nama' => $request->nama,
                            'NIM' => $request->NIM,
                            'email' => $request->email,
                            'jurusan' => $request->jurusan
                            ]);
        return redirect('/students')->with('status','Data berhasil diUbah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student = Student::find($student->id);
        $student->delete();
        return redirect('/students')->with('status', 'Data berhasil dihapus!');
    }
}

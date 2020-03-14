<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Gambar;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        
        $request->validate([
            'nama'          => 'required',
            'email'         => 'required',
            'tanggal_lahir' => 'required',
            'no_telp'       => 'required',
            'gender'        => 'required',
            // 'image'         => 'required|file|image|mimes:jpeg,png,jpg'
        ]);


        $student =  new Student;
        $student->nama          =  $request->nama;
        $student->email         =  $request->email;
        $student->tanggal_lahir =  $request->tanggal_lahir;
        $student->no_telp       =  $request->no_telp;
        $student->gender        =  $request->gender;
          
        
        // $image = $request->file('image');
        // $new_name = $image->getClientOriginalName();
        // $new_name = $new_name . '_' . $image->getClientOriginalExtension();        
        // $image->move(public_path('foto'),$new_name);
        // $student->image = $new_name;
        

        $student->save();

        return redirect('/students')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        Student::where('id',$student->id)
                ->update([
                    'nama'          => $request->nama,
                    'email'         => $request->email,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'no_telp'       => $request->no_telp,
                    'gender'        => $request->gender
                ]);
                return redirect('/students')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil Dihapus');
    }
}

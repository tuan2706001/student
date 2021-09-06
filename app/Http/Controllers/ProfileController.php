<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idStudent = $request->session()->get('id');
        $student = Student::join('grade', 'student.idGrade', '=', 'grade.idGrade')->where('student.idStudent', '=', $idStudent)->first();
        return view('student.index', [
            "student" => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastName = $request->get('lastName');
        $firstName = $request->get('firstName');
        $email = $request->get('email');
        $password = $request->get('password');

        $DoB = $request->get('DoB');
        $grade = $request->get('idGrade');
        $student = new Student();
        $student->lastName = $lastName;
        $student->firstName = $firstName;
        $student->email = $email;
        $student->passWord = $password;

        $student->DoB = $DoB;
        $student->idGrade = $grade;
        $student->save();
        return Redirect::route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $idStudent = $request->session()->get('id');


        $student = Student::join('grade', 'student.idGrade', '=', 'grade.idGrade')
            ->where('student.idStudent', '=', $idStudent)->first();
        return view('student.edit', [
            "student" => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->lastName = $request->get('lastName');
        $student->firstName = $request->get('firstName');
        $student->email = $request->get('email');
        $student->passWord = $request->get('password');
        // $student->phone = $request->get('phone');
        $student->DoB = $request->get('DoB');
        $student->save();
        return Redirect::route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idStudent = $request->session()->get('id');
        $search = $request->get('search');
        $students = DB::table('mark')
            ->join('student', 'mark.idStudent', '=', 'student.idStudent')
            ->join('subject', 'mark.idSubject', '=', 'subject.idSubject')
            ->select('mark.*', 'subject.nameSubject', 'subject.final', 'subject.skill')->where('student.idStudent', '=', $idStudent)
            ->where('subject.nameSubject', 'like', "%$search%")
            ->paginate(4);

        // $grades = Grade::where('nameGrade', 'like', "%$search%");
        // DB::enableQueryLog();    
        return view('home', [
            'students' => $students,
            "search" => $search
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

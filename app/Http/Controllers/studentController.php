<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EstudentRequest;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = student::orderBy('id', 'desc')->paginate(4);
        
        return view('welcome', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudentRequest $request)
    {
        //
        //return $request->all();
        /*
        $request->validate([
            'Name' => 'required',
            'Age' => 'required',
            'Email' => 'required',
        ]);*/

/*
        $student = new student();
        $student ->name = $request->Name;
        $student -> age = $request->Age;
        $student -> email = $request ->Email;
        //return $student;
        $student->save();
        */

        $student = student::create($request->all());
        return view('crud.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = DB::table('students')->find($id);
        return view('crud.info', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $datos)
    {
      return view('crud.edit',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $datos)
    {



        //
        $request->validate([
            'Name' => 'required',
            'Age' => 'required',
            'Email' => 'required',
        ]);
        $datos->name = $request->Name;
        $datos->age = $request->Age;
        $datos->email = $request->Email;
        $datos->save();
        return redirect()->route('home.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $datos)
    {
        //
       
        $datos = DB::table('students')->where('id', '=', $datos->id)->delete();
        return redirect()->route('home.index')->with('status', 'Estudiante eliminado!');
    }
}

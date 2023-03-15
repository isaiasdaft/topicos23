<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Program;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $student = Student::find(1);
        $student = Student::where('name', 'Abraham')->get();
        return $student;
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
        $validator = Vdalidator::make($request->all(), [
            'name'=>'required',
            'lastName'=>'required',
            'semester'=>'required',
            'control' =>'required|min:8|unique',
            'email' => 'required|email|unique',
            'program_id' => 'required',

        ]);

        if($validator->fails()){
            return $validator->errors();
        }

        $program = Validator::make($request->$program_id);
        if(is_null ($program)){
            return "program is not found";
        }

        $student = new Student;

        $student->name = $request->name;
        $student->lastName = $request->lastName;
        $student->semester = $request->semester;
        $student->control = $request->control;
        $student->email = $request->email;
        $student->program_id = $request->program_id;

        $student->save();
    
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
    public function update(Request $request)
    {

        $student = Student::find(1);
        $student->name = 'Student';
        $student->lastName = 'update';
        $student->semester = 8;
        $student->control = 19215131;
        $student->email = 'update@example';
        $student->save();

        //Student::where('control', $request->control)
        //->update(['name'=>$request->name,
        //'lastName'=>$request->lastName]);
    }

    
    public function delete(Request $request)
    {
        $student = Student::where('control', $request->control)->delete();
        return Student::all();
    }

    public function showToken(){
        echo csrf_token();
    }
}

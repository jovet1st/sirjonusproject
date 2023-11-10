<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;

class studentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stmt = new student();
        $stmt->students_name = $request->stName;
        $stmt->students_age = $request->stAge;
        $stmt->students_status = $request->stStats;

        $stmt->save();

        return student::all();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $stmt = student::find($request->id);

        $stmt->students_name = $request->stName;
        $stmt->students_age = $request->stAge;
        $stmt->students_status = $request->stStats;

        $stmt->save();

        return student::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $stmt = student::find($request->id);

        $stmt->delete();
        
        return student::all(); 
    }
}

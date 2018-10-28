<?php

namespace App\Http\Controllers;


use App\Materia;
use App\Profesor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class ProfesorControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $profesor=profesor::orderBy('id')->paginate();
        return view('profesorindexuser',compact('profesor')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
       $profesor=Profesor::find($id);
        return  view('profesorindexuser',compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    }


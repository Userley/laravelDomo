<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //

    public function index ($id){

        // $data=\DB::table('alumno')->where('IdAlumno',$id)->first();

        // if (!isset($data)) {
        //     abort(404);
        // }

        return view('layouts/alumno');

    }
}

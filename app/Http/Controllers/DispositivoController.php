<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    //

    public function index()
    {

        // $dato = ["Erick Leyva Díaz", "Marcos Ruíz", "Pedro Alcántara"];

        // return view('layouts/inicio', ['dato' => $dato]);

        $dispositivos = \DB::table('dispositivos')->get();
        return view('layouts\inicio', ['dispositivos' => $dispositivos]);
    }
}

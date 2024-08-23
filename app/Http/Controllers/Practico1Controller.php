<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practico1Controller extends Controller
{
    public function Practico1()
    {
        return view('practico1');
    }

    public function calcularPromedio(Request $request){
        $matematicas = $request->input('matematicas');
        $fisica = $request->input('fisica');
        $quimica = $request->input('quimica');
        $programacion = $request->input('programacion');
        $promedio = ($matematicas + $fisica + $quimica + $programacion) / 4;

        return view('practico1', ['result' => $promedio]);
    }

    public function contacto(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $telefono = $request->input('telefono');
        $correo_electronico = $request->input('correo_electronico');

        return view('practico1', ['nombre' => $nombre, 'apellido' =>  $apellido, 'correo_electronico' => $correo_electronico, 'telefono' => $telefono]);
    }

}

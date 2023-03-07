<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class idiomaControler extends Controller{
    public function seleccionar(){
        return view("idioma.seleccionar");
    }

    public function procesar(Request $solicitud){
        $idioma = $solicitud->input("idioma");
        session(['idioma' => $idioma]);
        return redirect("ropciones");
    }

    public function saludar(){
        $idioma = session('idioma','espanol');
        switch($idioma){
            case 'frances':
                $mensaje = "bon jour";
            break;
            case 'italiano':
                $mensaje = "ciao";
            break;
            case 'ingles':
                $mensaje = "hello";
            break;
            default:
                $mensaje = "hola";
            break;
        }
        return view('saludar', compact('mensaje'));
    }

    public function despedir(){
        $idioma = session('idioma','espanol');
        switch($idioma){
            case 'frances':
                $mensaje = "adieu";
            break;
            case 'italiano':
                $mensaje = "arrivederci ";
            break;
            case 'ingles':
                $mensaje = "good bye";
            break;
            default:
                $mensaje = "adios";
            break;
        }
        return view('saludar', compact('mensaje'));
    }

}

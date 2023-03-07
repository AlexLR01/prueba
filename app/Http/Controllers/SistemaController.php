<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function entrada(){
        return view('Sistema.entrada');
    }
    public function saludar(){
        
    }
    public function validar(Request $solicitud){
       // dump($solicitud->all());
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        if($usuario==$password) {
            return redirect(route("nopciones"));
           // echo "si puede entrar";
        }
        else{

           return view("Sistema.error");
        } 
        
    }
    public function mopciones(){
        return view("Sistema.opciones");
    }
    
    public function salida(){
       
    }
}

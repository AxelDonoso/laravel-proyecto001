<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerdurasController extends Controller
{
    public function index(){
        return view('verduras')
        //->with('titulo', $titulo)
        ->with('verduras', array('papa', 'tomare', 'repollo', 'zapallo'));
    }
    public function eliminar(){

        return view('eliminarVerdura');
    }
    public function agregar(){

        return view('agregarVerdura');
    }
    public function guardarFormulario(Request $request){

        $this->validate($request, [
            'nombre'=>'required',   
            'precio'=>'integer'
        ]);
        return "nombre: ".$request->input("precio");
    }
}

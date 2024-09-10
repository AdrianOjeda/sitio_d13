<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //

    public function listado(){

        $mensajes = Contacto::all();
        return view('/listado-contactos', compact('mensajes'));
    }
    public function formularioContacto($cliente = null){
        //dd($cliente);
        return view('contacto', compact('cliente'));
    }
    public function guardarFormulario(Request $request){

        $request->validate([
            'nombre'=>'required|min:3|max:255',
            'correo'=>'required|email',
            'mensaje'=>['required','min:10']
        ]);
        $contacto = new Contacto();
        $contacto ->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje= $request->mensaje;
        
        $contacto->save();
    



        return redirect('/contacto');
    }
}

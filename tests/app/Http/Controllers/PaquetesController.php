<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paquete;

class PaquetesController extends Controller
{
    public function agregar(Request $request)
    {
        Paquete::create($request->all());
        
        if ( !empty($request->Nombre) ) {
            echo $request->Nombre . ' ha sido agregado';
        } else {
            echo 'El compo Nombre es obligatorio.';
        }
        
    }
}

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
        $rules = [
            'nombre'      =>  'required',
            'costo'     =>  'required'
        ];

        $validator = \Validator::make($request->all(), $rules);

        if ( $validator->fails() ) {
            return 'El compo Nombre es obligatorio.';
        }

        Paquete::create($request->all());

        return $request->nombre . ' ha sido agregado';
        
    }
}

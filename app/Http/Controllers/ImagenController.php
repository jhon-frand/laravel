<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Util\Str;


class ImagenController extends Controller
{
    public function store(Request $request){
        // $input = $request-> all();
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid().".".$imagen->extension();
        // return response()-> json(['imagen' => $imagen->extension()]);
        return response()-> json(['imagen' => 'esta es la respuesta de la imagen']);
    }
}

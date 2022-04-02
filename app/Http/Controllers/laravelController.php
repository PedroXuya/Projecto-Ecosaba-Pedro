<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class laravelController extends Controller
{
    /**
     * index para mostrar todos los elementos
     * store para guardar todo
     * update para actualizar todo
     * destroy para eliminar todo
     * edit para mostrar el formulario de edicion
     */

     public function store(Request $request)
     {
        $request -> validate([
            'nombre' => 'required|min:3'
        ]);
    $todos = new Post;
    $todos->nombre = $request->nombre;
    $todos->save();
    return redirect()->route('todos')->with('success','Nombre ingresado correctamente');
     }
}

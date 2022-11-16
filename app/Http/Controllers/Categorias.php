<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    public function index(){
        $Categorias = Categoria::all();
        $titulo = 'Categorias';
        toast('Your Post as been submited!','success');
        return view('welcome', compact('Categorias', 'titulo'));
    }
}

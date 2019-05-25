<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    // Enrutamiento basico de la pagina principal
    public function index(){
        return view('paginas.index');
    }

}

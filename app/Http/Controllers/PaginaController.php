<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view('paginas.index');
    }

    public function acerca(){
        return view('paginas.acerca');
    }

    public function servicio(){
        return view('paginas.servicio');
    }
}

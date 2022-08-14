<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contato()
    {
        return view('contato');
    }

    public function sobre()
    {
        $empresa = "Treinaweb Cursos";
        return view('sobre', compact('empresa'));
    }
}

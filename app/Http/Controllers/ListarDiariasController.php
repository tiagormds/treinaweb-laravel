<?php

namespace App\Http\Controllers;

use App\Models\Diaria;
use Illuminate\Http\Request;

class listarDiariasController extends Controller
{
    /**
     * Lista de diárias
     */
    public function __invoke()
    {

        $diarias = Diaria::all();

        return view('listarDiarias', compact('diarias'));
    }
}

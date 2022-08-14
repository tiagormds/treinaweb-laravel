<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class DetalharDIarias extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $id)
    {
        $diaria = Diaria::find($id);
        return view('detalhar-diarias', compact('diaria'));
    }
}

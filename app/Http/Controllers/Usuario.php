<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar()
    {
        echo 'cadsatrar';
    }

    public function salvar(Request $request)
    {
        dd($request->all());
    }

}

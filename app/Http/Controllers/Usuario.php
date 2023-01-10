<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required|min:6'
        ]);
        
        if(UsuarioModel::cadastrar($request))
        {
            return view('usuario.sucesso', [
                "nome" => $request->nome
            ]);
        }
        else
        {
            echo 'Falha ao cadastrar';
        }

    }

}

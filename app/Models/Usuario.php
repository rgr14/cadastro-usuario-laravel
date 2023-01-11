<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        return self::select([
            'id',
            'nome',
            'email',
            'senha',
            'data_cadastro'
        ])
        ->limit($limite)
        ->get();
    }

    public static function  cadastrar(Request $request)
    {
        return self::insert([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'data_cadastro' => date('Y-m-d H:i:s')
        ]);
    }
}

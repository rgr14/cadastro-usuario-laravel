@extends('layout.base')

@section('titulo', 'Cadastro de Usuários')

@section('conteudo')
    <form action="{{ route('salvar') }}" method="post">    
        {{ csrf_field()}}
        <div class="field">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"/>
            @if($erros->has('nome'))
                @foreach($erros->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="email">E-mail</label>
            <input type="text" name="email"  id="email"/>
            @if($erros->has('email'))
                @foreach($erros->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="senha">Senha</label>
            <input type="password" name="senha"  id="senha"/>
            @if($erros->has('senha'))
                @foreach($erros->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="btn">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
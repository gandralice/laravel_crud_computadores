@extends('base')

@section('conteudo')
    <p>Marca Preço RAM Disco</p>

    @foreach($ComputadorCollection as $computador)
        <p>
          {{$computador->marca}} {{$computador->preco}} {{$computador->ram}} {{$computador->disco}}
          <a href="/computadores/{{$computador->id}}/edit">Editar</a>
          <a href="/computadores/{{$computador->id}}">Excluir</a>
        </p>
    @endforeach
@endsection
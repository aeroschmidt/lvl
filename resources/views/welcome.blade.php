@extends('layouts.main')

@section('title', 'Pagina principal')

@section('content')
    
    @if ($nome == 'Pedro')
        <p>O nome é Pedro</p>
    @else
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos.</p>
    @endif

    @for($i = 0 ; $i < count($array); $i++ )
        <p>Valor: {{$array[$i]}} Posição: {{$i}}</p>
        {{-- Comentario em Blade --}}
    @endfor

    @foreach($nomes as $nomes2)
        <p> {{-- Variavel de loop no blade --}}{{$loop -> index}} - {{$nomes2}}</p>
    @endforeach


    <figure>
        <img src="/img/imagem.jpg" alt="Minha Figura">
        <figcaption></figcaption>
      </figure>

    @endsection
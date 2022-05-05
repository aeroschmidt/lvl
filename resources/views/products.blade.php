@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<p>Tela de produtos</p>

@if($busca != '')
<p> O usuario esta procurando por: {{$busca}} </p>
@endif

@endsection
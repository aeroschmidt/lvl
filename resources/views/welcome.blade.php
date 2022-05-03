<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- JS -->
    <script src="/js/scripts.js"></script>

</head>

<body class="antialiased">
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

</body>

</html>

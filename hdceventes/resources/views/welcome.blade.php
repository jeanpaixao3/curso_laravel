@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Olá Mundo</h1>
        <img src="/img/prog-1.jpg" alt="imagem do topo">
        @if(10 > 5) 
            <p>A Condição é true</p>
        @endif 
        

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @else
        <p>o nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
       
        <p>{{ $nome }}</p>
         @endforeach

        

        <!-- comentario html não pode comentar dados senciveis -->
        {{--aqui é a forma de comentar no blade e não fica visivell no codigo html--}}
        
@endsection
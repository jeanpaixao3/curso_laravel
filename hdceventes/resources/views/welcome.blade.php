@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <div id="search-container" classe="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" pleaceholder="Procurar...">

        </form>

    </div>   
    <div id="eventes-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os eventos dos proximos dias</p>
        <div id="cards-container">
       
        </div>

    </div>
        
@endsection
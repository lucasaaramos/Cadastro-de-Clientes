@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col md-10 offset-md-1">
        <div class="row">
        
            <div id="info-container" class="col-md-6">
                <h1> {{ $event->title }}</h1>
                <p class="event-city"><p><strong>Email:</strong></p>{{ $event->email }}</p><br>
                <p class="event-city"><p><strong>Data de Nascimento:</strong></p> {{ $event->date }}</p><br>
                <p class="event-city"><p><strong>Endereço:</p></strong> {{ $event->address }}</p><br>
                <p class="event-city"><p><strong>CEP:</strong> {{ $event->cep }}</p><br>
                <p class="event-city"><p><strong>Cidade:</strong></p>{{ $event->city }}</p><br>
                <p class="event-city"><strong>Estado:</strong>{{ $event->stade }}</p><br>
       
            </div>


        </div>

    </div>


@endsection
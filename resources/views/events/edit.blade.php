@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method= "POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        

            <div class="form-group">
                <label for="title">Nome:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder= "Nome" value="{{ $event->title }}">
            </div> 

            <div class="form-group">
                <label for="title">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder= "Email" value="{{ $event->email }}">
            </div>
            <div class="form-group">
                <label for="date">Data de nascimento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div>

            <div class="form-group">
                <label for="title">Endereço:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder= "Endereço" value="{{ $event->address }}">
            </div>

            <div class="form-group">
                <label for="title">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder= "CEP" value="{{ $event->cep }}">
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder= "Cidade" value="{{ $event->city }}">
            </div>

            <div class="form-group">
                <label for="title">Estado:</label>
                <input type="text" class="form-control" id="stade" name="stade" placeholder= "Estado" value="{{ $event->stade }}"> 
            </div>


            <input type="submit" class="btn btn-primary" value="Editar usuário">

        </form>
   
   </div>

@endsection



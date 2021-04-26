@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

   <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastre um cliente</h1>
        <form action="/events" method= "POST" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
                <label for="title">Nome:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder= "Nome">
            </div> 
            <div class="form-group">
                <label for="title">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder= "Email">
            </div>
            <div class="form-group">
                <label for="date">Data de nascimento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <label for="title">Endereço:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder= "Endereço">
            </div>
            <div class="form-group">
                <label for="title">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder= "CEP">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder= "Cidade">
            </div>
            <div class="form-group">
                <label for="title">Estado:</label>
                <input type="text" class="form-control" id="stade" name="stade" placeholder= "Estado">
            </div>


            <input type="submit" class="btn btn-primary" value="Cadastrar">

        </form>
   
   </div>

@endsection
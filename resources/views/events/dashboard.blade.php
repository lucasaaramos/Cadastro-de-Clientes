@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Clientes</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ações</th>
                
                </tr>
            </thead>
        
            
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ $event->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                        <td>{{ $event->address }}</td>
                        <td>{{ $event->cep }}</td>
                        <td>{{ $event->city }}</td>
                        <td>{{ $event->stade }}</td>
                        
                        
                        <td>
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                            <form action="/events/{{ $event->id }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline">Deletar</ion-icon> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        
        
        @else
        <p>Você ainda não tem usuários cadastrados, <a href="events/create">Cadastrar usuário</a></p>
        @endif   
    </div>



@endsection

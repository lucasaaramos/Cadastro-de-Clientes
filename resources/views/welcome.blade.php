
            
            @extends('layouts.main')

            @section('title', 'Usuários NW')

            @section('content')
            
            <div id="search-container" class="col-md-12">
                <h1>Busque por um cliente cadastrado</h1>
                <form action="/" method= "GET">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                </form>
            </div>

            <div id="events-container" class="col-md-12">
                @if($search)
                <h2>Buscando por: {{ $search }}</h2>
                @else
                <h2>Veja os clientes cadastrados:</h2>
                
                @endif
                
                <div id="cards-container" class="row">
                    @foreach($events as $event)
                    <div class="card col-md-3">
                            <div class="card-body">
                                <h5 class="card-title">Usuário: <strong>{{ $event->title }} </strong></h5>
                                <p class="card-info">{{ $event->email }}</p>
                                <p class="card-info">Data de Nascimento:{{ date('d/m/Y', strtotime($event->date)) }}</p>
                                <a href="/events/{{ $event->id }}" class="btn btn-primary">Mais Informações</a>
                            </div>
                    </div>
   
                    
                    @endforeach
                    @if(count($events) == 0 && $search)
                        <p>Não foi possivel encontrar nenhum evento com: {{ $search }}! <a href="/">Ver todos</p>
                    
                    @elseif(count($events) == 0)  
                    <p>Não há eventos disponíveis</p>  
                    @endif
                </div>

            </div>


            @endsection



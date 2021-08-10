<x-layout />
<x-header-login />

<div class="container p-3 my-3 text-center">
   <h3>Las siguientes son las PQR que has agendado</h1> 
</div>

@if (!empty($pqrs))
<div class="container">
    <ul class="list-group">
        <div class="row">
            <div class="col-sm">
                @foreach ($pqrs as $pqr)
                @if ($pqr->estado == 'Resuelto')
                    <li class="list-group-item list-group-item-info">
                        Descripción: {{$pqr->descripcion}}. Estado: {{$pqr->estado}}
                    </li>
                @else
                    <li class="list-group-item list-group-item-warning">
                        Descripción: {{$pqr->descripcion}}. Estado: {{$pqr->estado}}
                    </li>
                @endif
                    <br>
                @endforeach
            </div>
        </div>
    </ul>
</div>
@else
<div class="container">
    <div class="jumbotron">
        <h4>Todavía no has agendado ninguna petición, queja o reclamo</h4><br>
        <a href="crear">Crear un pqr</a>
    </div>
</div>

@endif

<div class="container">
    <a href="crear" class="btn btn-primary">Nueva pqr</a>
</div>


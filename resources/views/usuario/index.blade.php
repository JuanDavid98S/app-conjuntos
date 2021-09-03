<x-layout />
<x-header-login />

<div class="media border p-3 m-4 jumbotron">
    <div class="media-body">
        <div class="row">
            <div class="col-lg-6">
                <h4>{{ $usuario->nombre.' '.$usuario->apellido }}</h4><br>
                <h4><small><i><strong>Correo electrónico:</strong> {{ $usuario->correo }}</i></small></h4>
                <h4><small><i><strong>Número de documento: </strong>{{ $usuario->numero_documento }}, tipo: {{ $usuario->tipo_documento }}</i></small></h4>
                <h4><small><i><strong>Teléfono: </strong>{{ $usuario->telefono }}</i></small></h4>
            </div>
            <div class="col-lg-6">
                <div class="card-deck">
                    <div class="card p-4">
                        <div class="card-header">
                           <h5>Ver mis solicitudes</h5>
                        </div>
                        <div class="card-body">
                            <h6><a href="solicitudes">Listar</a></h6>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-header">
                           <h5>Ver mis transacciones</h5>
                        </div>
                        <div class="card-body">
                            <h6><a href="">Listar</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb-icono-de-perfil-de-usuario-azul.png" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:90px;">
  </div>
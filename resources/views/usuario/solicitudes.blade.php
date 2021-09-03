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
               <h3 class="text-center">Estas son las solicitudes que has realizado</h3><br>
               <ul class="list-group">
                   @foreach ($solicitudes as $solicitud)
                        <li class="list-group-item">
                            Tipo de solicitud: {{ $solicitud->tipo_solicitud }} <br>
                            Estado: {{ $solicitud->estado }} <br>
                            @if ($solicitud->producto == null)
                                Tema propuesto: {{ $solicitud->tema }} <br>
                            @else
                                Producto a reparar: {{ $solicitud->producto }} <br>
                            @endif
                                Fecha en que se agendó: {{ $solicitud->fecha_solicitud }}
                        </li>
                   @endforeach
              </ul><br><br>

              <h3 class="text-center">Estas son las solicitudes de reserva de espacios que has realizado</h3><br>
              <ul class="list-group">
                  @foreach ($solicitudEspacio as $solicitud)
                      <li class="list-group-item">
                            Identificador del espacio: {{ $solicitud->id_espacio }} <br>
                            Estado: {{ $solicitud->estado }} <br>
                            Fecha en que se ocupará el espacio: {{ $solicitud->fecha }} <br>
                            Cantidad de asistentes: {{ $solicitud->numero_personas }}
                      </li>
                  @endforeach
              </ul>
            </div>
        </div>
    </div>
    <img src="https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb-icono-de-perfil-de-usuario-azul.png" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:90px;">
  </div>


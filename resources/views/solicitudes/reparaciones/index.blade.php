<x-layout />
<x-header-login />

<div class="container p-4">
    <h2 class="text-center">Cuéntanos qué producto de tu vivienda necesita repararse</h2><br><br>
    <div class="row">
        <div class="col-lg-4">
            <div class="card p-4">
                <h4 class="text-center">Un breve recordatorio...</h5><br>
                    <h6>Siempre estamos pendientes del bienestar de nuestros 
                        vecinos y residentes, por eso, nunca dudes en avisarnos si 
                        alguno de tus bienes necesita una reparación</h6>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-lg-12 mb-4">
                        <div class="media border p-3">
                            <img src="https://image.flaticon.com/icons/png/512/122/122964.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                              <h4>Artículo: {{ $producto->producto }}</h4>
                              @if ($producto->estado == 'Funcional')
                                <span class="badge badge-success">{{ $producto->estado }}</span>
                              @else
                                <span class="badge badge-danger">{{ $producto->estado }}</span>
                              @endif
                                
                              <p><a href="reparacion/{{ $producto->id }}">Solicitar reparación de este bien</a></p>
                            </div>
                          </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
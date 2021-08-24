<x-layout />
<x-header-login />

<div class="container mt-5">
    <h2 class="text-center">Estos son los espacios disponibles para reserva en la propiedad</h2><br>
    <div class="card-columns">
        @foreach ($espacios as $espacio)
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h3 class="card-text">{{ $espacio->nombre }}</h3>
                    <h4>Capacidad: {{ $espacio->numero_personas }} personas</h4>
                    <a href="reserva/{{ $espacio->id }}">Solicitar reserva</a>
                </div>
            </div>
        @endforeach
    </div> 
</div>
 
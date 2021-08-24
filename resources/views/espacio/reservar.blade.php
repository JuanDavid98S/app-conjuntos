<x-layout />
<x-header-login />

@if (!$reservas->isEmpty())
    <div class="container mt-4 text-center">
        <h1>Estas son las reservas realizadas hasta el momento</h1>
    </div><br><br>
    <div class="container">
        <h4>Nuestro espacio común: {{ $espacio->nombre }}, estará ocupado en las siguientes fechas. 
            Ve al final de la lista para realizar una reserva</h4>
        <ul class="list-group">
            @foreach ($reservas as $reserva)
                <li class="list-group-item list-group-item-info">
                    Fecha: {{ $reserva->fecha }},
                    Hora inicio: {{ $reserva->hora_inicio }},
                    Hora finalización: {{ $reserva->hora_fin }}
                </li>
            @endforeach
        </ul>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Reservar</h4>
                    </div>
                    <div class="card-body text-center">
                        <form action="{{$espacio->id}}/crear" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="fecha">Fecha en que se ocupará el espacio</label>
                            <input 
                            type="date" 
                            class="form-control" 
                            id="fecha"
                            name="fecha"
                            value="{{date('Y-m-d')}}"
                            required >
        
                            @error('fecha')
                                <p class="text-primary">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hora_inicio">Hora de inicio de la actividad</label>
                            <input 
                            type="time" 
                            class="form-control" 
                            id="hora_inicio"
                            name="hora_inicio"
                            value="{{date('H:i:s')}}"
                            required >
        
                            @error('hora_inicio')
                                <p class="text-primary">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hora_fin">Hora de finalización de la actividad</label>
                            <input 
                            type="time" 
                            class="form-control" 
                            id="hora_fin"
                            name="hora_fin"
                            value="{{date('H:i:s')}}"
                            required >
        
                            @error('hora_fin')
                                <p class="text-primary">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="numero_personas">Cantidad de personas que ocuparán el espacio</label>
                            <input 
                            type="number" 
                            class="form-control" 
                            id="numero_personas"
                            name="numero_personas"
                            required >
        
                            @error('numero_personas')
                                <p class="text-primary">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@else
    <div class="container mt-4 text-center">
        <h2>No se encontraron reservas activas para el espacio, 
            para reservarlo, envíanos estos datos</h2>
        <br><br>
        <div class="container mt-4">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Reservar</h4>
                        </div>
                        <div class="card-body text-center">
                            <form action="{{$espacio->id}}/crear" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="fecha">Fecha en que se ocupará el espacio</label>
                                <input 
                                type="date" 
                                class="form-control" 
                                id="fecha"
                                name="fecha"
                                value="{{date('Y-m-d')}}"
                                required >
            
                                @error('fecha')
                                    <p class="text-primary">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hora_inicio">Hora de inicio de la actividad</label>
                                <input 
                                type="time" 
                                class="form-control" 
                                id="hora_inicio"
                                name="hora_inicio"
                                value="{{date('H:i:s')}}"
                                required >
            
                                @error('hora_inicio')
                                    <p class="text-primary">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hora_fin">Hora de finalización de la actividad</label>
                                <input 
                                type="time" 
                                class="form-control" 
                                id="hora_fin"
                                name="hora_fin"
                                value="{{date('H:i:s')}}"
                                required >
            
                                @error('hora_fin')
                                    <p class="text-primary">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="numero_personas">Cantidad de personas que ocuparán el espacio</label>
                                <input 
                                type="number" 
                                class="form-control" 
                                id="numero_personas"
                                name="numero_personas"
                                required >
            
                                @error('numero_personas')
                                    <p class="text-primary">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Reservar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endif

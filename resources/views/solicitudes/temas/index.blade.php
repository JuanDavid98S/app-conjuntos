<x-layout />
<x-header-login />

<div class="container p-4">
    <h2 class="text-center">Estos son los temas activos en el foro</h2><br><br>

    <div class="card-deck">
        @foreach ($temas as $tema)
            <div class="card">
                <div class="card-header">{{ $tema->titulo }}</div>
            </div>
        @endforeach
    </div><br>

    <h2 class="text-center">Solicita un tema nuevo</h2><br>

    <div class="row">
        <div class="offset-lg-4 col-lg-4">
            <div class="card p-4 jumbotron">
                <form action="/solicitudes/tema/crear" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="tema">¿De qué quieres hablar con tus vecinos?</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="tema"
                    name="tema"
                    required >
            
                    @error('tema')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crear tema</button>
                </form><br><br>
                @if (session('estado'))
                    <div class="alert alert-success">
                        <strong>{{ session('estado') }}</strong>
                    </div>
                @else
                    
                @endif
            </div>
        </div>
    </div>
</div>
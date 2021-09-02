<x-layout />
<x-header-login />

@if ($comentarios->isEmpty())
    <div class="container pt-4">
        <h1 class="text-center text-primary">{{ $tema->titulo }}</h2><br><br>
        <h2 class="text-center">Sé el primero en comentar algo</h2><br>
        <div class="card p-4">
            <form action="{{$tema->id}}/nuevo" method="POST">
                @csrf
            <div class="form-group">
                <label for="contenido">Cuéntanos qué opinas</label>
                <input 
                type="text" 
                class="form-control" 
                id="contenido"
                name="contenido"
                required >
    
                @error('contenido')
                    <p class="text-primary">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Comentar</button>
            </form>
        </div>
    </div>
@else
    <div class="container pt-4">
        <h1 class="text-center text-primary">{{ $tema->titulo }}</h2><br><br>
        <h2 class="text-center">Esto es lo que opinan tus vecinos:</h2><br><br>
        <div class="container p-4">
            @foreach ($comentarios as $comentario)
            <div class="media border p-3">
                <img src="https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb-icono-de-perfil-de-usuario-azul.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                  <h4>Usuario: {{ $comentario->id_usuario }} <br><small><i>Fecha de publicación: {{ $comentario->created_at }}</i></small></h4><br>
                  <h5>{{$comentario->contenido}}</h5>
                </div>
              </div>
            @endforeach
            <br><br>
            <div class="card p-5">
                <form action="{{$tema->id}}/nuevo" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="contenido">Cuéntanos qué opinas</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="contenido"
                    name="contenido"
                    required >
        
                    @error('contenido')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Comentar</button>
                </form>
            </div>
        </div>
    </div>
@endif
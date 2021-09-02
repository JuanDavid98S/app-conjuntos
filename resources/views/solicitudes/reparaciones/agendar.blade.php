<x-layout />
<x-header-login />

<div class="container p-4">
    <h2 class="text-center">Cuéntanos qué sucede, este es tu producto</h2><br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="media border p-3">
                <img src="https://image.flaticon.com/icons/png/512/122/122964.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4>Artículo: {{ $producto->producto }}</h4>
                            <p>{{ $producto->estado }}</p>
                        </div>
                        <div class="col-sm-8">
                            <div class="card p-4 jumbotron">
                                <form action="{{$producto->id}}" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="descripcion">Danos una descripción sencilla de lo que pasa</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="descripcion"
                                    name="descripcion"
                                    required >
                        
                                    @error('descripcion')
                                        <p class="text-primary">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
<x-layout />
<x-header-login />

<div class="container p-4 my-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="crear" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Motivo de creación</label>
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
                <div class="form-group">
                    <label for="descripcion">Evidencia (archivo, imagen)</label>
                    <input 
                    type="file"
                    name="evidencia"
                    >
                </div>
                <button type="submit" class="btn btn-primary">Agendar PQR</button>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-primary">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>
</div>


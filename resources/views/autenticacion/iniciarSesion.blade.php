<x-layout />
<x-header-login />
<br><br>
<h3 class="text-center">Iniciar Sesión</h3><br>
<div class="container p-4 my-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="/iniciarSesion">
                @csrf
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input 
                    type="email" 
                    class="form-control" 
                    placeholder="Ingrese un correo electrónico" 
                    id="correo"
                    name="correo"
                    value="{{ old('correo') }}"
                    required >

                    @error('correo')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contrasenia">Contraseña</label>
                    <input 
                    type="password" 
                    class="form-control" 
                    id="contrasenia"
                    name="contrasenia"
                    required >

                    @error('contrasenia')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</div>


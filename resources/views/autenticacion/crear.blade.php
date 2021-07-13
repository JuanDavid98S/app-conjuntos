<x-layout />
<x-header-login />
<br><br>
<h3 class="text-center">Registrarse</h3><br>
<div class="container p-4 my-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="/registrarse">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Ingrese su nombre" 
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    required >

                    @error('nombre')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Ingrese sus apellidos" 
                    id="apellido"
                    name="apellido"
                    value="{{ old('apellido') }}"
                    required >

                    @error('apellido')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Ingrese su teléfono" 
                    id="telefono"
                    name="telefono"
                    value="{{ old('telefono') }}"
                    required >

                    @error('telefono')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
                <!--<div class="form-group">
                    <select class="custom-select" id="tipo_documento" name="tipo_documento">
                        <option selected>Tipo de documento</option>
                        <option value="C.C">Cédula de ciudadanía</option>
                        <option value="C.E">Cedula extranjera</option>
                        <option value="T.I">Tarjeta de identidad</option>
                      </select>
                </div>-->
                <div class="form-group">
                    <label for="numero_documento">Número de documento</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Ingrese su número de identificación" 
                    id="numero_documento"
                    name="numero_documento"
                    value="{{ old('numero_documento') }}"
                    required >

                    @error('numero_documento')
                        <p class="text-primary">{{ $message }}</p>
                    @enderror
                </div>
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
                <button type="submit" class="btn btn-primary">Registrarse</button>

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


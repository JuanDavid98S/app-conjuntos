<x-layout />
<x-header-login />

<div class="container mt-6"><br><br>
    <div class="row">
    @foreach ($viviendas as $vivienda)
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Vivienda disponible</h4>
              <p class="card-text">Conoce más detalles de la vivienda</p><br>
              <img src="https://www.bienesonline.com/colombia/photos/linda-casa-para-estrenar-con-todos-los-acabados-en-la-florida-manizales-1400269332.jpg" alt="Casa" class="mx-auto d-block rounded" width="300px" height="400px">
              <a href="detalle/{{ $vivienda->id }}" class="card-link">Ver detalles</a>
            </div>
        </div>
        <br><br>
    </div><br>
    @endforeach
    </div>
</div>

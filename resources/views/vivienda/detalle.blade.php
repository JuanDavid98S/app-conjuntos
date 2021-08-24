<x-layout />
<x-header-login />

<div class="container mt-4">
    <div class="jumbotron">
        <h1>¡Encuentra la casa de tus sueños!</h1><br><br>
        <div class="col">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Vivienda disponible</h4>
                  <img src="https://www.bienesonline.com/colombia/photos/linda-casa-para-estrenar-con-todos-los-acabados-en-la-florida-manizales-1400269332.jpg" alt="Casa" class="mx-auto d-block rounded" width="300px" height="400px"><br><br>
                  <div class="row">
                      <div class="col-sm-6 col-md-6 text-center"><p class="card-text font-weight-bold text-primary">Precio de venta:</p> <p class="card-text font-weight-bold">{{ $vivienda->precio_venta }}</p></div>
                      <div class="col-sm-6 col-md-6 text-center"><p class="card-text font-weight-bold text-primary">Precio de alquiler mensual: </p> <p class="card-text font-weight-bold">{{ $vivienda->precio_venta }}</div>
                      <div class="col-sm-6 col-md-6 text-center"><p class="card-text font-weight-bold text-primary">Tipo de vivienda:</p> <p class="card-text font-weight-bold"> {{ $vivienda->tipo }}</p></div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
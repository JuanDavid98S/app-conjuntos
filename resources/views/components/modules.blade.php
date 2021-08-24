@auth
<br><br><br>
<div class="container">
    <div class="card-deck">
        <div class="card bg-light">
          <div class="card-body text-center">
            <h4 class="card-title">Peticiones, quejas y reclamos</h4>
            <p class="card-text">En este módulo puede agendar PQR para que la junta de administración del conjunto conozca
                sus pensamientos e inconformidades con el servicio.
            </p>
          </div>
          <div class="card-footer">
            <a href="pqr/lista" class="stretched-link">Ingresar</a>
        </div>
        </div>
        <div class="card bg-light">
            <div class="card-body text-center">
              <h4 class="card-title">Solicitudes</h4>
              <p class="card-text">En este módulo puede agendar solicitudes de reparación de bienes y reservar
                  áreas comunes para eventos especiales.
              </p>
            </div>
            <div class="card-footer">
                <a href="#" class="stretched-link">Ingresar</a>
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body">
              <h4 class="card-title text-center">Foro de discusión</h4>
              <p class="card-text text-justify">En el foro puedes comentar acerca de los temas propuestos que son comunes
                  a toda la propiedad. También puedes proponer nuevos temas para que tus vecinos estén enterados 
                  de todas las noticias relevantes.
              </p>
            </div>
            <div class="card-footer">
                <a href="#" class="stretched-link">Ingresar</a>
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body">
              <h4 class="card-title text-center">Reservar espacios</h4>
              <p class="card-text text-justify">En este módulo podrás reservar áreas comunes de la propiedad
                para eventos especiales que quieras celebrar con tu familia, amigos o colegas.
              </p>
            </div>
            <div class="card-footer">
                <a href="espacios/index" class="stretched-link">Ingresar</a>
            </div>
          </div>
    </div>
</div>

@else

<br><br><br>
<div class="container">
 <h4 class="text-justify">¡Bienvenido! Esta es la mejor aplicación para administrar tu propiedad horizontal.</h4>
    <div class="card-deck">
      <div class="card bg-light">
        <div class="card-body">
          <h4 class="card-title text-center">¡Conoce nuestros servicios!</h4>
          <p class="card-text text-justify">Aquí podrás encontrar información sobre todos los servicios que entregamos con nuestra aplicación.
          </p>
        </div>
        <div class="card-footer">
          <a href="#" class="stretched-link">Ingresar</a>
      </div>
      </div>
      <div class="card bg-light">
        <div class="card-body">
          <h4 class="card-title text-center">Viviendas disponibles</h4>
          <p class="card-text text-justify">¿Ganas de estrenar casa? ¡No busques más! aquí puedes encontrar las viviendas disponibles de la propiedad.
          </p>
        </div>
        <div class="card-footer">
          <a href="viviendas/index" class="stretched-link">Ingresar</a>
      </div>
      </div>
    </div>
</div>

@endauth

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">Aplicación conjuntos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        @auth
          <li class="nav-item">
            <a class="nav-link float-right">Bienvenido</a>
          </li> 
          <li class="nav-item">
            <a href="/usuario/perfil" class="nav-link float-right">Ver mi perfil</a>
          </li> 
          <li class="nav-item">
            <form action="/cerrarSesion" method="POST">
              @csrf
              <button type="submit" class="btn btn-secondary">Cerrar Sesion</button>
            </form>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/registrarse">Registrarse</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/iniciarSesion">Iniciar sesión</a>
            </li>
        @endauth
      </ul>
    </div>  
</nav>
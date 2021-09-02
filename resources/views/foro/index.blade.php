<x-layout />
<x-header-login />

<div class="container pt-4">
    <h2 class="text-center">
        Estos son los temas de los que hablan nuestros vecinos
    </h2>
    <br><br>
    <div class="row">
        @foreach ($temas as $tema)
            <div class="col-lg-6 col-md-6">
                <div class="media border p-3">
                    <img src="https://cdn.pixabay.com/photo/2020/06/30/10/23/icon-5355899_960_720.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                      <h4>{{ $tema->titulo }} <br><small><i>Fecha de publicación: {{ $tema->created_at }}</i></small></h4><br>
                      <a href="comentarios/{{ $tema->id }}">Participar en la discusión</a>
                    </div>
                  </div><br><br>
            </div>
        @endforeach
    </div>
</div>
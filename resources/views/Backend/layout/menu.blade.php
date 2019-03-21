<div class="sidebar-wrapper">
  <ul class="nav">
    <li id="slider" class="nav-item">
      <a class="nav-link" href="{{ route('versliders')}}">
        <i class="material-icons">view_carousel</i>
        <p>Slider</p>
      </a>
    </li>

    <li id="comentarios" class="nav-item">
      <a class="nav-link disabled" href="{{ route('vercomentarios')}}">
        <i class="material-icons">comment</i>
        <p>Comentarios</p>
      </a>
    </li>
    <li id="newsletter" class="nav-item">
      <a class="nav-link disabled" href="{{ route('vernewsletter')}}">
        <i class="material-icons">email</i>
        <p>NewsLetter</p>
      </a>
    </li>
    <li id="preguntas" class="nav-item">
      <a class="nav-link disabled" href="{{ route('verpreguntas')}}">
        <i class="material-icons">contact_support</i>
        <p>Preguntas Frecuentes</p>
      </a>
    </li>

    <li id="preguntas" class="nav-item">
      <a class="nav-link disabled" href="{{ route('verpreguntas')}}">
        <i class="material-icons">commute</i>
        <p>Vehiculos(Coches)</p>
      </a>
    </li>
    <li id="preguntas" class="nav-item">
      <a class="nav-link disabled" href="{{ route('verpreguntas')}}">
        <i class="material-icons">credit_card</i>
        <p>Pagos</p>
      </a>
    </li>

    <li id="parametrizar" class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">ballot</i><p>Parametrizar</p></a>
     <div class="dropdown-menu">
      <a class="dropdown-item nav-link" href="#" style="color:black;">- Marca</a>
      <a class="dropdown-item nav-link" href="#" style="color:black;">- Modelos</a>
      <a class="dropdown-item nav-link" href="#" style="color:black;">- Transmisión</a>
    </div>
</li>
    @if(Auth::user()->hasRole('admin'))
    <li id="usuarios" class="nav-item">
      <a class="nav-link" href="{{ route('verusuarios')}}">
        <i class="material-icons">people</i>
        <p>Usuarios</p>
      </a>
    </li>
    <li id="configuracion" class="nav-item">
      <a class="nav-link" href="{{ route('configuracion.index')}}">
        <i class="fab fa-whmcs"></i>
        <p>Configuración</p>
      </a>
    </li>
    @endif

    <!-- your sidebar here -->
  </ul>
</div>

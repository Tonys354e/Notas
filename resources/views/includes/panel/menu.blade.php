<h6 class="navbar-heading text-muted">gestión</h6>
<!-- Navigation -->
<ul class="navbar-nav">
  <li class="nav-item  active ">
    <a class="nav-link  active " href="./index.html">
      <i class="ni ni-tv-2 text-danger"></i> Dashboard
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="./examples/icons.html">
      <i class="ni ni-collection text-blue"></i> crea tus Notas
    </a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link " href="./examples/profile.html">
      <i class="ni ni-single-02 text-yellow"></i> User profile
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="./examples/tables.html">
      <i class="ni ni-bullet-list-67 text-red"></i> Tables
    </a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
    >
      <i class="fas fa-sign-in-alt"></i> cerrar sesion 
    </a>
    <form action="{{ route('logout') }}" method="POST"  style="display: none;" id="formLogout">
        @csrf
    </form>
  </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">ACA SERAN HISTORIAL DE NOTAS</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="ni ni-spaceship"></i> Mis NOTAS
    </a>
  </li>
</ul>
<ul class="navbar-nav">
  <li class="nav-item active active-pro">
    <a class="nav-link" href="./examples/upgrade.html">
      <i class="ni ni-send text-dark"></i> Upgrade to PRO
    </a>
  </li>
</ul>
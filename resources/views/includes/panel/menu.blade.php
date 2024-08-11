<h6 class="navbar-heading text-muted">MENU</h6>
<!-- Navigation -->
<li class="nav-item">
  <a class="nav-link " href="./examples/profile.html">
    <i class="ni ni-single-02 text-yellow"></i> User profile
  </a>
</li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/Notas')}}">
      <i class="ni ni-collection text-blue"></i> crea tus Notas
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


<ul class="navbar-nav">
  <li class="nav-item active active-pro">
    <a class="nav-link" href="./examples/upgrade.html">
      <i class="ni ni-send text-dark"></i> Upgrade to PRO
    </a>
  </li>
</ul>
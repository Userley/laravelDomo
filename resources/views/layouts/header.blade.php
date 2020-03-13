<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">Domo House</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link {{ request()->is('inicio') ? 'active':''}}" href="/inicio">Inicio <span
            class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{ request()->is('historial') ? 'active':''}}" href="/historial">Historial</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{ request()->is('accesos') ? 'active':''}}" href="/accesos">Accesos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      <a href="" class="text-white">
        <i class="fa fa-sign-out mx-2" aria-hidden="true"></i>
        <Span>Salir</Span>
      </a>
    </form>
  </div>
</nav>
@yield('Breadcrumb')
@yield('contenido')
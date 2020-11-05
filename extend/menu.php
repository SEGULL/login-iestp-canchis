	<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="../img/logo.jpg" alt="" width="20%" height="20%"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">inicio</a></li>
      <li><a href="#">Configuracion</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Servicios</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

<script>
	$(".dropdown-trigger").dropdown();
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-info text-lg-start ">

  <div class="collapse navbar-collapse text-lg-start" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-lg-start text-white" href="<?php echo site_url("auth/principal"); ?>"> <img src="<?=base_url()?>/favicon.ico" alt="Principal">StatTrack - Seguimiento de Inversiones <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-lg-start  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bi bi-person-fill"></i> <?php echo ucfirst($usuario_logueado); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url("principal/cambiarpass"); ?>">Cambiar Contraseña</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url("inversiones/menu"); ?>">Mis inversiones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url("principal/cambiodetema"); ?>">Cambiar Tema</a>
          <div class="dropdown-divider"></div>
          <?php if($usuario_logueado=="admin") { ?> 
          <a class="dropdown-item" href="<?php echo site_url("auth/control"); ?>">Controlar Usuarios</a>
          <div class="dropdown-divider"></div>

            <?php } ?>
          <a class="dropdown-item" href="<?php echo site_url("auth/salir"); ?>">Salir</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
<style>
img {
    //background: url("<?=base_url()?>/favicon.ico");
    height: 30px;
    width: 30px;
    //display: block;
    /* Other styles here */
}
</style>
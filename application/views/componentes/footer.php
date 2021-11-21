
<footer class="text-center text-sm-start bg-info text-white">
  <!-- Section: Social media -->
  <br>


  <section class="">
    <div class="row">

    
        <div class="col">

          <h6 class="text-uppercase fw-bold mb-4">
          <a class="btn btn-info text-reset fw-bold" href="<?php echo site_url("inversiones/menu"); ?>">Mis Inversiones</a>
          </h6>
        </div>
        <div class="col">

          <h6 class="text-uppercase fw-bold mb-4">
          <a class="btn btn-info text-reset fw-bold" href="<?php echo site_url("inversiones/balance"); ?>">Mis Balances</a>
          </h6>
        </div>
        <div class="col">
          <h6 class="text-uppercase fw-bold mb-4">
          <a class="btn btn-info text-reset fw-bold" href="<?php echo site_url("principal/cambiarpass"); ?>">Cambiar contraseña</a>
          </h6>
        </div>
        <div class="col">
          <h6 class="text-uppercase fw-bold mb-4">
          <?php $this->load->view("componentes/contacto");?>
          </h6>
        </div>
  </section>
  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
    StatTrack V1.0 fue hecha por 
    <a class="text-reset fw-bold" href="https://github.com/Maurialva">Mauricio Alvarez</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack -  Mis Inversiones</title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
  </head>
  <?php if ($tema=="claro") { ?>
      <?php $this->load->view("componentes/barra");?>
      </header>
      <body>
      <?php } else {?>
      <?php $this->load->view("componentes/barraoscura");?>  
    </header>
      <body class="bg-secondary  text-light">
      <?php }?>
    <div class="container">

      <div class="row-md-3">
       <div class="col-md-12 offset-md-4">
          <img id="logo"  src="<?php echo base_url("assets/img/logo.png"); ?>"  alt="...">
         
          </div>
       </div>
       
 <?php if ($tema=="claro") { ?>
  <div class="row-md-3">
      <center>
        <br>
        <br>
        <a  href="<?php echo site_url("inversiones/nueva"); ?>"  role="button" class="btn btn-primary btn-lg btn-block">Crear Nueva Inversion</a>
        </center>     
      </div>
      <div class="row-md-3">
      <center>
        
        <br>

        <a  href="<?php echo site_url("inversiones/listarxuser"); ?>"  role="button" class="btn btn-primary btn-lg btn-block">Revisar mis Inversiones</a>
        </center>     
      </div>
      <div class="row-md-3">
      <center>
       
        <br>
        <a  href="<?php echo site_url("inversiones/balance"); ?>"  role="button" class="btn btn-primary btn-lg btn-block">Generar Informe de Balance</a>
        </center>     
      </div>
    </div>

<?php } else {?>
  <div class="row-md-3">
      <center>
        <br>
        <br>
        <a  href="<?php echo site_url("inversiones/nueva"); ?>"  role="button" class="btn btn-dark btn-lg btn-block">Crear Nueva Inversion</a>
        </center>     
      </div>
      <div class="row-md-3">
      <center>
        
        <br>

        <a  href="<?php echo site_url("inversiones/listarxuser"); ?>"  role="button" class="btn btn-dark btn-lg btn-block">Revisar mis Inversiones</a>
        </center>     
      </div>
      <div class="row-md-3">
      <center>
       
        <br>
        <a  href="<?php echo site_url("inversiones/balance"); ?>"  role="button" class="btn btn-dark btn-lg btn-block">Generar Informe de Balance</a>
        </center>     
      </div>
    </div>
<?php }?>
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<style>
   #logo{
    width:35%;
    height:35%;
    display: flex;
  justify-content: center;
  align-items: center;

  }
</style>
  </body>
  <footer><br><br><br><br>
  <?php if ($tema=="claro") { ?>
   <?php $this->load->view("componentes/footer");?>
      <?php } else {?>
         <?php $this->load->view("componentes/footeroscuro");?>
      <?php }?>

  </footer>
</html>
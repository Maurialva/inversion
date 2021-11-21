<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack - Cambiar Password</title>
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
      
    
  
          <img id="cambiarpass" src="<?php echo base_url("assets/img/cambiarpass.png"); ?>"  alt="...">
         
          </div>
       </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <br>
    
          <br>
          
 <?php if ($tema=="claro") { ?>
  <form method="post">
            <div class="form-group">  <center>
              <label for="pass">Nueva Contraseña</label>  </center>
              <input type="password" class="form-control bg-info" name="password" >
            </div>
            <div class="form-group">
            <center>
              <label for="confirmacion">Repetir Contraseña</label>  </center>
              <input type="password" class="form-control bg-info" name="confirmacion">
            </div>
            <center>

          
            <button type="submit" class="btn btn-primary">Guardar</button>  </center>
          </form>

<?php } else {?>
  <form method="post">
            <div class="form-group">  <center>
              <label for="pass">Nueva Contraseña</label>  </center>
              <input type="password" class="form-control bg-dark" name="password" >
            </div>
            <div class="form-group">
            <center>
              <label for="confirmacion">Repetir Contraseña</label>  </center>
              <input type="password" class="form-control bg-dark" name="confirmacion">
            </div>
            <center>

          
            <button type="submit" class="btn btn-dark">Guardar</button>  </center>
          </form>
<?php }?>
        
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<style>
  #cambiarpass{
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


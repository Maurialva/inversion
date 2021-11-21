<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack - Recuperar Password</title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
    
    
  </head>
  <body class="bg-info">
    <div class="container">
      <center>

      
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <br>
              <div class="card">
                <br>
              <img src="<?php echo base_url("assets/img/recuperar.png"); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <?php // echo validation_errors(); ?>
                <?php
                  if(isset($OP)){
                    switch($OP){
                      case "MAL":
                        ?>
                          <div class="alert alert-danger" role="alert">
                            Datos incompletos
                          </div>
                        <?php
                        break;
                      
                      case "INEXISTENTE":
                          ?>
                            <div class="alert alert-danger" role="alert">
                            El Email no pertenece a un usuario
                            </div>
                          <?php
                          break;
                    }

                  }
                ?>
                <form method="post">
                  
                  <div class="form-group">
                    <label for="password">Email de recuperacion</label>
                    <input type="email" class="form-control" name="email">
                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="ingresar">RECUPERAR DATOS</button>
                </form>
                <br><div class="text-white">
                <?php $this->load->view("componentes/contacto");?>
                </div>
                <br>
                <a class="button" href="<?php echo site_url("auth/login"); ?>">Volver Atras</a>
              </div>
            </div>
          </div>
        </div>
        </center>
    </div>

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
</html>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack - Control de Usuarios</title>
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
   
    <div class="container ">

      <div class="row-md-3">
       <div class="col">
         <center>
           <img id="logo"  src="<?php echo base_url("assets/img/logo.png"); ?>"  alt="...">
         </center> 
         
          </div>
       </div>

       

 <?php if ($tema=="claro") { ?>

  <div class="row-md-3">
        <div class="col">
          <br>
          <center>
          <h1 class="text-info">Usuarios Registrados</h1>
          </center> 
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <br>
          <?php if($usuarios){ ?>
            <center> 
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Ultimo login</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($usuarios as $u){ ?>
              <tr>
                <td><?php echo $u["nombre"];?></td>
                <td><?php echo $u["email"];?></td>
                <td><?php echo $u["ultlogin"];?></td>
                <?php if($u["nombre"]!="admin"){ ?>
                  <td class="text-center center "><a href="<?php echo site_url("auth/borrarusuario/".$u["id_usuario"]); ?>" class="btn btn-danger btn-bg borrar"><i class="bi bi-x-circle borrar"></i></a></td>
                <?php }else{ ?>
                  <td class="text-center"> <h2><i class="bi bi-emoji-smile-fill bg  text-success"></i></h2></td>
                   <?php } ?>

              </tr>
              <?php } ?>
            </tbody>
            </center> 
          </table>
          <?php }else{ ?>
          <div class="alert alert-secondary" role="alert">
            No hay usuarios cargados
          </div>
          <?php } ?>

<?php } else {?>
  
  <div class="row-md-3">
        <div class="col">
          <br>
          <center>
          <h1 class="text-light">Usuarios Registrados</h1>
          </center> 
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <br>
          <?php if($usuarios){ ?>
            <center> 
          <table class="table text-light table-bordered">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Ultimo login</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($usuarios as $u){ ?>
              <tr>
                <td><?php echo $u["nombre"];?></td>
                <td><?php echo $u["email"];?></td>
                <td><?php echo $u["ultlogin"];?></td>
                <?php if($u["nombre"]!="admin"){ ?>
                  <td class="text-center center "><a href="<?php echo site_url("auth/borrarusuario/".$u["id_usuario"]); ?>" class="btn btn-danger btn-bg borrar"><i class="bi bi-x-circle borrar"></i></a></td>
                <?php }else{ ?>
                  <td class="text-center"> <h2><i class="bi bi-emoji-smile-fill bg  text-success"></i></h2></td>
                   <?php } ?>

              </tr>
              <?php } ?>
            </tbody>
            </center> 
          </table>
          <?php }else{ ?>
          <div class="alert alert-secondary" role="alert">
            No hay usuarios cargados
          </div>
          <?php } ?>
<?php }?>


        </div>
      </div>
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
  <footer><br><br><br><br>
  <?php if ($tema=="claro") { ?>
   <?php $this->load->view("componentes/footer");?>
      <?php } else {?>
         <?php $this->load->view("componentes/footeroscuro");?>
      <?php }?>

  </footer>
</html>


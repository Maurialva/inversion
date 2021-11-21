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
    <center>
    <div class="container">
  
      <div class="row-md-3">
       <div class="col-md-12 ">
          <img id="logo"  src="<?php echo base_url("assets/img/logo.png"); ?>"  alt="...">
         
          </div>
       </div>
      <div class="row">
        
 <?php if ($tema=="claro") { ?>
  <div class="col-md-6 offset-md-3">
          <br>
          <?php if($inversiones){ ?>
          <table >
            <tbody>
              <?php foreach($inversiones as $i){ ?>
              <tr>
                <td class="text-center center"><a href="<?php echo site_url("inversiones/index/".$i["id_inversion"]); ?>" class="btn btn-info btn-bg "><?php echo $i["concepto"];?></a></td>
                <td class="text-center center "><a href="<?php echo site_url("inversiones/borrarinv/".$i["id_inversion"]); ?>" class="btn btn-danger btn-bg borrar"><i class="bi bi-x-circle borrar"></i></a></td>
                
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php }else{ ?>
          <div class="alert alert-secondary" role="alert">
              Aun no hay inversiones          </div>
          <?php } ?>
        </div>
      </div>

<?php } else {?>
  <div class="col-md-6 offset-md-3">
          <br>
          <?php if($inversiones){ ?>
          <table >
            <tbody>
              <?php foreach($inversiones as $i){ ?>
              <tr>
                <td class="text-center center"><a href="<?php echo site_url("inversiones/index/".$i["id_inversion"]); ?>" class="btn btn-dark btn-bg "><?php echo $i["concepto"];?></a></td>
                <td class="text-center center "><a href="<?php echo site_url("inversiones/borrarinv/".$i["id_inversion"]); ?>" class="btn btn-danger btn-bg borrar"><i class="bi bi-x-circle borrar"></i></a></td>
                
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php }else{ ?>
          <div class="alert alert-secondary" role="alert">
              Aun no hay inversiones          </div>
          <?php } ?>
        </div>
      </div>
<?php }?>
       
    </div>
    </center>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url("assets/js/jquery.inputmask.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bindings/inputmask.binding.js"); ?>"></script>
      <script>
        $(document).ready(function(){
            $(".borrar").click(function(event){
                event.preventDefault();
                var dir=$(this).attr("href");
                bootbox.confirm({
                    size:"small",
                    message: "<i class='bi bi-info-circle-fill'></i> Estas seguro?",
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (resultado) {
                        if(resultado){
                            location.href=dir;
                        }
                    }
                });
            });
        })
    </script>
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
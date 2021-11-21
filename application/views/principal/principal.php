<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <?php if ($tema=="claro") { ?>
    <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url(); ?>assets/css/temaoscuro.css">
    <?php }else{?>
      <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url(); ?>assets/css/temaoscuro.css">
    <?php }?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack -  Principal</title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
  </head>
  <?php if ($tema=="claro") { ?>
      <?php $this->load->view("componentes/barra");?>
      </header>
      <body>
      <?php } else {?>
      <?php $this->load->view("componentes/barraoscura");?>  
    </header>
      <body class="bg-secondary text-light">
      <?php }?>
    <div id="containter" class="container">
  
      <div class="row-md-3">
      <center>
        <br>
        <br>
        <br>
        <?php if ($tema=="claro") { ?>
          <img src="<?=base_url()?>/favicon.ico" alt="Principal"> COTIZACION DE DIVISAS      </center> 
       <div class="col-md-12">
       <iframe src="https://es.widgets.investing.com/live-currency-cross-rates?theme=lightTheme&pairs=10456,1505,1521,9489,1608,1729,1812,1888,2090" width="100%" height="450px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
        </iframe></div>
       </div>
      <div class="row-md-3">
      <center>
        <img src="<?=base_url()?>/favicon.ico" alt="Principal"> PRINCIPALES CRYPTOS      </center> 
       <div class="col-md-12 ">
       <iframe src="https://es.widgets.investing.com/top-cryptocurrencies?theme=lightTheme" width="100%" height="600px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>
      </div>
      <?php }else{?>
        <img src="<?=base_url()?>/favicon.ico" alt="Principal"> COTIZACION DE DIVISAS      </center> 
       <div class="col-md-12">
       <iframe src="https://es.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&pairs=10456,1505,1521,9489,1608,1729,1812,1888,2090" width="100%" height="450px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
        </iframe></div>
       </div>
      <div class="row-md-3">
      <center>
        <img src="<?=base_url()?>/favicon.ico" alt="Principal"> PRINCIPALES CRYPTOS      </center> 
       <div class="col-md-12 ">
       <iframe src="https://es.widgets.investing.com/top-cryptocurrencies?theme=darkTheme" width="100%" height="600px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>
      </div>
        <?php }?>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
   
  </body>
  <footer>
  <?php if ($tema=="claro") { ?>
   <?php $this->load->view("componentes/footer");?>
      <?php } else {?>
         <?php $this->load->view("componentes/footeroscuro");?>
      <?php }?>

  </footer>
</html>
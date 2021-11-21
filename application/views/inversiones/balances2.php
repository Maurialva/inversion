<?php
     
     $dataPoints = array();
     $x=10;
     foreach ($balances as $i) {
     
      $aux=array("y"=> $i["monto"],"label"=> $i["concepto"]);
     array_push($dataPoints,$aux);
     
      $x=$x+10;
     }
       
     ?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Balance de tus inversiones"
	},
	axisY: {
		title: "Resultado Acumulado en Pesos",
		includeZero: true,
		prefix: "$",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "$#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack -  Mis Balances</title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">

     </head>
     <header>
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
        <div class="col-md-12">
        <center>
     <div id="chartContainer" class="" style="height: 370px; width: 70%; "></div>
     </center>
        </div>
      </div>
    </div>
    </center>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url("assets/js/jquery.inputmask.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bindings/inputmask.binding.js"); ?>"></script>
     
    <style>
   #logo{
    width:35%;
    height:35%;
    display: flex;
  justify-content: center;
  align-items: center;

  }
</style>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     </body>
  <footer><br><br><br><br>
  <?php if ($tema=="claro") { ?>
   <?php $this->load->view("componentes/footer");?>
      <?php } else {?>
         <?php $this->load->view("componentes/footeroscuro");?>
      <?php }?>

  </footer>
     </html>                              
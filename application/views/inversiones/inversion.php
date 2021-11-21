<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>StatTrack - Inversion <?php echo $inversion["concepto"]?></title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
  </head>
  <header>
  <?php if ($tema=="claro") { ?>
      <?php $this->load->view("componentes/barra");?>
      </header>
      <body>
      <?php } else {?>
      <?php $this->load->view("componentes/barraoscura");?>   </header>
      <body class="bg-secondary  text-light">
      <?php }?>
   
    <div class="container">

       <div class="row-md-3">
       <div class="col-md-12 offset-md-4">
      
    
  
          <img id="logo" src="<?php echo base_url("assets/img/logo.png"); ?>"  alt="...">
         
          </div>
       </div>

	   <?php if ($tema=="claro") { ?>
		<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
			<form class="form-inline" method="post" action="">
			
			<label for="monto" class="mb-2 mr-sm-2">Monto:   </label>
			<div class="input-group mb-2 mr-sm-2 ">
				<div class="input-group-prepend">
				<div class="input-group-text">$</div>
				</div>
				<input type="text" class="form-control" id="monto" name="monto">
				
			</div>
			
		
			<button type="submit" class="btn btn-primary mb-2">Actualizar</button>
			</form>
			<?php echo form_error("monto","<small class=\"text-danger\">","</small>")?>
			</div>
			<div class="col-md-3"></div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<br>
			<div class="table-responsive">
			<table class="table table-bordered">
				<tbody>
					<?php foreach($montos as $m){ ?>
					<tr>
						<td><?php echo $m["fecha"];?> </td>
						<td class="text-right">$<?php echo $m["monto"];?></td>
						<td class="text-right">
							<?php if($m["diferencia"]){?>
								<?php echo $m["diferencia"];?>
								<?php if($m["diferencia"]<=0){?>
									<i class="bi bi-caret-down-fill text-danger"></i>
								<?php }else{ ?>
									<i class="bi bi-caret-up-fill text-success"></i>
								<?php } ?>
							<?php } ?>
						</td>
						<td class="text-center col-sm-1"><a href="<?php echo site_url("inversiones/borrar/".$m["monto_id"]); ?>" class="text-danger"><i class="bi bi-x-circle"></i></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
			</div>
		</div>

<?php } else {?>
	<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
			<form class="form-inline" method="post" action="">
			
			<label for="monto" class="mb-2 mr-sm-2">Monto:   </label>
			<div class="input-group mb-2 mr-sm-2 bg-dark text-light">
				<div class="input-group-prepend bg-dark text-light">
				<div class="input-group-text bg-secondary text-light">$</div>
				</div>
				<input type="text" class="form-control bg-dark text-light" id="monto" name="monto">
				
			</div>
			
		
			<button type="submit" class="btn btn-dark mb-2">Actualizar</button>
			</form>
			<?php echo form_error("monto","<small class=\"text-danger\">","</small>")?>
			</div>
			<div class="col-md-3"></div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<br>
			<div class="table-responsive">
			<table class="table table-bordered  text-light">
				<tbody>
					<?php foreach($montos as $m){ ?>
					<tr>
						<td><?php echo $m["fecha"];?> </td>
						<td class="text-right">$<?php echo $m["monto"];?></td>
						<td class="text-right">
							<?php if($m["diferencia"]){?>
								<?php echo $m["diferencia"];?>
								<?php if($m["diferencia"]<=0){?>
									<i class="bi bi-caret-down-fill text-danger"></i>
								<?php }else{ ?>
									<i class="bi bi-caret-up-fill text-success"></i>
								<?php } ?>
							<?php } ?>
						</td>
						<td class="text-center col-sm-1"><a href="<?php echo site_url("inversiones/borrar/".$m["monto_id"]); ?>" class="text-danger"><i class="bi bi-x-circle"></i></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
<?php }?>
		
		<center>

		
		<div class="row">
			<div class="col">
			<h4>Total acumulado desde el principio <strong>$<?php echo $aculmulado; ?></strong></h4>
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
  <footer><br><br><br><br>
  <?php if ($tema=="claro") { ?>
   <?php $this->load->view("componentes/footer");?>
      <?php } else {?>
         <?php $this->load->view("componentes/footeroscuro");?>
      <?php }?>

  </footer>
</html>


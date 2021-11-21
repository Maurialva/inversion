<!-- Button trigger modal -->
<button type="button" class="btn btn-info text-reset fw-bold text-uppercase fw-bold " data-toggle="modal" data-target="#exampleModalCenter">
Contactanos
</button>

<!-- Modal -->
<div class="modal fade text-info" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tenes algun problema o duda?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
       
		<div class="row">
			<div class="col">
			<h1>Contactenos</h1>
			<br>
			<form action="<?php echo site_url("contacto");?>" method="post">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="nombre" value="">
			
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" value="">
				
				</div>
				<div class="form-group">
					<label for="asunto">Asunto</label>
					<input type="text" class="form-control" name="asunto" value="">
				
				</div>
				<div class="form-group">
					<label for="mensaje">Mensaje</label>
				
					<textarea class="form-control" name="mensaje" rows="5" > </textarea>
				</div>
				<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
			</form>
			</div>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>

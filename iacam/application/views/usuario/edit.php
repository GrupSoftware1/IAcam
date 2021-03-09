<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Edit</h3>
            </div>
			<?php echo form_open('usuario/edit/'.$usuario['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $usuario['nombre']); ?>" class="form-control" id="nombre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellidos" class="control-label">Apellidos</label>
						<div class="form-group">
							<input type="text" name="apellidos" value="<?php echo ($this->input->post('apellidos') ? $this->input->post('apellidos') : $usuario['apellidos']); ?>" class="form-control" id="apellidos" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<textarea name="celular" class="form-control" id="celular"><?php echo ($this->input->post('celular') ? $this->input->post('celular') : $usuario['celular']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<textarea name="email" class="form-control" id="email"><?php echo ($this->input->post('email') ? $this->input->post('email') : $usuario['email']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pass" class="control-label">Pass</label>
						<div class="form-group">
							<textarea name="pass" class="form-control" id="pass"><?php echo ($this->input->post('pass') ? $this->input->post('pass') : $usuario['pass']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
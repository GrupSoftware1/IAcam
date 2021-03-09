<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bitacora Edit</h3>
            </div>
			<?php echo form_open('bitacora/edit/'.$bitacora['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo ($this->input->post('fecha') ? $this->input->post('fecha') : $bitacora['fecha']); ?>" class="has-datepicker form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hora" class="control-label">Hora</label>
						<div class="form-group">
							<input type="text" name="hora" value="<?php echo ($this->input->post('hora') ? $this->input->post('hora') : $bitacora['hora']); ?>" class="form-control" id="hora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario" class="control-label">Usuario</label>
						<div class="form-group">
							<input type="text" name="usuario" value="<?php echo ($this->input->post('usuario') ? $this->input->post('usuario') : $bitacora['usuario']); ?>" class="form-control" id="usuario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="operacion" class="control-label">Operacion</label>
						<div class="form-group">
							<input type="text" name="operacion" value="<?php echo ($this->input->post('operacion') ? $this->input->post('operacion') : $bitacora['operacion']); ?>" class="form-control" id="operacion" />
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Configuracion Edit</h3>
            </div>
			<?php echo form_open('configuracion/edit/'.$configuracion['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tiempoGrabacion" class="control-label">TiempoGrabacion</label>
						<div class="form-group">
							<input type="text" name="tiempoGrabacion" value="<?php echo ($this->input->post('tiempoGrabacion') ? $this->input->post('tiempoGrabacion') : $configuracion['tiempoGrabacion']); ?>" class="form-control" id="tiempoGrabacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<textarea name="descripcion" class="form-control" id="descripcion"><?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $configuracion['descripcion']); ?></textarea>
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
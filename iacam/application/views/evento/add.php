<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Evento Add</h3>
            </div>
            <?php echo form_open('evento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idimagen" class="control-label">Capturaimagen</label>
						<div class="form-group">
							<select name="idimagen" class="form-control">
								<option value="">select capturaimagen</option>
								<?php 
								foreach($all_capturaimagen as $capturaimagen)
								{
									$selected = ($capturaimagen['id'] == $this->input->post('idimagen')) ? ' selected="selected"' : "";

									echo '<option value="'.$capturaimagen['id'].'" '.$selected.'>'.$capturaimagen['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipodeteccion" class="control-label">Tipodeteccion</label>
						<div class="form-group">
							<textarea name="tipodeteccion" class="form-control" id="tipodeteccion"><?php echo $this->input->post('tipodeteccion'); ?></textarea>
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Notificacion Edit</h3>
            </div>
			<?php echo form_open('notificacion/edit/'.$notificacion['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idusuario" class="control-label">Usuario</label>
						<div class="form-group">
							<select name="idusuario" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuario as $usuario)
								{
									$selected = ($usuario['id'] == $notificacion['idusuario']) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['id'].'" '.$selected.'>'.$usuario['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idevento" class="control-label">Evento</label>
						<div class="form-group">
							<select name="idevento" class="form-control">
								<option value="">select evento</option>
								<?php 
								foreach($all_evento as $evento)
								{
									$selected = ($evento['id'] == $notificacion['idevento']) ? ' selected="selected"' : "";

									echo '<option value="'.$evento['id'].'" '.$selected.'>'.$evento['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idconfig" class="control-label">Configuracion</label>
						<div class="form-group">
							<select name="idconfig" class="form-control">
								<option value="">select configuracion</option>
								<?php 
								foreach($all_configuracion as $configuracion)
								{
									$selected = ($configuracion['id'] == $notificacion['idconfig']) ? ' selected="selected"' : "";

									echo '<option value="'.$configuracion['id'].'" '.$selected.'>'.$configuracion['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="token" class="control-label">Token</label>
						<div class="form-group">
							<textarea name="token" class="form-control" id="token"><?php echo ($this->input->post('token') ? $this->input->post('token') : $notificacion['token']); ?></textarea>
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
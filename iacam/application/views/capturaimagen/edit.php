<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Capturaimagen Edit</h3>
            </div>
			<?php echo form_open('capturaimagen/edit/'.$capturaimagen['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idcaptura" class="control-label">Camara</label>
						<div class="form-group">
							<select name="idcaptura" class="form-control">
								<option value="">select camara</option>
								<?php 
								foreach($all_camara as $camara)
								{
									$selected = ($camara['id'] == $capturaimagen['idcaptura']) ? ' selected="selected"' : "";

									echo '<option value="'.$camara['id'].'" '.$selected.'>'.$camara['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="archivo" class="control-label">Archivo</label>
						<div class="form-group">
							<textarea name="archivo" class="form-control" id="archivo"><?php echo ($this->input->post('archivo') ? $this->input->post('archivo') : $capturaimagen['archivo']); ?></textarea>
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
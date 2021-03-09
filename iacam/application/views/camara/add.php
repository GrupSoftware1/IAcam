<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">ADICIONAR CAMARA</h3>
            </div>
            <?php echo form_open('camara/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="dirip" class="control-label">Direccion IP</label>
						<div class="form-group">
							<textarea name="dirip" class="form-control" id="dirip"><?php echo $this->input->post('dirip'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> GUARDAR
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
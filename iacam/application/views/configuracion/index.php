<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Configuracion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('configuracion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>TiempoGrabacion</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($configuracion as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['tiempoGrabacion']; ?></td>
						<td><?php echo $c['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('configuracion/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('configuracion/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

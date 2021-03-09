<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Evento Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('evento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Idimagen</th>
						<th>Fecha</th>
						<th>Tipodeteccion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($evento as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['idimagen']; ?></td>
						<td><?php echo $e['fecha']; ?></td>
						<td><?php echo $e['tipodeteccion']; ?></td>
						<td>
                            <a href="<?php echo site_url('evento/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('evento/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

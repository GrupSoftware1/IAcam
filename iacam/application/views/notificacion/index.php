<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Notificacion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('notificacion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Idusuario</th>
						<th>Idevento</th>
						<th>Idconfig</th>
						<th>Token</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notificacion as $n){ ?>
                    <tr>
						<td><?php echo $n['id']; ?></td>
						<td><?php echo $n['idusuario']; ?></td>
						<td><?php echo $n['idevento']; ?></td>
						<td><?php echo $n['idconfig']; ?></td>
						<td><?php echo $n['token']; ?></td>
						<td>
                            <a href="<?php echo site_url('notificacion/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('notificacion/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

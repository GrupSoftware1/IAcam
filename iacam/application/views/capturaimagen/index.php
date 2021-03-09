<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Capturaimagen Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('capturaimagen/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Idcaptura</th>
						<th>Archivo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($capturaimagen as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['idcaptura']; ?></td>
						<td><?php echo $c['archivo']; ?></td>
						<td>
                            <a href="<?php echo site_url('capturaimagen/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('capturaimagen/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

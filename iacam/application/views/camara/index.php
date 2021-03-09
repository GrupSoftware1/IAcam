<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Camara Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('camara/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Direccion IP</th>
                        
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </tr>
                    <?php foreach($camara as $c){ ?>
                    <tr>
                        <td><?php echo $c['id']; ?></td>
                        <td><?php echo $c['dirip']; ?></td>
                        <td>                            

                            <a href="<?php echo site_url('camara/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a> 
                         </td>
                             <td>
                            <a href="<?php echo site_url('camara/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                    <?php } ?>
                   
                </table>
                                
            </div>
        </div>
    </div>
</div>

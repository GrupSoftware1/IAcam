<style>
   .picture-container {
            position: center;
            width: 450px;
            height: 320px;
            margin: 20px auto;
            border: 10px solid #fff;
            box-shadow: 0 5px 5px #000;
        }
        .container {
    width: 480px;
    height: 480px;
}
.iframe-class {
    width: 100%;
    height: 100%;
    border: 2px double  red;
    overflow: auto;
}

</style>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">

             </div> 
                    </div>

                    <div class="col-sm-9">
                            <!--  <div class="container">
                            <iframe  class="iframe-class" src="<?php echo $camara['dirip'];?>" allowfullscreen   >
                               
                            </iframe>
                            </div>**/ -->
                    </div>

                         <div class="col-sm-12">
                         
                         <div class="picture-container" id="imagen"> 
                             <script src="<?php echo site_url('resources/js/watson.js');?>"></script>
                            
                            <!-- 
                            <img src="<?php echo site_url('resources/js/1.jpg'); ?>" />
                             <img src="&lt;?php echo base_url(); ?&gt;images/1.jpg" />    --> 
                            
                            
                        </div>
                </div>



            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- <script src="../../../resources/js/watson.js"></script> --> 

</div> 

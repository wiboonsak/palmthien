<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
     <!-- Begin page -->
        <div id="wrapper">
            	<?php include('side_menu.php')?>
<div class="content-page">
    <!-- Top Bar Start -->
    <div class="topbar">
        <nav class="navbar-custom">                  
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
                <li>
                    <div class="page-title-box">
                       <h4><?php if ($currentID == '') {echo 'Add Trip';
} else {
    echo 'Trip detail';
} ?></h4>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Top Bar End -->
<hr>
    <!-- Start Page content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card-box">
                <?php 
if ($currentID != '') {
    $packageData = $this->Package_model->list_packageData($currentID);
    foreach ($packageData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="packageForm" name="packageForm">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Package Name : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_name_en;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Price Adult : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="price" name="price" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_priceadult;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Price Child: <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="package_child" name="package_child" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_pricechild;}?> " >
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Details : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="desc" name="desc" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->package_detail; } ?></textarea>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Select Features :</label>
                    <div class="col-sm-9 ">
                        <?php $arr = array();
                        if($currentID !=''){
                            $listpackage_include=$this->Package_model->listpackage_include($currentID);
                            $numincluded = $listpackage_include->num_rows();
                            if($numincluded >0){  	
                           foreach($listpackage_include->result() AS $package_include){
                               array_push($arr,$package_include->feature_id);
                           } 
                            }
                        }
                                                                                $datatype='1';
		$listpackage_feature=$this->Package_model->listpackage_feature($datatype);
                                                                                foreach($listpackage_feature->result() AS $data){
                         if(in_array($data->id, $arr)){  $bb = 'checked';  }else { $bb = ''; }                                                            
                                                                                    ?>
                        <div class="col-4 checkbox checkbox-success checkbox-circle">
                       <input type="checkbox" id="include<?php echo $data->id?>"name="include[]" value="<?php echo $data->id?>" <?php echo $bb?> onClick="checkout('<?php echo $data->id?>','<?php echo $currentID?>',this.checked)">
                       <label for="include<?php echo $data->id?>"><i class="<?php echo $data->icon_class?>"></i> <?php echo $data->include_name_en?> </label>
                        </div>
             <?php }?>
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Add index image : <a style="color:red;">*</a>
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="pack_img" name="pack_img" type="file" class="form-control form-control-sm" value="" > 
                                        </div>
                                    </div>
                  <?php if(($currentID != '')&&($Data->img != '')){?>
                                    <div class="row">
							<div class="col-lg-12">
								<div class="card m-b-30">
									<h6 class="card-header">Images</h6>
									<div class="card-body">
										<div id="showImagepack" style="margin-top: 5px;"></div>
                                                                                <input type="hidden" id="imgold" name="imgold" value="<?php echo $Data->img?>" />
									</div>
								</div>
							</div>

							
					</div>	
                                    <?php }?>
                  
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-lg" onClick="Add()">   SAVE   </button>
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                    </div>
                </div>					
            </form>
<?php if ($currentID != '') { ?>
                <br>
                <hr>
                <br>
              <div id="showSection" >
                    <div class="form-group row">
                        <label class="col-sm-3 fa fa-file-image-o" style="font-size:16px;font-weight: bold;"> Images Additional</label>
                        <form enctype="multipart/form-data" id="imgForm" name="imgForm" method="post">
                            <div class="col-sm-12">
                                <div style="font-size: 10pt; font-weight: normal">&emsp;&emsp;If you want to add a photo click browse or choose file to select the image file. Then press the add image button. The system can add unlimited images. The image should be no larger than 870 by 500 pixels high. ( .jpg .gif .png support) </div>
                                <a>Choose File</a>
                                <input type="hidden" name="currentID2" id="currentID2" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                                <input type="file" class="btn-light" id="img2" name="img2[]" multiple/>
                                <a  class="btn btn-custom waves-effect waves-light" onClick="Addimg()">Add Image</a>
                                <div id="showImage" style="margin-top: 5px;"></div>
                            </div>
                        </form>
                    </div>
                </div>
<?php } ?>



            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        <!--2018 © Highdmin. - Coderthemes.com-->
    </footer>

</div>
        </div>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- END wrapper --> 
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
                       <h4><?php if ($currentID == '') {echo 'Add Promotion';
} else {
    echo 'Promotion detail';
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
    $PromotionData = $this->Package_model->list_PromotionData($currentID);
    foreach ($PromotionData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="promotionForm" name="promotionForm">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"package>Promotion name : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->topic;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Promotion detail : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="desc" name="desc" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->promotion_detail; } ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Promotion condition : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="condition" name="condition" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->position_Condition; } ?></textarea>
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Images : <a style="color:red;">*</a>
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="promotion_img" name="promotion_img" type="file" class="form-control form-control-sm" value="" > 
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
                        <button type="button" class="btn btn-primary btn-sm" onClick="Add()">Add / Edit Data</button>
                       
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
                        <label class="col-sm-3 fa fa-file-image-o" style="font-size:16px;font-weight: bold;"> Package Images additional</label>
                        <form enctype="multipart/form-data" id="imgForm" name="imgForm" method="post">
                            <div class="col-sm-12">
                                <label>&emsp;&emsp;If you want to add a photo Click Browse to select the image file. Then press the Add Photos button. The system can add unlimited images. The image should be no larger than 1024 by 768 pixels high. ( .jpg .gif .png support) </label>
                                <a>choose file</a>
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
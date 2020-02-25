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
                       <h4><?php if ($currentID == '') {echo 'Add Slide';
} else {
    echo 'Slide detail';
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
    $slideData = $this->Package_model->list_slideData($currentID);
    foreach ($slideData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="slideForm" name="slideForm">
                  <div class="form-group row" >
                    <label class="col-sm-3 col-form-label"package>Text 1 : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="Text1" name="Text1" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->text1;}?> " >
                    </div>
                </div>
                  <div class="form-group row" >
                    <label class="col-sm-3 col-form-label"package>Text 2 : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="Text2" name="Text2" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->text2;}?> " >
                    </div>
                </div>
                  <div class="form-group row" >
                    <label class="col-sm-3 col-form-label"package>Text3 : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="Text3" name="Text3" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->text3;}?> " >
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Images : <a style="color:red;">*</a>
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="slide_img" name="slide_img" type="file" class="form-control form-control-sm" value="" > 
                                             <div style="font-size: 10pt; font-weight: normal">If you want to add a photo click browse or choose file to select the image file. Then press the add image button. The system can add unlimited images. The image should be no larger than 1920 by 980 pixels high. ( .jpg .gif .png support) </div>
                                        </div>
                                    </div>
                  <?php if(($currentID != '')&&($Data->img_name != '')){?>
                                    <div class="row">
							<div class="col-lg-12">
								<div class="card m-b-30">
									<h6 class="card-header">Images</h6>
									<div class="card-body">
										<div id="showImagepack" style="margin-top: 5px;"></div>
                                                                                <input type="hidden" id="imgold" name="imgold" value="<?php echo $Data->img_name?>" />
									</div>
								</div>
							</div>

							
					</div>	
                                    <?php }?>
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-lg" onClick="Add()">  SAVE  </button>
                       
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                    </div>
                </div>
            </form>
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
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
                       <h4><?php if ($currentID == '') {echo 'Add Index';
} else {
    echo 'Index Data Managing';
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
                $type = $this->uri->segment(3);
if ($currentID != '') {
    $indexData = $this->Package_model->list_indexData($currentID);
    foreach ($indexData->result() AS $Data) {
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
                    <label class="col-sm-3 col-form-label"package>Call : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="phone" name="phone" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->phone;}?> " >
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Add image for index : <a style="color:red;">*</a>
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="slide_img" name="slide_img" type="file" class="form-control form-control-sm" value="" > 
                                            <div style="font-size: 10pt; font-weight: normal">If you want to add a photo Click Browse or Choose file to select the image file.  The image should be no larger than 540 by 630 pixels high. ( .jpg .gif .png support) </div>
                                        </div>
                                    </div>
                  <?php if(($currentID != '')&&($Data->img != '')){?>
                                    <div class="row">
							<div class="col-lg-12">
								<div class="card m-b-30">
									<h6 class="card-header">Image for index</h6>
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
                        <button type="button" class="btn btn-primary btn-lg" onClick="Add()">  SAVE  </button>
                       
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                        <input type="hidden" name="type" id="type" value="<?php echo $type ?>" >
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
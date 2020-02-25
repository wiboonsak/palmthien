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
                       <h4><?php if ($currentID == '') {echo 'Add Gallery';
} else {
    echo 'Gallery detail';
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
  $data_id = $this->uri->segment(4);
  $type = $this->uri->segment(3);
   $categalleryData = $this->Package_model->list_categalleryData($type,$data_id);
   foreach ($categalleryData->result() AS $categalleryData2){}
if ($currentID != '') {
    $galleryimg = $this->Package_model->list_galleryimg($currentID);
   
    $numgal = $galleryimg->num_rows(); 
    foreach ($galleryimg->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="galleryForm" name="galleryForm">
                 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Category :</label>
								<div class="col-sm-9">
                                                                     <label class="col-sm-3 col-form-label"><?php echo $categalleryData2->category_title?></label>
                                                                    <input type="hidden" id="category" name="category" value="<?php echo $categalleryData2->id?>">
								</div>
						</div>
                  <br>
                  <hr>
                  <br>
                  <div class="form-group row">
                        <label class="col-sm-3 fa fa-file-image-o" style="font-size:16px;font-weight: bold;">Images additional</label>
                       
                            <div class="col-sm-12">
                                 <div style="font-size: 10pt; font-weight: normal">&emsp;&emsp;If you want to add a photo cick browse or choose file to select the image file. Then press the add image button. The system can add unlimited images. The image should be no larger than 870 by 500 pixels high. ( .jpg .gif .png support) </div>
                                <a>Choose File</a>
                                <input type="hidden" name="currentID2" id="currentID2" value="<?php if($numgal>0){echo $Data->id;}?>" >
                                <input type="hidden" name="currentID3" id="currentID3" value="<?php echo $data_id?>" >
                                <input type="hidden" name="type" id="type" value="<?php echo $type?>" >
                                
                                <input type="file" class="btn-light" id="img2" name="img2[]" multiple/>
                                <a  class="btn btn-custom waves-effect waves-light" onClick="Addimg()">Add Image</a>
                                <div id="showImage" style="margin-top: 5px;"></div>
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
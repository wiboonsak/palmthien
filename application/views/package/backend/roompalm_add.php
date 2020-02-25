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
                       <h4><?php if ($currentID == '') {echo 'Add Room Palmthien';
} else {
    echo 'Palmthien Pool Villa Managing';
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
    $roomData = $this->Package_model->list_roomData($currentID);
    foreach ($roomData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="roomForm" name="roomForm">
                <div class="form-group row">
							  <label class="col-sm-3 col-form-label">ROOM TYPE</label>
								<div class="col-sm-9">
									<select id="category" name="category"  class="form-control form-control-sm" >
										<option value="0">---Select---</option>
										<?php foreach($categoryList->result() AS $category){ ?>
										<option value="<?php echo $category->id?>" <?php if(($currentID != '')&&($category->id==$Data->category_id)){ echo "selected";}?> ><?php echo $category->category_title?></option>
										<?php }?>
									</select>
								</div>
						</div>	
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">ROOM FACILITIES : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="FACILITIES" name="FACILITIES" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->FACILITIES; } ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">SPECIAL ROOM : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="SPECIAL" name="SPECIAL" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->SPECIAL_ROOM; } ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">SERVICE ROOM : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="SERVICE" name="SERVICE" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->SERVICE_ROOM ; } ?></textarea>
                    </div>
                </div>
               
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-lg" onClick="Add()">  SAVE  </button>
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
                        <div class="col-sm-3 fa fa-file-image-o" style="font-size:16px;font-weight: bold;">Images additional</div><br>
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
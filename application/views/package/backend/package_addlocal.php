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
    $packageData = $this->Package_model->list_packageData('1',$currentID);
    foreach ($packageData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="packageForm" name="packageForm">
                <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Category</label>
								<div class="col-sm-9">
									<select id="product_category" name="product_category"  class="form-control form-control-sm" >
										<option value="0">---Select---</option>
										<?php foreach($categoryList->result() AS $category){ ?>
										<option value="<?php echo $category->id?>" <?php if(($currentID != '')&&($category->id==$Data->category_id)){ echo "selected";}?> ><?php echo $category->category_title?></option>
										<?php }?>
									</select>
								</div>
						</div>	
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">package name : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_name_en;}  ?> " >
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">traveling Time : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="duration" name="duration" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->duration;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">period of time : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="period" name="period" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->period_of_time;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">airline : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="airline" name="airline" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->airline;}?> " >
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">package price : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="price" name="price" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_price;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">discount price : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="package_discount" name="package_discount" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->package_discount;}?> " >
                    </div>
                </div>
                   <div class="form-group row">
                    <label class="col-sm-3 col-form-label">detail highlight tour: <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="highlight" name="highlight" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->detailHighlight_Tour; } ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">package detail : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="desc" name="desc" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->package_detail; } ?></textarea>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">package condition : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <textarea id="condition" name="condition" type="text" class="summernote "><?php if ($currentID != '') {echo $Data->package_Condition; } ?></textarea>
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">included name : <a style="color:red;">*</a></label>
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
                            <input class="chbox" type="checkbox" id="include<?php echo $data->id?>" name="include[]" value="<?php echo $data->id?>" <?php echo $bb?> onClick="checkout('<?php echo $data->id?>','<?php echo $currentID?>',this.checked)">
                       <label for="include<?php echo $data->id?>"><?php echo $data->include_name_en?></label>
                        </div>
             <?php }?>
                        <input type="hidden" id="chtxt" value="<?php if($currentID!=''){echo '1';}?>">
                    </div>
                </div>
                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">link Youtube : <a style="color:red;">*</a></label>
                                       
<!--                                            <input id="linkyoutube" name="linkyoutube" class="form-control form-contol-sm" >-->
                                          
                                             <div id="linkyoutube_a" class="col-sm-6">
                                                                                                      <input id="youtube" name="youtube[]" type="text" class="form-control form-control-sm youtube3"  autocomplete="off"   >
                                                                                                     
                                             </div>
                                            <div class="col-sm-3">	
                                        <a  id="bt1" class="btn btn-info btn-sm" onclick="ADDyoutube()">Add Clip Video</a>
                                        </div>
                                                     
                                        
                                       
                                    </div> 
                                                         <?php 
                                                      $youtube = $this->Package_model->getlinkyoutube($currentID);
                                                      $numyoutube = $youtube->num_rows();
                                                      if($numyoutube>0){
                                                      foreach ($youtube->result() AS $youtube2){?>
                                                    <div class="form-group row">
                                   <label class="col-sm-3 col-form-label"></label>
                                    
                                         <div id="linkyoutube_a" class="col-sm-6">
                                            <input id="youtube<?php echo $youtube2->id?>" name="youtube1[]" type="text" class="form-control form-control-sm youtube3" readonly value='<?php echo $youtube2 ->linkyoutube;?>'>
                                         </div>
                                               <div class="col-sm-3">
                                                        <a  id="bt2"class="btn btn-danger btn-sm entypo-cancel" onclick="deleteyoutube('<?php echo $youtube2->id ?>', 'tbl_youtube')"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                         
                                                    </div>
                                    </div> 
                                                      <?php }}?>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                            Images : <a style="color:red;">*</a>
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
                  <div class="form-group row">
                      <div class="col-sm-12 ">
                          <?php
                          if ($currentID != '') {
                          $option = $this->Package_model->listpackage_option($currentID);
                          $numoption = $option->num_rows();
        ?>
                          <?php if($numoption >0){?>
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th width="281" > Traveling date</th>
                        <th width="140" > Total day</th>
                        <th width="140" > Adult Price</th>
                        <th width="140" > Adult Price (Alone)</th>
                        <th width="140" > Child Price</th>
                        <th width="140" > Child Price (Extra bed)</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">edit </th>
                        <th width="100" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($option->result() as $option2) { ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td>
                                <input type="text" id="Traveling<?php echo $option2->id ?>" name="Traveling<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->Traveling_date?>">
                                </td>
                            <td>
                                <input type="text" id="Total<?php echo $option2->id ?>" name="Total<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->duration ?>">
                                </td>
                            <td>
                                <input type="text" id="adult_price<?php echo $option2->id ?>" name="adult_price<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->adult_price ?>">
                                </td>
                                <td>
                                <input type="text" id="aloneadult_price<?php echo $option2->id ?>" name="aloneadult_price<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->aloneadult_price ?>">
                                </td>
                                <td>
                                <input type="text" id="child_price<?php echo $option2->id ?>" name="child_price<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->child_price ?>">
                                </td>
                                <td>
                                <input type="text" id="addchild_price<?php echo $option2->id ?>" name="addchild_price<?php echo $option2->id ?>" class="form-control form-control-sm" value="<?php echo $option2->addchild_price ?>">
                                <input type="hidden" name="dataID" id="dataID<?php echo $option2->id ?>" value="<?php echo $option2->id ?>" >  
                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $option2->id ?>','<?php echo $Data->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $option2->id ?>', 'tbl_price_option','<?php echo $Data->id ?>')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;} ?>
                </tbody>
            </table> 
                          <?php }}?>
                      </div>
                  </div>
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-sm" onClick="Add()">Add / Edit Data</button>
                        <?php if ($currentID != '') {?>
                        <button type="button" class="btn btn-success btn-sm" onClick="Option(<?php echo $currentID?>)">Price Option</button>
                        <?php }?>
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
                        <label class="col-sm-3 fa fa-file-pdf-o" style="font-size:16px;font-weight: bold;"> Package PDF additional</label>
                        <form enctype="multipart/form-data" id="fileForm" name="fileForm" method="post">
                            <div class="col-sm-12">
                                <label>&emsp;&emsp;If you want to add a file Click Browse to select the  file. ( .pdf support) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                               
                                <a>choose file</a>
                                <input type="hidden" name="currentID2" id="currentID2" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                                <input type="file" class="btn-light" id="file2" name="file2[]" multiple/>
                                <a  class="btn btn-custom waves-effect waves-light" onClick="Addfile()">Add PDF</a>
                                <div id="showfile" style="margin-top: 5px;"></div>
                            </div>
                        </form>
                    </div>
                  <br>
                <hr>
                <br>
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
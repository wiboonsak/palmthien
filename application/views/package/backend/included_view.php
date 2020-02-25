<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
     <!-- Begin page -->
     <style>
	.icon-click {
		cursor: pointer;
		padding: 0 7px 0 7px;
	}
	
	.select-icon {
		font-size: 50px;
		padding: 0 10px 0 10px;
		color: #1d70af;
	}

</style> 
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
                        <h4 class="page-title">Package Features</h4>
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
    $featureData = $this->Package_model->list_featureData($currentID);
    foreach ($featureData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="includedForm" name="includedForm">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Add Feature Name :</label>
                    <div class="col-sm-9">
                        <input type="text" id="sname" name="name" placeholder="Ex. Airport shuttle" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->include_name_en; } ?> " >
                    </div>
                </div>
                <div class="form-group row">
                                         <label class="col-sm-3 col-form-label">Select Icon :</label>
                                        <div class="col-md-9 col-sm-12" style="color: #343a40; font-size: x-large;">
											<i class="fa fa-bus icon-click"></i>
											<i class="fa fa-ship icon-click"></i>
											<i class="fa fa-car icon-click"></i>
											<i class="fa fa-taxi icon-click"></i>
											<i class="fa fa-users icon-click"></i>
											<i class="fa fa-bed icon-click"></i>
											
                                        </div>
                                    </div>
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-success btn-lg" onClick="Add()"> SAVE </button>
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                        <input type="hidden" id="icon_class" name="icon_class" value="<?php if($currentID !=''){ echo $Data->icon_class;}?>" >
                    </div>
                </div>					
            </form>	

                                                <br>
                                                <hr>
                                                <br>
                                                  <div class="card-box table-responsive" id="showSeason">
        </div>

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
</div>
<!-- END wrapper --> 
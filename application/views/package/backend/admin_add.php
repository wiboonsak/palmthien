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
                       <h4><?php if ($currentID == '') {echo 'Add Admin';
} else {
    echo 'Admin detail';
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
    $adminData = $this->Package_model->list_adminData($currentID);
    foreach ($adminData->result() AS $Data) {
    }
}
?>
              <form enctype="multipart/form-data" id="adminForm" name="adminForm">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"package>Name - Surname : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->name;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"package>User name  : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="user_name" name="user_name" class="form-control form-control-sm" value="<?php if ($currentID != '') {echo $Data->user_name;}?> " >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"package>Password : <a style="color:red;">*</a></label>
                    <div class="col-sm-9">
                       <input id="Password" name="Password" type="Password" class="form-control form-control-sm"  > 
                    </div>
                </div>
                  <div class="form-group row">
                                        <label class="col-sm-3">
                                           Comfirm Password
                                        </label>
                                        <div class="col-sm-9">
                                            <input id="ComfirmPassword" name="ComfirmPassword" type="Password" class="form-control form-control-sm"  onchange="chkpass(this.value)"> 
                                        </div>
                                    </div>
                   <div class="form-group row" >
                    <div class="col-sm-12" style="text-align: center">
                        <button type="button" class="btn btn-primary btn-sm" onClick="Addadmin()">Add / Edit Data</button>
                       
                        <input type="hidden" name="currentID" id="currentID" value="<?php if ($currentID != '') {echo $Data->id;} ?>" >
                        <input type="hidden" name="oldpass" id="oldpass" value="<?php if ($currentID != '') {echo $Data->password;} ?>"> 
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
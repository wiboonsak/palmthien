<style>
    #sidebar-menu > ul > li > a:hover {

        color: #f9bc0b;
    }

    #sidebar-menu > ul > li > a {		
        color: #FFFFFF;
    }

    .nav-second-level li a, .nav-thrid-level li a {		
        color: #FFFFFF;
    }
	
    #sidebar-menu > ul > li > a:focus, #sidebar-menu > ul > li > a:active {		
        color: #FFFFFF !important;
        background-color: #86afcf !important;
    }

    #sidebar-menu > ul > li > a.active {		
        color: #FFFFFF !important;
        background-color: #86afcf !important;
    }

    /*.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, .page-item.active .page-link {
            
            
    }*/
	.nav-second-level li a:hover, .nav-thrid-level li a:hover {
    	background-color: #c9eae9;
    	color: #FFFFFF;
	}

    .mce-btn {		
        background-color: #86afcf !important;    
        color: #FFFFFF !important;
    }

    .mce-menubtn button span, .mce-menubtn button i, .mce-btn button span, .mce-btn button i {
        color: #FFFFFF !important;
    }

    .mce-menubar .mce-caret, .mce-btn .mce-caret {
        border-top-color: #FFFFFF !important;
    }

	.nav-second-level li.active > a {
    	color: #FFFFFF;
    	background-color: #c9eae9;
		font-weight: 600;
	}

</style>
<title>[Back Office] </title>

<div class="left side-menu" style="background-color: #2f79b1">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left" >
            <a href="<?php echo base_url('PackageCMS') ?>" class="logo">
                <span>
                    <img src="<?php echo base_url('HTML/images/logo-header.png') ?>" alt="" width="90%" >
                </span>
                <i>
                    <img src="<?php echo base_url('HTML/images/logo-header.png') ?>" alt="" width="90%" >
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">          
			<h5 style="color: #FFFFFF;text-align: center">Welcome</h5>			
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                

                <li> <p style="background-color:  #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Palmthien Pool Villa Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/Category_Palmthien')?>">
                        <i class="fa fa-home"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Category</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('PackageCMS/Room_Palmthien')?>">
                        <i class="fa fa-home"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Room</span>
                    </a>
                </li>
                <li>
                    <?php 
                    $listindex = $this->Package_model->listindex('1');
                    $numlistindex = $listindex->num_rows();
                    foreach ($listindex->result() AS $listindex2){}
                    if($numlistindex>0){
                    ?>
                    
                    <a href="<?php echo base_url('PackageCMS/index_add/').'1'.'/'.$listindex2->id?>">
                    <?php }else{?>
                      <a href="<?php echo base_url('PackageCMS/index_add/1')?>">  
                    <?php }?>
                        <i class="fa fa-home"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>index</span>
                    </a>
                </li>
                <li> <p style="background-color:  #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Andathien Pool Villa Managing</strong> </p>
                    <!--</a>-->
                </li>  
                <li>
                    <?php 
                    $roomanda = $this->Package_model->listroom_anda();
                    $numroom = $roomanda->num_rows();
                    foreach ($roomanda->result() AS $roomanda2){}
                    if($numroom>0){
                    ?>
                    
                    <a href="<?php echo base_url('PackageCMS/roomAdd_Anda/').$roomanda2->id?>">
                    <?php }else{?>
                      <a href="<?php echo base_url('PackageCMS/roomAdd_Anda')?>">  
                    <?php }?>
                        <i class="fa fa-home"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Room</span>
                    </a>
                </li>
                <li>
                    <?php 
                    $listindexx = $this->Package_model->listindex('2');
                    $numlistindexx = $listindexx->num_rows();
                    foreach ($listindexx->result() AS $listindexx2){}
                    if($numlistindexx>0){
                    ?>
                    
                    <a href="<?php echo base_url('PackageCMS/index_add/').'2'.'/'.$listindexx2->id?>">
                    <?php }else{?>
                      <a href="<?php echo base_url('PackageCMS/index_add/2')?>">  
                    <?php }?>
                        <i class="fa fa-home"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>index</span>
                    </a>
                </li>
                <li> <p style="background-color: #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Palmthien Pool Villa Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/included')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Package Feature</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('PackageCMS/packagelist')?>">
                        <i class="fi-folder"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Package Tour</span>
                    </a>
                </li> 
                
                <li> <p style="background-color: #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Gallery</strong> </p>
                    <!--</a>-->
                </li>    
                 <li>
                        <a href="javascript: void(0);"><i class="fa fa-picture-o"></i><span>Palmthien Pool Villa</span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                           <li><a href="<?php echo base_url('PackageCMS/Category_PalmthienGallery')?>">Category</a></li>  
                           <li><a href="<?php echo base_url('PackageCMS/GalleryList')?>">Gallery</a></li> 
                            </ul>
                </li> 
                 <li>
                        <a href="javascript: void(0);"><i class="fa fa-picture-o"></i><span>Andathien Pool Villa</span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                           <li><a href="<?php echo base_url('PackageCMS/Category_AndathienGallery')?>">Category</a></li>  
                           <li><a href="<?php echo base_url('PackageCMS/GalleryListAnda')?>">Gallery</a></li> 
                            </ul>
                </li> 
                 
                 <li> <p style="background-color: #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Slide Managing</strong> </p>
                    <!--</a>-->
                </li> 
                <li>
                    <a href="<?php echo base_url('PackageCMS/slide')?>">
                        <i class="fa fa-picture-o"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Slide</span>
                    </a>
                </li> 
                   <li> <p style="background-color: #5a5a5a; font-size: 15px; line-height: 2.6; padding-left: 20px; margin-bottom: 0px; color: #FFFFFF;"> <strong>Admin Managing</strong> </p>
                    <!--</a>-->
                </li>
               
		  <li>
                    <a href="javascript:void(0);" onClick="cangePassForm()">
                        <i class="fa fa-desktop"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Change Password</span>
                    </a>
                </li>  
                <li>
                    <a href="<?php echo base_url('Logout')?>">
                        <i class="fa fa-desktop"></i><span class="badge badge-danger badge-pill pull-right" style="background-color: #F9BC0B;"></span> <span>Log out</span>
                    </a>
                </li>  		  
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<script>
			function cangePassForm(){
				$.post('<?php echo base_url('PackageCMS/cangePassForm')?>' , { }, function(data){
						$('#myModal .modal-body').empty();
						$('#myModalLabel').text('เปลี่ยนรหัสผ่าน');
						$('.bodyA').html(data);
						$('#myModal').modal('show');	
				})
			}
			//-----------------------newpass cnewpass
			function DoChangePass(){
				var newpass = $('#newpass').val();
				var cnewpass = $('#cnewpass').val();
                                var id = <?php echo $user_type = $this->session->userdata('user_id')?>;
				if(newpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณาใส่รหัสผ่านใหม่</span>');
					return false;
				}else if(cnewpass==''){
					$('#ShowError').html('<span class="text-danger">กรุณายืนยันรหัสผ่านใหม่</span>');
					return false;	
				}else if(newpass!=cnewpass){
					$('#ShowError').html('<span class="text-danger">รหัสผ่านและยืนยันรหัสผ่านต้องตรงกัน</span>');
					return false;	
				}else{
					$('#ShowError').empty();
					$.post('<?php echo base_url('PackageCMS/doChangePass')?>', { newpass : newpass,id : id  }, function(data){
						if(data==1){
							alert('The password has been changed.');
							$('#myModal').modal('hide');	
						}else{
							$('#ShowError').html('<span class="text-danger">Error Can not change password.</span>');
						}
					})
				}
			}
		</script>

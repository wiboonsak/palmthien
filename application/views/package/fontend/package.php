	<style>
    
    .isDisabled {
  pointer-events: none;
  cursor: not-allowed !important;
  opacity: 0.5;
  text-decoration: none;
}
</style>
    <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>PACKAGE TOURS</h2>
                        <p>Palmthien Pool Villa, Aonang</p>
                    </div>
                </div>
            </div>
        </section>
    <!-- END / SUB BANNER -->

	
	<!-- PACKAGE TOURS -->
    <section class="section-news" style="background-color: #efefef !important">
        <div class="container">
            <div class="content">
                <div class="row mt50">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb40 text-center">
                            <h2>Krabi Most Popular Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                                                                                                    <?php
  $limit =''; $notUse ='';                            
$countAll=$this->Fontend_model->getpackageDetail1($limit,$notUse,'-100','-100');

        $countRow = $countAll->num_rows(); 
        $totalRow = ceil($countRow/$perpage);
foreach ($packageDetail->result() AS $data) {
    ?>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="<?php echo base_url('uploadfile/package_img/').$data->img?>" alt="">
                            </div>
                            <div class="info">
                                <p class="date f14">
                                    <?php $packageinclude = $this->Fontend_model->Listpackageinclude($data->id);
                                                    foreach ($packageinclude->result() AS $packageinclude2){?>
                                    <i class="<?php echo $packageinclude2->icon_class?>" aria-hidden="true"></i> <?php echo $packageinclude2->include_name_en?>  
                                                    <?php }?>
								</p>
                                <a class="title font-monserat f14 mb20 block bold upper" href="<?php echo base_url('Package/packagedetail/').$data->id?>"><?php echo $data->package_name_en?></a>
                                <a class="more block f13" href="<?php echo base_url('Package/packagedetail/').$data->id?>">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    
<?php }?>  
					 
                    
                   
                </div>
				<?php 
                                                    $page2 =$page-1; 
                                                    $page3 =$page+1; 
                                                    
                                                    ?>
                 <!-- PAGE NAVIGATION   -->
                        <ul class="page-navigation text-center" style="padding-bottom: 25px">
                            <li class="first <?php if($page == 1){echo 'isDisabled';}?>"><a href="<?php echo base_url('Package/Page/').$page2?>"><i class="fa fa-arrow-left"></i></a></li>
                             <?php for($i=1;$i<=$totalRow;$i++){ ?>
                            <li class=" <?php if($page == $i){ echo 'current-page'; }?>"><a href="<?php echo base_url('Package/Page/').$i?> "><?php echo $i?></a></li>
                            <?php }?> 
                            <li class="last <?php if($totalRow == 1){echo 'isDisabled';}?>"><a href="<?php echo base_url('Package/Page/').$page3?>"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                 <!-- END / PAGE NAVIGATION   -->
            </div>
        </div>
    </section>
    <!-- PACKAGE TOURS -->

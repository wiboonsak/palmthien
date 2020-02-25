
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
	
	  <!-- BLOG -->
        <section class="section-blog bg-white">
            <div class="container">
                <div class="blog">
                    <div class="row">
                        <h1 class="element-invisible">Blog</h1>
                        <div class="col-md-8 col-md-push-4">
                            <div class="blog-content">
<?php
foreach ($packDetail->result() AS $Data){}

?>
                                <!-- POST ITEM -->
                                <article class="post">
                                    <div class="entry-media">
                                        <div class="post-slider owl-single">
                                            <?php foreach ($imagesList->result() AS $imagesList2){?>
                                            <img src="<?php echo base_url('uploadfile/package_img/').$imagesList2->images_name?>" alt="">
                                            <?php }?>
                                        </div>
                                    </div>
                                    
                                    <div class="entry-header" style="padding-left: 0px !important">
                                        <h2 class="entry-title"><a href="#"><?php echo $Data->package_name_en?></a></h2>
                                    </div>

                                    <div class="entry-content" style="padding-left: 0px !important">
                                        <?php echo $Data->package_detail?>
								
                                    </div>
							
									<p class="pb30 pt30">							
										<a href="#" class="awe-btn awe-btn-default">Price per Adult <?php echo number_format($Data->package_priceadult)?> Baht.</a>  <a href="#" class="awe-btn awe-btn-default">Price per Child <?php echo number_format($Data->package_pricechild)?> Baht.</a>
									</p>
                                   

                                </article>
                                <!-- END / POST ITEM -->

                            </div>
                        </div> 

                        <div class="col-md-4 col-md-pull-8">
                            <div class="sidebar">
                              
                                <!-- WIDGET RECENT POST HAS THUMBNAIL -->
                                <div class="widget widget_recent_entries has_thumbnail">        
                                    <h4 class="widget-title">PACKAGE TOURS</h4>
                                    <ul>
                                        <?php 
                                        foreach ($packDetailnotID->result() AS $packDetailnotID2){
                                        ?>
                                        <li>
                                            <div class="img">
                                                <a href="<?php echo base_url('Package/packagedetail/').$packDetailnotID2->id?>"><img src="<?php echo base_url('uploadfile/package_img/').$packDetailnotID2->img?>" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="<?php echo base_url('Package/packagedetail/').$packDetailnotID2->id?>"><?php echo $packDetailnotID2->package_name_en?></a>
                                            </div>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <!-- END / WIDGET RECENT POST HAS THUMBNAIL -->

                                <!-- TAG -->
                                <div class="widget widget_tag_cloud">
                                    <h4 class="widget-title">Tags</h4>
                                    <div class="tagcloud">
                                        <a href="#">Package</a>
                                        <a href="#">Tour</a>
                                        <a href="#">Travel</a>
                                        <a href="#">Krabi</a>
                                        <a href="#">Aonang</a>
                                        <a href="#">Thailand</a>
                                    </div>
                                </div>
                                <!-- END / TAG -->
                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

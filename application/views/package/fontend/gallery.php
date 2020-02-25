
	 <!-- GALLERY -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>GALLERY</h2>
                        <p><?php if($type=='1'){?>Plamthien Pool Villa, Aonang <?php }else{?>Andathien Pool Villa, Aonang <?php }?></p>
                    </div>
                </div>
            </div>
        </section>
     <!-- END / SUB BANNER -->
	
	
	 <!-- GALLERY -->
        <section class="section_page-gallery">
            <div class="container">
                <div class="gallery">
                    <h1 class="element-invisible">Gallery</h1>
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">SHOW ALL</a></li>
                            <?php  foreach ($categalleryData->result() AS $categalleryData2){?>
                            <li><a href="#" data-filter=".<?php echo $categalleryData2->id?>"><?php echo $categalleryData2->category_title?></a></li>
                            <?php }?>
<!--                            <li><a href="#" data-filter=".atmosphere">ATMOSPHERE</a></li>
                            <li><a href="#" data-filter=".room">ROOM</a></li>
                            <li><a href="#" data-filter=".landmark">LANDMARK</a></li>-->
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        
                        <div class="row">
                            <div class="gallery-isotope col-4">
                                
                                <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->
								
								<!-- ITEM -->
                             <?php foreach ($Imggallery->result() AS $Imggallery2){?>
                                <div class="item-isotope <?php echo $Imggallery2->categallery_id?>">
                                    <div class="gallery_item">
                                        <a href="<?php echo base_url('uploadfile/gallery/').$Imggallery2->images_name?>" class="mfp-image">
                                            <img src="<?php echo base_url('uploadfile/gallery/').$Imggallery2->images_name?>" alt="">
                                        </a>
                                        <h6 class="text"><?php if($type=='1'){?>Plamthien Pool Villa, Aonang Krabi<?php }else{?>Andathien Pool Villa, Aonang Krabi<?php }?></h6>
                                    </div>
                                </div>
                                <!-- END / ITEM -->			
                             <?php }?>

                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>       
        </section>
        <!-- END / GALLERY -->

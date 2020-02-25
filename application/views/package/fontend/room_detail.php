
    <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2 style="text-transform: uppercase">ROOMS</h2>
                        <p>Palmthien Pool Villa, Aonang</p>
                    </div>
                </div>
            </div>
        </section>
    <!-- END / SUB BANNER -->
	
	<!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">
                <?php foreach ($roompalmData->result() AS $Data){}
        foreach ($category->result() AS $category2 ){}
                ?>
                <!-- DETAIL -->
                <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-9">
                            <div id="rg-gallery" class="rg-gallery" style="padding-top: 10px;">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul >
                                                                     <?php foreach ($imglist->result() AS $imglist2){?>
									<li><a href="#"><img src="<?php echo base_url('uploadfile/room_img/').$imglist2->images_name?>" data-large="<?php echo base_url('uploadfile/room_img/').$imglist2->images_name?>" alt="" /></a></li>
                                <?php }?>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->

                        </div>

                        <div class="col-lg-3">

                            <!-- FORM BOOK -->
                            <div class="room-detail_book">

                                <div class="room-detail_total" style="padding: 20px 10px;">   
                                    <h5 style="text-transform: uppercase; font-weight: 600"><?php echo $category2->category_title ?></h5>
                                </div>
                                
                                <div class="room-detail_form" style="padding-top: 10px">
                                    <div class="row">
                                            <div >
                                                <h6>SPECIAL ROOM</h6>
                                                <div style="margin: 0px 20px 10px;"><?php echo $Data->SPECIAL_ROOM ?></div>
                                            </div>
                                            <div>
                                                <h6>SERVICE ROOM</h6>
                                                <div style="margin: 0px 20px 10px;"><?php echo $Data->SERVICE_ROOM ?></div>
                                            </div>
                                        </div>
                                    <a href="https://www.expedia.com.sg/Krabi-Hotels-Palmthien-Pool-Villa-Aonang.h38437270.Hotel-Information?" target="_blank"><button class="awe-btn awe-btn-13">Book Now</button></a>
                                </div>

                            </div>
                            <!-- END / FORM BOOK -->

                        </div>
                    </div>
                </div>
                <!-- END / DETAIL -->
                
                <!-- COMPARE ACCOMMODATION -->
                <div class="room-detail_compare">
                    <h2 class="room-compare_title">OTHER ROOM TYPE</h2>

                    <div class="room-compare_content">
                        
                        <div class="row">
                            <!-- ITEM -->
                            <?php
                                            foreach ($roompalmDatanotid->result() AS $roompalmDatanotid2){
                                                $categoryy = $this->Package_model->list_cateData($roompalmDatanotid2->category_id);
        foreach ($categoryy->result() AS $category3 ){}
                                                $imglistt = $this->Fontend_model->loadImgroom($roompalmDatanotid2->id);
        foreach ($imglistt->result() AS $imglist3 ){}
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="<?php echo base_url('Palmthien/Roomdetail/').$roompalmDatanotid2->category_id?>"><img src="<?php echo base_url('uploadfile/room_img/').$imglist3->images_name?>" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2><a href="<?php echo base_url('Palmthien/Roomdetail/').$roompalmDatanotid2->category_id?>"><?php echo substr_replace($category3->category_title,'....',15) ?></a></h2>
                                
                                        <?php echo $roompalmDatanotid2->FACILITIES?>
                                
                                        <a href="<?php echo base_url('Palmthien/Roomdetail/').$roompalmDatanotid2->category_id?>" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            <!-- END / ITEM -->
                                            <?php }?>
                           
                        </div>

                    </div>
                </div>
                <!-- END / COMPARE ACCOMMODATION -->

            </div>
        </section>
        <!-- END / SHOP DETAIL -->
	

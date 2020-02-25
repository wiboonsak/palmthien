	
    <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>WELCOME</h2>
                        <p>Andathien Pool Villa, Aonang</p>
                    </div>
                </div>
            </div>
        </section>
    <!-- END / SUB BANNER -->
	
	<!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">
                
                <!-- DETAIL -->
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
                                                                     <?php
                                foreach ($roomandaData->result() AS $roomandaData2){}
                                $loadroomImg = $this->Fontend_model->loadroomandaImg($roomandaData2->id);
                                foreach ($loadroomImg->result() AS $loadroomImg2){
                                ?>
									<li><a href="#"><img src="<?php echo base_url('uploadfile/roomanda_img/').$loadroomImg2->images_name?>" data-large="<?php echo base_url('uploadfile/roomanda_img/').$loadroomImg2->images_name?>" alt="" /></a></li>
                                <?php }?>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
                <!-- END / DETAIL -->
                
				<!-- TAB -->
                <div class="room-detail_tab">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="room-detail_tab-header">
                                <li class="active"><a href="#overview" data-toggle="tab">WELCOME</a></li>
                                <li><a href="#LOCATION" data-toggle="tab">LOCATION</a></li>
                                <li><a href="#FAMILY" data-toggle="tab">FAMILY VILLA</a></li>
                                <li><a href="#BUNGALOWS" data-toggle="tab">BUNGALOWS & CHALET</a></li>
				<li><a href="#booking" data-toggle="tab">BOOKING</a></li>
                            </ul>
                        </div>
                                        
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade active in" id="overview">

                                    <div class="room-detail_overview">
                                       <?php echo $roomandaData2->OVERVIEW?>
                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- ROOMS -->
                                <div class="tab-pane fade in" id="LOCATION">
                                   <?php echo $roomandaData2->LOCATION?>
                                </div>
                                <!-- END / ROOMS -->


                                <!-- ACCOMMODATION -->
                                <div class="tab-pane fade" id="FAMILY">

                                 <?php echo $roomandaData2->FAMILY_VILLA?>

                                </div>
                                <div class="tab-pane fade" id="BUNGALOWS">

                                 <?php echo $roomandaData2->BUNGALOWS?>

                                </div>
                                <!-- END / ACCOMMODATION -->

								<!-- BOOKING -->
                                <div class="tab-pane fade" id="booking">
                                 <?php echo $roomandaData2->BOOKING?>
                                </div>
                                <!-- END / BOOKING -->
                            </div>
							
							
                        </div>

                    </div>
					
					<div style="width: 100%; text-align: center; ">
						<p class="pb30 pt30">	
							
							<button class="awe-btn awe-btn-13" style="padding: 10px; font-size: 12pt;" ><?php echo $roomandaData2->Price?></button>
							<br>
							<span style="font-size: 9pt; color: darkred">*Price depends on the season.</span>
						</p>
						
					</div>

                </div>
                <!-- END / TAB -->



            </div>
        </section>
        <!-- END / SHOP DETAIL -->
	

   
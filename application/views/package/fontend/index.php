
    <!-- BANNER SLIDER -->
    <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <?php 
                foreach ($slidedata->result() AS $slidedata2){
                ?>
                <li data-transition="fade">
                    <img src="<?php echo base_url('uploadfile/').$slidedata2->img_name?>" data-bgposition="center center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300"
                         data-easing="easeOutBack">
                        <img src="<?php echo base_url('HTML/images/icon-slider-1.png')?>" alt="">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                       <?php echo $slidedata2->text1?>
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">
                        <?php echo $slidedata2->text2?>
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200"><?php echo $slidedata2->text3?>
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img
                            src="<?php echo base_url('HTML/images/icon-slider-2.png')?>" alt=""></div>

                </li>
                <?php }?>
            </ul>
        </div>

    </section>
    <!-- END / BANNER SLIDER -->

    <!-- ACCOMMODATIONS -->
    <section class="ot-accomd-modations">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading pt20 pb30 text-center row-20">
                            <h2 class="mb15">PALMTHIEN POOL VILLA & ANDATHIEN POOL VILLA, AONANG</h2>
                            <p class="sub">
                                Our Resort have 2 branch in Krabi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="ot-accomd-modations-content owl-single"
                             data-single_item="false"
                             data-desktop="1"
                             data-small_desktop="1"
                             data-tablet="2"
                             data-mobile="1"
                             data-nav="false"
                             data-pagination="false">
                            <div class="row">
                                <?php foreach ($indexdata->result() AS $indexdata2){?>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="item room-item-style-2 mb30 text-center">
                                        <div class="outer">
                                            <a href="#"><img class="img-responsive img-full" src="<?php echo base_url('uploadfile/').$indexdata2->img?>" alt="<?php echo $indexdata2->text1?>"></a>
                                            <div class="bgr pt20 pb20">
                                                <div class="details">
                                                    <h3 class="title upper"><a href="<?php if($indexdata2->type == '1'){?><?php echo base_url('Palmthien')?><?php }else{?><?php echo base_url('Andathien')?><?php }?>"><?php echo $indexdata2->text1?></a></h3>
                                                    <p class="price upper font-monserat f16 bold mb0 c-main">
                                                        <?php echo $indexdata2->text2?>
                                                    </p>
                                                    <div class="info">
                                                        <p class="mt20 mb40">Call. <?php echo $indexdata2->phone?></p>
                                                        <a class="awe-btn awe-btn-12 btn-medium font-hind bold f12"
                                                           href="<?php if($indexdata2->type == '1'){?><?php echo base_url('Palmthien')?><?php }else{?><?php echo base_url('Andathien')?><?php }?>">Click here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / ACCOMMODATIONS -->
   

    <!-- PACKAGE TOURS -->
    <section class="section-news" style="background-color: #efefef !important">
        <div class="container">
            <div class="content">
                <div class="row mt50">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb40 text-center">
                            <h2>Package Tours</h2>
							<p>Krabi Most Popular Tours</p>
                        </div>
                    </div>
                </div>
				
				<div class="row">
                                    <?php foreach ($getpackageDetail->result() AS $getpackageDetail2){?>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="<?php echo base_url('uploadfile/package_img/').$getpackageDetail2->img?>" alt="">
                            </div>
                            <div class="info">
                                <p class="date f14">
                                    <?php $packageinclude = $this->Fontend_model->Listpackageinclude($getpackageDetail2->id);
                                                    foreach ($packageinclude->result() AS $packageinclude2){?>
                                    <i class="<?php echo $packageinclude2->icon_class?>" aria-hidden="true"></i> <?php echo $packageinclude2->include_name_en?>  
                                                    <?php }?>
								</p>
                                <a class="title font-monserat f14 mb20 block bold upper" href="<?php echo base_url('Package/packagedetail/').$packageinclude2->id?>"><?php echo $getpackageDetail2->package_name_en?></a>
                                <a class="more block f13" href="<?php echo base_url('Package/packagedetail/').$packageinclude2->id?>">[Read more]</a>
                            </div>
                        </div>
                    </div>
                                    <?php }?>
                </div>

				
                <div class="text-center">
                    <a href="<?php echo base_url('Package')?>"
                       class="awe-btn btn-medium font-hind bold f12 awe-btn-default mt15 awe-btn-default mt15 f13">View more</a>
					<br><br><br>
                </div>
            </div>
        </div>
    </section>
    <!-- PACKAGE TOURS -->


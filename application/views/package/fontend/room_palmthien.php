
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>WELCOME</h2>
                        <p>Palmthien Pool Villa, Aonang</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">

                <div class="room-wrap-1">
                    <div class="row">
                         <?php $n = 1; 

    foreach ($roompalmData->result() AS $Data) {
        $category = $this->Package_model->list_cateData($Data->category_id);
        foreach ($category->result() AS $category2 ){}
        $imglist = $this->Fontend_model->loadImgroom($Data->id);
        foreach ($imglist->result() AS $imglist2 ){}
        ?>
                        <!-- ITEM -->
                        <div class="col-md-6">
                            <div class="room_item-1">
                            
                                <h5><a href="<?php echo base_url('Palmthien/Roomdetail/').$Data->category_id;?>" style="font-weight: 600"><?php echo $category2->category_title ?></a></h5>
                            
                                <div class="img">
                                    <a href="<?php echo base_url('Palmthien/Roomdetail/').$Data->category_id;?>"><img src="<?php echo base_url('uploadfile/room_img/').$imglist2->images_name?>" alt=""></a>
                                </div>
                            
                                <div class="desc">
                                    <p><strong>ROOM FACILITIES:</strong></p>
                                    <?php echo $Data->FACILITIES?>
                                </div>
                            
                                <div class="bot">
                                   <!-- <span class="price">Starting <span class="amout">$260</span> /days</span>-->
                                    <a href="<?php echo base_url('Palmthien/Roomdetail/').$Data->category_id;?>" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                                </div>
                            
                            </div>
                        </div>
                        <!-- END / ITEM -->
    <?php }?>
                      
                        

                    </div>
                </div>
                
            </div>
        </section>
        <!-- END / ROOM -->
  
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
                       <h4>List Promotion</h4>
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

            <div class="card-box">									<div id="showData">
                            <div class="pull-right">
                                <button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('PackageCMS/promotionAdd') ?>'"><i class="fa fa-plus"></i> Add Promotion</button>
                            </div>
                            <table id="table2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="text-align:center;">Promotion name</th>
                                        <th style="text-align:center;">Show on web</th>
                                        <th style="text-align:center;">Show index</th>
                                        <th style="text-align:center;" width="100">Edit</th>
                                        <th style="text-align:center;" width="100">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
 <?php $n = 1; 
  $PromotionData =$this->Package_model->list_PromotionData();
    foreach ($PromotionData->result() AS $Data) {?>	
                                        <tr id="row<?php echo $Data->id ?>">
                                            <th scope="row"><?php echo $n ?></th>
                                            <td><?php echo $Data->topic ?></td>
                                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $Data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $Data->id ?>', this.value, 'tbl_promotion')" value="<?php echo $Data->show_onweb ?>"  <?php
                                                    if ($Data->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                                            <td align="center">
                                                <label>
                                                    <input id="chc<?php echo $Data->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_index('<?php echo $Data->id ?>', this.value, 'tbl_promotion')" value="<?php echo $Data->Show_index ?>"  <?php
                                                    if ($Data->Show_index == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="window.location.href = '<?php echo base_url('PackageCMS/promotionAdd/' . $Data->id) ?>'"><i class="icon-pencil"></i></button></td>
                                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $Data->id ?>', 'tbl_promotion')"><i class="icon-trash"></i></button></td>
                                        </tr>
                                    <?php $n++;}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
              
            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        <!--2018 © Highdmin. - Coderthemes.com-->
    </footer>

</div>
       
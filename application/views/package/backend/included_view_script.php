<?php $checkURL02 = $this->uri->segment(3);
	  $classIcon = '';	

	  if(isset($checkURL02)){		
		  $curriculumDataX = $this->Package_model->list_researchClusters($checkURL02);
		  foreach($curriculumDataX->result() as $curriculumDataY){	}		  
		  $classIcon = $curriculumDataY->icon_class;
	  }

?>
<script type="text/javascript">
    $(document).ready(function () {
	loadSeason();
        // Default Datatable
        $('#table2').DataTable({
    "order": false,
    "search" : false
});
    
    var url3 = '<?php echo $checkURL02;?>';	
	var	classIcon = '<?php echo $classIcon;?>';
		
	if((url3 !='') && (classIcon !='')){
		
		var classIcon2 = classIcon.replace(' ', '.');
		
		$('.'+classIcon2+'.icon-click').removeClass("icon-click");
		$('.'+classIcon2).addClass('select-icon');			
	}
    });
     function Add() {
        var name = $('#sname').val();
        var currentID = $('#currentID').val();
        var icon_class = $('#icon_class').val();
        if (name == '') {
            swal(
                    {
                        title: 'Please enter  name !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(icon_class == ''){ 
			    swal(
					{
						title: ' Please Select Icon!',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
        } else {
            //---------------------------------------------
            var postData = new FormData($("#includedForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addFeature') ?>',
                processData: false,
                contentType: false,
                data: postData,
                success: function (data, status) {
                    //console.log(data);
                    $('#currentID').val(data);
                    //console.log('data->' + data + '  status->' + status);
                    if (status == 'success') {
                        swal({
                            title: 'Successfully saved.',
                            //text: 'You clicked the button!',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('PackageCMS/included') ?>" ;
                        }, 2000);
                    } else {
                        swal({
                            title: 'Can not be saved.!',
                            //text: "You won't be able to revert this!",
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                    }
                }
            });
        }
    }
    //----------------------------------
   function  loadSeason() {
        $.post('<?php echo base_url('PackageCMS/loadIncluded') ?>', {}, function (data) {
            $('#showSeason').html(data);
        });
    }
     //----------------------
	function delete_data(dataID,table){  
		swal({
           title: 'Delete ?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'Delete' 
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/deleteData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'Data has been successfully deleted.',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/included')?>"; }, 2000);
				}else{
					swal({
						title: 'Can not be deleted.!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	} 
         //---------------------------------------
    function updateThis(dataID) {
        var name = $('#name' + dataID).val(); 
        if (name == '') {
            swal(
                    {
                        title: '	Please enter  name !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
        } else {
            swal({
                title: 'Edit data?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: 'Edit data'
            }).then(function () {
                $.post('<?php echo base_url('PackageCMS/updateThisinclued') ?>', {name: name, currentID: dataID}, function (data) {
                    if (data > 0) {
                        $('#name').val('');
                        swal({
                            title: 'Edit data successfully.',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        })
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('PackageCMS/included') ?>";
                        }, 2000);
                    } else {
                        swal({
                            title: 'Can not be edited!',
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'

                        })
                    }
                })
            });
        }
    }
    //////////////////////////////////////////////
        	$( ".icon-click" ).click(function() { 
		$(".select-icon").addClass("icon-click");
		$(".select-icon").removeClass("select-icon");
		$(this).removeClass("icon-click");
		var class2 = $(this).attr("class"); 
		$(this).addClass("select-icon");
		 console.log("class2...."+class2);
		
		//var class3 = 
		$("#icon_class").val(class2);
										
	}); 
       
    
</script>	
</body>
</html>

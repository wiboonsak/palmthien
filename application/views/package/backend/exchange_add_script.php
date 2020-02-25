
<script type="text/javascript">
    $(document).ready(function () {
	loadSeason();
        // Default Datatable
        $('#table2').DataTable({
    "order": false,
    "search" : false
});
    });
     function Add() {
        var csname = $('#csname').val();
        var cname = $('#cname').val();
        var Buying = $('#Buying').val();
        var Selling = $('#Selling').val();
        var currentID = $('#currentID').val();
        if (csname == '') {
            swal(
                    {
                        title: 'Please enter Currency Short!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(cname == ''){
        swal(
                    {
                        title: 'Please enter Currency Name!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(Buying == ''){
        swal(
                    {
                        title: 'Please enter Buying!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(Selling == ''){
        swal(
                    {
                        title: 'Please enter Selling!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
        } else {
            //---------------------------------------------
            var postData = new FormData($("#exchangeForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addexchange') ?>',
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
                            window.location.href = "<?php echo base_url('PackageCMS/exchange') ?>" ;
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
        $.post('<?php echo base_url('PackageCMS/loadexchange') ?>', {}, function (data) {
            $('#showSeason').html(data);
        });
    }
    //--------------------------------
    function updateOrder(dataID,FieldName,changeValue){
		var returnValue = $('#chkOrder'+dataID).val();
		console.log('returnValue:-'+returnValue)
		 if((changeValue=='')){
							swal({
								title: 'Warning !',
								text: "Please enter the numbers in order.",
								type: 'warning',
								confirmButtonClass: 'btn btn-confirm mt-2'
							}) 
			 $('#order'+dataID).val(returnValue);
			 return false;   
		}else{
			$.post('<?php echo base_url('PackageCMS/updateOrderexchange')?>',{ dataID:dataID , FieldName:FieldName , changeValue:changeValue }
				  ,function(data){ 
						if(data==1){
										swal({
                        title: 'Data saved successfully',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });	
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/exchange')?>"; }, 2000);
				
						}else{
							 swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
						}
			   })
		}
                }
     //----------------------
	function delete_data(dataID,table){  
		swal({
           title: 'Want to delete this data ?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'Delete Data' 
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/deleteData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'Deleted Successfully',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/exchange')?>"; }, 2000);
                
				}else{
					swal({
						title: "Data can't be deleted. !",
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
          var csname = $('#csname'+dataID).val();
        var cname = $('#cname'+dataID).val();
        var buy = $('#buy'+dataID).val();
        var sell = $('#sell'+dataID).val();
        if (csname == '') {
            swal(
                    {
                        title: 'Please enter Currency Short!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(cname == ''){
        swal(
                    {
                        title: 'Please enter Currency Name!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(buy == ''){
        swal(
                    {
                        title: 'Please enter Buying!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
    }else if(sell == ''){
        swal(
                    {
                        title: 'Please enter Selling!',
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
                $.post('<?php echo base_url('PackageCMS/updateexchange') ?>', {csname: csname,cname:cname,buy:buy,sell:sell, currentID: dataID}, function (data) {
                    if (data > 0) {
                        $('#name').val('');
                        swal({
                            title: 'Edit data successfully.',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        })
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('PackageCMS/exchange') ?>";
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
    	//----------------------
	 
    function setShow_onWeb(dataID, val2, table){
        var changeCheckbox = document.querySelector('.js-check-change');
        var x = changeCheckbox.checked;
        if (val2 == '0') {
            var check = '1';
        }
        if (val2 == '1') {
            var check = '0';
        }
        $.post('<?php echo base_url('PackageCMS/set_ShowOnWeb') ?>', {dataID: dataID, check: check, table: table}, function (data) {
            if (data == 1) {
                $('#ch' + dataID).val(check);
                swal({
                    title: 'Edit data successfully.',
                    //text: 'You clicked the button!',
                    type: 'success',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            } else {
                swal({
                    title: 'Can not be edited.!',
                    //text: "You won't be able to revert this!",
                    type: 'warning',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                });
            }
        });
    }
       
    
</script>	
</body>
</html>

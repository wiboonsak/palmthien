
<script type="text/javascript">
    $(document).ready(function () {
        // Default Datatable
        $('#table2').DataTable(

);
    });
     //----------------------
	function delete_data(dataID,table){  
		swal({
           title: 'Delete?',
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
                        title: 'Data was deleted successfully.',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/Room_Palmthien')?>"; }, 2000);
				}else{
					swal({
						title: 'Cannot delete data!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	}
          //----------------------
    function setShow_onWeb(dataID, val2, table) {
        var changeCheckbox = document.querySelector('.js-check-change');
        var x = changeCheckbox.checked;
        if (val2 == '0') {
            var check = '1';
        }
        if (val2 == '1') {
            var check = '0';
        }
        $.post('<?php echo base_url('PackageCMS/set_Showdatastatus') ?>', {dataID: dataID, check: check, table: table}, function (data) {
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

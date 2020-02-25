
<script type="text/javascript">
    $(document).ready(function () {
          loadImages('<?php echo $currentID ?>');

$('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });	
	
        // Default Datatable
    });
              //---------------------- txtTitle catFiles 
    function Add() {
        var OVERVIEW = $('#OVERVIEW').summernote('code');
        var LOCATION = $('#LOCATION').summernote('code');
        var FAMILY = $('#FAMILY').summernote('code');
        var BUNGALOWS = $('#BUNGALOWS').summernote('code');
        var BOOKING = $('#BOOKING').summernote('code');
        var Price = $('#Price').val();
    var currentID = $('#currentID').val();
    if(OVERVIEW == ''){
           swal(
                    {
                        title: 'Please enter OVERVIEW!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
    }else if (LOCATION == '') {
            swal(
                    {
                        title: 'Please enter LOCATION!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (FAMILY == '') {
            swal(
                    {
                        title: 'Please enter FAMILY VILLA!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (BUNGALOWS == '') {
            swal(
                    {
                        title: 'Please enter BUNGALOWS & CHALET!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (BOOKING == '') {
            swal(
                    {
                        title: 'Please enter BOOKING!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (Price == '') {
            swal(
                    {
                        title: 'Please enter Price depends on the season!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else {
            //---------------------------------------------
            var postData = new FormData($("#roomForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addroomanda') ?>',
                processData: false,
                contentType: false,
                data: postData,
                success: function (data, status) {
                    console.log(data);
                    $('#currentID').val(data);
                    console.log('data->' + data + '  status->' + status);
                    if (status == 'success') {
                        swal({
                            title: 'Successfully saved.',
                            //text: 'You clicked the button!',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                     setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/roomAdd_Anda/')?>"+data; }, 2000);
        } else {
                        swal({
                            title: 'can not be saved.!',
                            //text: "You won't be able to revert this!",
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                    }
    }
            });
       }

   }
    //--------------------------------------------------
    $(".fileupload-exists").click(function () {
        $("#upload_preview").empty();
        $("#upload_preview").addClass("fileupload-exists");
        $("#upload_new").removeClass("fileupload-exists");
        $("#img").val("");
        $("[data-provides=fileupload]").removeClass("fileupload-exists");
        $("[data-provides=fileupload]").addClass("fileupload-new");
    });
    //--------------------------------------
    function Addimg() {
        var currentID = $('#currentID2').val();
        var postData = new FormData($("#imgForm")[0]);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('PackageCMS/addimgroomanda') ?>',
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
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd_Anda/') ?>" + currentID;
                    }, 2000);
                } else {
                    swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                }
            }
        });
    }
 
    //--------------------------- 
    function  loadImages(ProID) {
        $.post('<?php echo base_url('PackageCMS/loadImgroomanda') ?>', {ProID: ProID}, function (data) {
            $('#showImage').empty();
            $('#showImage').html(data);
        });
    }
  
                 //==================================
    function updateOrder(dataID, FieldName, changeValue) {
    var currentID = $('#currentID').val();
        if ((changeValue == '')) {
            swal({
                title: 'Warning !',
                text: "Please enter a Order.",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }) 
        } else {
            $.post('<?php echo base_url('PackageCMS/updateOrderroomanda') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
             setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd_Anda/') ?>" + currentID;
                    }, 2000);
        }
    }
 
     //---------------------------------------- 
    function comfirmDelete(DataID, fileType, FileName) {
        var currentID = $('#currentID').val();
        swal({
            title: 'Delete Data ?',
            text: "Please confirm the delete !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('PackageCMS/deleteimgroomanda') ?>', {DataID: DataID, fileType: fileType, FileName: FileName}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Data has been successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd_Anda/') ?>" + currentID;
                    }, 2000);
                } else {
                    swal({
                        title: 'Error',
                        text: "Can not be deleted.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            });
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: "You have canceled the data.",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }
  
   
    

</script>	
</body>
</html>

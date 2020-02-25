
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
        var category = $('#category').val();
        var FACILITIES = $('#FACILITIES').summernote('code');
        var SPECIAL = $('#SPECIAL').summernote('code');
        var SERVICE = $('#SERVICE').summernote('code');
    var currentID = $('#currentID').val();
    if(category == '0'){
           swal(
                    {
                        title: 'Please select  Category!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
    }else if (FACILITIES == '') {
            swal(
                    {
                        title: 'Please enter ROOM FACILITIES!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (SPECIAL == '') {
            swal(
                    {
                        title: 'Please enter Soecial Room!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (SERVICE == '') {
            swal(
                    {
                        title: 'Please enter Secvice ROOM!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else {
            //---------------------------------------------
            var postData = new FormData($("#roomForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addroom') ?>',
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
                     setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/roomAdd/')?>"+data; }, 2000);
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
            url: '<?php echo base_url('PackageCMS/addimgroom') ?>',
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
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd/') ?>" + currentID;
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
        $.post('<?php echo base_url('PackageCMS/loadImgroom') ?>', {ProID: ProID}, function (data) {
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
            $.post('<?php echo base_url('PackageCMS/updateOrderroom') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
             setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd/') ?>" + currentID;
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
            $.post('<?php echo base_url('PackageCMS/deleteimgroom') ?>', {DataID: DataID, fileType: fileType, FileName: FileName}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Data has been successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/roomAdd/') ?>" + currentID;
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

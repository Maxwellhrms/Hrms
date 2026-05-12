<!-- Search Filter -->
<?php $controller->commonFilters(array(
    'fromdatefilter' => 'Y',
    'todatefilter' => 'Y',
    'requeststatus' => 'Y',
    'companyfilter' => 'Y',
    'divisionfilter' => 'Y',
    'statefilter' => 'Y',
    'branchfilter' => 'Y',
    'employeecodeFilter' => 'Y',
    'FormId' => 'employeesinfoRequest',
    'CallFunction' => 'employeesinfoRequestlist'
)); ?>
<!-- Search Filter -->
<hr>
<!-- /Page Content -->
</div>


<script>

$(document).on('click','.changeRequestStatus',function(e){
    e.preventDefault();
    var id = $(this).data('id');
    var status = $(this).data('status');
    var statusText = $(this).text().trim();
    if(
        confirm(
            'Are you sure you want to change status to '
            + statusText + ' ?'
        )
    )
    {
        $.ajax({

            url : "<?php echo base_url('employee/employeesinfoRequestinfosave'); ?>",
            type : "POST",
            dataType : "json",
            data : {
                id : id,
                status : status
            },
            beforeSend : function()
            {
                $('.changeRequestStatus').css(
                    'pointer-events',
                    'none'
                );
            },
            success : function(response)
            {
                if(response.statusCode == 200)
                {
                    alert(response.message);

                    location.reload();
                }
                else
                {
                    alert(response.errorMsg);
                }
            },
            error : function()
            {
                alert(
                    'Unable to process request'
                );
            },
            complete : function()
            {
                $('.changeRequestStatus').css(
                    'pointer-events',
                    'auto'
                );
            }
        });
    }
});

</script>
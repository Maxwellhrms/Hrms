<style>

.appraisal-item{
    border:none;
    border-radius:14px;
    overflow:hidden;
    box-shadow:0 3px 15px rgba(0,0,0,.08);
    margin-bottom:20px;
}

.question-btn{
    background:#fff;
    font-weight:600;
    font-size:16px;
}

.question-btn:not(.collapsed){
    background:#f8fafc;
    color:#0d6efd;
}

.role-accordion{
    margin-bottom:12px;
}

.employee-btn{
    background:#eef5ff;
    border-left:5px solid #0d6efd;
}

.manager-btn{
    background:#fff8ef;
    border-left:5px solid #fd7e14;
}

.hod-btn{
    background:#eefcf4;
    border-left:5px solid #198754;
}

.role-card{
    background:#fff;
    border-radius:10px;
    padding:20px;
}

.form-label{
    font-size:13px;
    font-weight:600;
    color:#495057;
}

.form-control{
    border-radius:8px;
}

.question-meta{
    font-size:12px;
}

</style>
<form id="appraisalForm" method="post">
<div class="accordion" id="mainAccordion">

<?php foreach($assigned as $key => $row){ ?>

<div class="accordion-item appraisal-item">

    <!-- Question Header -->

    <h2 class="accordion-header">

        <button class="accordion-button question-btn <?php echo ($key>0?'collapsed':''); ?>"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question_<?php echo $row['mxap_assign_id']; ?>">

            <div class="w-100 d-flex justify-content-between align-items-center">

                <div>
                    <div>
                        <?php echo ($key+1); ?>.
                        <?php echo $row['mxap_question']; ?>
                    </div>

                    <small class="question-meta text-muted">
                        Objective :
                        <?php echo $row['mxap_assign_objective']; ?>
                    </small>
                </div>

                <div>

                    <span class="badge bg-primary">
                        Weightage :
                        <?php echo $row['mxap_assign_weightage']; ?>
                    </span>

                    <span class="badge bg-success">
                        Target :
                        <?php echo $row['mxap_assign_monthlytarget']; ?>
                    </span>

                </div>

            </div>

        </button>

    </h2>

    <div id="question_<?php echo $row['mxap_assign_id']; ?>"
         class="accordion-collapse collapse <?php echo ($key==0?'show':''); ?>">

        <div class="accordion-body">

            <!-- Employee -->

            <div class="accordion role-accordion">

                <div class="accordion-item border-0">

                    <h2 class="accordion-header">

                        <button type="button" class="accordion-button employee-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#emp_<?php echo $row['mxap_assign_id']; ?>">

                            👤 Employee Assessment

                        </button>

                    </h2>

                    <div id="emp_<?php echo $row['mxap_assign_id']; ?>"
                         class="accordion-collapse collapse show">

                        <div class="accordion-body role-card">

                            <div class="row g-3">

                                <input type="hidden"
                                    name="assignid[]"
                                    value="<?php echo $row['mxap_assign_id']; ?>">

                                <div class="col-md-3">
                                    <label class="form-label">No Of Accounts</label>
                                    <input type="text"
                                        name="noofaccounts[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_emp_noofaccounts']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label"><?php if($row['mxap_type'] == 'clients') { ?>Client<?php } ?> Name</label>
                                    <input type="text"
                                        name="clientname[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_emp_client_name']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Description</label>
                                    <input type="text"
                                        name="desc[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_emp_description']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Achievement</label>
                                    <input type="text"
                                        name="empachivement[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_emp_achievement']; ?>"
                                        autocomplete="off">
                                </div>
                                <?php if($row['mxap_type'] == 'clients') {?>
                                    <button type="button"
                                            class="btn btn-primary col-md-2"
                                            onclick="openDetailsModal(
                                                '<?php echo $row['mxap_assign_id']; ?>',
                                                '<?php echo $row['mxap_assign_employee_code']; ?>'
                                            )">
                                        Add Details
                                    </button>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Manager -->
            <?php if(in_array('MANAGER', $employeerole)) { ?>
            <div class="accordion role-accordion">

                <div class="accordion-item border-0">

                    <h2 class="accordion-header">

                        <button type="button" class="accordion-button collapsed manager-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#mgr_<?php echo $row['mxap_assign_id']; ?>">

                            👨‍💼 Manager Review

                        </button>

                    </h2>

                    <div id="mgr_<?php echo $row['mxap_assign_id']; ?>"
                         class="accordion-collapse collapse">

                        <div class="accordion-body role-card">

                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label class="form-label">No Of Accounts</label>
                                    <input type="text"
                                        name="managernoofaccounts[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_manager_noofaccounts']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label"><?php if($row['mxap_type'] == 'clients') { ?>Client <?php } ?> Name</label>
                                    <input type="text"
                                        name="managerclientname[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_manager_client_name']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Review</label>
                                    <input type="text"
                                        name="managerdesc[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_manager_review']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Assessment</label>
                                    <input type="text"
                                        name="managerachivement[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_manager_actual_assesment']; ?>"
                                        autocomplete="off">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <?php } ?>
            <!-- HOD -->
            <?php if(in_array('HOD', $employeerole)) { ?>
            <div class="accordion role-accordion">

                <div class="accordion-item border-0">

                    <h2 class="accordion-header">

                        <button type="button" class="accordion-button collapsed hod-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#hod_<?php echo $row['mxap_assign_id']; ?>">

                            🏢 HOD Review

                        </button>

                    </h2>

                    <div id="hod_<?php echo $row['mxap_assign_id']; ?>"
                         class="accordion-collapse collapse">

                        <div class="accordion-body role-card">

                            <div class="row g-3">

                                <div class="col-md-3">
                                    <label class="form-label">No Of Accounts</label>
                                    <input type="text"
                                        name="hodnoofaccounts[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_hod_noofaccounts']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label"><?php if($row['mxap_type'] == 'clients') { ?>Client<?php } ?> Name</label>
                                    <input type="text"
                                        name="hodclientname[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_hod_client_name']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Review</label>
                                    <input type="text"
                                        name="hoddesc[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_hod_review']; ?>"
                                        autocomplete="off">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Final Assessment</label>
                                    <input type="text"
                                        name="hodachivement[]"
                                        class="form-control"
                                        value="<?php echo $row['mxap_assign_hod_actual_assesment']; ?>"
                                        autocomplete="off">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <?php } ?>
        </div>

    </div>

</div>

<?php } ?>

</div>
<button type="button" id="saveAppraisalBtn" class="btn btn-primary" onclick="saveAppraisal()">Save Appraisal</button>
</form>

<!-- Modal -->
<div class="modal fade" id="addDetailsModal" tabindex="-1">

    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Client Details</h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="clientDetailsForm">
                    <input type="hidden" id="modal_assignid" name="modal_assignid">
                    <input type="hidden" id="modal_empcode" name="modal_empcode">
                <div id="detailsContainer">

                    <div class="row g-3 detail-row mb-3">

                        <div class="col-md-5">
                            <label>Name</label>
                            <input type="text" name="client_name[]" class="form-control">
                        </div>

                        <div class="col-md-5">
                            <label>Description</label>
                            <textarea name="client_description[]" class="form-control"></textarea>
                        </div>

                        <input type="hidden" id="modal_assignid" name="modal_assignid">
                        <input type="hidden" id="modal_empcode" name="modal_empcode">
                        <input type="hidden" id="deletedIds" name="deletedIds" value="">

                        <div class="col-md-2 d-flex align-items-end">
                            <button type="button"
                                    class="btn btn-danger removeRow">
                                Remove
                            </button>
                        </div>

                    </div>

                </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success mt-2" id="addMoreRow">+ Add More </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="saveClientDetailsBtn" onclick="saveClientDetails()">Save Details</button>
            </div>

        </div>

    </div>

</div>
<!-- Modal -->
<script>
function saveAppraisal() {

    var $btn = $("#saveAppraisalBtn");

    $.ajax({
        url: "<?php echo base_url('Employee/saveemployeekra'); ?>",
        type: "POST",
        data: $("#appraisalForm").serialize(),
        dataType: "json",

        beforeSend: function () {

            $btn.prop("disabled", true);

            $btn.html(
                '<span class="spinner-border spinner-border-sm me-2"></span>Saving...'
            );

        },

        success: function (response) {

            $btn.prop("disabled", false);
            $btn.html('Save Appraisal');

            if(response.status == 1){

                alert(response.message);

            }else{

                alert(response.message);

            }

        },

        error: function (xhr) {

            $btn.prop("disabled", false);
            $btn.html('Save Appraisal');

            alert('Something went wrong.');

            console.log(xhr.responseText);

        }

    });

}

$(document).on('click', '#addMoreRow', function(){

    var html = `
        <div class="row g-3 detail-row mb-3">

            <div class="col-md-3">
                <label>Name</label>
                <input type="text" name="client_name[]" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Email</label>
                <input type="email" name="client_email[]" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Mobile</label>
                <input type="text" name="client_mobile[]" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Description</label>
                <textarea name="client_description[]" class="form-control"></textarea>
            </div>

            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger removeRow">
                    Remove
                </button>
            </div>

        </div>
    `;

    $('#detailsContainer').append(html);

});

$(document).on('click', '.removeRow', function(){

    if($('.detail-row').length > 1){
        $(this).closest('.detail-row').remove();
    }

});

function openDetailsModal(assignid, empcode){

    $('#modal_assignid').val(assignid);
    $('#modal_empcode').val(empcode);

    $('#detailsContainer').html('');

    $.ajax({

        url : "<?php echo base_url('Employee/getClientDetails'); ?>",
        type : "POST",
        dataType : "json",

        data : {
            assignid : assignid,
            empcode  : empcode
        },

        success : function(response){

            if(response.status == 1){

                $.each(response.data,function(index,row){

                    addClientRow(
                        row.macd_id,
                        row.macd_client_name,
                        row.macd_description,
                        row.macd_client_email,
                        row.macd_client_mobile
                    );

                });

            }else{

                addClientRow('', '', '','',''); // Add an empty row if no data

            }

            var modal = new bootstrap.Modal(
                document.getElementById('addDetailsModal')
            );

            modal.show();

        }

    });

}

function addClientRow(id,name,description,email,mobile){

    var html = `
    <div class="row g-3 detail-row mb-3">

        <input type="hidden" name="detailid[]" value="${id}">
        <div class="col-md-3">
            <label>Name</label>
            <input type="text" name="client_name[]" class="form-control" value="${name}">
        </div>

        <div class="col-md-3">
            <label>Email</label>
            <input type="email" name="client_email[]" class="form-control" value="${email}">
        </div>

        <div class="col-md-2">
            <label>Mobile</label>
            <input type="text" name="client_mobile[]" class="form-control" value="${mobile}">
        </div>

        <div class="col-md-3">
            <label>Description</label>
            <textarea name="client_description[]" class="form-control">${description}</textarea>
        </div>

        <div class="col-md-1 d-flex align-items-end">
        <button type="button" class="btn btn-danger removeRow" data-id="${id}">
            Delete
        </button>

        </div>

    </div>
    `;

    $('#detailsContainer').append(html);

}


$(document).on('click', '.removeRow', function(){

    var detailid = $(this).data('id');
    var currentRow = $(this).closest('.detail-row');

    // New row not yet saved
    if(detailid == '' || detailid == undefined){

        currentRow.remove();
        return;

    }

    if(!confirm('Are you sure you want to delete this record?')){
        return;
    }

    $.ajax({

        url : "<?php echo base_url('Employee/deleteClientDetail'); ?>",
        type : "POST",
        dataType : "json",

        data : {
            detailid : detailid
        },

        success : function(response){

            if(response.status == 1){

                currentRow.remove();

                alert(response.message);

            }else{

                alert(response.message);

            }

        },

        error : function(xhr){

            console.log(xhr.responseText);

            alert('Unable to delete record.');

        }

    });

});
// $('.removeRow').click(function(){

//     var id = $(this).closest('.detail-row')
//                     .find('input[name="detailid[]"]')
//                     .val();

//     if(id){
//         $('#deletedIds').val(
//             $('#deletedIds').val() + ',' + id
//         );
//     }

//     $(this).closest('.detail-row').remove();

// });

function saveClientDetails(){

    var $btn = $("#saveClientDetailsBtn");

    $.ajax({

        url : "<?php echo base_url('Employee/saveClientDetails'); ?>",
        type : "POST",
        data : $("#clientDetailsForm").serialize(),
        dataType : "json",

        beforeSend : function(){

            $btn.prop("disabled", true);
            $btn.text("Saving...");

        },

        success : function(response){

            $btn.prop("disabled", false);
            $btn.text("Save Details");

            if(response.status == 1){

                alert(response.message);

                $('#addDetailsModal').modal('hide');

                $('#clientDetailsForm')[0].reset();

            }else{

                alert(response.message);

            }

        },

        error : function(xhr){

            $btn.prop("disabled", false);
            $btn.text("Save Details");

            console.log(xhr.responseText);

            alert("Something went wrong.");

        }

    });

}
</script>
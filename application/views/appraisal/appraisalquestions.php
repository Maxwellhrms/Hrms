								<form id="processapprisalquestions">
					<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appraisal Questions</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Appraisal Questions</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">

						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select select2" style="width: 100%" name="department" id="department" onchange="getdetails()"> 
									<option value="">Select Department</option>
							        <?php foreach ($depart as $key => $value) {
							            echo "<option value=".$value->mxdpt_id.">".$value->mxdpt_name."</option>";
							        } ?>
								</select>
								<label class="focus-label">Select Department</label>
							</div>
							<span class="formerror" id="departmenterror"></span>
						</div>

						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select select2" style="width: 100%" name="quecategory" id="quecategory" onchange="getdetails()"> 
									<option value="">Select Category</option>
									<?php foreach($catg as $ckey => $cval){ 
										echo "<option value=".$ckey." >".$cval."</option>";
									} ?>
								</select>
								<label class="focus-label">Select Category</label>
							</div>
							<span class="formerror" id="quecategoryerror"></span>
							
						</div>
   
                    </div>

					<!-- /Search Filter -->
					
					<div id="displayappersialquestions"></div>


					<section class="review-section">
<!-- 						<div class="review-header text-center">
							<h3 class="review-title">Professional Goals Achieved for last year</h3>
							<p class="text-muted">Lorem ipsum dollar</p>
						</div> -->
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered table-review review-table mb-0" id="table_goals">
										<thead>
											<tr>
												<th style="width:40px;">#</th>
												<th>Question</th>
												<th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
											</tr>
										</thead>
										<tbody id="table_goals_tbody">

										</tbody>
									</table>
									<table class="table table-bordered table-review review-table mb-0" id="displaydata">

									</table>
									<br>
									<button type="submit" class="btn btn-success">Save</button>
								</div>
							</div>
						</div>
					</section>


                </div>
								</form>
				<!-- /Page Content -->	
<script>
$(function () {
	$(document).on("click", '.btn-add-row', function () {
		var id = $(this).closest("table.table-review").attr('id');  // Id of particular table
		var div = $("<tr />");
		div.html(GetDynamicTextBox(id));
		$("#"+id+"_tbody").append(div);
	});
	$(document).on("click", "#comments_remove", function () {
		$(this).closest("tr").prev().find('td:last-child').html('<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button>');
		$(this).closest("tr").remove();
	});
	function GetDynamicTextBox(table_id) {
		$('#comments_remove').remove();
		var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0].getElementsByTagName("tr").length+1;
		return '<td>'+rowsLength+'</td>' + '<td><input type="text" name="question[]" class="form-control"></td>' + '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button></td>'
	}
});

$(document).ready(function(){


	$("form#processapprisalquestions").submit(function (e) {
    e.preventDefault();   

    var department = $("#department").val();
    if (department ==  "") {
        $("#department").focus();
        $('#departmenterror').html("Please Select Department...");
        return false;
    } else {
        $('#departmenterror').html("");
    }

    var quecategory = $("#quecategory").val();
    if (quecategory ==  "") {
        $("#quecategory").focus();
        $('#quecategoryerror').html("Please Select Category...");
        return false;
    } else {
        $('#quecategoryerror').html("");
    }
		var mainurl = baseurl + 'Performanceappraisal/savequestion';
      	var formData = new FormData(this);
    	$.ajax({
        url: mainurl,
        type: 'POST',
        data: formData,
        async:false,
        success: function (data) {
            if (data == 200) {
                alert('Successfully Created');
                setTimeout(function () {                    
                    window.location.reload();
                }, 1000);
        	}
        },
        cache: false,
        contentType: false,
        processData: false
    });

  	});
});
function getdetails(){
	var department = $("#department").val();
	var quecategory = $("#quecategory").val();
	if(department != "" && quecategory != ""){

	var mainurl ='<?php echo base_url() ?>Performanceappraisal/filterappraisalquestion';
	$.ajax({
	    url: mainurl,
	    type: 'POST',
	    data: {department : department, quecategory : quecategory},
	    success: function (data) {
	        $('#displaydata').html(data);
	    },
	});

	}else{
		return false;
	}
}

function deleteque(id){
	var result = confirm("Want to delete?");
	if (result) {
		var mainurl ='<?php echo base_url() ?>Performanceappraisal/updateappraisalquestion';
		$.ajax({
		    url: mainurl,
		    type: 'POST',
		    data: {id : id},
		    success: function (data) {
	            alert('Successfully Deleted');
	            setTimeout(function () {                    
	                window.location.reload();
	            }, 1000);
		    },
		});
	}
}
</script>
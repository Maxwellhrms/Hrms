			<form id="processapprisalquestions">
					<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Assign Appraisal Questions</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Assign Appraisal Questions</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">

						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select select2" style="width: 100%" name="quecategory" id="quecategory" onchange="getquestiondetails();getemp();"> 
									<option value="">Select Category</option>
									<?php foreach($catg as $ckey => $cval){ 
										echo "<option value=".$ckey." >".$cval."</option>";
									} ?>
								</select>
								<label class="focus-label">Select Category</label>
							</div>
							<span class="formerror" id="quecategoryerror"></span>
							
						</div>

						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select select2" style="width: 100%" name="department" id="department" onchange="getquestiondetails();getemp();"> 
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
								<select class="select select2 displayoptions" style="width: 100%" name="employees" id="employees" onchange="getquestiondetails();"> 
								</select>
								<label class="focus-label">Select Employees</label>
							</div>
							<span class="formerror" id="employeeserror"></span>
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
									<table class="table table-bordered table-review review-table mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Question</th>
												<th>Objective</th>
												<th>Assign&nbspQuestion</th>
												<th>Unit&nbspOf&nbspMeasure</th>
												<th>Weightage Marks %</th>
												<?php 
										            $start = $month = strtotime(date('Y').'-04-01');
										            $end = strtotime((date('Y')+1).'-04-01');
										            while($month < $end)
										            {
										           	 $yearmonth = date('M Y', $month);
									                echo "<th>Monthly&nbspTargets <span style='color:red'>$yearmonth</span></th>";
									                 $month = strtotime("+1 month", $month);
										            }
												?>
												<!-- <th>Accounts Target</th> -->
												<!-- <th style="width: 64px;">Status</th> -->
											</tr>
										</thead>
										<tbody id="displaydata">

										</tbody>
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
$(document).ready(function(){


	$("form#processapprisalquestions").submit(function (e) {
    e.preventDefault();   
    var quecategory = $("#quecategory").val();
    if (quecategory ==  "") {
        $("#quecategory").focus();
        $('#quecategoryerror').html("Please Select Category...");
        return false;
    } else {
        $('#quecategoryerror').html("");
    }

    var department = $("#department").val();
    if (department ==  "") {
        $("#department").focus();
        $('#departmenterror').html("Please Select Department...");
        return false;
    } else {
        $('#departmenterror').html("");
    }

    var employees = $("#employees").val();
    if (employees ==  "") {
        $("#employees").focus();
        $('#employeeserror').html("Please Select Employees...");
        return false;
    } else {
        $('#employeeserror').html("");
    }

    
		var mainurl = baseurl + 'Performanceappraisal/saveassignedquestion';
      	var formData = new FormData(this);
    	$.ajax({
        url: mainurl,
        type: 'POST',
        data: formData,
        async:false,
        success: function (data) {
            if (data == 200) {
                alert('Successfully Please Reload By Your Self (OR) If Want Update You Can Now Only');
        	}
        },
        cache: false,
        contentType: false,
        processData: false
    });

  	});
});
function getquestiondetails(){
	var department = $("#department").val();
	var quecategory = $("#quecategory").val();
	var employees = $("#employees").val();
	if(employees == "" || employees == null){
		return false;
	}
	if(department != "" && quecategory != ""){

	var mainurl ='<?php echo base_url() ?>Performanceappraisal/filterappraisalquestion_details';
	$.ajax({
	    url: mainurl,
	    type: 'POST',
	    data: {department : department, quecategory : quecategory, employees : employees},
	    success: function (data) {
	        $('#displaydata').html(data);
	    },
	});

	}else{
		return false;
	}
}

function getemp(){
	var department = $("#department").val();
	var quecategory = $("#quecategory").val();
	if(department != "" && quecategory != ""){
		var mainurl ='<?php echo base_url() ?>Performanceappraisal/getappremployeeslist';
		$.ajax({
		    url: mainurl,
		    type: 'POST',
		    data: {department : department, quecategory : quecategory},
		    success: function (data) {
		        $('.displayoptions').html(data);
		    },
		});
	}	
}
</script>
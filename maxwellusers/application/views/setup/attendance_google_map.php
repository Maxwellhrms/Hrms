			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Geo Location Attendance</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						<div class="row">
							<div class="col-md-12">
								<div class="card mb-0">
									<div class="card-body">
									<!--action="<?php echo base_url() ?>attendance_controller/attendance_google_map"-->
										<!--<form id="googlemap"  > -->
										<!--method="get"-->
											<div class="row">
												<div class="col-md-6">
													<div class="row">
														
														
														<div class="col-md-6">
                        				                    <div class="form-group form-focus select-focus">
                        				                        <label>Attendance Date</label>
                                                            	<input type="date" class="form-control datetimepicker11" name="attendance" id="attendance" autocomplete="off" required >
                        				                        <span class="formerror" id="attendance_error"></span>
                        				                    </div>
                        				                </div>
                        				                
                        				                <div class="col-md-6">
                        				                    <div class="form-group form-focus select-focus">
                        				                        <label>Employee Code</label>
                                                            	<input type="text" class="form-control" name="employee_code" id="employee_code" autocomplete="off" >
                        				                        <span class="formerror" id="employee_code_err"></span>
                        				                    </div>
                        				                </div>

														
														
													</div>
												</div>
												<div class="col-md-6">
													<div class="row">
														
														
														
														<div class="col-sm-6">  
														    <label></label>
							                                 <button  onclick="filterattnd123()" id="searchemployeefilterdata1" class="btn btn-success btn-block" > Search </button>      
							                             </div>

    												</div>
    											</div>
											</div>  
										<!--</form>-->
									</div>
								</div>
							</div>
						</div>
						
	<div class="row" style="margin-top: 10px;">
    <div class="col-sm-12">
        <div class="card mb-0">					
            <div class="card-header">
                <h4 class="card-title mb-0"> Employees List</h4>
            </div>
            <div class="card-body">	
                <div class="table-responsive" id="employeeid">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

				</div>

			</div>
			<!-- /Page Wrapper -->


<script src="<?php echo base_url(); ?>/assets/js/formsjs/google_map.js"></script>

<script>
function filterattnd123(){
	alert("test");
	var comp_id = $("#esi_company_id").val();
    var div_id = $("#esi_div_id").val();
    var state_id = $("#esi_state_id").val();
    var branch_id = $("#esi_branch_id").val();
    var attendance = $("#attendance").val();
    var employee_code = $("#employee_code").val();
	$.ajax({
        url: baseurl + "getemployeelistforattandance_googlemap_poly",
        type: "post",
        async: false,
        data: { cmpname: comp_id, divname: div_id, cmpstate: state_id, brname: branch_id,attendance : attendance,empid : employee_code },
        success: function (data) {
            $("#employeeid").html(data);
		var table = $('#dataTables-example').DataTable({
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			buttons: ['excel','csv','pdf']
		});
		table.buttons().container()
			.appendTo('#dataTables-example_wrapper .col-sm-6:eq(0)');
        }
    });
	
	}
//$("form#googlemap").submit(function (e) {
    //e.preventDefault();
	function filterattnd(){
    
    
    }
//});
</script>
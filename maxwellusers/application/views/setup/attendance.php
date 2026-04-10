					<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Attendance</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Attendance</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="attndmonth" id="attndmonth"> 
									<option value="">Select Month</option>
									<?php 
								    	$months = date('m');
										date_default_timezone_set('Asia/Kolkata');
										for($i=1; $i<=12; $i++){ 
										    $month = date('F', mktime(0, 0, 0, $i, 10));  
										     if($i == $months ){ $sel ="selected";
                                            }else{ $sel = ""; } ?>
										    <option value="<?php echo $i ?>" <?php echo $sel; ?> ><?php echo $month; ?></option>
										<?php } ?>
								</select>
								<label class="focus-label">Select Month</label>
							</div>
							<span class="formerror" id="attndmontherror"></span>
							
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="attndyear" id="attndyear"> 
									<option value="">Select Year</option>
									<?php 
									  $currently_selected = date('Y'); 
									  $earliest_year = 2020; 
									  $latest_year = date('Y', strtotime('+1 year'));
									  foreach ( range( $latest_year, $earliest_year ) as $i ) {
									    if($i == $currently_selected ){
                                            $sel ="selected"; }else{ $sel = "";   }
                					        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
									   // echo '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
									  }
									?>
								</select>
								<label class="focus-label">Select Year</label>
							</div>
							<span class="formerror" id="attndyearerror"></span>
						</div>

						<!--<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="attndempid" id="attndempid">
								<label class="focus-label">Employee Code</label>
							</div>
						</div>-->
						<div class="col-sm-6 col-md-3">  
							<button id="searchemployeefilterdata" style=" background-color: #ffa434; "  class="btn  btn-block" onclick="filterattnd()"> Search </button>  
						</div>     
                    </div>

					<!-- /Search Filter -->
					
					<div id="displayattend"></div>
                </div>

				<!-- Attendance Modal -->
				<div class="modal custom-modal fade" id="attendance_info" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Attendance Info</h5>
								<button id="closeattand" type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div id="addmodpopup"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
<script type="text/javascript">
//------Load Division


var esi_div_array = [];
var esi_selected_div;
function load_esi_divisions(esi_comp_id, esi_selected_div) {
    $.ajax({
        url: baseurl + "admin/getdivisions_based_on_branch_master",
        type: "post",
        async: false,
        data: {'comp_id': esi_comp_id, 'type': "ESI"},
        success: function (data) {
//                    console.log("ESI DIVISIONS");
//                    console.log(data);
//                    console.log("END ESI DIVISIONS");
            esi_div_array = JSON.parse(data);
//                            console.log(states_array);

        }
    });

    var option;
//        console.log(states_array);
    if (esi_div_array.length > 0) {
        option = "<option value=0>Select Division</option>";
        for (index in esi_div_array) {
            var esi_div_array_index = esi_div_array[index];
//                console.log(esi_selected_div +'---'+ esi_div_array_index.mxd_id);
            if (esi_selected_div == esi_div_array_index.mxd_id) {
                option += "<option value=" + esi_div_array_index.mxd_id + " selected>" + esi_div_array_index.mxd_name + "</option>"
            } else {
                option += "<option value=" + esi_div_array_index.mxd_id + ">" + esi_div_array_index.mxd_name + "</option>"
            }
//                   console.log(option);
        }
    } else {
        option = "<option value=0>Select Division</option>";
    }

    $("#esi_div_id").empty().append(option);

    var option = "<option value=0>Select State</option>";
    $("#esi_state_id").empty().append(option);


    var option = "<option value=0>Select Branch</option>";
    $("#esi_branch_id").empty().append(option);
}



var esi_states_array = [];
var esi_selected_state;
function load_esi_states(esi_comp_id, esi_div_id, esi_selected_state) {
//    alert(esi_div_id);
    $.ajax({
        url: baseurl + "admin/getstates_based_on_branch_master",
        type: "post",
        async: false,
        data: {'comp_id': esi_comp_id, 'div_id': esi_div_id, 'type': "ESI"},
        success: function (data) {
//            console.log("ESI STATES");
//            console.log(data);
//            console.log("END ESI STATES");
            esi_states_array = JSON.parse(data);
//                            console.log(states_array);

        }
    });

    var option;
//        console.log(states_array);
    if (esi_states_array.length > 0) {
        option = "<option value=0>Select State</option>";
        for (index in esi_states_array) {
            var esi_states_array_index = esi_states_array[index];
//                console.log(selected_state +'---'+ states_array_index.mxst_id);
            if (esi_selected_state == esi_states_array_index.mxst_id) {
                option += "<option value=" + esi_states_array_index.mxst_id + " selected>" + esi_states_array_index.mxst_state + "</option>"
            } else {
                option += "<option value=" + esi_states_array_index.mxst_id + ">" + esi_states_array_index.mxst_state + "</option>"
            }
//                   console.log(option);
        }
    } else {
        option = "<option value=0>Select State</option>";
    }

    $("#esi_state_id").empty().append(option);
    
    var option = "<option value=0>Select Branch</option>";
    $("#esi_branch_id").empty().append(option);
}
//------End Load States
//------Load Branches

var esi_branches_array = [];
var esi_selected_branch;
function load_esi_branches(esi_comp_id, esi_div_id, esi_state_id, esi_selected_branch) {

    $.ajax({
        url: baseurl + "admin/getbranches_based_on_eligibility_state_wise",
        type: "post",
        async: false,
        data: {'comp_id': esi_comp_id, 'div_id': esi_div_id, 'state_id': esi_state_id, 'type': 'ESI'},
        success: function (data) {
//                    console.log(data);
            esi_branches_array = JSON.parse(data);

        }
    });


    var option;
    if (esi_branches_array.length > 0) {
        option = "<option value=0>Select Branch</option>";
        for (index in esi_branches_array) {
            var esi_branches_array_index = esi_branches_array[index];
            if (esi_selected_branch == esi_branches_array_index.mxb_id) {
                option += "<option value=" + esi_branches_array_index.mxb_id + " selected>" + esi_branches_array_index.mxb_name + "</option>"
            } else {
                option += "<option value=" + esi_branches_array_index.mxb_id + ">" + esi_branches_array_index.mxb_name + "</option>"
            }
//                   console.log(option);
        }
    } else {
        option = "<option value=0>Select Branch</option>";
    }

    $("#esi_branch_id").empty().append(option);
}
function filterattnd(){
	var emp = "";
	
	
		var esi_branch_id = 0;
		var esi_state_id = 0;
		var esi_div_id = 0;
		var esi_company_id = 0;
	
    var mnth = $("#attndmonth").val();
    if (mnth == 0 || mnth == "") {
        $("#attndmonth").focus();
        $('#attndmontherror').html("Please Select Month");
        return false;
    } else {
        $('#attndmontherror').html("");
    }

    var year = $("#attndyear").val();
    if (year == 0 || year == "") {
        $("#attndyear").focus();
        $('#attndyearerror').html("Please Select Year");
        return false;
    } else {
        $('#attndyearerror').html("");
    }

	var mainurl = baseurl+'getemployeeattendancehistory';
$.ajax({
    url: mainurl,
    type: 'get',
    data: {employeecode : emp, month : mnth, year : year, company:esi_company_id, divison:esi_div_id, state:esi_state_id, branch:esi_branch_id},
    success: function (data) {
        //console.log(data);
        $('#displayattend').html(data);
        var table = $('#dataTables-example').DataTable({
            dom: 'Bfrtip',
            "destroy": true, //use for reinitialize datatable
            lengthChange: false,
            buttons: [
                { extend: 'excelHtml5', footer: true },
                { extend: 'csvHtml5', footer: true },
            ],
        });
    },
});
}


</script>	

<script>

function employeeattendanceinfo(date,empid,unid){
	var mainurl = baseurl+'admin/employeeattendanceinfo';
	$.ajax({
        url: mainurl,
        type: 'POST',
        data: {attedancedate : date, empid : empid, uniqueid : unid },
        success: function (data) {
			$("#addmodpopup").html(data);
        },
    });
}

</script>

<script type="text/javascript">

function processeditattedance(){
    // 	alert(firsthalfdbval);
    // 	alert(secondhalfdbval);
		var editempdate = $("#editempdate").val();
		var editempid = $("#editempid").val();
		var editempmainid = $("#editempmainid").val();
		var Firsthalf = $("#Firsthalf").val();
		var Secondhalf = $("#Secondhalf").val();
		var reason = $("#reason").val();

        var validatingpassword = $("#validatingpassword").val();
        
        if(validatingpassword == ''){
            alert("Please Enter Your Password");
            return false;
        }
    
        var passvalidation;
        $.ajax({
            url: "<?php echo base_url() ?>Common/passwordvalidation",
            type: 'POST',
            async: false,
            data: {checkpass : validatingpassword},
            success: function (data) {
        		passvalidation = data;
            },
        });
        
        if(passvalidation != 200){
            alert('Wrong Password');
            return false;
        }
        
        if(Firsthalf == ''){
            alert('Please Select First Half');
           return false; 
        }
        
        if(Secondhalf == ''){
            alert('Please Select Second Half');
          return false;  
        }
        if((firsthalfdbval == 'CL')||(firsthalfdbval == 'EL')|| (firsthalfdbval == 'SL') ){
            Firsthalf = firsthalfdbval;
        }
        if((secondhalfdbval == 'CL')||(secondhalfdbval == 'EL')|| (secondhalfdbval == 'SL') ){
            Secondhalf = secondhalfdbval;
        }

        mainurl = baseurl+'admin/editemployeeattendance';
		var result = confirm("Want to Modify Attendance For " + editempid + " for date " + editempdate);
        if (result == true) {
            $.ajax({
                url: mainurl,
                type: 'POST',
                data: {date : editempdate, empid : editempid, uniqueid : editempmainid, firsthalf : Firsthalf, secondhalf : Secondhalf, reason : reason},
                success: function (data) {
        			//console.log(data); 
                  if (data == 200) {
                    alert('Success');
                    $('#Firsthalf').prop('selectedIndex',0);
                    $('#Secondhalf').prop('selectedIndex',0);
                 	$( "#closeattand" ).trigger( "click" );
                 	$( "#passclose" ).trigger( "click" );
                  	$( "#searchemployeefilterdata" ).trigger( "click" );
                  }else{
                    alert('Try Again Later');
                  }
                },
            });
        }
}




</script>


<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery (required by Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('#attndmonth').select2();
    $('#attndyear').select2();
});

</script>

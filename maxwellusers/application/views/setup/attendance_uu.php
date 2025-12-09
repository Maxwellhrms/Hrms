					<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				<!-- jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables core -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<!-- Buttons extension -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Attendance Under You</h3>
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
								<select class="" style="width: 100%" name="esi_company_id" id="esi_company_id"> 
                                    <option value=""> Select Company </option>
                                    <?php foreach ($cmpmaster as $key => $cmpvalue) { ?>
                                        <option value="<?php echo $cmpvalue->mxcp_id ?>"><?php echo $cmpvalue->mxcp_name ?></option>
                                    <?php } ?>
								</select>
								<label class="focus-label">Select Company</label>
							</div>
							<span class="formerror" id="cmpnameerror"></span>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="esi_div_id" id="esi_div_id" tabindex="-1" aria-hidden="true" >
								<option value="0" data-select2-id="0">Select Division</option>
								<option value="1" data-select2-id="38">LOGISTICS </option>
								<option value="2" data-select2-id="39">RELOCATION </option>
								</select>
								<label class="focus-label">Select Division</label>
							</div>
							<span class="formerror" id="attnddayerror"></span>							
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="esi_state_id" id="esi_state_id"> 
									<option value="">Select State</option>
								</select>
								<label class="focus-label">Select State</label>
							</div>
							<span class="formerror" id="esi_state_id_error"></span>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="esi_branch_id" id="esi_branch_id"> 
									<option value="">Select Branch</option>
								</select>
								<label class="focus-label">Select Branch</label>
							</div>
							<span class="formerror" id="esi_branch_id_error"></span>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="" style="width: 100%" name="attndday" id="attndday"> 
									<!--<option value="">Select Day</option>-->
									<?php 
    for($i = 1; $i <= 31; $i++) {
        $day = sprintf("%02d", $i); // Formats the number with leading zero if needed
?>
        <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
<?php 
    } 
?>
								</select>
								<label class="focus-label">Select Day</label>
							</div>
							<span class="formerror" id="attnddayerror"></span>
							
						</div>
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

						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="attndempid" id="attndempid">
								<label class="focus-label">Employee Code</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<button id="searchemployeefilterdata" style=" background-color: #ffa434; " class="btn  btn-block" onclick="filterattnd()"> Search </button>  
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
alert();
//------End Load States
//------Load Branches

var esi_branches_array = [];

function filterattnd(){
	
	var esi_branch_id = 0;
		var esi_state_id = 0;
		var esi_div_id = 0;
		var esi_company_id = 0;
		
		var emp = $("#attndempid").val();
	var esi_company_id = $("#esi_company_id").val();
	var esi_div_id = $("#esi_div_id").val();
	var esi_state_id = $("#esi_state_id").val();
	var esi_branch_id = $("#esi_branch_id").val();
	
	
	
		
	
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
	var day = $("#attndday").val();
    if (day == 0 || day == "") {
        $("#attndday").focus();
        $('#attnddayerror').html("Please Select day");
        return false;
    } else {
        $('#attnddayerror').html("");
    }

//employeecode=&month=1&year=2025&day=03&company=0&divison=0&state=0&branch=0
	var mainurl = baseurl+'getemployeeattendancehistory_uu';
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






















                
<script type="text/javascript">



//------Load Division
$("#esi_company_id").change(function () {
    var esi_comp_id = $(this).val();
    if (esi_comp_id != 0 && esi_comp_id != "") {
        load_esi_divisions(esi_comp_id, 0);
    } else {
        var option = "<option value=0>Select Division</option>";
        $("#esi_div_id").empty().append(option);

        var option = "<option value=0>Select State</option>";
        $("#esi_state_id").empty().append(option);


        var option = "<option value=0>Select Branch</option>";
        $("#esi_branch_id").empty().append(option);
    }
});



var esi_div_array = [];
var esi_selected_div;
function load_esi_divisions(esi_comp_id, esi_selected_div) {
    $.ajax({
        url: baseurl + "admin/getdivisions_based_on_branch_master",
        type: "post",
        async: false,
        data: {'comp_id': esi_comp_id, 'type': "ESI"},
        success: function (data) {
            esi_div_array = JSON.parse(data);
//           console.log(states_array);

        }
    });

    var option;
//        console.log(states_array);
    if (esi_div_array.length > 0) {
        option = "<option value=0>Select Division</option>";
        for (index in esi_div_array) {
            var esi_div_array_index = esi_div_array[index];
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

$(document).ready(function () {
	
$("#esi_div_id").change(function () {
    var esi_comp_id = $("#esi_company_id").val();
    var esi_div_id = $(this).val();
	alert(esi_comp_id);
	alert(esi_div_id);
    if (esi_comp_id != 0 && esi_comp_id != "" && esi_div_id != 0 && esi_div_id != "") {
        load_esi_states(esi_comp_id, esi_div_id, 0);
    } else {
        var option = "<option value=0>Select State</option>";
        $("#esi_state_id").empty().append(option);
        var option = "<option value=0>Select Branch</option>";
        $("#esi_branch_id").empty().append(option);
    }
});

$("#esi_state_id").change(function () {
    var esi_comp_id = $("#esi_company_id").val();
    var esi_div_id = $("#esi_div_id").val();
    var esi_state_id = $(this).val();
    if (esi_comp_id != 0 && esi_comp_id != "" && esi_div_id != 0 && esi_div_id != "" && esi_state_id != 0 && esi_state_id != "") {
        load_esi_branches(esi_comp_id, esi_div_id, esi_state_id, 0)
    } else {
        var option = "<option value=0>Select Branch</option>";
        $("#esi_branch_id").empty().append(option);
    }
});


});

var esi_states_array = [];
var esi_selected_state;
function load_esi_states(esi_comp_id, esi_div_id, esi_selected_state) {
    $.ajax({
        url: baseurl + "user/getstates_based_on_branch_master",
        type: "post",
        async: false,
        data: {'comp_id': esi_comp_id, 'div_id': esi_div_id, 'type': "ESI"},
        success: function (data) {
            esi_states_array = JSON.parse(data);
        }
    });

    var option;
    if (esi_states_array.length > 0) {
        option = "<option value=0>Select State</option>";
        for (index in esi_states_array) {
            var esi_states_array_index = esi_states_array[index];
            if (esi_selected_state == esi_states_array_index.mxst_id) {
                option += "<option value=" + esi_states_array_index.mxst_id + " selected>" + esi_states_array_index.mxst_state + "</option>"
            } else {
                option += "<option value=" + esi_states_array_index.mxst_id + ">" + esi_states_array_index.mxst_state + "</option>"
            }
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
        url: baseurl + "user/getbranches_based_on_eligibility_state_wise",
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
        }
    } else {
        option = "<option value=0>Select Branch</option>";
    }

    $("#esi_branch_id").empty().append(option);
}


$('document').ready(function () {
    $("select#esi_company_id").val("1").trigger('change');
    // $("#searchemployeefilterdata").trigger("click");

});


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
	
    $('#esi_div_id').select2();
    $('#attndday').select2();
    $('#attndmonth').select2();
    $('#attndyear').select2();
    $('#esi_company_id').select2();
    $('#esi_state_id').select2();
    $('#esi_branch_id').select2();
});

</script>

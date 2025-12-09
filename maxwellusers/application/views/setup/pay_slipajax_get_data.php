			<!-- Page Wrapper -->
            <div class="page-wrapper89">
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
							<?php 

							
       //echo "===============>";print_r($data);
		
		$employeecode = $this->session->userdata('session_loginperson_id');
		
		
			$file_name_pdf = base_url() . "uploads/payslips/".$month."-".$year."-".$employeecode.".pdf";
			
			$file_name_pdf = str_replace("maxwellusers/", "", $file_name_pdf);
			
                          echo   $html_data = "<table><tr><td><a href='$file_name_pdf' target='_blank'>payslip</a></td></tr></table>";
		?>
								
							</div>
							
						</div>
					</div>
					<!-- /Page Header -->
				
					<!-- Leave Statistics -->
						
					
					<br>
				
                </div>
				<!-- /Page Content -->
<script type="text/javascript">
	function getdetails(date,empcode,first,second,attndid,table){
	$("#placehtmldata").empty();
	mainurl = baseurl+'admin/getemployeedatewiseattnd';
		$.ajax({
	        url: mainurl,
	        type: 'POST',
	        data: {date : date, empid : empcode, uniqueid : attndid, firsthalf : first, secondhalf : second, tablename : table},
	        success: function (data) {
	        	$("#placehtmldata").html(data);
	        },
    	});
	}
</script>			
				
            </div>
			<!-- /Page Wrapper -->
<script>
// $(document).on("click", ".editleavedetails", function () {
    // $('#Firsthalf').prop('selectedIndex','');
    // $('#Secondhalf').prop('selectedIndex','');
// 	var getvalues = $(this).data('id');
// 	var x = getvalues.split("~",6);
// 	var date = x[0];
// 	var employeecode = x[1];
// 	var firsthalf = x[2];
// 	var secondhalf = x[3];
// 	// alert(firsthalf);
// 	// alert(secondhalf);
// 	var id = x[4];
// 	$(".modal-body #usercode").html(employeecode);
// 	$(".modal-body #editempdate").val(date);
// 	$(".modal-body #editempid").val(employeecode);
// 	$(".modal-body #editempmainid").val(id);


// 	$('#Firsthalf option').map(function () {
// 	if ($(this).text() == firsthalf) return this;
// 	}).attr('selected', 'selected');

// 	$('#Secondhalf option').map(function () {
// 	if ($(this).text() == secondhalf) return this;
// 	}).attr('selected', 'selected'); 

// });
</script>
<!-- EDit Modal -->
<div class="modal custom-modal fade" id="editleavedetails" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header">
					<h3>Leave Adjustment</h3>
					<h3 style="color: red" id="username"><?php echo $absentdays[0]->EmployeeName ?></h3>
					<p id="usercode"></p>
				</div>

				<div id="placehtmldata"></div>

			</div>
		</div>
	</div>
</div>
<!-- EDit Modal -->

<!-- ------------ added 16-07-21 popup model for deatail leave history  ---------------------->


   <div class="modal custom-modal fade" id="addletype" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
			    <div id="leavedethist"> </div> 
            </div>
        </div>
	</div>


<!--  ------------- end added 16-07-2021 ------------->


<script type="text/javascript">
	function processemployeeadjustment(){
		var empattid = $("#editempmainid").val();
		var editempdate = $("#editempdate").val();
		var empcode = $("#editempid").val();
		var firsthalf = $("#Firsthalf").val();
		var firsthalfdisabled = $('#Firsthalf').is('[disabled]')
		var secondhalf = $("#Secondhalf").val();
		var secondhalfdisabled = $('#Secondhalf').is('[disabled]')
		if(firsthalfdisabled == true){
			firsthalf = '';
		}
		if(secondhalfdisabled == true){
			secondhalf = '';
		}
        if( (firsthalf == 'CL' && secondhalf == 'EL') || (firsthalf == 'EL' && secondhalf == 'CL') ){
            alert("Please check CL and EL combination will not work");
            return false;
        }else if( (firsthalf == 'SL' && secondhalf == 'EL') || (firsthalf == 'EL' && secondhalf == 'SL') ){
            alert("Please check SL and EL combination will not work");
            return false;
        }else if( (firsthalf == 'CL' && secondhalf == 'SL') || (firsthalf == 'SL' && secondhalf == 'CL') ){
            alert("Please check CL and SL combination will not work");
            return false;
        }


		$.ajax({
		    async: false,
		    type: "POST",
		    data: {id : empattid, attdate : editempdate, employeecode : empcode, firhalf : firsthalf, sechalf : secondhalf},
		    url: baseurl + 'admin/updateempleaveadjustment',
		    datatype: "html",
		      success: function (data) {
		          if (data == 200) {
		            alert('Success');
		            window.location.reload();
		          }else if(data == 400) {
		            alert('Try Again Later');
		          }else{
		      		$("#returnerror").html(data);
		          }
		    }
		});
	}

    function leavehistroydetail(empid){
    	$.ajax({
		    type: "POST",
		    data: {empid : empid },
		    url: baseurl + 'admin/leavehistroydetail',
		    datatype: "html",
		      success: function (data) {
				  $('#leavedethist').html(data);
		    }
		});
   }

    function leavedethist(empid,leavetypeid){
			var mainurl = baseurl + 'admin/leavetypehistorydet';
			$.ajax({
				url: mainurl,
				type: 'POST',
				data: { 'empid':empid,'leavetypeid':leavetypeid},
				success: function (data) {
					$('#dtbl').html(data);
					var table = $('#dataTables-example').DataTable({
                        dom: 'Bfrtip',
                        "destroy": true, //use for reinitialize datatable
                        lengthChange: false,
                        buttons: [
                            // { extend: 'copyHtml5', footer: true },
                            { extend: 'excelHtml5', footer: true },
                            { extend: 'csvHtml5', footer: true },
                            { extend: 'pdfHtml5', footer: true }
                        ],
                    });
				},
			});
		}
	</script>

























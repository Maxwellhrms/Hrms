<?php
// print_r($common);exit;
    if(count($common[0])>0){ 
    
    ?>
    
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-12">
                            <div class="card mb-0">					
                                <div class="card-header">
									<h4 class="card-title mb-0">Preview List</h4>
								</div>
                                <div class="card-body">	
								<div class="row">
								<div class="col-md-3">
								Status:<select class="form-control" name="status" id="status" >
<option value="">select</option>								
<option value="current_year_bonus">current year bonus</option>								
<option value="unpaid_bonus">unpaid bonus</option>								
<option value="bonus_payable">bonus payable</option>								
<option value="paid">paid</option>								
								</select >									
								</div>
								<div class="col-md-3">
								Remarks:<input type="text" name="remarks" id="remarks" class="form-control" />									
								</div>
								<div class="col-md-3">
								pasword:<input type="text" name="password_user" id="password_user" class="form-control" />									
								</div>
								
								<div class="col-md-3">
								<input type="submit" class="form-control  dt-buttons btn-group" name="submit" id="submit" value="submit"  style=" color: white; " />									
								</div>
								</div>
								<br>
								<br>
									<div class="table-responsive">
                                        <table class="datatable table table-stripped mb-0" id="dataTables-example2">
											<thead>
												<tr>
												<th><input type="checkbox" id="select-all" /></th>
												<th>finace year</th>
												<th>status</th>
												<th>DOL</th>
												<th>bonus paid on</th>
												<th>manuall status</th>
												<th>remarks</th>
												<th>Division</th>
												<th>Branch</th>
												<th>Emp Code</th>
												<th>Employee Name</th>
												
												<th>Apr Main</th>
												<th>Apr Arrears</th>
												<th>May Main</th>
												<th>May Arrears</th>
												<th>Jun Main</th>
												<th>Jun Arrears</th>
												<th>July Main</th>
												<th>July Arrears</th>
												<th>Aug Main</th>
												<th>Aug Arrears</th>
												<th>Sep Main</th>
												<th>Sep Arrears</th>
												<th>Oct Main</th>
												<th>Oct Arrears</th>
												<th>Nov Main</th>
												<th>Nov Arrears</th>
												<th>Dec Main</th>
												<th>Dec Arrears</th>
												<th>Jan Main</th>
												<th>Jan Arrears</th>
												<th>Feb Main</th>
												<th>Feb Arrears</th>
												<th>Mar Main</th>
												<th>Mar Arrears</th>
												<th>BONUS PAYABLE</th>
												<th>Staff Adv RECOVERY</th>
												<th>Payable</th>
												</tr>
											</thead>
                                            <tbody>
                                                <?php 
												//echo "<pre>";print_r($common);die;
/*
 [emp_code] => MD0001
            [emp_name] => RAVI 
            [mxemp_emp_resignation_status] => W
            [mxemp_emp_resignation_date] => 
            [mxemp_emp_resignation_relieving_settlement_date] => 
            [mxd_name] => LOGISTICS 
            [mxb_name] => HEAD OFFICE
            [apr_bonus] => 0
            [may_bonus] => 0
            [jun_bonus] => 0
            [jul_bonus] => 0
            [aug_bonus] => 0
            [sep_bonus] => 0
            [oct_bonus] => 0
            [nov_bonus] => 0
            [dec_bonus] => 0
            [jan_bonus] => 0
            [feb_bonus] => 0
            [mar_bonus] => 0
            [total_bonus] => 0
*/												
			
                                                //for($i=0; $i<sizeof($common);$i++) {  
                                                foreach($common as $commm ) {
													$bonus_status=$commm['bonus_status'];
													$total_bonus=$commm['total_bonus'];
													$tot_loan=$commm['tot_loan'];
 //print_r($commm['emp_code']);die;													?> 
                                                    <tr>
				<td><input type="checkbox" name="emp_check[]" value="<?php echo $commm['emp_code']; ?>" /></td>
									<td><?php echo $commm['finacial_month_year'];  ?></td>
							<td><?php echo $commm['mxemp_emp_resignation_status'];  ?></td>
							<td><?php echo $commm['mxemp_emp_resignation_date'];  ?></td>
			<td><?php echo $commm['mxemp_emp_resignation_relieving_settlement_date'];  ?></td>
							<td><?php echo $bonus_status;  ?></td>
							<td><?php echo $commm['remarks'];  ?></td>
							<td><?php echo $commm['mxd_name'];  ?></td>
							<td><?php echo $commm['mxb_name'];  ?></td>
							<td><?php echo $commm['emp_code'];  ?></td>
							<td><?php echo $commm['emp_name'];  ?></td>							
							<td><?php echo $commm['apr_bonus'];  ?></td>
							<td><?php echo $commm['apr_bonusarres'];  ?></td>
							<td><?php echo $commm['may_bonus'];  ?></td>
							<td><?php echo $commm['may_bonusarres'];  ?></td>
							<td><?php echo $commm['jun_bonus'];  ?></td>
							<td><?php echo $commm['jun_bonusarres'];  ?></td>
							<td><?php echo $commm['jul_bonus'];  ?></td>
							<td><?php echo $commm['jul_bonusarres'];  ?></td>
							<td><?php echo $commm['aug_bonus'];  ?></td>
							<td><?php echo $commm['aug_bonusarres'];  ?></td>
							<td><?php echo $commm['sep_bonus'];  ?></td>
							<td><?php echo $commm['sep_bonusarres'];  ?></td>
							<td><?php echo $commm['oct_bonus'];  ?></td>
							<td><?php echo $commm['oct_bonusarres'];  ?></td>
							<td><?php echo $commm['nov_bonus'];  ?></td>
							<td><?php echo $commm['nov_bonusarres'];  ?></td>
							<td><?php echo $commm['dec_bonus'];  ?></td>
							<td><?php echo $commm['dec_bonusarres'];  ?></td>
							<td><?php echo $commm['jan_bonus'];  ?></td>
							<td><?php echo $commm['jan_bonusarres'];  ?></td>
							<td><?php echo $commm['feb_bonus'];  ?></td>
							<td><?php echo $commm['feb_bonusarres'];  ?></td>
							<td><?php echo $commm['mar_bonus'];  ?></td>
							<td><?php echo $commm['mar_bonusarres'];  ?></td>
							<td><?php echo $total_bonus;  ?></td>
							<td><?php 
							if($total_bonus>0)
							{echo $tot_loan;}else{ echo "0"; }
							
							?></td>
							<td><?php 
							if( !empty($commm['mxemp_emp_resignation_relieving_settlement_date']) &&  $total_bonus>0)
							{
								$diffrence_tot=$total_bonus-$tot_loan;
							echo ($diffrence_tot > 0) ? $diffrence_tot : 0;
							}else{
								echo "0";
							}
							 
							
							?></td>
														
                                                                
                                                        
                                                    </tr>
                                                <?php } ?>   
                                            </tbody>
                                            
                                            
										</table>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
 <?php }else{
     echo 'No Data Exist'; exit;
 } ?>
   
 <script>
$(document).ready(function() {
    var table = $('#dataTables-example2').DataTable({
                            dom: 'Bfrtip',
                            "destroy": true, //use for reinitialize datatable
                            lengthChange: false,
                            buttons: [
                                { extend: 'excelHtml5',title:'<?php echo $titlehead ?>', messageTop: '<?php echo $excelheading; ?>',footer: true }
                            ],
                        });

    // Handle click on "Select all" control
    $('#select-all').on('change', function() {
        var isChecked = this.checked;

        // Loop through ALL rows (not just visible)
        table.rows().every(function() {
            var row = this.node();
            $(row).find('input[name="emp_check[]"]').prop('checked', isChecked);
        });
    });

    // Optional: Uncheck "select-all" if any checkbox is manually unchecked
    $('#dataTables-example2 tbody').on('change', 'input[name="emp_check[]"]', function() {
        if (!this.checked) {
            $('#select-all').prop('checked', false);
        } else {
            // Check if all checkboxes are checked
            var allChecked = true;
            table.rows().every(function() {
                var row = this.node();
                if (!$(row).find('input[name="emp_check[]"]').prop('checked')) {
                    allChecked = false;
                }
            });
            $('#select-all').prop('checked', allChecked);
        }
    });

    $('#submit').on('click', function(e) {
        e.preventDefault();

        let selectedEmpCodes = [];
       /* $('input[name="emp_check[]"]:checked').each(function() {
            selectedEmpCodes.push($(this).val());
        });*/
		table.$('input[name="emp_check[]"]:checked').each(function () {
            selectedEmpCodes.push($(this).val());
        });

        let status = $('#status').val();
		if(status == "")
		{
			alert("bonus status is required");
			return false;
		}
        let remarks = $('#remarks').val();
		if(remarks == "")
		{
			alert("remarks is required");
			return false;
		}
		let password_user = $('#password_user').val();
		if(password_user == "")
		{
			alert("password is required");
			return false;
		}
        let finacial_month_year = $('#finacial_month_year').val();

        if (selectedEmpCodes.length === 0) {
            alert("Please select at least one employee.");
            return;
        }
var mainurl = baseurl+'export/update_bonus_status';
        $.ajax({
            url: mainurl, // Change this to your actual controller endpoint
            method: 'POST',
            data: {
                emp_codes: selectedEmpCodes,
                status: status,
                finacial_month_year: finacial_month_year,
                password_user: password_user,
                remarks: remarks
            },
            success: function(response) {
                //alert("Data successfully updated!");
                // Optionally reload or update UI
            },
            error: function(xhr) {
                alert("Error occurred during update.");
            }
        });
		alert("Data successfully updated!");
		window.location.reload();
    });
});
</script>


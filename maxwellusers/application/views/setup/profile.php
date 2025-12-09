
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid pb-0">

					<!-- Page Header -->
					<div class="row">
						<div class="col-md-12">
							<div class="page-head-box">
								<h3>Profile</h3>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php  
					
				/*	$sql5 = " SELECT * FROM staff_tbl where login_tbl_id = '$login_tbl_id' ";
 $result5 = $this->db->query($sql5);
  $lastrowofareq5=$result5->result_array();
  $oldLead_id5=$result5->num_rows() ;
  if($oldLead_id5>0){ 
	$stafftblid_cross_check=$lastrowofareq5['0']['id'];
  }*/
  
  
  
  
  
  $employeecode = $this->session->userdata('session_loginperson_id');
   // Employee Info
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,mxemp_emp_dept_code,mxemp_emp_grade_code,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,mxemp_emp_company_email_id,mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,mxemp_emp_present_address2,mxemp_emp_present_city,mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state,mxemp_emp_fixed_country,mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,mxemp_emp_resignation_status,mxemp_emp_resignation_reason,mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,empmaritaldate,mxemp_emp_is_without_notice_period,mxemp_emp_unpay_sal_months,mxemp_emp_joiningorgination,mxemp_emp_joiningorginationofferpackage,mxemp_emp_joiningorginationdesignation,mxemp_emp_resignationletter,mxemp_emp_employee_lic_no,mxemp_emp_gratuity,mxemp_emp_esiimage,mxemp_emp_bankimage,mxemp_emp_nameasperbank,mxemp_emp_lic_info1,mxemp_emp_lic_info2,mxemp_emp_lic_info3,mxemp_emp_lic_info4,mxemp_emp_relation_name,mxemp_emp_relation,mxemp_emp_esi_reason,mxemp_emp_resignation_pf_reason');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
        $this->db->where('mxemp_emp_id', $employeecode);
        $query1 = $this->db->get();
        $qry1 = $query1->result();
        //$returnarray['employeeinfo'] = $qry1;
        $employeeinfo = $qry1;
        // Employee Info
		//echo $this->db->last_query();exit;
        // Academic Records
        $this->db->select('mxemp_emp_acr_id,mxemp_emp_acr_employee_id,mxemp_emp_acr_type,mxemp_emp_acr_yop,mxemp_emp_acr_institution,mxemp_emp_acr_subject,mxemp_emp_acr_university,mxemp_emp_acr_marks');
        $this->db->from('maxwell_employees_academic_records');
        $this->db->where('mxemp_emp_acr_employee_id', $employeecode);
        $query2 = $this->db->get();
        $returnarray['employeeacr'] = $query2->result();
        // Academic Records
        // Training
        $this->db->select('mxemp_emp_tr_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_nameofcourse,mxemp_emp_tr_nameofinstutions,mxemp_emp_tr_fromdate,mxemp_emp_tr_todate');
        $this->db->from('maxwell_employees_training');
        $this->db->where('mxemp_emp_tr_employee_id', $employeecode);
        $query3 = $this->db->get();
        $returnarray['employeetr'] = $query3->result();
        // Training
        // Family
        $this->db->select('mxemp_emp_fm_id,mxemp_emp_fm_employee_id,mxemp_emp_fm_relation,mxemp_emp_fm_name,mxemp_emp_fm_age,mxemp_emp_fm_occupation,mxemp_emp_fm_title');
        $this->db->from('maxwell_employees_family');
        $this->db->where('mxemp_emp_fm_employee_id', $employeecode);
        $query4 = $this->db->get();
        $returnarray['employeefm'] = $query4->result();
        // Family
        // Previous Employments
        $this->db->select('mxemp_emp_pe_id,mxemp_emp_pe_employee_id,mxemp_emp_pe_periodfromto,mxemp_emp_pe_nameandorg,mxemp_emp_pe_desgjointime,mxemp_emp_pe_desgleavingtime,mxemp_emp_pe_desgreportedto,mxemp_emp_pe_monthlysalary,mxemp_emp_pe_otherbenfits,mxemp_emp_pe_reasonforchange');
        $this->db->from('maxwell_employees_previousemployments');
        $this->db->where('mxemp_emp_pe_employee_id', $employeecode);
        $query5 = $this->db->get();
        $returnarray['employeepe'] = $query5->result();
        // Previous Employments

        // Nominee Details
        $this->db->select('mxemp_emp_nm_id,mxemp_emp_nm_employee_id,mxemp_emp_nm_type,mxemp_emp_nm_relation,mxemp_emp_nm_relationname,mxemp_emp_nm_relationage,mxemp_emp_nm_relationmobile,mxemp_emp_nm_relationaddress,mxemp_emp_nm_relationpercent,mxemp_emp_nm_relationimage');
        $this->db->from('maxwell_employees_nominee');
        $this->db->where('mxemp_emp_nm_employee_id', $employeecode);
        $query5 = $this->db->get();
        $returnarray['employeenominee'] = $query5->result();
        // Nominee Details

        // Refrences Details
        $this->db->select('mxemp_emp_rf_id,mxemp_emp_rf_employee_id,mxemp_emp_rf_type,mxemp_emp_rf_relation,mxemp_emp_rf_relationname,mxemp_emp_rf_relationmobile');
        $this->db->from('maxwell_employees_refrence');
        $this->db->where('mxemp_emp_rf_employee_id', $employeecode);
        $query5 = $this->db->get();
        $returnarray['employeerefrence'] = $query5->result();
        // Refrences Details

        // Languages Details
        $this->db->select('mxemp_emp_lng_id,mxemp_emp_lng_employee_id,mxemp_emp_lng,mxemp_emp_lng_speak,mxemp_emp_lng_read,mxemp_emp_lng_write,mxlg_name');
        $this->db->from('maxwell_employees_lanaguages');
        $this->db->join('maxwell_languages_master', 'mxemp_emp_lng = mxlg_id', 'INNER');
        $this->db->where('mxemp_emp_lng_employee_id', $employeecode);
        $query6 = $this->db->get();
        $returnarray['employeelanaguages'] = $query6->result();
        // Languages Details

        // Transfers Details
        $this->db->select('mxemp_trs_comp_name_from,mxemp_trs_comp_name_to,mxemp_trs_div_name_from,mxemp_trs_div_name_to,mxemp_trs_state_name_from,mxemp_trs_state_name_to,mxemp_trs_branch_name_from,mxemp_trs_branch_name_to,mxemp_trs_type,mxemp_trs_from_dt,mxemp_trs_to_dt,mxemp_trs_esi_relieaving_date,mxemp_trs_esi_joining_date,mxemp_trs_emp_releaving_date,mxemp_trs_emp_joining_date,mxemp_trs_remark,maxwell_emp_from_amount,maxwell_emp_to_amount');
        $this->db->from('maxwell_emp_trasfers');
        $this->db->where('mxemp_trs_emp_code', $employeecode);
        $this->db->where('mxemp_trs_status', 1);
        $query7 = $this->db->get();
        $returnarray['employeetransfers'] = $query7->result();
        // Transfers Details
        
        // PROMOTIONAL INCREMENTS
        $this->db->select();
        $this->db->from("maxwell_emp_promotion");
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mxemp_prm_emp_code', 'INNER');
        $this->db->where("mxemp_prm_status",1);
        $this->db->where("mxemp_prm_emp_code",$employeecode);
        $this->db->order_by("mxemp_prm_joining_date");
        $query8 = $this->db->get();
        // echo $this->db->last_query();exit;
        $returnarray['promotion_inc'] = $query8->result();
        // PROMOTIONAL INCREMENTS
        
        // INCREMENT
        $this->db->select();
        $this->db->from("maxwell_emp_special_increaments");
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_spl_inc_comp_id', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_spl_inc_div_id', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_spl_inc_branch_id', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_spl_inc_state_id', 'INNER');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mxemp_spl_inc_emp_code', 'INNER');
        $this->db->where("mxemp_spl_inc_status",1);
        $this->db->where("mxemp_spl_inc_emp_code",$employeecode);
        $query9 = $this->db->get();
        $returnarray['special_inc'] = $query9->result();
        // INCREMENT
        
        // ARREAR INCREMENT
        $this->db->select();
        $this->db->from("maxwell_emp_arears_increaments");
        $this->db->where("mxemp_arears_status",1);
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_arears_comp_id', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_arears_div_id', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_arears_branch_id', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_arears_state_id', 'INNER');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mxemp_arears_emp_code', 'INNER');
        $this->db->where("mxemp_arears_emp_code",$employeecode);
        $query10 = $this->db->get();
        $returnarray['arear_inc'] = $query10->result();
        // END ARREAR INCREMENT
        
        $current_date  = date('Y-m-d');
        //ESI MASTER
       /* $this->db->select();
        $this->db->from('maxwell_esi_master');
        $this->db->where("mxesi_status",1);
        $this->db->where('mxesi_div_id',$qry1[0]->mxemp_emp_division_code);
        $this->db->where('mxesi_state_id',$qry1[0]->mxemp_emp_state_code);
        $this->db->where('mxesi_branch_id',$qry1[0]->mxemp_emp_branch_code);
        $this->db->where('mxesi_affect_from <=',$current_date);
        $this->db->where('mxesi_affect_to >=',$current_date);
        $this->db->where("FIND_IN_SET(".$employeecode.", mxesi_emp_types) >", 0);
        $query11 = $this->db->get();
        // echo $this->db->last_query();exit;
        $returnarray['esi_master'] = $query11->result();
        //END ESI MASTER*/
        
        $this->db->select('mxauth_emp_code,mxauth_reporting_head_emp_code,mxemp_emp_fname,mxemp_emp_lname,mxauth_status,mxauth_createdtime,mxauth_modifiedtime');
        $this->db->from('maxwell_emp_authorsations');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mxauth_emp_code', 'INNER');
         $this->db->where('mxauth_status', '1');
        $this->db->where('mxauth_emp_code !=""');
        $this->db->where('mxauth_emp_code', $employeecode);
        $this->db->order_by("mxauth_status", "desc");
        $query12 = $this->db->get();
        $returnarray['authorizationemployees_underyou'] = $query12->result();
       // return $returnarray;
		
		//echo $this->db->last_query();exit;
		//echo "<pre>"; print_r($returnarray['authorizationemployees_underyou'][0]->mxauth_reporting_head_emp_code);die;
		//echo "<pre>";print_r($employeeinfo[0]);
		
		
		
		$qb ="select mxemp_emp_id as employeecode, mxemp_emp_fname as name, mxemp_emp_img as image, mxemp_emp_date_of_birth, mxemp_emp_email_id as email from maxwell_employees_info 
        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
        where MONTH(mxemp_emp_date_of_birth) = MONTH(CURDATE()) and DAY(mxemp_emp_date_of_birth) >= DAY(CURDATE()) and mxemp_emp_resignation_status !='R'";
        
        $qb .=" ORDER BY DAY(mxemp_emp_date_of_birth)";
        $queryb = $this->db->query($qb);
        $att_summary = $queryb->result();
		
		//print_r($att_summary[0]);echo "================>";die;
		//print_r($att_summary[0]->mxemp_emp_date_of_birth);echo "================>";die;
		
					?>
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
											
												<a href="#">
												<?php
											$img_url=	$employeeinfo[0]->mxemp_emp_img;
											$src = base_url().$img_url ;
 $updated_src = str_replace('maxwellusers/', '', $src);
//echo $updated_src;echo "=============>";
												if($updated_src)
		{ ?><img src="<?php echo $updated_src; ?>" alt=""><?php }
	else{ ?><img src="<?php echo base_url() ?>assets/img/profiles/avatar-02.jpg" alt=""><?php } ?>
	
	<!--<img alt="" src="assets/img/profiles/avatar-02.jpg">--></a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0 mb-0"><?php echo $employeeinfo[0]->mxemp_emp_fname;  ?></h3>
														<h6 class="text-muted"><?php echo $employeeinfo[0]->mxdesg_name;  ?></h6>
														<small class="text-muted"><?php echo $employeeinfo[0]->mxdpt_name;  ?></small>
														<div class="staff-id">Employee ID : <?php echo $employeeinfo[0]->mxemp_emp_id;  ?></div>
														<div class="small doj text-muted">Date of Join : <?php echo $employeeinfo[0]->mxemp_emp_date_of_join;  ?></div>
														<div class="staff-msg"></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Phone:</div>
															<div class="text"><a href=""><?php echo $employeeinfo[0]->mxemp_emp_phone_no;  ?></a></div>
														</li>
														<li>
															<div class="title">Email:</div>
															<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_email_id;  ?></div>
														</li>
														<li>
															<div class="title">Birthday:</div>
															<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_date_of_birth;  ?></div>
														</li>
														<li>
															<div class="title">Address:</div>
															<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_present_address1;  ?></div>
														</li>
														<li>
															<div class="title">Gender:</div>
															<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_gender;  ?></div>
														</li>
														<li>
															<div class="title">Reports to:</div>
															<div class="text">
															   <!--<div class="avatar-box">
																  <div class="avatar avatar-xs">
																	 <img src="assets/img/profiles/avatar-16.jpg" alt="">
																  </div>
															   </div>-->
															   <?php

			   $main_authorization_anme= $returnarray['authorizationemployees_underyou'][0]->mxauth_reporting_head_emp_code;

$this->db->select('mxemp_emp_id,CONCAT(mxemp_emp_fname," ", mxemp_emp_lname) as fullname,mxemp_emp_img,mxemp_emp_autouniqueid');

        $this->db->from('maxwell_employees_info');        
            
			$employeecode = $this->session->userdata('session_loginperson_id');
			$this->db->where('mxemp_emp_id', $main_authorization_anme);
            
        
        $query = $this->db->get();
         //echo $this->db->last_query();exit; 
        // echo '<pre>';print_r($query->result_array());exit;
        $main_result_auth =$query->result_array();
		$img_url_auth=$main_result_auth[0]['mxemp_emp_img'];
		echo $fullname_auth =$main_result_auth[0]['fullname'];
		
		 

 

			   ?>
															   <!--<a href="profile.html">
																	Jeffery Lalor
																</a>-->
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!--<div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fas fa-pencil-alt"></i></a></div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card tab-box mt-3">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom pt-3 pb-2">
									<li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Profile</a></li>
									<!--<li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Projects</a></li>-->
									<!--<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>-->
								</ul>
							</div>
						</div>
					</div>
					
					<div class="tab-content">
					
						<!-- Profile Info Tab -->
						<div id="emp_profile" class="pro-overview tab-pane fade show active">
							<div class="row">
								<!--<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i class="fas fa-pencil-alt"></i></a></h3>
											<ul class="personal-info">
												<li>
													<div class="title">Passport No.</div>
													<div class="text">9876543210</div>
												</li>
												<li>
													<div class="title">Passport Exp Date.</div>
													<div class="text">9876543210</div>
												</li>
												<li>
													<div class="title">Tel</div>
													<div class="text"><a href="">9876543210</a></div>
												</li>
												<li>
													<div class="title">Nationality</div>
													<div class="text">Indian</div>
												</li>
												<li>
													<div class="title">Religion</div>
													<div class="text">Christian</div>
												</li>
												<li>
													<div class="title">Marital status</div>
													<div class="text">Married</div>
												</li>
												<li>
													<div class="title">Employment of spouse</div>
													<div class="text">No</div>
												</li>
												<li>
													<div class="title">No. of children</div>
													<div class="text">2</div>
												</li>
											</ul>
										</div>
									</div>
								</div>-->
								<!--<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i class="fas fa-pencil-alt"></i></a></h3>
											<h5 class="section-title">Primary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">John Doe</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Father</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
											<hr>
											<h5 class="section-title">Secondary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">Karen Wills</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Brother</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
										</div>
									</div>
								</div>-->
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Bank information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Bank name</div>
													<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_bank_name;  ?></div>
												</li>
												<!--<li>
													<div class="title">Bank account No.</div>
													<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_bank_acc_no;  ?></div>
												</li>-->
												<li>
    <div class="title">Bank account No.</div>
    <div class="text">
        <?php 
            $bankAcc = $employeeinfo[0]->mxemp_emp_bank_acc_no;
            $masked = str_repeat('X', strlen($bankAcc) - 4) . substr($bankAcc, -4);
            echo $masked;
        ?>
    </div>
</li>
												<li>
													<div class="title">IFSC Code</div>
													<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_bank_ifsci_no;  ?></div>
												</li>
												<!--<li>
													<div class="title">PAN No</div>
													<div class="text"><?php echo $employeeinfo[0]->mxemp_emp_panno;  ?></div>
												</li>-->
												<li>
    <div class="title">PAN No</div>
    <div class="text">
        <?php 
            $panAcc = $employeeinfo[0]->mxemp_emp_panno;
            $masked_pan = str_repeat('X', strlen($panAcc) - 4) . substr($panAcc, -4);
            echo $masked_pan;
        ?>
    </div>
</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
								
								
								
								
								
								
									<div class="clock">
  <div>
    <div class="info date"></div>
    <div class="info day"></div>
  </div>
  <div class="dot"></div>
  <div>
    <div class="hour-hand"></div>
    <div class="minute-hand"></div>
    <div class="second-hand"></div>
  </div>
  <div>
    <span class="h3">3</span>
    <span class="h6">6</span>
    <span class="h9">9</span>
    <span class="h12">12</span>
  </div>
  <div class="diallines"></div>
</div>







								</div>
							</div>
							<div class="row">
								<!--birthday-->
                        <?php if(count($att_summary[0]->mxemp_emp_date_of_birth) > 0){ ?>
						<div class="col-md-6 col-lg-6 col-xl-6 d-flex">
							<div class="card att-card flex-fill">
								<div class="card-header">
									<h3><i class="fas fa-birthday-cake"></i> Birthdays <span style="color:red">(<?php echo count($att_summary[0]->mxemp_emp_date_of_birth); ?>)</span></h3>
							        <a href="" style="float:right"><i class="far fa-file-excel" aria-hidden="true"></i></a>
								</div>
								<div class="card-body pt-0 pb-0 innercontent">
									<ul class="leave-list bday-list">
										<?php 
										
										//print_r($att_summary[0]);
										
										foreach($att_summary as $dkey => $dobate){ ?>
										<li>
                <div class="wish-info">
                    <img src="<?php echo base_url() . $dobate->image; ?>" alt="User">
                    <p><?php echo $dobate->employeecode . ' (' . $dobate->name . ')'; ?></p>
                </div>
                <?php if(date('md') == date('md', strtotime($dobate->mxemp_emp_date_of_birth))){ ?>
                    <a href="mailto:<?php echo $dobate->email; ?>?subject=Birthday Greetings&body=Greetings from HR Dept.…" class="wish-btn">
                        Wish Now <?php echo date('M d', strtotime($dobate->mxemp_emp_date_of_birth)); ?>
                    </a>
                <?php } else { ?>
                    <a href="#"><?php echo date('M d', strtotime($dobate->mxemp_emp_date_of_birth)); ?></a>
                <?php } ?>
            </li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
						<!--birthday-->
								<!--<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fas fa-pencil-alt"></i></a></h3>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Zen Corporation</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Ron-tech</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Dalt Technology</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>-->
							</div>
						</div>
						<!-- /Profile Info Tab -->
						
						<!-- Projects Tab -->
						<div class="tab-pane fade" id="emp_projects">
							<div class="row">
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width: 40%" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Projects Tab -->
						
						<!-- Bank Statutory Tab -->
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title"> Basic Salary Information</h3>
									<form>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select salary basis type</option>
														<option>Hourly</option>
														<option>Daily</option>
														<option>Weekly</option>
														<option>Monthly</option>
													</select>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
													<div class="input-group">
															<span class="input-group-text">$</span>
														<input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Payment type</label>
													<select class="select">
														<option>Select payment type</option>
														<option>Bank transfer</option>
														<option>Check</option>
														<option>Cash</option>
													</select>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF contribution</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
										</div>
										
										<hr>
										<h3 class="card-title"> ESI Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">ESI contribution</label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Employee ESI rate</label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->
						
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Profile Modal -->
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
												<div class="fileupload btn">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" value="John">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control" value="Doe">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" value="05/06/1985">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Gender</label>
														<select class="select form-control">
															<option value="male selected">Male</option>
															<option value="female">Female</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" value="4487 Snowbird Lane">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<input type="text" class="form-control" value="New York">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Country</label>
												<input type="text" class="form-control" value="United States">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Pin Code</label>
												<input type="text" class="form-control" value="10523">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control" value="631-889-3206">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Department</option>
													<option>Web Development</option>
													<option>IT Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Designation</option>
													<option>Web Designer</option>
													<option>Web Developer</option>
													<option>Android Developer</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Reports To <span class="text-danger">*</span></label>
												<select class="select">
													<option>-</option>
													<option>Wilmer Deluna</option>
													<option>Lesley Grauer</option>
													<option>Jeffery Lalor</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Profile Modal -->
				
				<!-- Personal Info Modal -->
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport No</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Passport Expiry Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Tel</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Nationality <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Religion</label>
												<div class="cal-icon">
													<input class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Marital status <span class="text-danger">*</span></label>
												<select class="select form-control">
													<option>-</option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Employment of spouse</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>No. of children </label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Info Modal -->
				
				<!-- Family Info Modal -->
				<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Family Informations</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Family Info Modal -->
				
				<!-- Emergency Contact Modal -->
				<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
				
				<!-- Education Modal -->
				<div id="education_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Education Informations</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Education Modal -->
				
				<!-- Experience Modal -->
				<div id="experience_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Experience Informations</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Web Developer">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<input type="text" class="form-control floating" value="Web Developer">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Experience Modal -->
				
            </div>
			<!-- /Page Wrapper -->
<style>.clock {
  background: #ececec;
  width: 300px;
  height: 300px;
  margin: 8% auto 0;
  border-radius: 50%;
  border: 14px solid #333;
  position: relative;
  box-shadow: 0 2vw 4vw -1vw rgba(0,0,0,0.8);
}

.dot {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background: #ccc;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  position: absolute;
  z-index: 10;
  box-shadow: 0 2px 4px -1px black;
}

.hour-hand {
  position: absolute;
  z-index: 5;
  width: 4px;
  height: 65px;
  background: #333;
  top: 79px;
  transform-origin: 50% 72px;
  left: 50%;
  margin-left: -2px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
}

.minute-hand {
  position: absolute;
  z-index: 6;
  width: 4px;
  height: 100px;
  background: #666;
  top: 46px;
  left: 50%;
  margin-left: -2px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  transform-origin: 50% 105px;
}

.second-hand {
  position: absolute;
  z-index: 7;
  width: 2px;
  height: 120px;
  background: gold;
  top: 26px;
  lefT: 50%;
  margin-left: -1px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  transform-origin: 50% 125px;
}

span {
  display: inline-block;
  position: absolute;
  color: #333;
  font-size: 22px;
  font-family: 'Poiret One';
  font-weight: 700;
  z-index: 4;
}

.h12 {
  top: 30px;
  left: 50%;
  margin-left: -9px;
}
.h3 {
  top: 140px;
  right: 30px;
}
.h6 {
  bottom: 30px;
  left: 50%;
  margin-left: -5px;
}
.h9 {
  left: 32px;
  top: 140px;
}

.diallines {
  position: absolute;
  z-index: 2;
  width: 2px;
  height: 15px;
  background: #666;
  left: 50%;
  margin-left: -1px;
  transform-origin: 50% 150px;
}
.diallines:nth-of-type(5n) {
  position: absolute;
  z-index: 2;
  width: 4px;
  height: 25px;
  background: #666;
  left: 50%;
  margin-left: -1px;
  transform-origin: 50% 150px;
}

.info {
  position: absolute;
  width: 120px;
  height: 20px;
  border-radius: 7px;
  background: #ccc;
  text-align: center;
  line-height: 20px;
  color: #000;
  font-size: 11px;
  top: 200px;
  left: 50%;
  margin-left: -60px;
  font-family: "Poiret One";
  font-weight: 700;
  z-index: 3;
  letter-spacing: 3px;
  margin-left: -60px;
  left: 50%;
}
.date {
    top: 80px;
  }
.day {
    top: 200px;
}</style>

<script>var dialLines = document.getElementsByClassName('diallines');
var clockEl = document.getElementsByClassName('clock')[0];

for (var i = 1; i < 60; i++) {
  clockEl.innerHTML += "<div class='diallines'></div>";
  dialLines[i].style.transform = "rotate(" + 6 * i + "deg)";
}

function clock() {
  var weekday = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      d = new Date(),
      h = d.getHours(),
      m = d.getMinutes(),
      s = d.getSeconds(),
      date = d.getDate(),
      month = d.getMonth() + 1,
      year = d.getFullYear(),
           
      hDeg = h * 30 + m * (360/720),
      mDeg = m * 6 + s * (360/3600),
      sDeg = s * 6,
      
      hEl = document.querySelector('.hour-hand'),
      mEl = document.querySelector('.minute-hand'),
      sEl = document.querySelector('.second-hand'),
      dateEl = document.querySelector('.date'),
      dayEl = document.querySelector('.day');
  
      var day = weekday[d.getDay()];
  
  if(month < 9) {
    month = "0" + month;
  }
  
  hEl.style.transform = "rotate("+hDeg+"deg)";
  mEl.style.transform = "rotate("+mDeg+"deg)";
  sEl.style.transform = "rotate("+sDeg+"deg)";
  dateEl.innerHTML = date+"/"+month+"/"+year;
  dayEl.innerHTML = day;
}

setInterval("clock()", 100);
</script>
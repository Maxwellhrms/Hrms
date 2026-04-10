

			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="page-head-box">
							<?php $session_loginperson_dept = $this->session->userdata('session_loginperson_dept'); ?>
<?php  if($session_loginperson_dept=='2'){?>
								<h3> Auditor Dashboard</h3>
<?php }else {?>
<h3> User Dashboard</h3>
<?php } ?>

</div>
						</div>
					</div>
					<div class="col-md-12">
							<div class="welcome-box">
								<div class="welcome-img">
								    <?php
									$this->db->select('mxemp_emp_id,CONCAT(mxemp_emp_fname," ", mxemp_emp_lname) as fullname,mxemp_emp_img,mxemp_emp_autouniqueid');
        $this->db->from('maxwell_employees_info');        
            
			$employeecode = $this->session->userdata('session_loginperson_id');
			$this->db->where('mxemp_emp_id', $employeecode); 
        $query = $this->db->get();
        $main_result=$query->result_array();
		$img_url=$main_result[0]['mxemp_emp_img'];
		$fullname=$main_result[0]['fullname'];
		$src = base_url().$img_url ;
 $updated_src = str_replace('maxwellusers/', '', $src);
									if($updated_src){$userimg = $updated_src;}
									else{$userimg = base_url.'assets/img/profiles/user.jpg';}?>
									<img alt="" src="<?php echo $userimg;?>" width="60px" height="60px">
								</div>
								<div class="welcome-det">
									<h3>Welcome, <?php echo $this->session->userdata('user_name'); ?><?php echo $fullname; ?></h3>
									<p><?php echo date('l'); ?>, <?php echo date('d M Y'); ?></p>
								</div>
							</div>
						</div>
				</div>
				<!-- Page Content -->
			</div>

<br>
<br>
<br>

						
								
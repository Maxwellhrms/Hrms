<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Common.php';
class User extends Common {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Policy_model');
		
    }
	public function checkPasswordChange() {
         $first_time = $this->session->userdata('first_time_passowrd_change');
        $every_days = $this->session->userdata('every_days_passowrd_change');

        

if ((!empty($first_time) && !empty($every_days) )&&($first_time == 0 || $first_time === '0' || $every_days == 0 || $every_days === '0')  ) {
            redirect(base_url().'changepasswordsetup'); 
			exit();
        }
    }

	public function index() {
		if (empty($this->session->userdata('is_session_active'))){
        	$this->load->view('logins/login.php');
    	}else{
    	    $user_id = $this->session->userdata('session_loginperson_id');
			// CHECK POLICY COMPLETION
			$this->load->model('Policy_model');
			$pending = $this->Policy_model->pendingPolicies($user_id);

			if ($pending > 0) {
				// redirect to policy page if not completed
				//redirect('policycheck', 'refresh');
				redirect(base_url() . 'userpolicies');
				exit();
			}
			// IF ALL POLICIES COMPLETED → GO TO DASHBOARD
			//	redirect('userdashboard', 'refresh');
			
    		redirect(base_url().'userdashboard');exit();
			
    	}
    }

    public function checkuserclients(){
        $userdata = $this->input->post();
        echo $res = $this->User_model->checkuserclients($userdata); 
    }

    public function verifylogin(){
        if (empty($this->session->userdata('is_session_active'))){
        	redirect(base_url() . 'logout');die();
        }else{
            $user_id = $this->session->userdata('session_loginperson_id');

			// CHECK POLICY COMPLETION
			$this->load->model('Policy_model');
			$pending = $this->Policy_model->pendingPolicies($user_id);

			if ($pending > 0) {
				// redirect to policy page if not completed
				//redirect('policycheck', 'refresh');
				redirect(base_url() . 'userpolicies');
				exit();
			}
			
			$employeecode = $this->session->userdata('session_loginperson_id');
			
			//ALTER TABLE `maxwell_employees_login` ADD `first_time_passowrd_change` VARCHAR(255) NOT NULL AFTER `mxemp_emp_custom_branch`;
			//ALTER TABLE `maxwell_employees_login` ADD `every_days_passowrd_change` VARCHAR(255) NOT NULL;
			//ALTER TABLE `maxwell_employees_login` CHANGE `every_days_passowrd_change` `every_days_passowrd_change` DATE NOT NULL;
			$first_time_passowrd_change=0;
			 $sql5 = " SELECT * FROM maxwell_employees_login where mxemp_emp_lg_employee_id = '$employeecode' ";
				 $result5 = $this->db->query($sql5);
				  $lastrowofareq5=$result5->result_array();
				  $oldLead_id5=$result5->num_rows() ;
				  if($oldLead_id5>0){ 
					$first_time_passowrd_change=$lastrowofareq5['0']['first_time_passowrd_change'];
					$every_days_passowrd_change=$lastrowofareq5['0']['every_days_passowrd_change'];
				  }
				  
				  if($first_time_passowrd_change == 0 || $first_time_passowrd_change == "" )
				  {
					//echo "456";die;  
            $this->session->set_userdata('first_time_passowrd_change', '0');            
					  redirect(base_url().'changepasswordsetup');exit();
				  }
				  if($first_time_passowrd_change == 1 )
				  {
					  					  
					  // Get current date and date +90 days from DB date
    $passwordChangeDate = strtotime($every_days_passowrd_change); // Date from DB
    $ninetyDaysLater = strtotime('+90 days', $passwordChangeDate); // Add 90 days
    $currentDate = time(); // Current time
	
	// echo "Current Date: " . date('Y-m-d', $currentDate) . "<br>";
    //echo "Expiry Date: " . date('Y-m-d', $ninetyDaysLater); die;
	
					  if (time() > strtotime('+90 days', strtotime($every_days_passowrd_change)))
					  {
						  //echo "123";die;
						  $this->session->set_userdata('every_days_passowrd_change', '0');
						  redirect(base_url().'changepasswordsetup');exit();
					  }
				  }
   //echo "789";die;
   //$this->session->set_userdata('first_time_passowrd_change', '1'); 
//$this->session->set_userdata('every_days_passowrd_change', '1');   
					  
        	redirect(base_url().'userdashboard');exit(); 
		}
    }

    public function verifypasscode(){
    	$userdata = $this->input->post();
    	$res = $this->User_model->verifypasscode($userdata); 
    }

    public function checkissession(){
		$this->checkPasswordChange(); 
        if (empty($this->session->userdata('is_session_active'))){
            redirect(base_url() . 'logout');die();
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url() . 'index');die();
    }


	public function company(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $data['OriginationData'] = array();
        $urlid = $this->uri->segment(2);
        if(!empty($urlid)){
        	$data['OriginationData'] = $this->User_model->getOrginations($urlid);
        }
        
        // print_r($data['OriginationData']); exit;
		$this->load->view('setup/companyform',$data);
		$this->footer($page);
	}

	public function saveorgination(){
		$this->checkissession();
		$data = $this->input->post();
		$resp = $this->User_model->saveorigination($data);
	}

	public function rptorgination(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $this->load->view('setup/originationlist',$data);
		$this->footer($page);
	}
	public function attendance_google_map(){		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();        
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/attendance_google_map',$data);
		$this->footer($page);
	}
	
	public function attendance_google_map_u(){		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();        
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/attendance_google_map_u',$data);
		$this->footer($page);
	}
	public function leave_list(){		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();        
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/leave_list',$data);
		$this->footer($page);
	}
	
	public function pay_slip(){		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();        
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/pay_slip',$data);
		$this->footer($page);
	}
	public function performanceappraisal(){		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();        
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/performanceappraisal',$data);
		$this->footer($page);
	}
	
	
	public function getemployeelistforattandance_googlemap_poly(){
		
		$this->checkissession();
		$userdata = $this->input->post();
		//print_r($userdata);die;
        $data['attnd'] = $this->User_model->getemployeeslist_attendance_google_map($userdata);
        $data['userdata'] = $userdata;
		//print_r($data);die;
        $this->load->view('setup/attendance_google_map_employeelis',$data);		
	}
	
	public function getemployeelistforattandance_googlemap_poly_u(){
		
		$this->checkissession();
		$userdata = $this->input->post();
		//print_r($userdata);die;
        $data['attnd'] = $this->User_model->getemployeeslist_attendance_google_map_u($userdata);
        $data['userdata'] = $userdata;
		//print_r($data);die;
        $this->load->view('setup/attendance_google_map_employeelis_u',$data);		
	}
	public function leave_listajax_get_data(){
		
		$this->checkissession();
		$userdata = $this->input->post();
		//print_r($userdata);die;
        $data['currentleaves'] = $this->User_model->leave_listajax_get_data($userdata);
        $data['userdata'] = $userdata;
		//print_r($data);die;
        $this->load->view('setup/leave_listajax_get_data',$data);		
	}
	public function pay_slipajax_get_data(){
		
		$this->checkissession();
		$userdata = $this->input->post();
		$date = $this->input->post("attendance");
        $ex = explode("-",$date);
        $year = $ex[0];
        $month = $ex[1];
		//print_r($userdata);die;
       // $data['currentleaves'] = $this->User_model->pay_slipajax_get_data($userdata);
        $data['month'] = $month;
        $data['year'] = $year;
        $data['userdata'] = $userdata;
		//print_r($data);die;
        $this->load->view('setup/pay_slipajax_get_data',$data);		
	}
	
	
	public function googlepinpoints()
	{
		
		$this->checkissession();
		$page = 2;
        $this->header($page);    
         
$employeeid = $this->input->get('employeeid');
$date = $this->input->get('date');
$data['locations'] = $this->User_model->googlemap($employeeid,$date);		
		$this->load->view('setup/googlemap_pinpoints',$data);
		$this->footer($page);

	}
	public function fileterthedata2(){
		
		
        //$data['alldata'] = $this->Performanceappraisalmodel->getalluploadedfiles($userdata);
        //$this->load->view('appraisal/performanceappraisalfilterdata',$data);
		
		
		$this->checkissession();
		$userdata = $this->input->get();		
		$data['attnd'] = $this->User_model->getemployee_stat_doc($userdata);		
        $data['userdata'] = $userdata;
		//print_r($data);die;
        $this->load->view('setup/performanceappraisalfilterdata',$data);
		
		
		
	}
	
	
	

	public function savelegalnotifications(){
		
		$userdata = $this->input->post();
        $resp = $this->User_model->savelegalnotifications($userdata);
    	if($resp == 1){
    		echo '200';exit();
    	}else{
    		echo '400';exit();
        }
		
	}
	
	public function deletefiles(){
	
$userdata = $this->input->post();
        $res = $this->User_model->deletefiles($userdata);
        if($res == 1){
            echo '200'; exit();
        }else{
            echo '500'; exit();
        } 
		
	}
	
	
	public function addnewfilestodocument(){
		
		$userdata = $this->input->post();
        $res = $this->User_model->addnewfilestodocument($userdata);
		
	}
	public function updatelegalnotifications(){

        $userdata = $this->input->post();
        $resp = $this->User_model->updatelegalnotifications($userdata);
    	if($resp == 1){
    		echo '200';exit();
    	}else{
    		echo '400';exit();
        }
		
	}		
	public function getlegalnotifications(){ 

$userdata = $this->input->post();
        $data['info'] = $this->User_model->getlegalnotifications($userdata);
        // print_r($data['info']);
        $this->load->view('setup/editlegalnotificationsform', $data);
		
	}

	
	public function legalnotification(){ 	
		
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;        
		$userdata = $this->input->get();
        $data['cmpmaster'] = $this->User_model->getcompany_master();
		
		$data['info'] = $this->User_model->getlegalnotifications($userdata); 
//echo "<pre>";print_r($data['info']);die;		
        if(count($data['locations'])<=0){
            $data['message']='No Data Found';
        }        
		$this->load->view('setup/legalnotifications',$data);
		$this->footer($page);
		
		
		
	}
	
	
	public function saveappraisal(){
		
        $userdata = $this->input->post();
        if (!is_uploaded_file($_FILES["fileupload"]["tmp_name"])) {
            echo '404'; exit;
        }
        $res = $this->User_model->saveappraisal($userdata);
        if($res == 1){
            echo '200'; exit();
        }else{
            echo '500'; exit();
        }
				
	}
	
	
	
	
	
	
	public function getemployeeattendancehistory(){
		//echo "hi123";die;
		$this->checkissession();
		$userdata = $this->input->get();
		//print_r($userdata);die;
        $data['attnd'] = $this->User_model->getemployeesattendancehistory($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('setup/attendancelistview',$data);
	
	}
	
	public function getemployeeattendancehistory_uu(){
		//echo "hi123";die;
		$this->checkissession();
		$userdata = $this->input->get();
		//print_r($userdata);die;
        $data['attnd'] = $this->User_model->getemployeesattendancehistory_uu($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('setup/attendancelistview_uu',$data);
	
	}
	
	public function getemployeeattendancehistory_u(){
		//echo "hi123";die;
		$this->checkissession();
		$userdata = $this->input->get();
		//print_r($userdata);die;
      // echo "<pre>";
	   $data['attnd'] = $this->User_model->getemployeesattendancehistory_u($userdata);
        //print_r($data['attnd']);die;
		$data['userdata'] = $userdata;
        $this->load->view('setup/attendanceregulationlist_u',$data);
	
	}
	
	
	
	public function approveauthreguattendance(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data =  $this->User_model->admin_regulation_hraccept_approval($userdata);
        echo $data;
    }
	
	
	
	
	public function viewattendanceofemployees(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $this->load->view('setup/attendance',$data);
		$this->footer($page);
	}
	public function viewattendanceofemployees_uu(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $this->load->view('setup/attendance_uu',$data);
		$this->footer($page);
	}
	public function viewattendanceofemployees_u(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
		$data['cmpmaster'] = $this->User_model->getcompany_master(); 
        $this->load->view('setup/attendance_u',$data);
		$this->footer($page);
	}
	
	public function getstates_based_on_branch_master()
    {
        if (isset($_REQUEST['comp_id'])) {
            $comp_id = $_REQUEST['comp_id'];
        } else {
            $comp_id = null;
        }
        if (isset($_REQUEST['div_id'])) {
            $div_id = $_REQUEST['div_id'];
        } else {
            $div_id = null;
        }
        if (isset($_REQUEST['type'])) {
            $type = $_REQUEST['type'];
        } else {
            $type = null;
        }
        //            echo $type;exit;
        $data = $this->User_model->getstates_based_on_branch_master($comp_id, $div_id, $type);
        if (isset($_REQUEST['comp_id'])) {
            echo json_encode($data);
        } else {
            return $data;
        }
        //            print_r($data);
        //            exit;
    }
	
    public function getbranches_based_on_eligibility_state_wise()
    {
        //print_r($_REQUEST);
        if (isset($_REQUEST['comp_id'])) {
            $comp_id = $_REQUEST['comp_id'];
        } else {
            $comp_id = null;
        }
        if (isset($_REQUEST['div_id'])) {
            $div_id = $_REQUEST['div_id'];
        } else {
            $div_id = null;
        }
        if (isset($_REQUEST['state_id'])) {
            $state_id = $_REQUEST['state_id'];
        } else {
            $state_id = null;
        }
        if (isset($_REQUEST['type'])) {
            $type = $_REQUEST['type'];
        } else {
            $type = null;
        }
        if (isset($_REQUEST['is_headoffice'])) {
            $is_headoffice = $_REQUEST['is_headoffice'];
        } else {
            $is_headoffice = null;
        }
        //            echo $state_id.$type;exit;
        $data = $this->User_model->getbranches_based_on_eligibility_state_wise($comp_id, $div_id, $state_id, $type, $is_headoffice);
        // if (isset($_REQUEST['state_id'])) {
        echo json_encode($data);
        // } else {
        //      return $data;
        // }
    }
	public function orginationlist(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getorginationlist($filterdata);
	}

	public function rptauditor(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $this->load->view('setup/auditorlist',$data);
		$this->footer($page);
	}

	public function auditorlist(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getAuditorlist($filterdata);
	}

	public function allclientssetup(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $data['ClientAuditorData'] = array();
        $data['OriginationData'] = $this->User_model->getOrginations();
        $urlid = $this->uri->segment(2);
        if(!empty($urlid)){
        	$data['ClientAuditorData'] = $this->User_model->getClientAuditor($urlid);
        }
		$this->load->view('setup/allclients',$data);
		$this->footer($page);
	}

	public function saveclientAuditor(){
		$this->checkissession();
		$data = $this->input->post();
		$resp = $this->User_model->saveclientAuditor($data);
	}

	public function alluserssetup(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $data['UsersData'] = array();
        $data['OriginationData'] = $this->User_model->getOrginations();
        $urlid = $this->uri->segment(2);
        if(!empty($urlid)){
        	$data['UsersData'] = $this->User_model->getallUser($urlid);
        }
		$this->load->view('setup/allusers',$data);
		$this->footer($page);
	}

	public function saveallUsers(){
		$this->checkissession();
		$data = $this->input->post();
		$resp = $this->User_model->saveallUsers($data);
	}

	public function rptusers(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $this->load->view('setup/userlist',$data);
		$this->footer($page);
	}

	public function userlist(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getallUserList($filterdata);
	}

	public function emailsetup(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
        $data['EmailData'] = array();
        $urlid = $this->uri->segment(2);
        if(!empty($urlid)){
        	$data['EmailData'] = $this->User_model->getEmailSettings($urlid);
        }
		$this->load->view('setup/email-settings',$data);
		$this->footer($page);
	}

	public function saveEmailSettings(){
		$this->checkissession();
		$data = $this->input->post();
		$resp = $this->User_model->saveEmailSettings($data);
	}

	public function rolesandpermissions(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('setup/rolesandpermissions',$data);
		$this->footer($page);
	}

	public function profile(){
		$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('setup/profile',$data);
		$this->footer($page);
	}
	public function changepasswordsetup(){
		//$this->checkissession();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('setup/change-password',$data);
		$this->footer($page);
	}

	public function UpdatePassword(){
		//$this->checkissession();
		$data = $this->input->post();
		echo $resp = $this->User_model->UpdatePassword($data);
	}

	public function userdashboard(){
		$this->checkissession();
		
		if (!$this->session->userdata('is_session_active')) {
			redirect('login');
		}

		$this->load->model('Policy_model');
		$emp_id = $this->session->userdata('session_loginperson_id');

		$pending = $this->Policy_model->pendingPolicies($emp_id);
		if ($pending > 0) {
			redirect('userpolicies');
		}
		//$this->_checkPasswordChange();
		$page = 2;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('dashboard/employee-dashboard',$data);
		$this->footer($page);
	}

	public function usertasks(){
		$this->checkissession();
		$page = 3;
        $this->header($page);
        $data['controller'] = $this;
        $data['OriginationData'] = $this->User_model->getOrginations();
        $data['UsersData'] = $this->User_model->getallUser();
        $data['ClientAuditorData'] = $this->User_model->getClientAuditor();
		$this->load->view('tasks/tasks',$data);
		$this->footer($page);
	}

	public function usertaskslist(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $data['TasksList'] = $this->User_model->getTaskDetails($filterdata);
	}

	public function usertasksform(){
		$this->checkissession();
        $data['controller'] = $this;
        $data['OriginationData'] = $this->User_model->getOrginations();
        $data['UsersData'] = $this->User_model->getallUser();
        $data['ClientAuditorData'] = $this->User_model->getClientAuditor();
        $formdata = $this->input->post();
        $data['TaskData'] = array();
        if(!empty($formdata['id'])){
        	$data['TaskData'] = $this->User_model->getTaskDetails($formdata);
    	}
    	$data['workstatus'] = array('1'=>'Pending','2'=>'Approved','3'=>'Rejected','4'=>'Hold','5'=>'Cancelled');
    	$data['priority'] = array('1'=>'High','2'=>'Medium','3'=>'Low');
		$this->load->view('tasks/taskform',$data);
	}

	public function saveTasks(){
		$this->checkissession();
        $data['controller'] = $this;
        $data = $this->input->post();
		$resp = $this->User_model->saveTasks($data);
	}

	public function usertasksview(){
		$this->checkissession();
		$page = 4;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('tasks/taskfulldetails', $data);
		$this->footer($page);
	}

	public function orginationsummary(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getcompanywisetasksummary($filterdata);
	}

	public function auditorsummary(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getauditorwisetasksummary($filterdata);
	}

	public function usersummary(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getuserwisetasksummary($filterdata);
	}

	public function detailedorginationauditorusersummary(){
		$this->checkissession();
        $data['controller'] = $this;
        $filterdata = $this->input->post();
        $this->User_model->getorginationauditorusertasksummary($filterdata);
	}

	public function uploadclients(){
		$this->checkissession();
		$page = 4;
        $this->header($page);
        $data['controller'] = $this;
		$this->load->view('uploadclients/clients',$data);
		$this->footer($page);
	}

   public function uploadclientsexcel() {
    $this->checkissession();
    $data['controller'] = $this;
    $filterdata = $this->input->post();
    if(empty($filterdata['formtype'])){
        $resp = array('error' => 400, 'message' => 'Please Select Form Type');
        echo json_encode($resp); exit;
    }
    if($filterdata['formtype'] == 2){
        if (!isset($_FILES["uploadFile"]) || $_FILES["uploadFile"]["error"] != 0) {
            $resp = array('error' => 400, 'message' => 'Please upload a valid Excel file to process');
            echo json_encode($resp); exit;
        }

        $tmpFile = $_FILES["uploadFile"]["tmp_name"]; // Read directly from temporary file

        // Load PHPExcel library
        $this->load->library('PHPExcel/Classes/PHPExcel.php');

        try {
            $inputFileType = PHPExcel_IOFactory::identify($tmpFile);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($tmpFile);

            // Read data from the first sheet
            $worksheet = $objPHPExcel->getActiveSheet();
            $allDataInSheet = $worksheet->toArray(null, true, true, true);

            if (empty($allDataInSheet)) {
                $resp = array('error' => 400, 'message' => 'The uploaded file is empty.');
                echo json_encode($resp); exit;
            }

            // Extract column headers from the first row
            $headers = array_values($allDataInSheet); // Get headers
            unset($allDataInSheet[1]); // Remove header row from the dataset

            if (empty($headers)) {
                $resp = array('error' => 400, 'message' => 'Invalid file format. No headers found!');
                echo json_encode($resp); exit;
            }

            $dataRows = [];
            foreach ($allDataInSheet as $row) {
                $dataRows[] = array_combine($headers[0], array_values($row));
            }

            if(count($dataRows) > 0){
                $resp = $this->User_model->uploadclientsexcel($dataRows);
            }

        } catch (Exception $e) {
            die('Error reading file: ' . $e->getMessage());
        }
    }else if($filterdata['formtype'] == 1){
        $this->User_model->getclientexceldata($filterdata);
    }
}

	public function UserPolicies()
	{
		/* 1️⃣ LOGIN CHECK */
		if (!$this->session->userdata('is_session_active')) {
			return $this->load->view('logins/login');
		}

		/* 2️⃣ EMPLOYEE CHECK */
		$emp_id = $this->session->userdata('session_loginperson_id');
		if (!$emp_id) {
			//ssredirect('login');
			redirect(base_url() . 'login');
			return;
		}

		/* 3️⃣ LOAD DATA */
		$this->load->model('Policy_model');

		$data['UsersData']   = $this->Policy_model->get_all_policies();
		$data['acknowledged'] = $this->Policy_model->get_acknowledged_policy_ids($emp_id);
		$data['acknowledged'] = array_column(
			$data['acknowledged'],
			'policy_id'
		);


		/* 4️⃣ CHECK IF ALL POLICIES COMPLETED */
		$pending = $this->Policy_model->pendingPolicies($emp_id);
		if ($pending === 0) {
			//redirect('userdashboard');
			redirect(base_url() . 'verifylogin');
			return;
		}

		/* 5️⃣ LOAD POLICY PAGE */
		$page = 2;
		$this->PolicyHeader($page);

		$data['controller'] = $this;
		$this->load->view('policy/policy', $data);

		$this->PolicyFooter($page);
	}



	public function acknowledge()
	{
		if (!$this->input->is_ajax_request()) {
			show_error('No direct script access allowed', 403);
		}

		$emp_id   = $this->session->userdata('session_loginperson_id');
		$policy_id = $this->input->post('policy_id');

		if (!$emp_id || !$policy_id) {
			echo json_encode(['status'=>'error']);
			return;
		}

		if ($this->Policy_model->is_already_acknowledged($emp_id, $policy_id)) {
			echo json_encode([
				'status' => 'already_acknowledged'
			]);
			return;
		}

		$this->Policy_model->save_acknowledgment([
			'mx_emp_id_fk' => $emp_id,
			'policy_id_fk' => $policy_id,
			'created' => date('Y-m-d H:i:s')
		]);

		echo json_encode([
			'status' => 'success'
		]);
	}

}

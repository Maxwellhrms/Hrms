<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Common.php';
class Employee extends Common {

    public function __construct(){
        parent::__construct();
        $this->load->model('EmployeeModel');
    }

    public function checkloginaccess(){
        $userdata = $this->input->post();
        $res = $this->EmployeeModel->checkloginaccess($userdata); 
    }
    
	public function index()
	{
        if (!empty($this->session->userdata('is_session_active'))) {
            redirect(base_url().'Employee/employeedashboard');
            exit();
        }
		$this->load->view('index');
	}
    # Start Dash Board
    public function employeedashboard()
    {
        $this->checkissession();
        $emp_id = $this->session->userdata('session_loginperson_id');
        $pending = $this->EmployeeModel->pendingPolicies($emp_id);
        if ($pending > 0) {
            // redirect to policy page if not completed
            redirect(base_url() . 'Employee/userpolicies');
            exit();
        }
        $data['dashboard'] = $this->EmployeeModel->employeeDashboard();
        #echo '<pre>'; print_r($data['dashboard']['avgattendance']);exit;
        $this->header();
        $this->load->view('dashboard/employeeDashboard',$data);
        $this->footer();
    }
    public function managerdashboard(){
        $this->checkissession();
        $emp_id = $this->session->userdata('session_loginperson_id');
        $pending = $this->EmployeeModel->pendingPolicies($emp_id);
        if ($pending > 0) {
            // redirect to policy page if not completed
            redirect(base_url() . 'Employee/userpolicies');
            exit();
        }
        // $data['assignedemployees'] = $this->EmployeeModel->getemployeeidsassignedtomanagers();
        // print_r($data['assignedemployees']); exit;
        $data['controller'] = $this;
        $this->header();
        $this->load->view('dashboard/managerDashboard',$data);
        $this->footer();
    }

    public function getassignedemployeesassignedtomanagerattendanceList(){
        $this->checkissession();
        $userdata = $this->input->post();
        // print_r($userdata);exit;
        $data['dashboard'] = $this->EmployeeModel->managersAssignedEmployees($userdata);
        // print_r($dashboard); exit;
        $this->load->view('dashboard/employeesassignedtomanagers',$data);
    }

    public function getRegulationsLeavesList(){
        $this->checkissession();
        $userdata = $this->input->post();
        $data['dashboardLeavesRegulations'] = $this->EmployeeModel->managersAssignedEmployeesRegulationsLeaves($userdata);
        $this->load->view('dashboard/leavesregulationsList',$data);
    }

    public function employeedeatiledsummary(){
        $this->checkissession();
        $data['controller'] = $this;
        $this->header();
        $this->load->view('dashboard/employeedeatiledsummary',$data);
        $this->footer();
    }

    public function employeedeatiledsummaryList(){
        $this->checkissession();
        $userdata = $this->input->post();
        $data['incrementData'] = $this->EmployeeModel->getEmployeeIncrementChartData($userdata);
        $data['dashboarddetails'] = $this->EmployeeModel->allemployeesattendancesummary($userdata);
        // echo '<pre>';
        // print_r($data['dashboarddetails']); exit;
        $data['userfilters'] = $userdata;
        $this->load->view('dashboard/employeedeatiledsummaryList',$data);
    }

    public function getAllEmployeesAttendance(){
        $this->checkissession();
        $userdata = $this->input->post();
        if($userdata['type'] == 'INCREMENT'){
            $data['popupdetails'] = $this->EmployeeModel->getAllEmployeesIncrements($userdata);
        }elseif ($userdata['categories'] == 'PENDING') {
            $data['popupdetails'] = $this->EmployeeModel->getAllEmployeesleaveesrequest($userdata);
        }else{
            $data['popupdetails'] = $this->EmployeeModel->getAllEmployeesAttendance($userdata);
        }
        $this->load->view('dashboard/attendancepopupList',$data);
    }
    # End Dash Board
    # Start Policy Info
    public function UserPolicies(){
        $this->checkissession();

        $emp_id = $this->session->userdata('session_loginperson_id');

        $pending = $this->EmployeeModel->pendingPolicies($emp_id);
        if ($pending === 0) {
            redirect(base_url().'Employee/employeedashboard');
            return;
        }

        $data['UsersData']   = $this->EmployeeModel->get_all_policies();
        $data['acknowledged'] = $this->EmployeeModel->get_acknowledged_policy_ids($emp_id);
        $data['acknowledged'] = array_column(
            $data['acknowledged'],
            'policy_id_fk'
        );

        $this->header(array('is_policy' => $pending));
        $this->load->view('policy/policy', $data);
        $this->footer();
    }

    public function policies(){
        $this->checkissession();

        /*  EMPLOYEE CHECK */
        $emp_id = $this->session->userdata('session_loginperson_id');


        $data['UsersData'] = $this->EmployeeModel->get_all_policies();
        $data['acknowledged'] = $this->EmployeeModel->get_acknowledged_policy_ids($emp_id);
        //echo "<pre>";print_r($data['acknowledged']);exit();

        $data['acknowledged'] = array_column(
            $data['acknowledged'],
            'policy_id_fk'
        );

        $pending = $this->EmployeeModel->pendingPolicies($emp_id);

        if ($pending > 0) {
            redirect(base_url() . 'Employee/userpolicies');
            return;
        }

        $this->header();
        $this->load->view('policy/user_policy', $data);

        $this->footer();
    }

    public function acknowledge(){
        $this->checkissession();
        if (!$this->input->is_ajax_request()) {
            show_error('No direct script access allowed', 403);
        }

        $emp_id   = $this->session->userdata('session_loginperson_id');
        $policy_id = $this->input->post('policy_id');

        if (!$emp_id || !$policy_id) {
            echo json_encode(array('status'=>'error'));
            return;
        }

        if ($this->EmployeeModel->is_already_acknowledged($emp_id, $policy_id)) {
            echo json_encode(array(
                'status' => 'already_acknowledged'
            ));
            return;
        }

        $this->EmployeeModel->save_acknowledgment(array(
            'mx_emp_id_fk' => $emp_id,
            'policy_id_fk' => $policy_id,
            'created' => date('Y-m-d H:i:s')
        ));

        echo json_encode(array(
            'status' => 'success'
        ));
    }
    # End Policy Info

    # Start Attendance
    public function employeeattendancepunch(){
        $this->checkissession();
        $this->header();
        $data['title']= "Employee Attendance Punch History";
        $data['controller'] = $this;
        $data['punchhistory'] = $this->EmployeeModel->punch_history();
        $data['statistics'] = $this->EmployeeModel->getAttendanceDashboard();
        $data['presentAttendance'] = $this->EmployeeModel->getPresentAttendance();
        // echo '<pre>'; print_r($data['statistics']);exit;
        $this->load->view('attendance/attendanceemployee', $data);
        $this->footer();
    }

    public function employeepunchhistoryList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->currentattendanceList($userdata);
    }
    # End Attendance

    public function employeepayslips(){
        $this->checkissession();
        $this->header();
        $data['title']= "Employee Yearly Payslips";
        $data['controller'] = $this;
        $this->load->view('payslips/employeepayslips', $data);
        $this->footer();
    }

    public function employeespayslipsList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->employeespayslipsList($userdata);
    }

    public function downloadPayslip() {
        $this->load->helper('download');

        $file = basename($this->input->get('file')); // prevent path traversal
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/payslips/' . $file;

        if (!file_exists($path)) {
            show_404();
        }

        force_download($path, NULL);
    }

    # Start Password
    public function changepassword(){
        $this->checkissession();
        $this->header();
        $data['title']= "Change Employee Login Password ";
        $this->load->view('common/changepassword',$data);
        $this->footer();
    }

    public function UpdatePassword(){
        $this->checkissession();
        $data = $this->input->post();
        $oldpswd = trim($data['oldpassword'] ?? '');
        $newpswd = trim($data['newpassword'] ?? '');
        $cnfpswd = trim($data['confirmpassword'] ?? '');
        if (empty($oldpswd)) {
            echo json_encode([
                'statusCode' => 400,
                'type' => 'error',
                'message' => 'Old password is required'
            ]);
            return;
        }

        if (empty($newpswd)) {
            echo json_encode([
                'statusCode' => 400,
                'type' => 'error',
                'message' => 'New password is required'
            ]);
            return;
        }

        if (empty($cnfpswd)) {
            echo json_encode([
                'statusCode' => 400,
                'type' => 'error',
                'message' => 'Confirm password is required'
            ]);
            return;
        }
        $resp = $this->EmployeeModel->UpdatePassword($data);
    }
    # End Password

    # Start Employee Profile
    public function employeesprofile(){
        $this->checkissession();
        $this->header();
        $data['emp'] = $this->EmployeeModel->getemployeecompletedetails();
        
        // echo '<pre>';
        // print_r($data);
        // exit();
        $this->load->view('employee/employeesprofile', $data);
        $this->footer();
    }

    public function employeemodalpopup(){
        $this->checkissession();
        $data['relation'] = array( 'Father'=>'Father', 'Mother'=>'Mother', 'Brother'=>'Brother' ,'Sister'=>'Sister','Husband'=>'Husband','Wife'=>'Wife','Children'=>'Children' );
        $data['controller'] = $this;
        $userdata = $this->input->post();
        $page       = $this->input->post('page');
        $familyid   = $this->input->post('familyid');
        $employeeid = $this->input->post('employeeid');
        $data['details'] = $this->EmployeeModel->family($employeeid,$familyid);
        $data['pageTitleName'] = $page;
        if($page == 'familyinfo'){
            $this->load->view('employee/modalpops/familymodalpopups', $data);
        }
    }

    public function updateemployeeinfo(){
        $this->checkissession();
        $userdata = $this->input->post();
        $this->EmployeeModel->updateemployeeinfo($userdata);
    }
    # End Employee Profile

    # Holidays
    public function holidayslist(){
        $this->checkissession();
        $this->header();
        $data['title'] = "Holidays List";
        $data['holidayslist'] = $this->EmployeeModel->getHolidaysList();
        $this->load->view('common/holidays', $data);
        $this->footer();
    }
    # Holidays


    # Leaves Start
    public function employeesleaves(){
        $this->checkissession();
        $this->header();
        $data['controller'] = $this;
        $data['title']= 'Employee Self Leaves';       
        $data['leavesummary'] = $this->EmployeeModel->getLeaveSummary();
        // print_r($data['leavesummary']); exit;
        $this->load->view('leaves/selfemployeeleaves', $data);
        $this->footer();
    }

    public function employeesleaveshistoryList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->employeesleaveshistoryList($userdata);
    }  

    # Manger level leaves 
    public function managerApprovalLeaves(){
        $this->checkissession();
        $this->header();
        $data['controller'] = $this;
        $data['title']= 'Manager Employee Leaves';       
        // $data['managerleaveemployeesummary'] = $this->EmployeeModel->manageremployeesleavesList($data);
        $this->load->view('leaves/manageremployeeleaves', $data);
        $this->footer();
    }

    public function manageremployeesleaveshistoryList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->manageremployeesleavesList($userdata);
    } 

    # End Leaves

    # Regulations
     public function employeesRegulations(){
        $this->checkissession();
        $this->header();
        $data['controller'] = $this;
        $data['title']= 'Employee Self Regulations';       
        $data['regulationsummary'] = $this->EmployeeModel->getRegulationSummary();
        // print_r($data['regulationsummary']); exit;
        $this->load->view('regulations/selfemployeeregulations', $data);
        $this->footer();
    }

    public function employeesRegulationsList(){
        $this->checkissession();
        $userdata = $this->input->post();
        // echo $this->EmployeeModel->employeesleaveshistoryList($userdata);
        echo $this->EmployeeModel->employeesRegulationsList($userdata);
    }  
    
    public function managerApprovalRegulations(){
        $this->checkissession();
        $this->header();        
        $data['controller'] = $this;
        $data['title']= 'Manager Employee Regulations';       
        $this->load->view('regulations/manageremployeeregulations', $data);
        $this->footer();
    }

    public function manageremployeesregulationhistoryList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->manageremployeesregulationList($userdata);
    }
    # End Regulations
    # Employee Loans
    public function employeeLoanslist(){
        $this->checkissession();
        $this->header();
        $data['title'] = "Employee Loans List";
        $this->load->view('loans/loancards', $data);
        $this->footer();
    }

    public function getEmployeesLoansList(){
        $this->checkissession();
        $userdata = $this->input->post();
        $data['loanslist'] = $this->EmployeeModel->getEmployeesLoansList($userdata);
        $this->load->view('loans/loancardslist', $data);
    }
    # End Employee Loans
    # Manager Team Members
    public function managerTeamMembers(){
        $this->checkissession();
        $this->header();
        $data['title']= "Your Team Members";
        $data['controller'] = $this;
        $this->load->view('manager/managerteammembers', $data);
        $this->footer();
    }

    public function managerteammembersList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->managerteammembersList($userdata);
    }
    # End Manager Team Members

    # Employee Geo Locations
    public function managerTeamMembersGeoLocationAttendance(){
        $this->checkissession();
        $this->header();
        $data['title']= "Your Team Members Geo Location Attendance";
        $data['controller'] = $this;
        $this->load->view('attendance/managerteammembersgeolocationattendance', $data);
        $this->footer();
    }

    public function managerTeamMembersGeoLocationAttendanceList(){
        $this->checkissession();
        $userdata = $this->input->post();
        echo $this->EmployeeModel->managerTeamMembersGeoLocationAttendanceList($userdata);
    }

    public function TeamMembersGeoLocationAttendance(){
        $this->checkissession();
        $this->header();
        $data['title']= "Geo Location Attendance";
        $data['controller'] = $this;
        $employeeid = $this->input->get('employeeid');
        $date = $this->input->get('date');
        $data['locations'] = $this->EmployeeModel->googlemap($employeeid,$date);
        // echo '<pre>'; print_r( $data['locations']);exit;
        $this->load->view('attendance/geolocationattendance', $data);
        $this->footer();
    }
    # End Employee Geo Locations
}

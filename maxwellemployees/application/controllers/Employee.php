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
        $data['assignedemployees'] = $this->EmployeeModel->getemployeeidsassignedtomanagers();
        // print_r($data['assignedemployees']); exit;
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
        // $data['controller'] = $this;
        $this->load->view('employee/employeesprofile', $data);
        $this->footer();
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
    # End Regulations


}

<?php

error_reporting(0);
defined('BASEPATH') or exit('No Direct Script Acesses Allowed');

class EmployeeModel extends CI_Model
{

    protected $imglink = 'uploads/';

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('DashBoardModel');
        $this->load->model('CommonModel');
    }
    
    public function checkloginaccess($data){
        $employeeCode = $data['employeeCode'];
        $password = $data['password'];
        $count = 0;
        
        $this->db->select('mxemp_emp_lg_employee_id,mxemp_emp_lg_fullname,mxemp_emp_lg_role,maxuser_roles_add,maxuser_roles_edit,maxuser_roles_delete,mxemp_emp_inbranch,mxemp_emp_custom_branch,mxemp_emp_img,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_state_code,mxemp_emp_branch_code,mxemp_emp_dept_code,mxemp_emp_type');
        $this->db->from('maxwell_employees_login');
        $this->db->join('maxwell_user_roles', 'maxuser_roles_id = mxemp_emp_lg_role', 'INNER');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_lg_employee_id = mxemp_emp_id', 'INNER');
        $this->db->where('mxemp_emp_lg_employee_id', $employeeCode);
        $this->db->where('mxemp_emp_lg_password', $password);
        $this->db->where('mxemp_emp_lg_desktop_status = 1');
        $this->db->where('mxemp_emp_lg_desktop_permissions = 1');
        $this->db->where('mxemp_emp_resignation_status !=', 'R');
        $this->db->where('mxemp_emp_status', 1);
        $query = $this->db->get();
        $count = count($query->row());
        #echo $this->db->last_query();exit;
        if($count == 1){
            $qry = $query->result();
            if(empty($qry[0]->mxemp_emp_img)){
                $userimg = base_url().'assets/img/user.jpg';
            }else{
                $userimg = HRADMINROOTDOCUMENT.$qry[0]->mxemp_emp_img;
            }
            $this->session->set_userdata('session_loginperson_id', $qry[0]->mxemp_emp_lg_employee_id);
            $this->session->set_userdata('session_company', $qry[0]->mxemp_emp_comp_code);
            $this->session->set_userdata('session_division', $qry[0]->mxemp_emp_division_code);
            $this->session->set_userdata('session_state', $qry[0]->mxemp_emp_state_code);
            $this->session->set_userdata('session_branch', $qry[0]->mxemp_emp_branch_code);
            $this->session->set_userdata('session_name', $qry[0]->mxemp_emp_lg_fullname);
            $this->session->set_userdata('session_types', $qry[0]->mxemp_emp_lg_role);
            $this->session->set_userdata('session_email', $qry[0]->Email);
            $this->session->set_userdata('session_department', $qry[0]->mxemp_emp_dept_code);
            $this->session->set_userdata('is_session_active', 1);
            $this->session->set_userdata('session_img', $userimg);
            $this->session->set_userdata('session_typeid', $qry[0]->mxemp_emp_type);

            $empcount = $this->getemployeeidsassignedtomanagers();
            if(count($empcount) > 0){
                $this->session->set_userdata('is_approvals', 1);
            }else{
                $this->session->set_userdata('is_approvals', 0);
            }

            $emp_id=$qry[0]->mxemp_emp_lg_employee_id;
            $insert_date=date('Y-m-d');
            
            $data=$this->db->query("INSERT INTO login_attempts (emp_id, login_date)VALUES ('$emp_id', '$insert_date');"); 
           
           echo $resp = json_encode(array('statusCode' => 200, 'message' => 'Success'));
            }else{
           echo $resp = json_encode(array('statusCode' => 400, 'errorMsg' => 'Invalid Details or You Dont Have Access'));
        }

    }

    # Start Policy Info
    public function pendingPolicies($emp_id){
        // Total active policies
        $total = $this->db
            ->where('status', 1) // if you have status column
            ->count_all_results('maxwell_employees_policies'); // master policy table

        // Policies acknowledged by employee
        $acknowledged = $this->db
            ->where('mx_emp_id_fk', $emp_id)
            ->count_all_results('maxwell_employees_policy_activity');

        //echo $total."-----".$acknowledged;exit();

        return max(0, $total - $acknowledged);
    }

    public function get_all_policies(){
        return $this->db
            ->where('status', 1)
            ->order_by('id', 'ASC')
            ->get('maxwell_employees_policies')
            ->result();
    }

    public function get_acknowledged_policy_ids($emp_id){
        $sql =  $this->db
            ->select('policy_id_fk')
            ->where('mx_emp_id_fk', $emp_id)
            ->get('maxwell_employees_policy_activity');
        // echo $this->db->last_query();exit();
            return $sql->result_array();

        //return array_column($rows, 'policy_id_fk');
    }
    
    public function is_already_acknowledged($emp_id, $policy_id){
        return $this->db
                ->where('mx_emp_id_fk', $emp_id)
                ->where('policy_id_fk', $policy_id)
                ->count_all_results('maxwell_employees_policy_activity') > 0;
    }

    public function save_acknowledgment($data){
        return $this->db->insert(
            'maxwell_employees_policy_activity',
            $data
        );
    }
    # End Policy Info

    #Attendance History
    public function calculatetotalworkinghours($userfirstpunch,$userlastpunch,$attendancedate){
        $firstpunch = $attendancedate.' '.$userfirstpunch;
        $lastpunch = $attendancedate.' '.$userlastpunch;
        $d1 = new DateTime($firstpunch);
        $d2 = new DateTime($lastpunch);
        $interval = $d1->diff($d2);
        $diffInSeconds = $interval->s; //45
        $diffInMinutes = $interval->i; //23
        $diffInHours   = $interval->h; //8
        $diffInDays    = $interval->d; //21
        $diffInMonths  = $interval->m; //4
        $diffInYears   = $interval->y; //1
        return $diffInHours . ':' .$diffInMinutes;
    }


public function getAttendanceDashboard(){
    $employeeid = $this->session->userdata('session_loginperson_id');
    $year = date('Y');
    $tablename = 'employee_punches_' . $year;

    $today = date('Y-m-d');
    $week_start = date('Y-m-d', strtotime('monday this week'));
    $month_start = date('Y-m-01');
    $month_end = date('Y-m-t'); //  FULL MONTH END

    // Targets
    $daily_target = 8.5;
    $weekly_target = 8.5 * 6;

    // Fetch data
    $this->db->select('attendance_date, attendance_time');
    $this->db->from($tablename);
    $this->db->where('employee_code', $employeeid);
    $this->db->order_by('attendance_date, attendance_time');

    $allData = $this->db->get()->result();

    $daily = [];

    // FIX: proper datetime handling
    foreach ($allData as $row) {
        $date = $row->attendance_date;

        if (strlen($row->attendance_time) > 8) {
            $time = strtotime($row->attendance_time);
        } else {
            $time = strtotime($row->attendance_date . ' ' . $row->attendance_time);
        }

        if (!isset($daily[$date])) {
            $daily[$date] = ['min' => $time, 'max' => $time];
        } else {
            if ($time < $daily[$date]['min']) $daily[$date]['min'] = $time;
            if ($time > $daily[$date]['max']) $daily[$date]['max'] = $time;
        }
    }

    // Helper: calculate hours
    $calcHours = function ($from, $to) use ($daily) {
        $total = 0;

        foreach ($daily as $date => $d) {
            if ($date >= $from && $date <= $to && $d['min'] != $d['max']) {
                $total += ($d['max'] - $d['min']);
            }
        }

        return $total / 3600;
    };

    $today_hours = $calcHours($today, $today);
    $week_hours  = $calcHours($week_start, $today);
    $month_hours = $calcHours($month_start, $today);

    // FULL MONTH WORKING DAYS (Mon–Sat)
    $workingDays = 0;
    $temp = $month_start;

    while (strtotime($temp) <= strtotime($month_end)) {
        if (date('N', strtotime($temp)) != 7) { // exclude Sunday
            $workingDays++;
        }
        $temp = date('Y-m-d', strtotime($temp . ' +1 day'));
    }

    $monthly_target = $workingDays * $daily_target;

    // OVERTIME
    $total_overtime = 0;

    foreach ($daily as $date => $d) {
        if ($d['min'] != $d['max']) {
            $worked = ($d['max'] - $d['min']) / 3600;

            if ($worked > $daily_target) {
                $total_overtime += ($worked - $daily_target);
            }
        }
    }

    $formatHours = function ($hours) {
        $totalSeconds = floor($hours * 3600); //  no rounding

        $h = floor($totalSeconds / 3600);
        $m = floor(($totalSeconds % 3600) / 60);

        return sprintf('%02d:%02d', $h, $m);
    };
    //  FINAL STATISTICS
    $statistics = [
        'today' => [
            'worked' => $formatHours($today_hours),
            'target' => $formatHours($daily_target),
            'remaining' => $formatHours(max(0, $daily_target - $today_hours)),
            'percentage' => ($daily_target > 0) 
                ? min(100, round(($today_hours / $daily_target) * 100, 2)) 
                : 0
        ],
        'week' => [
            'worked' => $formatHours($week_hours),
            'target' => $formatHours($weekly_target),
            'remaining' => $formatHours(max(0, $weekly_target - $week_hours)),
            'percentage' => ($weekly_target > 0) 
                ? min(100, round(($week_hours / $weekly_target) * 100, 2)) 
                : 0
        ],
        'month' => [
            'worked' => $formatHours($month_hours),
            'target' => $formatHours($monthly_target),
            'remaining' => $formatHours(max(0, $monthly_target - $month_hours)),
            'percentage' => ($monthly_target > 0) 
                ? min(100, round(($month_hours / $monthly_target) * 100, 2)) 
                : 0
        ],
        'overtime' => [
            'worked' => $formatHours($total_overtime),
            'target' => 0,
            'remaining' => 0,
            'percentage' => 0
        ]
    ];

    return [
        'statistics' => $statistics
    ];
}

    public function punch_history(){

        $month = date('m');
        $year = date('Y');
        $empcode = $this->session->userdata('session_loginperson_id');
        $attandace_date = date('Y-m-d');
        //  if (strlen($month) == 1) {
        //     $month = '0' . $this->cleanInput($data['month']);
        // }

        $this->db->select('mx_attendance_cmp_id,mx_attendance_date,mx_attendance_first_half,mx_attendance_second_half,mx_attendance_first_half_punch,mx_attendance_second_half_punch,mx_attendance_entry_type');
        $this->db->from('maxwell_attendance_' . $year . '_' . $month . '');
        $this->db->where('mx_attendance_emp_code',$empcode);
        $this->db->where('mx_attendance_date',$attandace_date);
        $query = $this->db->get();
        $qry = $query->result();

        $this->db->select('mxcp_firsthalf_time,mxcp_secondhalf_time,mxcp_logoff_time,mxcp_secondbreak_time,mxcp_secondbreak_endtime');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_status = 1');
        $this->db->where('mxcp_id',$qry[0]->mx_attendance_cmp_id);
        $querys = $this->db->get();
        $qry1 = $querys->result();
        if(!empty($qry[0]->mx_attendance_second_half_punch)){
        $employeepunches = $qry[0]->mx_attendance_first_half_punch.','.$qry[0]->mx_attendance_second_half_punch;
        }else{
        $employeepunches = $qry[0]->mx_attendance_first_half_punch;    
        }
        if(!empty($employeepunches)){
            $punchtime = $employeepunches;
            $getallpunches = explode(',', $punchtime);
           
            $userfirstpunch = $getallpunches[0];
            $userlastpunch = $getallpunches[count($getallpunches) - 1];
            $entrytypes = explode(',', $qry[0]->mx_attendance_entry_type);
            
            if(empty($userfirstpunch)){
            $userfirstpunch = $userlastpunch;
            }
            
            $resp['firstpunch'] = $userfirstpunch;
            $resp['lastpunch'] = $userlastpunch;
            $resp['attendance'] = $attandace_date;
            $resp['type'] = $entrytypes;
            if(!empty($userfirstpunch) && !empty($userlastpunch)){
            $resp['total'] = $this->calculatetotalworkinghours($userfirstpunch,$userlastpunch,$attandace_date);
            }else{
            $resp['total'] = '';
            }
            $resp['punches'] = $getallpunches;
            if(strtotime($userlastpunch) > strtotime($qry1[0]->mxcp_logoff_time)){
                $userfirstpunch = $qry1[0]->mxcp_logoff_time;
                $resp['ot'] = $this->calculatetotalworkinghours($userfirstpunch,$userlastpunch,$attandace_date);
            }
        }else{
            $resp['firstpunch'] = '';
            $resp['lastpunch'] = '';
            $resp['attendance'] = '';
            $resp['total'] = '';
            $resp['punches'] = array();
            $resp['type'] = array();
            $resp['ot'] = '';
        }
        return $resp;       
    }

    public function currentattendanceList($data){
        $employeeid = $this->session->userdata('session_loginperson_id');
        $attendancedate = $data['fromdate'];
        $month = date('m',strtotime($attendancedate));
        $year = date('Y',strtotime($attendancedate));
        if (strlen($month) == 1) {
            $month = '0' . $this->cleanInput($data['month']);
        }
        $tablename = 'employee_punches_' . $year;
        $attendance_table = 'maxwell_attendance_' . $year . '_' . $month;
          
        $this->db->select('id,employee_code,mxemp_emp_fname,mxemp_emp_lname,attendance_date,attendance_time,entry_type, MIN(attendance_time) as first_punch,
    CASE 
        WHEN MIN(attendance_time) = MAX(attendance_time) 
        THEN NULL 
        ELSE MAX(attendance_time) 
    END as last_punch,mx_attendance_first_half,mx_attendance_second_half');
        $this->db->from($tablename);
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = employee_code', 'INNER');
        $this->db->join($attendance_table, 'mx_attendance_emp_code = employee_code AND mx_attendance_date = attendance_date', 'LEFT');
        $this->db->where('employee_code', $employeeid);
        if (!empty($data['fromdate'])) {
            $this->db->where('attendance_date >=', date('Y-m-d',strtotime($data['fromdate'])) . ' 00:00:00');
        }
        if (!empty($data['todate'])) {
            $this->db->where('attendance_date <=', date('Y-m-d',strtotime($data['todate'])) . ' 23:59:59');
        }
        $this->db->group_by('attendance_date');
        $this->db->order_by('attendance_date','DESC');
        $query1 = $this->db->get();
        // echo $this->db->last_query();exit;
        // rolback
        $qry1 = $query1->result();
        $num = $query1->num_rows();

       $retrunarray = array();

        foreach ($qry1 as $key => $val){
            $buldarray = (object)array(
                "employee_code" => $val->employee_code,
                "mxemp_emp_fname" => $val->mxemp_emp_fname.' '.$val->mxemp_emp_lname,
                "attendance_date" => $val->attendance_date,
                "first_punch" => !empty($val->first_punch) ? date('H:i:s', strtotime($val->first_punch)) : 'N/A',
                "mx_attendance_first_half" => $val->mx_attendance_first_half,
                "last_punch" => !empty($val->last_punch) ? date('H:i:s', strtotime($val->last_punch)) : 'N/A',
                "mx_attendance_second_half" => $val->mx_attendance_second_half,
                "id" => $val->id,
                );
            array_push($retrunarray,$buldarray);   
        }
        // return $retrunarray;   
        $columns = [
            'employee_code',
            'mxemp_emp_fname',
            'attendance_date',
            'first_punch',
            'mx_attendance_first_half',
            'last_punch',
            'mx_attendance_second_half',
            // 'id'
        ]; 

        $renameHeaderColumns = [
            'employee_code' => 'Employee Code',
            'mxemp_emp_fname' => 'Employee Name', 
            'attendance_date' => 'Attendance Date',
            'first_punch' => 'First Punch Time',
            'mx_attendance_first_half' => 'First Punch',
            'last_punch' => 'Last Punch Time',
            'mx_attendance_second_half' => 'Last Punch',
            // 'id' => 'Edit'
        ]; 

        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array(),
        );

        // Define columns for links and edit actions
        $urllink = '';
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array('id'); // Columns with edit options
        // $editColumns = array(
        //     'id' => array(
        //         'AddFunction' => 'editAttendance',
        //         'AddModelFunction' => 'loadAttendanceData',
        //         'CallID' => 'attendanceModal'
        //     )
        // );
        $hideColumn = array();
        $hideInExport = array();
        $reportName = 'Employees Punch History';
        $processData = array(
            'retrunarray' => $retrunarray,
            'columns' => $columns,
            'linkColumns' => $linkColumns,
            'editColumns' => $editColumns,
            'dataMappingColumns' => $dataMappingColumns,
            'renameHeaderColumns' => $renameHeaderColumns,
            'hideColumn' => $hideColumn,
            'reportName' => $reportName,
            'hideInExport' => $hideInExport,
        );
        // print_r($processData);exit;
        echo dynamicTable($processData);

    }

    public function getPresentAttendance(){
        $year = date('Y');
        $month = date('m');
        $emp_code = $this->session->userdata('session_loginperson_id');

        $this->db->select("
            SUM(
                (CASE WHEN mx_attendance_first_half = 'PR' THEN 0.5 ELSE 0 END) +
                (CASE WHEN mx_attendance_second_half = 'PR' THEN 0.5 ELSE 0 END)
            ) as total_pr_days
        ");
        $this->db->from("maxwell_attendance_" . $year . "_" . $month);
        $this->db->where("mx_attendance_status", 1);
        $this->db->where("mx_attendance_emp_code", $emp_code);

        $query = $this->db->get();
        $result = $query->row();

        $total_pr_days = $result->total_pr_days ?? 0;

        $total_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        $percentage = 0;
        if ($total_days > 0) {
            $percentage = ($total_pr_days / $total_days) * 100;
        }

        return array(
            'totalPR'     => $total_pr_days,
            'totalDays'   => $total_days,
            'percentage'  => round($percentage, 2)
        );
    }
    #Attendance History

    #Payslips
    public function employeespayslipsList($data){

        $employeeid = $this->session->userdata('session_loginperson_id');
        $empname    = $this->session->userdata('session_name');
        $yearFilter = !empty($data['year']) ? $data['year'] : '';

        // ✅ Correct server path
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/payslips/';

        if (!is_dir($path)) {
            echo "Payslip directory not found";
            return;
        }

        $files = scandir($path);

        $retrunarray = [];

        foreach ($files as $file) {

            if ($file == '.' || $file == '..') continue;

            // Match: 04-2025-M0170.pdf
            if (preg_match('/(\d{2})-(\d{4})-(.+)\.pdf$/', $file, $parts)) {

                $month   = $parts[1];
                $year    = $parts[2];
                $empCode = $parts[3];

                if ($empCode != $employeeid) continue;
                if (!empty($yearFilter) && $year != $yearFilter) continue;

                $fileDate = strtotime($year . '-' . $month . '-01');

                $downloadUrl = base_url('Employee/downloadPayslip?file='.$file);

                $retrunarray[] = (object)[
                    "employee_code" => $empCode,
                    "employee_name" => $empname,
                    "payslip_month" => date('F Y', $fileDate),
                    "download" => '<a href="'.$downloadUrl.'" class="btn btn-sm btn-danger" title="Download Payslip"><i class="fa fa-file-pdf-o"></i></a>'
                ];
            }
        }

        // Sort latest first
        usort($retrunarray, function($a, $b){
            return strtotime($b->payslip_month) - strtotime($a->payslip_month);
        });

        $columns = [
            'employee_code',
            'employee_name',
            'payslip_month',
            'download'
        ];

        $renameHeaderColumns = [
            'employee_code' => 'Employee Code',
            'employee_name' => 'Employee Name',
            'payslip_month' => 'Payslip Month',
            'download'      => 'Download'
        ];

        $processData = array(
            'retrunarray' => $retrunarray,
            'columns' => $columns,
            'linkColumns' => [],
            'editColumns' => [],
            'dataMappingColumns' => ['Translate' => []],
            'renameHeaderColumns' => $renameHeaderColumns,
            'hideColumn' => [],
            'reportName' => 'Employee Payslips',
            'hideInExport' => ['download'],
        );

        echo dynamicTable($processData);
    }
    #Payslips

    #Password
    public function UpdatePassword($data){
        $employeecode = $this->session->userdata('session_loginperson_id');
        $cnfpswd = trim($data['confirmpassword']);
        $newpswd = trim($data['newpassword']);
        $oldpswd = trim($data['oldpassword']);

        $this->db->select('mxemp_emp_lg_password,mxemp_emp_lg_employee_id,mxemp_emp_lg_id');
        $this->db->from('maxwell_employees_login');
        $this->db->where('mxemp_emp_lg_employee_id',$employeecode);
        $query = $this->db->get();
        $qry = $query->result();

        $newdate=date('Y-m-d');
        if($qry[0]->mxemp_emp_lg_password != $oldpswd){
            $resp = array('statusCode' => 400, 'errorMsg' => 'Entered Oldpassword Not Matching');
        }else if($newpswd != $cnfpswd){
            $resp = array('statusCode' => 400, 'errorMsg' => 'Entered NewPassword and ConfirmPassword Not Matching');
        }else{
            $uparray = array(
                "mxemp_emp_lg_password" => $cnfpswd,
                "first_time_passowrd_change" => '1',
                "every_days_passowrd_change" => $newdate
            );
            $this->db->where('mxemp_emp_lg_id', $qry[0]->mxemp_emp_lg_id);
            $this->db->where('mxemp_emp_lg_employee_id', $employeecode);
            $this->db->update('maxwell_employees_login', $uparray);
            $resp = array('statusCode' => 200, 'message' => 'Success');
        }
        echo json_encode($resp);
    }
    #Password
    public function getemployeecompletedetails(){
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
        // echo $this->db->last_query();exit;
        $qry1 = $query1->result();
        $returnarray['employeeinfo'] = $qry1;
        // Employee Info

        // Academic Records
        $this->db->select('mxemp_emp_acr_id,mxemp_emp_acr_employee_id,mxemp_emp_acr_type,mxemp_emp_acr_yop,mxemp_emp_acr_institution,mxemp_emp_acr_subject,mxemp_emp_acr_university,mxemp_emp_acr_marks');
        $this->db->from('maxwell_employees_academic_records');
        $this->db->where('mxemp_emp_acr_employee_id', $qry1[0]->mxemp_emp_id);
        $query2 = $this->db->get();
        $returnarray['employeeacr'] = $query2->result();
        // Academic Records

        // Training
        $this->db->select('mxemp_emp_tr_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_nameofcourse,mxemp_emp_tr_nameofinstutions,mxemp_emp_tr_fromdate,mxemp_emp_tr_todate');
        $this->db->from('maxwell_employees_training');
        $this->db->where('mxemp_emp_tr_employee_id', $qry1[0]->mxemp_emp_id);
        $query3 = $this->db->get();
        $returnarray['employeetr'] = $query3->result();
        // Training

        // Family
        $this->db->select('mxemp_emp_fm_id,mxemp_emp_fm_employee_id,mxemp_emp_fm_relation,mxemp_emp_fm_name,mxemp_emp_fm_age,mxemp_emp_fm_occupation,mxemp_emp_fm_title');
        $this->db->from('maxwell_employees_family');
        $this->db->where('mxemp_emp_fm_employee_id', $qry1[0]->mxemp_emp_id);
        $query4 = $this->db->get();
        $returnarray['employeefm'] = $query4->result();
        // Family

        // Previous Employments
        $this->db->select('mxemp_emp_pe_id,mxemp_emp_pe_employee_id,mxemp_emp_pe_periodfromto,mxemp_emp_pe_nameandorg,mxemp_emp_pe_desgjointime,mxemp_emp_pe_desgleavingtime,mxemp_emp_pe_desgreportedto,mxemp_emp_pe_monthlysalary,mxemp_emp_pe_otherbenfits,mxemp_emp_pe_reasonforchange');
        $this->db->from('maxwell_employees_previousemployments');
        $this->db->where('mxemp_emp_pe_employee_id', $qry1[0]->mxemp_emp_id);
        $query5 = $this->db->get();
        $returnarray['employeepe'] = $query5->result();
        // Previous Employments

        // Nominee Details
        $this->db->select('mxemp_emp_nm_id,mxemp_emp_nm_employee_id,mxemp_emp_nm_type,mxemp_emp_nm_relation,mxemp_emp_nm_relationname,mxemp_emp_nm_relationage,mxemp_emp_nm_relationmobile,mxemp_emp_nm_relationaddress,mxemp_emp_nm_relationpercent,mxemp_emp_nm_relationimage');
        $this->db->from('maxwell_employees_nominee');
        $this->db->where('mxemp_emp_nm_employee_id', $qry1[0]->mxemp_emp_id);
        $query5 = $this->db->get();
        $returnarray['employeenominee'] = $query5->result();
        // Nominee Details

        // Languages Details
        $this->db->select('mxemp_emp_lng_id,mxemp_emp_lng_employee_id,mxemp_emp_lng,mxemp_emp_lng_speak,mxemp_emp_lng_read,mxemp_emp_lng_write,mxlg_name');
        $this->db->from('maxwell_employees_lanaguages');
        $this->db->join('maxwell_languages_master', 'mxemp_emp_lng = mxlg_id', 'INNER');
        $this->db->where('mxemp_emp_lng_employee_id', $qry1[0]->mxemp_emp_id);
        $query6 = $this->db->get();
        $returnarray['employeelanaguages'] = $query6->result();
        // Languages Details
        
        $year = date('Y');
        $today = date('Y-m-d');
        $tablename = 'employee_punches_' . $year;

        $this->db->select("
            mxauth_emp_code,
            mxauth_reporting_head_emp_code,
            mxemp_emp_fname,
            mxemp_emp_lname,
            mxemp_emp_img,
            mxauth_auth_dept_name,

            CASE 
                WHEN EXISTS (
                    SELECT 1 
                    FROM $tablename p
                    WHERE p.employee_code = mxauth_reporting_head_emp_code
                    AND (
                        DATE(p.attendance_date) = '$today'
                    )
                    LIMIT 1
                ) THEN 'Working'

                WHEN EXISTS (
                    SELECT 1 
                    FROM attendance_user_leaveadjust l
                    WHERE l.mxar_appliedby_emp_code = mxauth_reporting_head_emp_code
                    AND '$today' BETWEEN l.mxar_from AND l.mxar_to
                    LIMIT 1
                ) THEN 'Leave'

                ELSE 'Absent'
            END AS working_status
        ");

        $this->db->from('maxwell_emp_authorsations');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mxauth_reporting_head_emp_code', 'INNER');
        $this->db->where('mxauth_status', '1');
        $this->db->where('mxauth_emp_code', $qry1[0]->mxemp_emp_id);
        $this->db->order_by("mxauth_status", "desc");

        $query7 = $this->db->get();
        $returnarray['authorization'] = $query7->result();
        return $returnarray;
    }

    public function employeeDashboard(){
        $returnarray['authorization'] = $this->DashBoardModel->getReportingManager();
        $returnarray['avgattendance'] = $this->DashBoardModel->getAttendanceSummary();
        $returnarray['avaliableleaves'] = $this->DashBoardModel->leaveBalanceSummary();
        $returnarray['hoildaysummary'] = $this->DashBoardModel->holiday_summary();
        $returnarray['inleavessummary'] = $this->DashBoardModel->inleaves_summary();
        $returnarray['circularssummary'] = $this->DashBoardModel->getcircular_summary();
        $returnarray['notificationssummary'] = $this->DashBoardModel->getnotification_summary();
        $returnarray['dobsummary'] = $this->DashBoardModel->birthdays_summary();
        $returnarray['paysheetsummary'] = $this->DashBoardModel->paysheet_summary();
        return $returnarray;
    }

    public function getHolidaysList(){
        return $returnarray['hoildaysummary'] = $this->DashBoardModel->holiday_summary();
    }

    public function getemployeeidsassignedtomanagers(){
        $employee_ids = $this->CommonModel->getEmployeesWhoAreAssignToAuthorsations($reporting_head_emp_code = '');
        return $employee_ids;
    }

    public function managersAssignedEmployees($data = array()){
        $employee_codes = (!empty($data['employecodes']) && $data['employecodes'] != 'ALL') ? array($data['employecodes']) : array();
        $monthid = '';
        $yearid  = '';

        if (!empty($data['monthyear'])) {
            $monthYear = explode('-', $data['monthyear']);
            $monthid = $monthYear[0];
            $yearid  = $monthYear[1];
        }
        
        
        if(count($employee_codes) > 0){
            $employee_ids = $employee_codes;
        }else{
            $employee_ids = $this->CommonModel->getEmployeesWhoAreAssignToAuthorsations($reporting_head_emp_code = '');
            $employee_ids = array_column($employee_ids, 'mxauth_emp_code');
        }
        // print_r($employee_ids);
        if(!empty($month)){
            $monthid = date('m');
        }

        if(!empty($year)){
            $yearid = date('Y');
        }

        $returnarray['employeeattendance'] = $this->DashBoardModel->get_employee_attendance_calendar($employee_ids, $monthid, $yearid);
        return $returnarray;
    }

    public function managersAssignedEmployeesRegulationsLeaves($data = array()){
        $employee_codes = (!empty($data['employecodeslr']) && $data['employecodeslr'] != 'ALL') ? array($data['employecodeslr']) : array();
        $monthid = '';
        $yearid  = '';

        if (!empty($data['monthyearlr'])) {
            $monthYear = explode('-', $data['monthyearlr']);
            $monthid = $monthYear[0];
            $yearid  = $monthYear[1];
        }
        
        
        if(count($employee_codes) > 0){
            $employee_ids = $employee_codes;
        }else{
            $employee_ids = $this->CommonModel->getEmployeesWhoAreAssignToAuthorsations($reporting_head_emp_code = '');
            $employee_ids = array_column($employee_ids, 'mxauth_emp_code');
        }
        // print_r($employee_ids);
        if(!empty($month)){
            $monthid = date('m');
        }

        if(!empty($year)){
            $yearid = date('Y');
        }

        $returnarray['employeeRegulations'] = $this->DashBoardModel->get_employee_attendance_Regulations($employee_ids, $monthid, $yearid);
        return $returnarray;
    }

     # Leaves 
    public function getLeaveSummary()
    {
        $employeecode = $this->session->userdata('session_loginperson_id');
        $currentYear = date('Y');
        $currentMonth = date('m');

        // If current month < April → we are in previous financial year
        if ($currentMonth < 4) {
            $startYear = $currentYear - 1;
            $endYear   = $currentYear;
        } else {
            $startYear = $currentYear;
            $endYear   = $currentYear + 1;
        }
        // Financial Year Dates
        $fyStart = $startYear . '-04-01';
        $fyEnd   = $endYear . '-03-31';

        // --- Subquery A (Used Leaves) ---
        $subqueryA = $this->db
            ->select('mxar_appliedby_emp_code, mxar_leavetypeid, SUM(mxar_noofdays) AS Used')
            ->from('attendance_user_leaveadjust')
            ->where('mxar_final_accept_status', 3)
            ->where('mxar_authfinal_status', 1)
            ->where('mxar_from >=', $fyStart)
            ->where('mxar_to <=', $fyEnd)
            ->group_by(['mxar_appliedby_emp_code', 'mxar_leavetypeid'])
            ->get_compiled_select();

        // --- Subquery C (Accrued Leaves) ---
        $subqueryC = $this->db
            ->select('mxemp_leave_cron_emp_id, mxemp_leave_cron_leavetype, SUM(mxemp_leave_cron_present_adding) AS Accrued')
            ->from('maxwell_emp_leave_cron_history')
            ->where('mxemp_leave_cron_createdtime >=', $fyStart)
            ->where('mxemp_leave_cron_createdtime <=', $fyEnd)
            ->where('mxemp_leave_cron_processdate !=', $startYear)
            ->group_by(['mxemp_leave_cron_emp_id', 'mxemp_leave_cron_leavetype'])
            ->get_compiled_select();

        // --- Main Query ---
        // b.mxemp_leave_bal_crnt_bal AS CurrentBalance,
        $this->db->select("
            b.mxemp_leave_bal_leave_type AS leaveId,
            b.mxemp_leave_bal_leave_type_name As leaveName,
            ROUND(b.mxemp_leave_bal_crnt_bal, 1) AS CurrentBalance,
            ROUND(IFNULL(a.Used, 0), 1) AS Used,
            ROUND(IFNULL(c.Accrued, 0), 1) AS Accrued,
            ROUND(
                CASE 
                    WHEN e.mxlass_leave_type_id = 4 
                    THEN IF(e.mxlass_is_max_leave != 0, e.mxlass_is_max_leave, e.mxlass_min_leaves)
                    ELSE IF(e.mxlass_is_max_leave != 0, e.mxlass_is_max_leave, e.mxlass_min_leaves) * 12
                END
            , 1) AS Annual
        ", false);
        $this->db->from('maxwell_emp_leave_balance b');

        $this->db->join(
            'maxwell_employees_info d',
            'd.mxemp_emp_id = b.mxemp_leave_bal_emp_id',
            'left'
        );

        $this->db->join(
            'maxwell_leave_assigning_master e',
            'e.mxlass_emp_type_id = d.mxemp_emp_type 
            AND e.mxlass_leave_type_id = b.mxemp_leave_bal_leave_type',
            'left'
        );
        // OH id is 4

        // Join Subquery A
        $this->db->join("($subqueryA) a",
            'a.mxar_leavetypeid = b.mxemp_leave_bal_leave_type 
            AND a.mxar_appliedby_emp_code = b.mxemp_leave_bal_emp_id',
            'left'
        );

        // Join Subquery C
        $this->db->join("($subqueryC) c",
            'c.mxemp_leave_cron_leavetype = b.mxemp_leave_bal_leave_type 
            AND c.mxemp_leave_cron_emp_id = b.mxemp_leave_bal_emp_id',
            'left'
        );
        $this->db->where('b.mxemp_leave_bal_emp_id', $employeecode);
        return $this->db->get()->result();
    }

    public function employeesleaveshistoryList($data){
        $employeecode = $this->session->userdata('session_loginperson_id');
        $leavefromdate = $data['fromdate'];
        $leavetodate = $data['todate'];
        $leavetype = $data['customoption'];
        $leavestatus = $data['leavestatus'];
         $this->db->select(" concat(mxemp_emp_fname,' ',mxemp_emp_lname) as employeename,mxar_id as uniqid,
                            mxar_category_type as category_type,
                            mxar_auth1_empname as auth1emp,
                            mxar_auth2_empname as auth2emp,
                            mxar_auth3_empname as auth3emp,
                            mxar_authfinal_empname as authfinalemp,
                            CASE 
                                WHEN mxar_category_type = 1 THEN 'First Half'
                                WHEN mxar_category_type = 2 THEN 'Second Half'
                                WHEN mxar_category_type = 3 THEN 'Full Day'
                                ELSE ''
                            END AS category_type,

                            CASE 
                                WHEN mxar_final_accept_status = 3 and mxar_authfinal_status =1 THEN 'Hr Approved'
                                WHEN mxar_final_accept_status = 3 THEN 'Final Hr Approved'
                                WHEN mxar_authfinal_status = 1 THEN 'Approved'
                                WHEN mxar_authfinal_status = 2 THEN 'Rejected'
                                ELSE 'Pending'
                            END AS leave_status,

                            mxar_appliedby_emp_code as employeeid,mxar_from as from,
                            mxar_to as to,mxar_desc as emp_description,  
                            mxar_status as status ,mxar_leave_type as leavetypename, mxlt_leave_name,
                            mxar_auth1_status as auth1status,mxar_auth2_status as auth2status,mxar_auth3_status as auth3status,
                            mxar_auth4_status as auth4status, mxar_authfinal_status as authfinalstatus,mxar_final_accept_status as finalacceptstatus,
                            mxar_auth1_empcode as auth1,mxar_auth2_empcode as auth2,mxar_auth3_empcode as auth3,
                            mxar_auth4_empcode as auth4,mxar_authfinal_empcode as authfinal,
                            concat(mxar_auth1_empcode,' ',mxar_auth1_empname) as authempname1,concat(mxar_auth2_empcode,' ',mxar_auth2_empname) as authempname2,
                            concat(mxar_auth3_empcode,' ',mxar_auth3_empname) as authempname3,concat(mxar_auth4_empcode,' ',mxar_auth4_empname) as authempname4,
                            concat(mxar_authfinal_empcode,' ',mxar_authfinal_empname) as authfinalempname ,
                            concat(mxar_hrfinal_accept,' ',mxar_hrfinal_acceptname) as hrfinalempname ,
                            mxar_auth1_remarks as auth1desc,mxar_auth2_remarks as auth2desc,mxar_auth3_remarks as auth3desc,
                            mxar_auth4_remarks as auth4desc ,mxar_authfinal_remarks as authfinaldesc,mxar_hrfinal_accept as finalhracceptid,mxar_hrfinal_acceptname as finalhracceptname,
                            mxd_name as divisionname,mxb_name as branchname,mxst_state as statename, mxar_auth1_approve_date, mxar_auth2_approve_date, mxar_auth3_approve_date, mxar_auth4_approve_date,mxar_noofdays,mxar_createdtime
                             ");
                            $this->db->from('attendance_user_leaveadjust');
                            $this->db->join('maxwell_employees_info','mxemp_emp_id = mxar_appliedby_emp_code','Inner');
                            $this->db->join('maxwell_division_master', 'mxd_id = mxar_div_id', 'Inner');
                            $this->db->join('maxwell_branch_master', 'mxb_id = mxar_branch_id', 'Inner');
                            $this->db->join('maxwell_state_master', 'mxst_id = mxar_state_id', 'Inner');
                            $this->db->join('maxwell_leave_type_master', 'mxlt_id = mxar_leavetypeid', 'Inner');
                            // $this->db->join ('maxwell_emp_authorsations',' mxemp_emp_id = mxauth_reporting_head_emp_code and mxauth_status = 1','Inner');
                            $this->db->where('mxar_status','1');
                            $this->db->where('mxar_appliedby_emp_code', $employeecode);
                            if($leavetype != 'ALL'){
                                $this->db->where('mxar_leavetypeid', $leavetype);
                            }
                            if($leavestatus == '3'){
                                $this->db->where('mxar_final_accept_status', $leavestatus);
                            }elseif($leavestatus != 'ALL'){
                                $this->db->where('mxar_authfinal_status', $leavestatus);
                            }
                            if (!empty($leavefromdate)) {
                                $datefrom = DateTime::createFromFormat('d-m-Y', $leavefromdate);
                                $formattedfrom = $datefrom->format('Y-m-d');
                                $this->db->where('mxar_from >=', $formattedfrom);
                            }
                            if (!empty($leavetodate)) {
                                $dateto = DateTime::createFromFormat('d-m-Y', $leavetodate);
                                $formattedto = $dateto->format('Y-m-d');
                                $this->db->where('mxar_to <=', $formattedto);
                            }                         
                            $this->db->order_by("mxar_createdtime", "desc");
                            $query= $this->db->get();
                            $result = $query->result();
                            // echo $this->db->last_query();
                            // exit;
                            $retrunarray = array();
                            
                        foreach ($result as $key => $val){
                            $buldarray = (object)array(
                                "employee_code" => $val->employeeid,
                                "mxemp_emp_fname" => $val->employeename,
                                "category_type" => $val->category_type,
                                "leave_from" => $val->from,
                                "leave_to" => $val->to,
                                "days_count" => $val->mxar_noofdays,
                                "leave_name" => $val->leavetypename .' (' . $val->mxlt_leave_name . ')',
                                "leave_description" => $val->emp_description,
                                "status" => $val->leave_status
                            );
                                
                            array_push($retrunarray,$buldarray);   
                        }

                        // print_r($retrunarray); exit;
        $columns = [
            'employee_code',
            'mxemp_emp_fname',
            'category_type',
            'leave_from',
            'leave_to',
            'days_count',
            'leave_name',
            'leave_description',
            'status',
            ]; 
        
        $renameHeaderColumns = [
            'employee_code' => 'Employee Code',
            'mxemp_emp_fname' => 'Employee Name', 
            'category_type' => 'Leave Category',
            'leave_from' => 'From Date',
            'leave_to' => 'To Date',
            'days_count' => 'Total Days',
            'leave_name' => 'Leave Type',
            'leave_description' => 'Reason / Description',
            'status' => 'Approval Status'            
        ]; 

        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array(),
        );

        // Define columns for links and edit actions
        $urllink = '';
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options
        $hideColumn = array();
        $hideInExport = array();
        $reportName = 'Leave Details History Report';
        $processData = array(
            'retrunarray' => $retrunarray,
            'columns' => $columns,
            'linkColumns' => $linkColumns,
            'editColumns' => $editColumns,
            'dataMappingColumns' => $dataMappingColumns,
            'renameHeaderColumns' => $renameHeaderColumns,
            'hideColumn' => $hideColumn,
            'reportName' => $reportName,
            'hideInExport' => $hideInExport,
        );
        echo dynamicTable($processData);
    }
    
    public function manageremployeesleavesList($data){
        $employeecode = $this->session->userdata('session_loginperson_id');
        $manageremployee = $this->CommonModel->getEmployeesWhoAreAssignToAuthorsations($employeecode);
        $managerempCodes = array_column($manageremployee, 'mxauth_emp_code');
        $leavefromdate = $data['fromdate'];
        $leavetodate = $data['todate'];
        $leavetype = $data['customoption'];
        $leavestatus = $data['leavestatus'];
        $datefrom = DateTime::createFromFormat('d-m-Y', $leavefromdate);
        $formattedfrom = $datefrom->format('Y-m-d');
        $dateto = DateTime::createFromFormat('d-m-Y', $leavetodate);
        $formattedto = $dateto->format('Y-m-d');
         $this->db->select(" concat(mxemp_emp_fname,' ',mxemp_emp_lname) as employeename,mxar_id as uniqid,
                            mxar_category_type as category_type,
                            mxar_auth1_empname as auth1emp,
                            mxar_auth2_empname as auth2emp,
                            mxar_auth3_empname as auth3emp,
                            mxar_authfinal_empname as authfinalemp,
                            CASE 
                                WHEN mxar_category_type = 1 THEN 'First Half'
                                WHEN mxar_category_type = 2 THEN 'Second Half'
                                WHEN mxar_category_type = 3 THEN 'Full Day'
                                ELSE ''
                            END AS category_type,
                            CASE 
                                WHEN mxar_final_accept_status = 3 and mxar_authfinal_status =1 THEN 'Hr Approved'
                                WHEN mxar_final_accept_status = 3 THEN 'Final Hr Approved'
                                WHEN mxar_authfinal_status = 1 THEN 'Approved'
                                WHEN mxar_authfinal_status = 2 THEN 'Rejected'
                                ELSE 'Pending'
                            END AS leave_status,
                            mxar_appliedby_emp_code as employeeid,mxar_from as from,
                            mxar_to as to,mxar_desc as emp_description,  
                            mxar_status as status ,mxar_leave_type as leavetypename, mxlt_leave_name,
                            mxar_auth1_status as auth1status,mxar_auth2_status as auth2status,mxar_auth3_status as auth3status,
                            mxar_auth4_status as auth4status, mxar_authfinal_status as authfinalstatus,mxar_final_accept_status as finalacceptstatus,
                            mxar_auth1_empcode as auth1,mxar_auth2_empcode as auth2,mxar_auth3_empcode as auth3,
                            mxar_auth4_empcode as auth4,mxar_authfinal_empcode as authfinal,
                            concat(mxar_auth1_empcode,' ',mxar_auth1_empname) as authempname1,concat(mxar_auth2_empcode,' ',mxar_auth2_empname) as authempname2,
                            concat(mxar_auth3_empcode,' ',mxar_auth3_empname) as authempname3,concat(mxar_auth4_empcode,' ',mxar_auth4_empname) as authempname4,
                            concat(mxar_authfinal_empcode,' ',mxar_authfinal_empname) as authfinalempname ,
                            concat(mxar_hrfinal_accept,' ',mxar_hrfinal_acceptname) as hrfinalempname ,
                            mxar_auth1_remarks as auth1desc,mxar_auth2_remarks as auth2desc,mxar_auth3_remarks as auth3desc,
                            mxar_auth4_remarks as auth4desc ,mxar_authfinal_remarks as authfinaldesc,mxar_hrfinal_accept as finalhracceptid,mxar_hrfinal_acceptname as finalhracceptname,
                            mxd_name as divisionname,mxb_name as branchname,mxst_state as statename, mxar_auth1_approve_date, mxar_auth2_approve_date, mxar_auth3_approve_date, 
                            mxar_auth4_approve_date,mxar_noofdays,mxar_createdtime,mxemp_leave_bal_crnt_bal as current_balance, 
                                (
                                    SELECT SUM(b.mxar_noofdays)
                                    FROM attendance_user_leaveadjust b
                                    WHERE b.mxar_appliedby_emp_code = attendance_user_leaveadjust.mxar_appliedby_emp_code
                                    AND b.mxar_leavetypeid = attendance_user_leaveadjust.mxar_leavetypeid
                                    AND b.mxar_from >= '$formattedfrom'
                                    AND b.mxar_to <= '$formattedto'
                                    AND b.mxar_final_accept_status = 3
                                ) AS total_used
                            ");
                            $this->db->from('attendance_user_leaveadjust');
                            $this->db->join('maxwell_employees_info','mxemp_emp_id = mxar_appliedby_emp_code','Inner');
                            $this->db->join('maxwell_division_master', 'mxd_id = mxar_div_id', 'Inner');
                            $this->db->join('maxwell_branch_master', 'mxb_id = mxar_branch_id', 'Inner');
                            $this->db->join('maxwell_state_master', 'mxst_id = mxar_state_id', 'Inner');
                            $this->db->join('maxwell_leave_type_master', 'mxlt_id = mxar_leavetypeid', 'Inner');
                            $this->db->join('maxwell_emp_leave_balance', 'mxemp_leave_bal_emp_id = mxemp_emp_id and mxemp_leave_bal_leave_type =mxar_leavetypeid', 'Inner');
                            // $this->db->join ('maxwell_emp_authorsations',' mxemp_emp_id = mxauth_reporting_head_emp_code and mxauth_status = 1','Inner');
                            $this->db->where('mxar_status','1');
                            $this->db->where_In('mxar_appliedby_emp_code', $managerempCodes);
                            if($leavetype != 'ALL'){
                                $this->db->where('mxar_leavetypeid', $leavetype);
                            }
                            if($leavestatus == '3'){
                                $this->db->where('mxar_final_accept_status', $leavestatus);
                            }elseif($leavestatus != 'ALL'){
                                $this->db->where('mxar_authfinal_status', $leavestatus);
                            }
                            if (!empty($leavefromdate)) {
                               
                                $this->db->where('mxar_from >=', $formattedfrom);
                            }
                            if (!empty($leavetodate)) {
                               
                                $this->db->where('mxar_to <=', $formattedto);
                            }                         
                            // $this->db->group_by('mxar_appliedby_emp_code');
                            $this->db->order_by("mxar_createdtime", "desc");
                            $query= $this->db->get();
                            $result = $query->result();
                            // echo $this->db->last_query();
                            // exit;
                            // print_r($result); exit;
                            $retrunarray = array();                            
                        foreach ($result as $key => $val){
                            $buldarray = (object)array(
                                "employee_code" => $val->employeeid,
                                "mxemp_emp_fname" => $val->employeename,
                                "category_type" => $val->category_type,
                                "leave_from" => $val->from,
                                "leave_to" => $val->to,
                                "days_count" => $val->mxar_noofdays,
                                "current_balance" => $val->current_balance,
                                "used" => $val->total_used,
                                "leave_name" => $val->leavetypename .' (' . $val->mxlt_leave_name . ')',
                                "leave_description" => $val->emp_description,
                                "status" => $val->leave_status
                            );                                
                            array_push($retrunarray,$buldarray);   
                        }
        $columns = [
            'employee_code',
            'mxemp_emp_fname',
            'category_type',
            'leave_from',
            'leave_to',
            'days_count',
            'current_balance',
            'used',
            'leave_name',
            'leave_description',
            'status',
            ];         
        $renameHeaderColumns = [
            'employee_code' => 'Employee Code',
            'mxemp_emp_fname' => 'Employee Name', 
            'category_type' => 'Leave Category',
            'leave_from' => 'From Date',
            'leave_to' => 'To Date',
            'days_count' => 'Total Days',
            'current_balance' => 'Current Balance',
            'used' => 'Used',
            'leave_name' => 'Leave Type',
            'leave_description' => 'Reason / Description',
            'status' => 'Approval Status'            
        ]; 
        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array(),
        );
        // Define columns for links and edit actions
        $urllink = '';
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options
        $hideColumn = array();
        $hideInExport = array();
        $reportName = 'Leave Details History Report';
        $processData = array(
            'retrunarray' => $retrunarray,
            'columns' => $columns,
            'linkColumns' => $linkColumns,
            'editColumns' => $editColumns,
            'dataMappingColumns' => $dataMappingColumns,
            'renameHeaderColumns' => $renameHeaderColumns,
            'hideColumn' => $hideColumn,
            'reportName' => $reportName,
            'hideInExport' => $hideInExport,
        );
        echo dynamicTable($processData);
    }
    # End Leaves 

    # Regulations
    public function getRegulationSummary()
    {
        $employeecode = $this->session->userdata('session_loginperson_id');
        $currentYearmonth = date('Y-m-01');
        $currentYearendmonth = date('Y-m-t');
        $this->db->select('mxar_type AS regulationtype, SUM(mxar_attend_countdays) AS total_days', false);
        $this->db->from('attendance_regulation');
        $this->db->where('mxar_appliedby_emp_code', $employeecode);
        //  $this->db->where('mxar_appliedby_emp_code', 'M0386');
        $this->db->where('mxar_type!=','');
        $this->db->where('mxar_from >=', $currentYearmonth);
        $this->db->where('mxar_to <=', $currentYearendmonth);
        $this->db->group_by('mxar_type');
        return $this->db->get()->result();
    }

    public function employeesRegulationsList($data){
        $employeecode = $this->session->userdata('session_loginperson_id');
        $regulationfromdate = $data['fromdate'];
        $regulationtodate = $data['todate'];
        $regulationtype = $data['regulationtype'];
        $leavestatus = $data['leavestatus'];
        if($leavestatus == '0'){ $leavestatus = 9; }
         $this->db->select("concat(mxemp_emp_fname,' ',mxemp_emp_lname) as employeename,
                            mxar_appliedby_emp_code as employeeid,mxar_from as from,
                            mxar_to as to,mxar_desc as emp_description,mxar_attend_countdays as countdays,
                            CASE 
                                WHEN mxar_category_type = 1 THEN 'First Half'
                                WHEN mxar_category_type = 2 THEN 'Second Half'
                                WHEN mxar_category_type = 3 THEN 'Full Day'
                                ELSE ''
                            END AS category_type,
                            CASE 
                                WHEN mxar_authfinal_status = 1 THEN 'Approved'
                                WHEN mxar_authfinal_status = 2 THEN 'Rejected'
                                WHEN mxar_authfinal_status = 3 THEN 'Hr Approved'
                                ELSE 'Pending' 
                            END AS finalstatus,
                            mxar_reason as reason,
                            mxar_type as regulationtype");
                            $this->db->from('attendance_regulation');
                            $this->db->join('maxwell_employees_info','mxemp_emp_id = mxar_appliedby_emp_code','Inner');
                            $this->db->join('maxwell_division_master', 'mxd_id = mxar_div_id', 'Inner');
                            $this->db->join('maxwell_branch_master', 'mxb_id = mxar_branch_id', 'Inner');
                            $this->db->join('maxwell_state_master', 'mxst_id = mxar_state_id', 'Inner');
                            // $this->db->where('mxar_status','1');   
                            $this->db->where('mxar_appliedby_emp_code', $employeecode);                       
                            if (!empty($regulationfromdate)) {
                                $datefrom = DateTime::createFromFormat('d-m-Y', $regulationfromdate);
                                $formatfrom = $datefrom->format('Y-m-d');
                                $this->db->where('mxar_from >=', $formatfrom);
                            }
                            if (!empty($regulationtodate)) {
                                $dateto = DateTime::createFromFormat('d-m-Y', $regulationtodate);
                                $formatto = $dateto->format('Y-m-d');
                                $this->db->where('mxar_to <=', $formatto);
                            }          
                            if($leavestatus != 'ALL'){
                                $this->db->where('mxar_authfinal_status', $leavestatus);
                            }
                            if($regulationtype != 'ALL'){
                                $this->db->where('mxar_type', $regulationtype);
                            }
                            $this->db->order_by("mxar_createdtime", "desc");
                            $query= $this->db->get();
                            $result = $query->result();
                            // echo $this->db->last_query();
                            // exit;
                            $retrunarray = array();
                        foreach ($result as $key => $val){
                            $buldarray = (object)array(
                                "employee_code" => $val->employeeid,
                                "mxemp_emp_fname" => $val->employeename,
                                "category_type" => $val->category_type,
                                "leave_from" => $val->from,
                                "leave_to" => $val->to,
                                "days_count" => $val->countdays,
                                "regulation_name" => $val->regulationtype,
                                "regulation_reason" => $val->reason,
                                "regulation_description" => $val->emp_description,
                                "status" => $val->finalstatus
                            );                                
                            array_push($retrunarray,$buldarray);   
                        }
                        // print_r($retrunarray); exit;
        $columns = [
            'employee_code',
            'mxemp_emp_fname',
            'category_type',
            'leave_from',
            'leave_to',
            'days_count',
            'regulation_name',
            'regulation_reason',
            'regulation_description',
            'status',
            ]; 
        
        $renameHeaderColumns = [
            'employee_code' => 'Employee Code',
            'mxemp_emp_fname' => 'Employee Name', 
            'category_type' => 'Regulation Category',
            'leave_from' => 'From Date',
            'leave_to' => 'To Date',
            'days_count' => 'Total Days',
            'regulation_name' => 'Regulation Type',
            'regulation_reason' => 'Regulation Reason',
            'regulation_description' => 'Description',
            'status' => 'Approval Status'            
        ]; 

        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array(),
        );

        // Define columns for links and edit actions
        $urllink = '';
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options
        $hideColumn = array();
        $hideInExport = array();
        $reportName = 'Leave Details History Report';
        $processData = array(
            'retrunarray' => $retrunarray,
            'columns' => $columns,
            'linkColumns' => $linkColumns,
            'editColumns' => $editColumns,
            'dataMappingColumns' => $dataMappingColumns,
            'renameHeaderColumns' => $renameHeaderColumns,
            'hideColumn' => $hideColumn,
            'reportName' => $reportName,
            'hideInExport' => $hideInExport,
        );
        echo dynamicTable($processData);
    }
    # End Regulations

}
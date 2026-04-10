<?php
error_reporting(0);
defined('BASEPATH') OR EXIT('No Direct Script Acesses Allowed');

class Performanceappraisalmodel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');

    }

 function get_client_ip(){
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if ($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if ($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if ($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if ($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if ($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
}

    function cleanInput($val)
    {
        $value = strip_tags(html_entity_decode($val));
        $value = filter_var($value, FILTER_SANITIZE_STRIPPED);
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        return $value;
    }

    public function departmentmaster(){
        $this->db->select('mxdpt_id,mxdpt_name,mxdpt_is_hr,mxdpt_is_director');
        $this->db->from('maxwell_department_master');
        $this->db->where('mxdpt_status = 1');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    public function designationmaster(){
        $this->db->select('mxdesg_id,mxdesg_name');
        $this->db->from('maxwell_designation_master');
        $this->db->where('mxdesg_status = 1');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    public function getalluploadedfiles($data){
        if($this->session->userdata('user_id') == '888666'){
        $emp = $data['emp'];
        $dep = $data['dep'];
        }else{
        $emp = $this->session->userdata('user_id');
        $file = $data['file'];
        }
        $this->db->select('mxapfile_id,mxapfile_name,mxapfile_link,mxapfile_extension,mxapfile_size,mxapfile_createdtime,mxdpt_name');
        $this->db->from('maxwell_performanceappraisal_files');
        #$this->db->join('maxwell_designation_master', 'mxdesg_id = mxapfile_designation_id', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxapfile_department_id', 'INNER');
        $this->db->where('mxapfile_status = 1');
        if($this->session->userdata('user_id') == '888666'){
        $this->db->where('mxapfile_department_id', $dep);
        $this->db->where('mxapfile_employee_id', $emp);
        }else{
          $this->db->where('mxapfile_employee_id', $emp);
          if(!empty($file)){
          $this->db->like('mxapfile_name', $file);
          }
        }
        $this->db->order_by('mxapfile_createdtime', 'DESC');
        $query = $this->db->get();
        //  echo $this->db->last_query();
        $qry = $query->result_array();
        return $qry;
    }

    public function saveappraisal($data){
        if($this->session->userdata('user_id') == '888666'){
        $departement = $data['departement'];
        $employee = $data['employee'];
        }else{
            $employee = $this->session->userdata('user_id');
            $this->db->select('mxdpt_id');
            $this->db->from('maxwell_employees_info');
            $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
            $this->db->where('mxemp_emp_id',$employee);
            $query = $this->db->get();
            $qry = $query->result();
            $departement = $qry[0]->mxdpt_id;  
        }
        $filename = $data['filename'];

        $imgrename = str_replace(" ","-", trim($filename));
        $imgname = $_FILES['fileupload']['name'];
        $dd = explode('.', $imgname);
        $imgextension = $dd[1];

        if (is_uploaded_file($_FILES["fileupload"]["tmp_name"])) {
            $targetfolder = "uploads/appraisalfiles/";
            $targetfolder1 = basename($_FILES['fileupload']['name']);
            $fileext = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
            $destination = $targetfolder . $imgrename.date('dMYHis'). "." . $fileext;
            $size = filesize($_FILES["fileupload"]["tmp_name"]);
            $sizeunits = $this->formatSizeUnits($size);
            if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $destination)){
                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $inarray = array(
                    "mxapfile_comp_id" => '1',
                    "mxapfile_department_id" => $departement,
                    "mxapfile_employee_id" => $employee,
                    "mxapfile_name" => $filename,
                    "mxapfile_link" => $destination,
                    "mxapfile_extension" => $fileext,
                    "mxapfile_status" => '1',
                    "mxapfile_size" => $sizeunits,
                    "mxapfile_createdby" => $this->session->userdata('user_id'),
                    "mxapfile_createdtime" => $date,
                    "mxapfile_created_ip" => $ip,
                );
                return $this->db->insert('maxwell_performanceappraisal_files', $inarray);
            }
        }

    }

    function formatSizeUnits($bytes){
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
    }


    public function savequestion($data){
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        $department = $data['department'];
        $category = $data['quecategory'];
        $this->db->trans_begin();
        if(count($data['question']) > 0){
            for ($i=0; $i < count($data['question']); $i++) { 
                $question = $this->cleanInput($data['question'][$i]);
                $inarray = array(
                    "mxap_dep" => $department,
                    "mxap_catg" => $category,
                    "mxap_question" => $question,
                    "mxap_createdby" =>  $this->session->userdata('user_id'),
                    "mxap_createdtime" => $date,
                    "mxap_created_ip" => $ip,
                );
                $this->db->insert('maxwell_apprasial_questions', $inarray);
            }
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    public function deletefiles($data){
        $id = $data['id'];
        $uparray = array("mxapfile_status" => 0);
        $this->db->where('mxapfile_id', $data['id']);
        return $this->db->update('maxwell_performanceappraisal_files', $uparray);
    }

    public function filterappraisalquestion($data){
        $department = $data['department'];
        $category = $data['quecategory'];
        $this->db->select('mxap_id,mxap_question');
        $this->db->from('maxwell_apprasial_questions');
        $this->db->where('mxap_status = 1');
        $this->db->where('mxap_dep', $department);
        $this->db->where('mxap_catg', $category);
        $query = $this->db->get();
        $qry = $query->result_array();
        return $qry;
    }

    public function updateappraisalquestion($data){
        $uparray = array("mxap_status" => 0);
        $this->db->where('mxap_id', $data['id']);
        return $this->db->update('maxwell_apprasial_questions', $uparray);
    }

    public function getappremployeeslist($data){
        $department = $data['department'];
        $this->db->select('mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname');
        $this->db->from('maxwell_employees_info');
        // $this->db->where('mxap_status = 1');
        $this->db->where('mxemp_emp_dept_code', $department);
        $query = $this->db->get();
        $qry = $query->result_array();
        return $qry;
    }

    public function saveassignedquestion($data){
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $employees = $data['employees'];

        $date = date('Y-m-d H:i:s');
        $ip = $this->get_client_ip();
        $this->db->trans_begin();
        for ($i=0; $i < count($data['question_id']); $i++) { 
            $inarray = array(
              "mxap_assign_dep" => $department,
              "mxap_assign_catg" => $quecategory,
              "mxap_assign_queid" => $data['question_id'][$i],
              "mxap_assign_employee_code" => $employees,
              "mxap_assign_objective" => $data['question_objective'][$i],
              "mxap_assign_unitmeasure" => $data['question_unit_measure'][$i],
              "mxap_assign_weightage" => $data['question_weightage_measure'][$i],
              "mxap_assign_que_show" => $data['question_assign'][$i],
              "mxap_assign_createdby" => $this->session->userdata('user_id'),
              "mxap_assign_createdtime" => $date,
              "mxap_assign_created_ip" => $ip
            );

            $month = strtotime(date('Y').'-04-01');
            $end = strtotime((date('Y')+1).'-04-01');
            $startdate = date('Y').'-04-01';
            $enddate = (date('Y')+1).'-04-01';
            while($month < $end){
                $yearmonth = date('Y_m', $month);
                $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
                $inarray['mxap_assign_monthlytarget'] = $data[$yearmonth][$i];
                $inarray['mxap_assign_year_month'] = $yearmonth;
                $inarray['mxap_year_start_date'] = $startdate;
                $inarray['mxap_year_end_date'] = $enddate;

                    $this->db->select('mxap_assign_employee_code');
                    $this->db->from($tablename);
                    $this->db->where('mxap_assign_status = 1');
                    $this->db->where('mxap_assign_employee_code', $employees);
                    $this->db->where('mxap_assign_dep', $department);
                    $this->db->where('mxap_assign_catg', $quecategory);
                    $this->db->where('mxap_assign_queid', $data['question_id'][$i]);
                    $query = $this->db->get();
                    $qry = $query->result_array();
                    if(count($qry) <= 0){
                        $this->db->insert($tablename, $inarray);
                    }else{
                        $this->db->where('mxap_assign_employee_code', $employees);
                        $this->db->where('mxap_assign_dep', $department);
                        $this->db->where('mxap_assign_catg', $quecategory);
                        $this->db->where('mxap_assign_queid', $data['question_id'][$i]);
                        $this->db->update($tablename, $inarray);
                    }

                // print_r($inarray);
                $month = strtotime("+1 month", $month);
            }

        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    public function getassignquestionlist($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
            $month = strtotime(date('Y').'-04-01');
            $end = strtotime((date('Y')+1).'-04-01');

            $employeearray = array();
            while($month < $end){
                $yearmonth = date('Y_m', $month);
                $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
                    $this->db->select('mxap_assign_employee_code,mxap_assign_year_month');
                    $this->db->from($tablename);
                    $this->db->where('mxap_assign_status = 1');
                    $this->db->where('mxap_assign_employee_code', $employees);
                    $this->db->where('mxap_assign_dep', $department);
                    $this->db->where('mxap_assign_catg', $quecategory);
                    $query = $this->db->get();
                    $qry = $query->result_array();
                    if(count($qry) > 0){
                        array_push($employeearray, $yearmonth);
                    }
                $month = strtotime("+1 month", $month);
            }
            return $employeearray;
    }


    public function geteditassignquestionlist($data,$flag){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        $this->db->select('mxap_question,mxap_assign_id,mxap_assign_year_month,mxap_assign_dep,mxap_assign_catg,mxap_assign_queid,mxap_assign_employee_code,mxap_assign_unitmeasure,mxap_assign_weightage,mxap_assign_monthlytarget,mxap_assign_emp_noofaccounts,mxap_assign_emp_client_name,mxap_assign_emp_description,mxap_assign_emp_achievement,mxap_assign_emp_createdtime,mxap_assign_emp_modifiedtime,mxap_assign_manager_noofaccounts,mxap_assign_manager_client_name,mxap_assign_manager_review,mxap_assign_manager_actual_assesment,mxap_assign_manager_createdtime,mxap_assign_manager_modifiedtime,mxap_assign_hod_noofaccounts,mxap_assign_hod_client_name,mxap_assign_hod_review,mxap_assign_hod_actual_assesment,mxap_assign_hod_createdtime,mxap_assign_hod_modifiedtime,mxap_assign_que_show,mxap_assign_objective');
        $this->db->from($tablename);
        $this->db->join('maxwell_apprasial_questions', 'mxap_id = mxap_assign_queid', 'INNER');
        $this->db->where('mxap_assign_status = 1');
        $this->db->where('mxap_assign_employee_code', $employees);
        $this->db->where('mxap_assign_dep', $department);
        $this->db->where('mxap_assign_catg', $quecategory);
        if($flag == 1){
            $this->db->where('mxap_assign_que_show = 1');
        }
        $query = $this->db->get();
        return $qry = $query->result_array();
    }


    public function editsaveassignedquestion($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        $date = date('Y-m-d H:i:s');
        $ip = $this->get_client_ip();
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              "mxap_assign_unitmeasure" => $data['question_unit_measure'][$i],
              "mxap_assign_weightage" => $data['question_weightage_measure'][$i],
              "mxap_assign_monthlytarget" => $data['mxap_assign_monthlytarget'][$i],
              "mxap_assign_que_show" => $data['question_assign'][$i],
              "mxap_assign_objective" => $data['question_objective'][$i],

            // "mxap_assign_noofaccounts" => $data['noofaccounts'][$i],
            // "mxap_assign_client_name" => $data['clientname'][$i],
            // "mxap_assign_description" => $data['desc'][$i],

              "mxap_assign_modifyby" => $this->session->userdata('user_id'),
              "mxap_assign_modifiedtime" => $date,
              "mxap_assign_modified_ip" => $ip
            );   
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);       
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }


    public function getempfulldetails($data){
        $empid = $data['employeeid'];
        $this->db->select('mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_age,mxemp_emp_current_salary,mxemp_emp_date_of_join,mxcp_name,mxdesg_name,mxdpt_name,mxd_name,mxb_name,mxgrd_name,mxst_state');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->where('mxemp_emp_id', $empid);
        $query = $this->db->get();
        return $query->result();
    }

    public function saveemployeekra($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              "mxap_assign_emp_noofaccounts" => $data['noofaccounts'][$i],
              "mxap_assign_emp_client_name" => $data['clientname'][$i],
              "mxap_assign_emp_description" => $data['desc'][$i],
              "mxap_assign_emp_achievement" => $data['empachivement'][$i],
              "mxap_assign_manager_noofaccounts" => $data['managernoofaccounts'][$i],
              "mxap_assign_manager_client_name" => $data['managerclientname'][$i],
              "mxap_assign_manager_review" => $data['managerdesc'][$i],
              "mxap_assign_manager_actual_assesment" => $data['managerachivement'][$i],
            "mxap_assign_hod_noofaccounts" => $data['hodnoofaccounts'][$i],
            "mxap_assign_hod_client_name" => $data['hodclientname'][$i],
            "mxap_assign_hod_review" => $data['hoddesc'][$i],
            "mxap_assign_hod_actual_assesment" => $data['hodachivement'][$i],
              "mxap_assign_modifyby" => $this->session->userdata('user_id'),
              "mxap_assign_modifiedtime" => $date,
              "mxap_assign_modified_ip" => $ip
            ); 
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         

        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    public function saveemployeekpa($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              // "mxap_assign_monthlytarget" => $data['mxap_assign_monthlytarget'][$i],
              "mxap_assign_emp_noofaccounts" => $data['mxap_assign_emp_noofaccounts'][$i],
              "mxap_assign_manager_noofaccounts" => $data['mxap_assign_manager_noofaccounts'][$i],
              "mxap_assign_manager_review" => $data['managerdesc'][$i],
              "mxap_assign_modifyby" => $this->session->userdata('user_id'),
              "mxap_assign_modifiedtime" => $date,
              "mxap_assign_modified_ip" => $ip
            );   
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }   
    }
// Cron 


// check manager
    public function checkismanager($data){
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
            if(!isset($year) && empty($year)){
                $year = date('Y');
            }
            if(!isset($month) && empty($month)){
                $month_updated = date('m');
            }
        $yearmonth = $year.'_'.$month_updated;
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;

        $empid = $this->session->userdata('user_id');
        $this->db->distinct();
        $this->db->select('mxauth_reporting_head_emp_code,mxauth_emp_code');
        $this->db->from('maxwell_emp_authorsations');
        $this->db->where('mxauth_reporting_head_emp_code', $empid);
        $this->db->where('mxauth_status = 1');
        $this->db->where('mxauth_auth_type = 1');
        // echo $this->db->get_compiled_select();exit;
        // echo $this->db->last_query();exit;
        $query = $this->db->get();
        $cnt = $query->result();
        $mainemployees = array();
        if(count($cnt) > 0){
            foreach ($cnt as $key => $value) {
                array_push($mainemployees,$value->mxauth_emp_code);
            }
        }
        // echo $tablename;exit;
        $employees = array_values($mainemployees);
        // print_r($mainemployees);exit;
        // $x = implode(",", $mainemployees);
        // echo $x;exit;
        // echo '<pre>';print_r($cnt);exit;
        if(count($cnt) > 0){
        // $this->db->select('mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_branch_code,mxemp_emp_division_code,mxemp_emp_dept_code');
        // $this->db->from('maxwell_employees_info');
        // $this->db->where('mxemp_emp_id', $cnt[0]->mxauth_reporting_head_emp_code);
        // // echo $this->db->get_compiled_select();exit;
        // $verifyquery = $this->db->get();
        // $verifycnt = $verifyquery->result();

            $this->db->select('mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxap_assign_employee_code,mxap_assign_year_month,mxap_assign_dep,mxap_assign_catg,mxap_assign_emp_createdtime,mxap_assign_emp_modifiedtime,mxap_assign_manager_createdtime,mxap_assign_manager_modifiedtime');
            $this->db->from('maxwell_employees_info');
            $this->db->join($tablename,"mxap_assign_employee_code = mxemp_emp_id","INNER");
            // $this->db->where('mxap_status = 1');
            // $this->db->where('mxemp_emp_dept_code', $verifycnt[0]->mxemp_emp_dept_code);
            // $this->db->where('mxemp_emp_branch_code', $verifycnt[0]->mxemp_emp_branch_code);
            // $this->db->where('mxemp_emp_division_code', $verifycnt[0]->mxemp_emp_division_code);
            $this->db->where_in('mxap_assign_employee_code',$employees);
            $this->db->where_not_in('mxemp_emp_id', $empid);
            $this->db->group_by('mxap_assign_employee_code');
            // echo $this->db->get_compiled_select();exit;
            $query_e = $this->db->get();
            // echo $this->db->last_query(); exit;
            $qry = $query_e->result();
        }
            return $qry;
    }

    public function savemanagerapprovedkra($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        $date = date('Y-m-d H:i:s');
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              "mxap_assign_manager_noofaccounts" => $data['managernoofaccounts'][$i],
              "mxap_assign_manager_client_name" => $data['managerclientname'][$i],
              "mxap_assign_manager_review" => $data['managerdesc'][$i],
              "mxap_assign_manager_actual_assesment" => $data['managerachivement'][$i],
              "mxap_manager_approvedby" => $this->session->userdata('user_id'),
              "mxap_assign_manager_createdtime" => $date,
            );   
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    public function savemanagerkpa($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              // "mxap_assign_monthlytarget" => $data['mxap_assign_monthlytarget'][$i],
              "mxap_assign_manager_noofaccounts" => $data['mxap_assign_manager_noofaccounts'][$i],
              "mxap_assign_manager_review" => $data['managerdesc'][$i],
              "mxap_manager_approvedby" => $this->session->userdata('user_id'),
              "mxap_assign_manager_createdtime" => $date,
            );   
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }   
    }
// check manager


// check hod
    public function checkishod($data){
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
            if(!isset($year) && empty($year)){
                $year = date('Y');
            }
            if(!isset($month) && empty($month)){
                $month_updated = date('m');
            }
        $yearmonth = $year.'_'.$month_updated;
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;

        $empid = $this->session->userdata('user_id');
        $this->db->select('mxhod_branch_id,mxhod_dept_id,mxhod_div_id,mxhod_emp_code,mxhod_emp_name');
        $this->db->from('maxwell_hods');
        $this->db->where('mxhod_emp_code', $empid);
        $this->db->where('mxhod_status = 1');
        $query = $this->db->get();
        $cnt = $query->result();
        if(count($cnt) > 0){
            $this->db->select('mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxap_assign_employee_code,mxap_assign_year_month,mxap_assign_dep,mxap_assign_catg,mxap_assign_emp_createdtime,mxap_assign_emp_modifiedtime,mxap_assign_manager_createdtime,mxap_assign_manager_modifiedtime');
            $this->db->from('maxwell_employees_info');
            $this->db->join($tablename,"mxap_assign_employee_code = mxemp_emp_id","INNER");
            // $this->db->where('mxap_status = 1');
            // $this->db->where('mxemp_emp_dept_code', $cnt[0]->mxhod_dept_id);
            // $this->db->where('mxemp_emp_branch_code', $cnt[0]->mxhod_branch_id);
            // $this->db->where('mxemp_emp_division_code', $cnt[0]->mxhod_div_id);
            $this->db->where_not_in('mxemp_emp_id', $empid);
            $this->db->group_by('mxap_assign_employee_code');
            $query_e = $this->db->get();
            // echo $this->db->last_query(); exit;
            $qry = $query_e->result();
        }
            return $qry;
    }

    public function savehodapprovedkra($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              "mxap_assign_hod_noofaccounts" => $data['hodnoofaccounts'][$i],
              "mxap_assign_hod_client_name" => $data['hodclientname'][$i],
              "mxap_assign_hod_review" => $data['hoddesc'][$i],
              "mxap_assign_hod_actual_assesment" => $data['hodachivement'][$i],
              "mxap_hod_approvedby" => $this->session->userdata('user_id'),
              "mxap_assign_hod_createdtime" => $date,
            );    
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    public function savehodkpa($data){
        $employees = $data['employees'];
        $quecategory = $data['quecategory'];
        $department = $data['department'];
        $year = $data['year'];
        $month = $data['month'];
            if ($month < 10 && strlen($month) == 1) {
                $month_updated = "0" . $month;
            } else {
                $month_updated = $month;
            }
        $yearmonth = $year.'_'.$month_updated;
        $this->db->trans_begin();
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        for ($i=0; $i <count($data['question_id']) ; $i++) { 
            $inarray = array(
              "mxap_assign_hod_noofaccounts" => $data['mxap_assign_hod_noofaccounts'][$i],
              "mxap_assign_hod_review" => $data['hoddesc'][$i],
              "mxap_hod_approvedby" => $this->session->userdata('user_id'),
              "mxap_assign_hod_createdtime" => $date,
            );  
            $this->db->where('mxap_assign_employee_code', $employees);
            $this->db->where('mxap_assign_dep', $department);
            $this->db->where('mxap_assign_catg', $quecategory);
            $this->db->where('mxap_assign_id', $data['question_id'][$i]);
            $this->db->update($tablename, $inarray);         
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }   
    }
// check hod


public function getassignedandunassignedquestion($data){
    $employees = $data['employeeid'];
    $quecategory = $data['quecategory'];
    $department = $data['department'];
    $year = $data['year'];
    $month = $data['month'];
        if ($month < 10 && strlen($month) == 1) {
            $month_updated = "0" . $month;
        } else {
            $month_updated = $month;
        }
    $yearmonth = $year.'_'.$month_updated;
    $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;

        $this->db->select('mxap_assign_queid');
        $this->db->from($tablename);
        $this->db->join('maxwell_apprasial_questions', 'mxap_id = mxap_assign_queid', 'INNER');
        $this->db->where('mxap_assign_status = 1');
        $this->db->where('mxap_assign_employee_code', $employees);
        $this->db->where('mxap_assign_dep', $department);
        $this->db->where('mxap_assign_catg', $quecategory);
        $query = $this->db->get();
        $qry['assigned'] = $query->result_array();

        $this->db->select('mxap_id,mxap_question');
        $this->db->from('maxwell_apprasial_questions');
        $this->db->where('mxap_status = 1');
        $this->db->where('mxap_dep', $department);
        $this->db->where('mxap_catg', $quecategory);
        $query1 = $this->db->get();
        $qry['all'] = $query1->result_array();

        return $qry;
}

public function savenewlyaddedquestion($data){
    // print_r($data);
    $employees = $data['employeeid'];
    $quecategory = $data['quecategory'];
    $department = $data['department'];
    $year = $data['year'];
    $month = $data['month'];
        if ($month < 10 && strlen($month) == 1) {
            $month_updated = "0" . $month;
        } else {
            $month_updated = $month;
        }
    $yearmonth = $year.'_'.$month_updated;
    $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
            $date = date('Y-m-d H:i:s');
        $ip = $this->get_client_ip();
        $this->db->trans_begin();
        for ($i=0; $i < count($data['question_id']); $i++) { 
            $inarray = array(
              "mxap_assign_dep" => $department,
              "mxap_assign_catg" => $quecategory,
              "mxap_assign_queid" => $data['question_id'][$i],
              "mxap_assign_employee_code" => $employees,
              "mxap_assign_que_show" => $data['question_assign'][$i],
              "mxap_assign_createdby" => $this->session->userdata('user_id'),
              "mxap_assign_createdtime" => $date,
              "mxap_assign_created_ip" => $ip
            );

            $month = strtotime(date('Y').'-04-01');
            $end = strtotime((date('Y')+1).'-04-01');
            $startdate = date('Y').'-04-01';
            $enddate = (date('Y')+1).'-04-01';
            while($month < $end){
                $yearmonth = date('Y_m', $month);
                $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
                $inarray['mxap_assign_year_month'] = $yearmonth;
                $inarray['mxap_year_start_date'] = $startdate;
                $inarray['mxap_year_end_date'] = $enddate;

                    $this->db->select('mxap_assign_employee_code');
                    $this->db->from($tablename);
                    $this->db->where('mxap_assign_status = 1');
                    $this->db->where('mxap_assign_employee_code', $employees);
                    $this->db->where('mxap_assign_dep', $department);
                    $this->db->where('mxap_assign_catg', $quecategory);
                    $this->db->where('mxap_assign_queid', $data['question_id'][$i]);
                    $query = $this->db->get();
                    $qry = $query->result_array();
                    if(count($qry) <= 0){
                        $this->db->insert($tablename, $inarray);
                    }else{
                        $this->db->where('mxap_assign_employee_code', $employees);
                        $this->db->where('mxap_assign_dep', $department);
                        $this->db->where('mxap_assign_catg', $quecategory);
                        $this->db->where('mxap_assign_queid', $data['question_id'][$i]);
                        $this->db->update($tablename, $inarray);
                    }

                // print_r($inarray);
                $month = strtotime("+1 month", $month);
            }

        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 401;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function createappraisaltables(){
    $month = strtotime(date('Y').'-04-01');
    $end = strtotime((date('Y')+1).'-04-01');
    $this->db->trans_begin();
    while($month < $end){
        $yearmonth = date('Y_m', $month);
        $tablename = 'maxwell_apprasial_assign_employees_'.$yearmonth;
        $res = true;
        if ($this->db->table_exists($tablename)) {//---->NEW BY SHABABU(07-05-2022)
        }else{
            $create_query = "CREATE TABLE $tablename (
              mxap_assign_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
              mxap_assign_year_month varchar(150) NOT NULL,
              mxap_year_start_date date,
              mxap_year_end_date date,
              mxap_assign_dep varchar(150) NOT NULL,
              mxap_assign_catg varchar(150) NOT NULL,
              mxap_assign_queid varchar(150) NOT NULL,
              mxap_assign_que_show varchar(150) NOT NULL,
              mxap_assign_employee_code varchar(150) NOT NULL,
              mxap_assign_unitmeasure text,
              mxap_assign_objective varchar(55) NOT NULL DEFAULT '',
              mxap_assign_weightage varchar(150) NOT NULL DEFAULT '',
              mxap_assign_monthlytarget varchar(150) NOT NULL DEFAULT '',
              mxap_assign_emp_noofaccounts varchar(150) NOT NULL DEFAULT '',
              mxap_assign_emp_client_name varchar(255) NOT NULL DEFAULT '',
              mxap_assign_emp_description text,
              mxap_assign_emp_achievement varchar(150) NOT NULL DEFAULT '',
              mxap_assign_emp_createdtime datetime,
              mxap_assign_emp_modifiedtime datetime,
              mxap_assign_manager_noofaccounts varchar(150) NOT NULL DEFAULT '',
              mxap_assign_manager_client_name varchar(255) NOT NULL DEFAULT '',
              mxap_assign_manager_review text,
              mxap_assign_manager_actual_assesment varchar(150) NOT NULL DEFAULT '',
              mxap_assign_manager_createdtime datetime,
              mxap_assign_manager_modifiedtime datetime,
              mxap_manager_approvedby varchar(150) NOT NULL DEFAULT '',
              mxap_assign_hod_noofaccounts varchar(150) NOT NULL DEFAULT '',
              mxap_assign_hod_client_name varchar(255) NOT NULL DEFAULT '',
              mxap_assign_hod_review text,
              mxap_assign_hod_actual_assesment varchar(150) NOT NULL DEFAULT '',
              mxap_assign_hod_createdtime datetime,
              mxap_assign_hod_modifiedtime datetime,
              mxap_hod_approvedby varchar(150) NOT NULL DEFAULT '',
              mxap_assign_status numeric(1) NOT NULL DEFAULT 1,
              mxap_assign_createdby varchar(255) DEFAULT NULL,
              mxap_assign_createdtime timestamp,
              mxap_assign_created_ip varchar(150) DEFAULT NULL,
              mxap_assign_modifyby varchar(255) DEFAULT NULL,
              mxap_assign_modifiedtime datetime,
              mxap_assign_modified_ip varchar(150) DEFAULT NULL
            );";
            $res = $this->db->query($create_query);
        }
        $month = strtotime("+1 month", $month);
    }
    if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        echo "FAILED SOMETHING WENT WRONG";exit;
    } else {
        $this->db->trans_commit();
        echo "SUCCESFULLY CREATED TABLES";exit;
    }
}
// Cron
}
?>
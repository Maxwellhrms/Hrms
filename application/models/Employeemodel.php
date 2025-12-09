<?php

error_reporting(0);
defined('BASEPATH') or exit('No Direct Script Acesses Allowed');

class Employeemodel extends Adminmodel 
{

    protected $imglink = 'uploads/';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');
    }


    function cleanInput($val)
    {
        $value = strip_tags(html_entity_decode($val));
        $value = filter_var($value, FILTER_SANITIZE_STRIPPED);
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        return $value;
    }

    function get_client_ip()
    {
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

    public function getstates_master()
    {
        $this->db->select('mxst_id,mxst_state');
        $this->db->from('maxwell_state_master');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    public function getcompany_master()
    {
        $this->db->select('mxcp_id,mxcp_name');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_status = 1');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }


    public function getlanguage_master()
    {
        $this->db->select('mxlg_id,mxlg_name');
        $this->db->from('maxwell_languages_master');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    public function getemployeetypemaster()
    {
        $this->db->select('mxemp_ty_id,mxemp_ty_name');
        $this->db->from('maxwell_employee_type_master');
        $this->db->where('mxemp_ty_status = 1');
        $this->db->where('mxemp_ty_cmpid = 1');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    public function companygratuity($id){
        $this->db->select('mxcp_id,mxcp_gratuity_reg_no');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_status = 1');
        $this->db->where('mxcp_id',$id);
        $query = $this->db->get();
        $compcnt = $query->num_rows();
        $qry = $query->result();
        if( $compcnt > 0 ){
            $graduity = $qry[0]->mxcp_gratuity_reg_no;
            $gracnt = substr_count($graduity ,',');
            if($gracnt > 0 ){
               $cmpgratuity = explode(',' , $qry[0]->mxcp_gratuity_reg_no );
               return $cmpgratuity ;         
            }else{
                $cmpgratuity= array(0 => $qry[0]->mxcp_gratuity_reg_no );
                return $cmpgratuity; 
            }
        }else{
            return $cmpgratuity;
        }
       
    }

    public function getemployeeslist($data)
    {
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxdesg_name,mxemp_emp_resignation_status');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        if (!empty($data['cmpname'])) {
            $this->db->where('mxemp_emp_comp_code', $data['cmpname']);
        }
        if (!empty($data['divname'])) {
            $this->db->where('mxemp_emp_division_code', $data['divname']);
        }
        if (!empty($data['brname'])) {
            $this->db->where('mxemp_emp_branch_code', $data['brname']);
        }
        if (!empty($data['emptype'])) {
            $this->db->where('mxemp_emp_type', $data['emptype']);
        }
        if (!empty($data['cmpstate'])) {
            $this->db->where('mxemp_emp_state_code', $data['cmpstate']);
        }
        if (!empty($data['empgender'])) {
            $this->db->where('mxemp_emp_gender', $data['empgender']);
        }

        if (!empty($data['empmonth'])) {
            $this->db->where('MONTH(mxemp_emp_date_of_join)', $data['empmonth']);
        }

        if (!empty($data['empyear'])) {
            $this->db->where('YEAR(mxemp_emp_date_of_join)', $data['empyear']);
        }

        if ($data['empstatus'] == 100) {
            $st = 1;
            $this->db->where('mxemp_emp_status', $st);
        } elseif ($data['empstatus'] == 200) {
            // $st = 1;
            $st = 'R';
            $this->db->where('mxemp_emp_resignation_status', $st);
        }
        
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }

    
    public function getemployeecompletedetails($id)
    {
        // Employee Info
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,
        mxemp_emp_dept_code,mxemp_emp_grade_code,mxgrd_name,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,
        mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,mxemp_emp_company_email_id,
        mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,
        mxemp_emp_present_address2,mxemp_emp_present_city,mxemp_emp_present_state_id,mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,
        mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state_id,mxemp_emp_fixed_state,mxemp_emp_fixed_country,mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,
        mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,
        mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxdpt_is_director,mxdpt_is_hr,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,
        mxemp_emp_resignation_status,mxemp_emp_resignation_reason,mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,
        mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,
        mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,
        empmaritaldate,mxemp_emp_present_since,mxemp_emp_fixed_present_since,mxemp_ty_name,mxemp_emp_employee_lic_no,mxemp_emp_gratuity,mxemp_emp_esiimage,
        mxemp_emp_bankimage,mxemp_emp_nameasperbank,mxemp_emp_lic_info1,mxemp_emp_lic_info2,mxemp_emp_lic_info3,mxemp_emp_lic_info4,mxemp_emp_relation,mxemp_emp_relation_name,pfjoindate,epsjoindate,esijoindate');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
        $this->db->where('mxemp_emp_autouniqueid', $id);
        $this->db->where('mxemp_emp_status', 1);
        $query1 = $this->db->get();
        $qry1 = $query1->result();
        $returnarray['employeeinfo'] = $qry1;
        // Employee Info
         
        // Academic Records
        $this->db->select('mxemp_emp_acr_id,mxemp_emp_acr_employee_id,mxemp_emp_acr_type,mxemp_emp_acr_yop,mxemp_emp_acr_institution,mxemp_emp_acr_subject,mxemp_emp_acr_university,
                            mxemp_emp_acr_marks,"maxwell_employees_academic_records" as tblname');
        $this->db->from('maxwell_employees_academic_records');
        $this->db->where('mxemp_emp_acr_employee_id', $qry1[0]->mxemp_emp_id);
        // $this->db->where('maxemp_emp_acr_status', 1);
        $query2 = $this->db->get();
        $returnarray['employeeacr'] = $query2->result();
        // Academic Records

        // Training
        $this->db->select('mxemp_emp_tr_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_employee_id,mxemp_emp_tr_nameofcourse,mxemp_emp_tr_nameofinstutions,mxemp_emp_tr_fromdate,
                          mxemp_emp_tr_todate,"maxwell_employees_training" as tblname');
        $this->db->from('maxwell_employees_training');
        $this->db->where('mxemp_emp_tr_employee_id', $qry1[0]->mxemp_emp_id);
        $query3 = $this->db->get();
        $returnarray['employeetr'] = $query3->result();
        // Training

        // Family
        $this->db->select('mxemp_emp_fm_id,mxemp_emp_fm_employee_id,mxemp_emp_fm_relation,mxemp_emp_fm_name,mxemp_emp_fm_age,mxemp_emp_fm_occupation,mxemp_emp_fm_title,"maxwell_employees_family" as tblname');
        $this->db->from('maxwell_employees_family');
        $this->db->where('mxemp_emp_fm_employee_id', $qry1[0]->mxemp_emp_id);
        $query4 = $this->db->get();
        $returnarray['employeefm'] = $query4->result();
        // Family

        // Previous Employments
        $this->db->select('mxemp_emp_pe_id,mxemp_emp_pe_employee_id,mxemp_emp_pe_periodfromto,mxemp_emp_pe_nameandorg,mxemp_emp_pe_desgjointime,mxemp_emp_pe_desgleavingtime,
                           mxemp_emp_pe_desgreportedto,mxemp_emp_pe_monthlysalary,mxemp_emp_pe_otherbenfits,mxemp_emp_pe_reasonforchange');
        $this->db->from('maxwell_employees_previousemployments');
        $this->db->where('mxemp_emp_pe_employee_id', $qry1[0]->mxemp_emp_id);
        $query5 = $this->db->get();
        $returnarray['employeepe'] = $query5->result();
        // Previous Employments

        // Nominee Details
        $this->db->select('mxemp_emp_nm_id,mxemp_emp_nm_employee_id,mxemp_emp_nm_type,mxemp_emp_nm_relation,mxemp_emp_nm_relationname,mxemp_emp_nm_relationage,mxemp_emp_nm_relationmobile,
                           mxemp_emp_nm_relationaddress,mxemp_emp_nm_relationpercent,mxemp_emp_nm_relationimage');
        $this->db->from('maxwell_employees_nominee');
        $this->db->where('mxemp_emp_nm_employee_id', $qry1[0]->mxemp_emp_id);
        $query5 = $this->db->get();
        $returnarray['employeenominee'] = $query5->result();
        // Nominee Details

        // Refrences Details
        $this->db->select('mxemp_emp_rf_id,mxemp_emp_rf_employee_id,mxemp_emp_rf_type,mxemp_emp_rf_relation,mxemp_emp_rf_relationname,mxemp_emp_rf_relationmobile');
        $this->db->from('maxwell_employees_refrence');
        $this->db->where('mxemp_emp_rf_employee_id', $qry1[0]->mxemp_emp_id);
        $query5 = $this->db->get();
        $returnarray['employeerefrence'] = $query5->result();
        // Refrences Details

        // Languages Details
        $this->db->select('mxemp_emp_lng_id,mxemp_emp_lng_employee_id,mxemp_emp_lng,mxemp_emp_lng_speak,mxemp_emp_lng_read,mxemp_emp_lng,mxemp_emp_lng_write,
                           mxlg_name,"maxwell_employees_lanaguages" as tblangname');
        $this->db->from('maxwell_employees_lanaguages');
        $this->db->join('maxwell_languages_master', 'mxemp_emp_lng = mxlg_id', 'INNER');
        $this->db->where('mxemp_emp_lng_employee_id', $qry1[0]->mxemp_emp_id);
        $query6 = $this->db->get();
        $returnarray['employeelanaguages'] = $query6->result();
        // Languages Details

        // Transfers Details
        $this->db->select('mxemp_trs_comp_name_from,mxemp_trs_comp_name_to,mxemp_trs_div_name_from,mxemp_trs_div_name_to,mxemp_trs_state_name_from,mxemp_trs_state_name_to,
                           mxemp_trs_branch_name_from,mxemp_trs_branch_name_to,mxemp_trs_type,mxemp_trs_from_dt,mxemp_trs_to_dt,mxemp_trs_esi_relieaving_date,
                           mxemp_trs_esi_joining_date,mxemp_trs_emp_releaving_date,mxemp_trs_emp_joining_date,mxemp_trs_remark');
        $this->db->from('maxwell_emp_trasfers');
        $this->db->where('mxemp_trs_emp_code', $qry1[0]->mxemp_emp_id);
        $query7 = $this->db->get();
        $returnarray['employeetransfers'] = $query7->result();
        
        // Transfers Details
// ---------------  added chandana 19-05-2021---------

        // Authorizations
        $this->db->select('mxauth_id,mxauth_auth_type,mxauth_div_id,mxauth_emp_code,mxauth_comp_id,');
        $this->db->from('maxwell_emp_authorsations');
        $this->db->where('mxauth_emp_code', $qry1[0]->mxemp_emp_id);
        $this->db->where('mxauth_status',1);
        $query7 = $this->db->get();
        $returnarray['employeeauthorizations'] = $query7->result();
        // Authorizations

// ---------------  added chandana 19-05-2021---------

        return $returnarray;
    }


public function updateemployeedetails($data){

        // PERSONAL INFORMATION
        $empfname = $this->cleanInput($data['empfname']);
        $emplname = $this->cleanInput($data['emplname']);
        
        $empgender = $this->cleanInput($data['empgender']);
        $empbloodgroup = $this->cleanInput($data['empbloodgroup']);
        $empmobile = $this->cleanInput($data['empmobile']);
        $empaltmobile = $this->cleanInput($data['empaltmobile']);
        $empmtongue = $this->cleanInput($data['empmtongue']);
        $empage = $this->cleanInput($data['empage']);
        $empguarantorsdetails = $this->cleanInput($data['empguarantorsdetails']);
        $empemail = $this->cleanInput($data['empemail']);
        $cmp_empemail = $this->cleanInput($data['cmp_empemail']);
        $empdob = date('Y-m-d', strtotime($this->cleanInput($data['empdob'])));
        $empcaste = $this->cleanInput($data['empcaste']);
        $empmarital = $this->cleanInput($data['empmarital']);
        $empsalary = $this->cleanInput($data['empsalary']);
        $employeeid = $this->cleanInput($data['peremployeeid']);
        $uniqueid = $this->cleanInput($data['uniqueid']);
        $empnameasperbank = $this->cleanInput($data['empnameasperbank']);
        $emprelation = $this->cleanInput($data['emprelation']);
        $emprelation_name = $this->cleanInput($data['emprelation_name']);

        if (!empty($data['empmaritaldate'])) {
            $empmaritaldate = date('Y-m-d', strtotime($this->cleanInput($data['empmaritaldate'])));
        } else {
            $empmaritaldate = '';
        }

        // PERSONAL INFORMATION

        // Vehicle Information
        $emplicense = $this->cleanInput($data['emplicense']);
        $vehicle = $this->cleanInput($data['vehicle']);
        if ($vehicle == "HAVING VEHICLE") {
            $twowheeler = $this->cleanInput($data['wheeler']);
        } else {
            $twowheeler =  "";
        }
        // Vehicle Information

        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        $uparray = array(
            "mxemp_emp_relation"=>$emprelation,
            "mxemp_emp_relation_name" => $emprelation_name,
            "mxemp_emp_fname" => $empfname,
            "mxemp_emp_lname" => $emplname,
            "mxemp_emp_gender" => $empgender,
            "mxemp_emp_bloodgroup" => $empbloodgroup,
            "mxemp_emp_phone_no" => $empmobile,
            "mxemp_emp_alt_phn_no" => $empaltmobile,
            "mxemp_emp_mother_tongue" => $empmtongue,
            "mxemp_emp_age" => $empage,
            "mxemp_emp_empguarantorsdetails" => $empguarantorsdetails,
            "mxemp_emp_email_id" => $empemail,
            "mxemp_emp_company_email_id" => $cmp_empemail,
            "mxemp_emp_date_of_birth" => $empdob,
            "mxemp_emp_caste" => $empcaste,
            "mxemp_emp_marital_status" => $empmarital,
            "empmaritaldate" => $empmaritaldate,
            "mxemp_emp_current_salary" => $empsalary,
            "mxemp_emp_having_vehicle" => $vehicle,
            "mxemp_emp_vehicle_type" => $twowheeler,
            "mxemp_emp_license" => $emplicense,
            "mxemp_modifyby" => $this->session->userdata('user_id'),
            "mxemp_modifiedtime" => $date,
            "mxemp_modified_ip" => $ip,
            "mxemp_emp_nameasperbank" => $empnameasperbank,
        );

        // Image Upload
        if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
            $targetfolder = "uploads/employeeimages/";
            $targetfolder1 = basename($_FILES['file']['name']);
            $fileext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $destination = $targetfolder . $employeeid . "." . $fileext;
            move_uploaded_file($_FILES['file']['tmp_name'], $destination);
            $uparray["mxemp_emp_img"] = $destination;
        }
        
        $lguparray = array('mxemp_emp_lg_fullname' => $empfname);
        $this->db->where('mxemp_emp_lg_employee_id', $employeeid);
        $this->db->update('maxwell_employees_login', $lguparray);
        
        $this->db->where('mxemp_emp_autouniqueid', $uniqueid);
        $this->db->where('mxemp_emp_id', $employeeid);
        return $this->db->update('maxwell_employees_info', $uparray);

}


public function updateemployeeacademicdetails($data){
        $this->db->trans_begin();
        // Academic Records
        if (count($data['empacrtype']) > 0 && !empty($data['empacrtype'])) {
            $acr = 1;
            for ($i = 0; $i < count($data['empacrtype']); $i++) {
                $empacryop = $this->cleanInput($data['empacryop'][$i]);
                $empacrinstitution = $this->cleanInput($data['empacrinstitution'][$i]);
                $empacrsubject = $this->cleanInput($data['empacrsubject'][$i]);
                $empacruniversity = $this->cleanInput($data['empacruniversity'][$i]);
                $empacrmarks = $this->cleanInput($data['empacrmarks'][$i]);
                $newemployeeid = $this->cleanInput($data['empacremployeeid'][$i]);
                $empacruniqid = $this->cleanInput($data['empacruniqid'][$i]);

                    $ip = $this->get_client_ip();
                    $date = date('Y-m-d H:i:s');
                $uparrayacr = array(
                    "mxemp_emp_acr_type" => $data['empacrtype'][$i],
                    "mxemp_emp_acr_yop" => $empacryop,
                    "mxemp_emp_acr_institution" => $empacrinstitution,
                    "mxemp_emp_acr_subject" => $empacrsubject,
                    "mxemp_emp_acr_university" => $empacruniversity,
                    "mxemp_emp_acr_marks" => $empacrmarks,
                    "mxemp_emp_acr_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_acr_modifiedtime" => $date,
                    "mxemp_emp_acr_modified_ip" => $ip,
                );

                if (is_uploaded_file($_FILES["empacrimage"]["tmp_name"][$i])) {
                    $targetfolder14 = "uploads/empdocuments/";
                    $fileext14 = pathinfo($_FILES['empacrimage']['name'][$i], PATHINFO_EXTENSION);
                    $acrimage = $targetfolder14 . $newemployeeid . "_" . $data['empacrtype'][$i] . "_" . $acr . "." . $fileext14;
                    move_uploaded_file($_FILES['empacrimage']['tmp_name'][$i], $acrimage);
                    $uparrayacr["mxemp_emp_acr_files"] = $acrimage;
                }
                    $this->db->where('mxemp_emp_acr_id', $empacruniqid);
                    $this->db->where('mxemp_emp_acr_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_academic_records', $uparrayacr);
                $acr++;
            }
        }
        // Academic Records
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updateemployeetraining($data){
    // print_r($data);
        $this->db->trans_begin();
        // Training Courses
        if (count($data['emptrcourse']) > 0 && !empty($data['emptrcourse'])) {
            $tr = 1;
            for ($i = 0; $i < count($data['emptrcourse']); $i++) {
                $emptrcourse = $this->cleanInput($data['emptrcourse'][$i]);
                $emptrinstitution = $this->cleanInput($data['emptrinstitution'][$i]);
                $emptrfrom = $this->cleanInput($data['emptrfrom'][$i]);
                $emptrto = $this->cleanInput($data['emptrto'][$i]);
                $newemployeeid = $this->cleanInput($data['empatremployeeid'][$i]);
                $empatruniqid = $this->cleanInput($data['empatruniqid'][$i]);


                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $uparraytr = array(
                    // "mxemp_emp_tr_employee_id" => $newemployeeid,
                    "mxemp_emp_tr_nameofcourse" => $emptrcourse,
                    "mxemp_emp_tr_nameofinstutions" => $emptrinstitution,
                    "mxemp_emp_tr_fromdate" => $emptrfrom,
                    "mxemp_emp_tr_todate" => $emptrto,
                    "mxemp_emp_tr_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_tr_modifiedtime" => $date,
                    "mxemp_emp_tr_modified_ip" => $ip,
                );

                if (is_uploaded_file($_FILES["emptrimage"]["tmp_name"][$i])) {
                    $targetfolder14 = "uploads/empdocuments/";
                    $fileext14 = pathinfo($_FILES['emptrimage']['name'][$i], PATHINFO_EXTENSION);
                    $trimage = $targetfolder14 . $newemployeeid . "_" . $emptrcourse . "_" . $tr . "." . $fileext14;
                    move_uploaded_file($_FILES['emptrimage']['tmp_name'][$i], $trimage);
                    $uparraytr["mxemp_emp_tr_files"] = $trimage;
                }

                    $this->db->where('mxemp_emp_tr_id', $empatruniqid);
                    $this->db->where('mxemp_emp_tr_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_training', $uparraytr);
                $tr++;
            }
        }
        // Training Courses
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updateemployeefamily($data){
    // print_r($data);
 // Family Information     
    $this->db->trans_begin();   
        if (count($data['empfmrelation']) > 0 && !empty($data['empfmrelation'])) {
            for ($i = 0; $i < count($data['empfmrelation']); $i++) {
                $empfmrelation = $this->cleanInput($data['empfmrelation'][$i]);
                $empfmname = $this->cleanInput($data['empfmname'][$i]);
                $empfmage = date('Y-m-d',strtotime($data['empfmage'][$i]));
                $empfmoccupation = $this->cleanInput($data['empfmoccupation'][$i]);
                $newemployeeid = $this->cleanInput($data['empafmemployeeid'][$i]);
                $empafmuniqid = $this->cleanInput($data['empafmuniqid'][$i]);
                $empfmtitle = $this->cleanInput($data['emptitle'][$i]);
                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $uparrayfm = array(
                    // "mxemp_emp_fm_employee_id" => $newemployeeid,
                    "mxemp_emp_fm_title" => $empfmtitle,
                    "mxemp_emp_fm_relation" => $empfmrelation,
                    "mxemp_emp_fm_name" => $empfmname,
                    "mxemp_emp_fm_age" => $empfmage,
                    "mxemp_emp_fm_occupation" => $empfmoccupation,
                    "mxemp_emp_fm_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_fm_modifiedtime" => $date,
                    "mxemp_emp_fm_modified_ip" => $ip,
                );
                // $this->db->insert('maxwell_employees_family', $inarrayfm);
                    $this->db->where('mxemp_emp_fm_id', $empafmuniqid);
                    $this->db->where('mxemp_emp_fm_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_family', $uparrayfm);
            }
        }
        // Family Information
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updatelanguage($data){
    // print_r($data);
    $this->db->trans_begin();
    $id = $data['sid'];
    $emplanguage = $data['emplanguage'];
    if (isset($data["empspeak"])) {
        $lang_emp_speak = "SPEAK";
    } else {
        $lang_emp_speak = "";
    }
    if (isset($data["empread"])) {
        $lang_emp_read = "READ";
    } else {
        $lang_emp_read = "";
    }
    if (isset($data["empwrite"])) {
        $lang_emp_write = "WRITE";
    } else {
        $lang_emp_write = "";
    }

    $uparraype = array(
        "mxemp_emp_lng" => $emplanguage,
        "mxemp_emp_lng_speak" => $lang_emp_speak,
        "mxemp_emp_lng_read" => $lang_emp_read,
        "mxemp_emp_lng_write" => $lang_emp_write,
        );

    $this->db->where('mxemp_emp_lng_id', $id);
    // $this->db->where('mxemp_emp_pe_employee_id', $newemployeeid);
    $this->db->update('maxwell_employees_lanaguages', $uparraype);
            if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updatepreviousemp($data){
    // print_r($data);
    $this->db->trans_begin();
    // Previous Employment
        if (count($data['emppreviousprediofromto']) > 0 && !empty($data['emppreviousprediofromto'])) {
            for ($i = 0; $i < count($data['emppreviousprediofromto']); $i++) {
                $emppreviousprediofromto = $this->cleanInput($data['emppreviousprediofromto'][$i]);
                $emppreviousorgnation = $this->cleanInput($data['emppreviousorgnation'][$i]);
                $emppreviousdesgjointime = $this->cleanInput($data['emppreviousdesgjointime'][$i]);
                $emppreviousleavingtime = $this->cleanInput($data['emppreviousleavingtime'][$i]);
                $emppreviousreportedto = $this->cleanInput($data['emppreviousreportedto'][$i]);
                $empprevioussalarypermonth = $this->cleanInput($data['empprevioussalarypermonth'][$i]);
                $emppreviousotherbenfits = $this->cleanInput($data['emppreviousotherbenfits'][$i]);
                $emppreviousreasonchange = $this->cleanInput($data['emppreviousreasonchange'][$i]);
                $newemployeeid = $this->cleanInput($data['empapreemployeeid'][$i]);
                $empapeuniqid = $this->cleanInput($data['emppreuniqid'][$i]);
                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $uparraype = array(
                    // "mxemp_emp_pe_employee_id" => $newemployeeid,
                    "mxemp_emp_pe_periodfromto" => $emppreviousprediofromto,
                    "mxemp_emp_pe_nameandorg" => $emppreviousorgnation,
                    "mxemp_emp_pe_desgjointime" => $emppreviousdesgjointime,
                    "mxemp_emp_pe_desgleavingtime" => $emppreviousleavingtime,
                    "mxemp_emp_pe_desgreportedto" => $emppreviousreportedto,
                    "mxemp_emp_pe_monthlysalary" => $empprevioussalarypermonth,
                    "mxemp_emp_pe_otherbenfits" => $emppreviousotherbenfits,
                    "mxemp_emp_pe_reasonforchange" => $emppreviousreasonchange,
                    "mxemp_emp_pe_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_pe_modifiedtime" => $date,
                    "mxemp_emp_pe_modified_ip" => $ip,
                );
                // $this->db->insert('maxwell_employees_previousemployments', $inarraype);
                    $this->db->where('mxemp_emp_pe_id', $empapeuniqid);
                    $this->db->where('mxemp_emp_pe_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_previousemployments', $uparraype);
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updaterefrences($data){
    // print_r($data);
    $this->db->trans_begin();
 // Employee Refrence
        if (count($data['refrencecmptype']) > 0 && !empty($data['refrencecmptype'])) {
            $nm = 1;
            for ($i = 0; $i < count($data['refrencecmptype']); $i++) {
                $refrencecmptype = $this->cleanInput($data['refrencecmptype'][$i]);
                $refrencename = $this->cleanInput($data['refrencename'][$i]);
                $refrencenwcnd = $this->cleanInput($data['refrencenwcnd'][$i]);
                $refrencemobile = $this->cleanInput($data['refrencemobile'][$i]);
                $newemployeeid = $this->cleanInput($data['emprfemployeeid'][$i]);
                $emprfuniqid = $this->cleanInput($data['emprfuniqid'][$i]);
                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $uparrayrf = array(
                    // "mxemp_emp_rf_employee_id" => $newemployeeid,
                    "mxemp_emp_rf_type" => $refrencecmptype,
                    "mxemp_emp_rf_relation" => $refrencename,
                    "mxemp_emp_rf_relationname" => $refrencenwcnd,
                    "mxemp_emp_rf_relationmobile" => $refrencemobile,
                    "mxemp_emp_rf_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_rf_modifiedtime" => $date,
                    "mxemp_emp_rf_modified_ip" => $ip,
                );
                // $this->db->insert('maxwell_employees_refrence', $inarrayrf);
                    $this->db->where('mxemp_emp_rf_id', $emprfuniqid);
                    $this->db->where('mxemp_emp_rf_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_refrence', $uparrayrf);
            }
            if (is_uploaded_file($_FILES["guarantors"]["tmp_name"])) {
                $targetfolder18 = "uploads/empdocuments/";
                $fileext18 = pathinfo($_FILES['guarantors']['name'], PATHINFO_EXTENSION);
                $guarantors = $targetfolder18 . $newemployeeid . "_Guarantors" . "." . $fileext18;
                move_uploaded_file($_FILES['guarantors']['tmp_name'], $guarantors);
                        
                $guarantors_array = array("mxemp_emp_guarantors_letter" => $guarantors,
                                        "mxemp_modifyby"  => $this->session->userdata('user_id'),
                                        "mxemp_modifiedtime"  => $date
                                        );
                $this->db->where('mxemp_emp_id', $newemployeeid);
                $this->db->update('maxwell_employees_info', $guarantors_array);
            }
        }
        // Employee Refrence


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function updatenominee($data){
    // print_r($data);
        $this->db->trans_begin();

// Nominee Details
        if (count($data['esinomineerelationtype']) > 0 && !empty($data['esinomineerelationtype'])) {
            $nm = 1;
            for ($i = 0; $i < count($data['esinomineerelationtype']); $i++) {
                $esinomineerelationtype = $this->cleanInput($data['esinomineerelationtype'][$i]);
                $esinomineerelation = $this->cleanInput($data['esinomineerelation'][$i]);
                $esinomineename = $this->cleanInput($data['esinomineename'][$i]);
                $esinomineeage = $this->cleanInput($data['esinomineeage'][$i]);
                $esinomineemobile = $this->cleanInput($data['esinomineemobile'][$i]);
                $esinomineeaddress = $this->cleanInput($data['esinomineeaddress'][$i]);
                $esinomineepercent = $this->cleanInput($data['esinomineepercent'][$i]);

                
                $newemployeeid = $this->cleanInput($data['empnmemployeeid'][$i]);
                $empnmuniqid = $this->cleanInput($data['empnmuniqid'][$i]);
                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                $uparraynm = array(
                    // "mxemp_emp_nm_employee_id" => $newemployeeid,
                    "mxemp_emp_nm_type" => $esinomineerelationtype,
                    "mxemp_emp_nm_relation" => $esinomineerelation,
                    "mxemp_emp_nm_relationname" => $esinomineename,
                    "mxemp_emp_nm_relationage" => $esinomineeage,
                    "mxemp_emp_nm_relationmobile" => $esinomineemobile,
                    "mxemp_emp_nm_relationaddress" => $esinomineeaddress,
                    "mxemp_emp_nm_relationpercent" => $esinomineepercent,
                    "mxemp_emp_nm_modifyby" => $this->session->userdata('user_id'),
                    "mxemp_emp_nm_modifiedtime" => $date,
                    "mxemp_emp_nm_modified_ip" => $ip,
                );
                if (is_uploaded_file($_FILES["esinomineeimage"]["tmp_name"][$i])) {
                    $targetfolder14 = "uploads/empdocuments/";
                    $fileext14 = pathinfo($_FILES['esinomineeimage']['name'][$i], PATHINFO_EXTENSION);
                    $nmimage = $targetfolder14 . $newemployeeid . "_" . $esinomineerelationtype . "_" . $nm . "." . $fileext14;
                    move_uploaded_file($_FILES['esinomineeimage']['tmp_name'][$i], $nmimage);
                    $uparraynm["mxemp_emp_nm_relationimage"] = $nmimage;
                }
                // $this->db->insert('maxwell_employees_nominee', $inarraynm);
                    $this->db->where('mxemp_emp_nm_id', $empnmuniqid);
                    $this->db->where('mxemp_emp_nm_employee_id', $newemployeeid);
                    $this->db->update('maxwell_employees_nominee', $uparraynm);
                $nm++;
            }
        }
        // Nominee Details

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}


public function updatebank($data){
    // print_r($data);

        // Bank & Statutory
        $newemployeeid = $this->cleanInput($data['bankemployeeid']);
        $bankuniqueid = $this->cleanInput($data['bankuniqueid']);
        $empbankname = $this->cleanInput($data['empbankname']);
        $empbankbranch = $this->cleanInput($data['empbankbranch']);
        $empbankaccno = $this->cleanInput($data['empbankaccno']);
        $empbankifsci = $this->cleanInput($data['empbankifsci']);
        $emppanno = $this->cleanInput($data['emppanno']);
        $empesino = $this->cleanInput($data['empesino']);
        $emppfno = $this->cleanInput($data['emppfno']);
        $empuanno = $this->cleanInput($data['empuanno']);
        $empaadharno = $this->cleanInput($data['empaadharno']);
        
        $gratuity = $this->cleanInput($data['gratuity']);
        $gratuityname = $this->cleanInput($data['gratuityname']);
        $employeelicdetails = $this->cleanInput($data['employeelicdetails']);
        // Bank & Statutory
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        $uparray = array(
            "mxemp_emp_bank_name" => $empbankname,
            "mxemp_emp_bank_branch_name" => $empbankbranch,
            "mxemp_emp_bank_acc_no" => $empbankaccno,
            "mxemp_emp_bank_ifsci_no" => $empbankifsci,
            "mxemp_emp_panno" => $emppanno,
            "mxemp_emp_aadhar" => $empaadharno,
            "mxemp_emp_esi_number" => $empesino,
            "mxemp_emp_pf_number" => $emppfno,
            "mxemp_emp_uan_number" => $empuanno,
            "mxemp_emp_gratuity" => $gratuity,
            "mxemp_emp_gratuity_name" => $gratuityname,
            "mxemp_emp_employee_lic_no" => $employeelicdetails,
            "mxemp_modifyby" => $this->session->userdata('user_id'),
            "mxemp_modifiedtime" => $date,
            "mxemp_modified_ip" => $ip,
        );

        if (is_uploaded_file($_FILES["pancardimg"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['pancardimg']['name'], PATHINFO_EXTENSION);
            $panimage = $targetfolder12 . $newemployeeid . "_PANCARD" . "." . $fileext12;
            move_uploaded_file($_FILES['pancardimg']['tmp_name'], $panimage);
            $uparray["mxemp_emp_panimage"] = $panimage;
        }

        if (is_uploaded_file($_FILES["empaadharnoimg"]["tmp_name"])) {
            $targetfolder13 = "uploads/empdocuments/";
            $fileext13 = pathinfo($_FILES['empaadharnoimg']['name'], PATHINFO_EXTENSION);
            $aadharimage = $targetfolder13 . $newemployeeid . "_AADHARCARD" . "." . $fileext13;
            move_uploaded_file($_FILES['empaadharnoimg']['tmp_name'], $aadharimage);
            $uparray["mxemp_emp_aadharimage"] = $aadharimage;
        }

        if (is_uploaded_file($_FILES["empesinoimg"]["tmp_name"])) {
            $targetfolder14 = "uploads/empdocuments/";
            $fileext14 = pathinfo($_FILES['empesinoimg']['name'], PATHINFO_EXTENSION);
            $esiimage = $targetfolder14 . $newemployeeid . "_ESI" . "." . $fileext14;
            move_uploaded_file($_FILES['empesinoimg']['tmp_name'], $esiimage);
            $uparray["mxemp_emp_esiimage"] = $esiimage;
        }
        
        if (is_uploaded_file($_FILES["bankimg"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['bankimg']['name'], PATHINFO_EXTENSION);
            $bankimage = $targetfolder12 . $newemployeeid . "_BANKDETAILS" . "." . $fileext12;
            move_uploaded_file($_FILES['bankimg']['tmp_name'], $bankimage);
            $uparray["mxemp_emp_bankimage"] = $bankimage;
        }
        
        if (is_uploaded_file($_FILES["licfile1"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['licfile1']['name'], PATHINFO_EXTENSION);
            $lic1 = $targetfolder12 . $newemployeeid . "_LIC1" . "." . $fileext12;
            move_uploaded_file($_FILES['licfile1']['tmp_name'], $lic1);
            $uparray["mxemp_emp_lic_info1"] = $lic1;
        }
        
        if (is_uploaded_file($_FILES["licfile2"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['licfile2']['name'], PATHINFO_EXTENSION);
            $lic2 = $targetfolder12 . $newemployeeid . "_LIC2" . "." . $fileext12;
            move_uploaded_file($_FILES['licfile2']['tmp_name'], $lic2);
            $uparray["mxemp_emp_lic_info2"] = $lic2;
        }
        
        if (is_uploaded_file($_FILES["licfile3"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['licfile3']['name'], PATHINFO_EXTENSION);
            $lic3 = $targetfolder12 . $newemployeeid . "_LIC3" . "." . $fileext12;
            move_uploaded_file($_FILES['licfile3']['tmp_name'], $lic3);
            $uparray["mxemp_emp_lic_info3"] = $lic3;
        }
        
        if (is_uploaded_file($_FILES["licfile4"]["tmp_name"])) {
            $targetfolder12 = "uploads/empdocuments/";
            $fileext12 = pathinfo($_FILES['licfile4']['name'], PATHINFO_EXTENSION);
            $lic4 = $targetfolder12 . $newemployeeid . "_LIC4" . "." . $fileext12;
            move_uploaded_file($_FILES['licfile4']['tmp_name'], $lic4);
            $uparray["mxemp_emp_lic_info4"] = $lic4;
        }

        $this->db->where('mxemp_emp_autouniqueid', $bankuniqueid);
        $this->db->where('mxemp_emp_id', $newemployeeid);
        return $this->db->update('maxwell_employees_info', $uparray);
}

public function updateaddress($data){
    // print_r($data);
        $newemployeeid = $this->cleanInput($data['employeeidaddress']);
        $uniqueidaddress = $this->cleanInput($data['uniqueidaddress']);
        // Address
        $emppreaddress1 = $this->cleanInput($data['emppreaddress1']);
        $emppreaddress2 = $this->cleanInput($data['emppreaddress2']);
        $empprecity = $this->cleanInput($data['empprecity']);
        $empprestate = $this->cleanInput($data['empprestate']);
        $empprecountry = $this->cleanInput($data['empprecountry']);
        $empprepostalcode = $this->cleanInput($data['empprepostalcode']);
        $emppresince = $this->cleanInput($data['emppresince']);
        $empfixedaddress1 = $this->cleanInput($data['empfixedaddress1']);
        $empfixedaddress2 = $this->cleanInput($data['empfixedaddress2']);
        $empfixedcity = $this->cleanInput($data['empfixedcity']);
        $empfixedstate = $this->cleanInput($data['empfixedstate']);
        $empfixedcountry = $this->cleanInput($data['empfixedcountry']);
        $empfixedpostalcode = $this->cleanInput($data['empfixedpostalcode']);
        $empfixedpresince = $this->cleanInput($data['empfixedpresince']);
        // Address    
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        $uparray = array(
            "mxemp_emp_present_address1" => $emppreaddress1,
            "mxemp_emp_present_address2" => $emppreaddress2,
            "mxemp_emp_present_city" => $empprecity,
            "mxemp_emp_present_state" => $empprestate,
            "mxemp_emp_present_country" => $empprecountry,
            "mxemp_emp_present_postalcode" => $empprepostalcode,
            "mxemp_emp_present_since" => $emppresince,
            "mxemp_emp_fixed_address1" => $empfixedaddress1,
            "mxemp_emp_fixed_address2" => $empfixedaddress2,
            "mxemp_emp_fixed_city" => $empfixedcity,
            "mxemp_emp_fixed_state" => $empfixedstate,
            "mxemp_emp_fixed_country" => $empfixedcountry,
            "mxemp_emp_fixed_postalcode" => $empfixedpostalcode,
            "mxemp_emp_fixed_present_since" => $empfixedpresince,
            "mxemp_modifyby" => $this->session->userdata('user_id'),
            "mxemp_modifiedtime" => $date,
            "mxemp_modified_ip" => $ip,
        );
        $this->db->where('mxemp_emp_autouniqueid', $uniqueidaddress);
        $this->db->where('mxemp_emp_id', $newemployeeid);
        return $this->db->update('maxwell_employees_info', $uparray);
}

public function updateemployeeresignationdetails($data){
    $employeecode = $data['employeecode'];
    $empid = $data['empid'];
    $uparray = array(
        "mxemp_emp_resignation_status" => "W",
        "mxemp_emp_resignation_reason" => "",
        "mxemp_emp_resignation_date" => "",
        "mxemp_emp_resignation_relieving_date" => "",
        "mxemp_emp_resignation_relieving_settlement_date" => "",
        "mxemp_emp_resignation_relieving_esi_settlement_date" => "",
        "mxemp_emp_resignation_relieving_pf_settlement_date" => "",
        "mxemp_emp_resignation_status_future_referance " => "W",
        "mxemp_emp_unpay_sal_months" => "",
        "mxemp_emp_joiningorgination" => "",
        "mxemp_emp_joiningorginationofferpackage" => "",
        "mxemp_emp_joiningorginationdesignation" => "",
        "mxemp_emp_resignationletter" => "",
    );
        $this->db->where('mxemp_emp_autouniqueid', $empid);
        $this->db->where('mxemp_emp_id', $employeecode);
        return $this->db->update('maxwell_employees_info', $uparray);
}

public function updateemployeepassword($data){
    $employeecode = $data['employeecode'];
    $cnfpswd = $data['cnfpswd'];
    $oldpswd = $data['oldpswd'];

        $this->db->select('mxemp_emp_lg_password,mxemp_emp_lg_employee_id,mxemp_emp_lg_id');
        $this->db->from('maxwell_employees_login');
        $this->db->where('mxemp_emp_lg_employee_id',$employeecode);
        $query = $this->db->get();
        $qry = $query->result();
        if($qry[0]->mxemp_emp_lg_password != $oldpswd){
            return 800; exit;
        }else{
            $uparray = array(
                "mxemp_emp_lg_password" => $cnfpswd
            );
            $this->db->where('mxemp_emp_lg_id', $qry[0]->mxemp_emp_lg_id);
            $this->db->where('mxemp_emp_lg_employee_id', $employeecode);
            return $this->db->update('maxwell_employees_login', $uparray);
        }
}

public function addnewfamily($data){
    // print_r($data);
 // Family Information     
    $this->db->trans_begin();   
        $empfmrelation = $this->cleanInput($data['empfmrelationadd']);
        $empfmname = $this->cleanInput($data['empfmnameadd']);
        $empfmage = date('Y-m-d',strtotime($data['empfmageadd']));
        $empfmoccupation = $this->cleanInput($data['empfmoccupationadd']);
        $newemployeeid = $this->cleanInput($data['empafmemployeeidadd']);
        $empfmtitle = $this->cleanInput($data['emptitleadd']);
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        $inarrayfm = array(
            "mxemp_emp_fm_employee_id" => $newemployeeid,
            "mxemp_emp_fm_title" => $empfmtitle,
            "mxemp_emp_fm_relation" => $empfmrelation,
            "mxemp_emp_fm_name" => $empfmname,
            "mxemp_emp_fm_age" => $empfmage,
            "mxemp_emp_fm_occupation" => $empfmoccupation,
            "mxemp_emp_fm_createdby" => $this->session->userdata('user_id'),
            "mxemp_emp_fm_createdtime" => $date,
            "mxemp_emp_fm_created_ip" => $ip,
        );
        $this->db->insert('maxwell_employees_family', $inarrayfm);

        // Family Information
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function addnew_refr($data){
    $ip = $this->get_client_ip();
    $date = date('Y-m-d H:i:s');
    $this->db->trans_begin();   
    if (count($data['refrencecmptype']) > 0 && !empty($data['refrencecmptype'])) {
            $newemployeeid = $data['editemprfemployeeid'];
            $refrencecmptype = $this->cleanInput($data['refrencecmptype']);
            $refrencename = $this->cleanInput($data['refrencename']);
            $refrencenwcnd = $this->cleanInput($data['refrencenwcnd']);
            $refrencemobile = $this->cleanInput($data['refrencemobile']);

            $inarrayrf = array(
                "mxemp_emp_rf_employee_id" => $newemployeeid,
                "mxemp_emp_rf_type" => $refrencecmptype,
                "mxemp_emp_rf_relation" => $refrencenwcnd,
                "mxemp_emp_rf_relationname" => $refrencename,
                "mxemp_emp_rf_relationmobile" => $refrencemobile,
                "mxemp_emp_rf_createdby" => $this->session->userdata('user_id'),
                "mxemp_emp_rf_createdtime" => $date,
                "mxemp_emp_rf_created_ip" => $ip,
            );
            $this->db->insert('maxwell_employees_refrence', $inarrayrf);

    } 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function addnew_academic($data){
    $ip = $this->get_client_ip();
    $date = date('Y-m-d H:i:s');
    $this->db->trans_begin();   
    if (!empty($data['add_empacrtype'])) {
            $add_empacrtype = $data['add_empacrtype'];
            $add_empacryop = $this->cleanInput($data['add_empacryop']);
            $add_empacrinstitution = $this->cleanInput($data['add_empacrinstitution']);
            $add_empacrsubject = $this->cleanInput($data['add_empacrsubject']);
            $add_empacruniversity = $this->cleanInput($data['add_empacruniversity']);
            $add_empacrmarks = $this->cleanInput($data['add_empacrmarks']);
            $employeecode = $this->cleanInput($data['editempaccemployeeid']);

            $inarrayrf = array(
                "mxemp_emp_acr_type" => $add_empacrtype,
                "mxemp_emp_acr_yop" => $add_empacryop,
                "mxemp_emp_acr_institution" => $add_empacrinstitution,
                "mxemp_emp_acr_subject" => $add_empacrsubject,
                "mxemp_emp_acr_university" => $add_empacruniversity,
                "mxemp_emp_acr_marks" => $add_empacrmarks,
                "mxemp_emp_acr_employee_id" => $employeecode,
                "mxemp_emp_acr_createdby" => $this->session->userdata('user_id'),
                "mxemp_emp_acr_createdtime" => $date,
                "mxemp_emp_acr_created_ip" => $ip,
            );
            $this->db->insert('maxwell_employees_academic_records', $inarrayrf);

    } 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}

public function addnew_training($data){
    $ip = $this->get_client_ip();
    $date = date('Y-m-d H:i:s');
    $this->db->trans_begin();   
    if (!empty($data['add_emptrcourse'])) {
            $add_emptrcourse = $data['add_emptrcourse'];
            $add_emptrinstitution = $this->cleanInput($data['add_emptrinstitution']);
            $add_emptrfrom = $this->cleanInput($data['add_emptrfrom']);
            $add_emptrto = $this->cleanInput($data['add_emptrto']);
            
            $employeecode = $this->cleanInput($data['editemptrainingemployeeid']);

            $inarrayrf = array(
                "mxemp_emp_tr_nameofcourse" => $add_emptrcourse,
                "mxemp_emp_tr_nameofinstutions" => $add_emptrinstitution,
                "mxemp_emp_tr_fromdate" => $add_emptrfrom,
                "mxemp_emp_tr_todate" => $add_emptrto,
                "mxemp_emp_tr_employee_id" => $employeecode,
                "mxemp_emp_tr_createdby" => $this->session->userdata('user_id'),
                "mxemp_emp_tr_createdtime" => $date,
                "mxemp_emp_tr_created_ip" => $ip,
            );
            $this->db->insert('maxwell_employees_training', $inarrayrf);

    } 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}


public function addnew_previous_employment($data){
    $ip = $this->get_client_ip();
    $date = date('Y-m-d H:i:s');
    $this->db->trans_begin();   
    if (!empty($data['add_emppreviousprediofromto'])) {

            $emppreviousprediofromto = $this->cleanInput($data['add_emppreviousprediofromto']);
            $emppreviousorgnation = $this->cleanInput($data['add_emppreviousorgnation']);
            $emppreviousdesgjointime = $this->cleanInput($data['add_emppreviousdesgjointime']);
            $emppreviousleavingtime = $this->cleanInput($data['add_emppreviousleavingtime']);
            $emppreviousreportedto = $this->cleanInput($data['add_emppreviousreportedto']);
            $empprevioussalarypermonth = $this->cleanInput($data['add_empprevioussalarypermonth']);
            $emppreviousotherbenfits = $this->cleanInput($data['add_emppreviousotherbenfits']);
            $emppreviousreasonchange = $this->cleanInput($data['add_emppreviousreasonchange']);
            $editemppreviousemploymentemployeeid = $this->cleanInput($data['editemppreviousemploymentemployeeid']);

            $inarrayrf = array(
                "mxemp_emp_pe_employee_id" => $editemppreviousemploymentemployeeid,
                "mxemp_emp_pe_periodfromto" => $emppreviousprediofromto,
                "mxemp_emp_pe_nameandorg" => $emppreviousorgnation,
                "mxemp_emp_pe_desgjointime" => $emppreviousdesgjointime,
                "mxemp_emp_pe_desgleavingtime" => $emppreviousleavingtime,
                "mxemp_emp_pe_desgreportedto" => $emppreviousreportedto,
                "mxemp_emp_pe_monthlysalary" => $empprevioussalarypermonth,
                "mxemp_emp_pe_otherbenfits" => $emppreviousotherbenfits,
                "mxemp_emp_pe_reasonforchange" => $emppreviousreasonchange,
                "mxemp_emp_pe_createdby" => $this->session->userdata('user_id'),
                "mxemp_emp_pe_createdtime" => $date,
                "mxemp_emp_pe_created_ip" => $ip,
            );
            
            $this->db->insert('maxwell_employees_previousemployments', $inarrayrf);

    } 
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
}



    public function getemployeecard($id){
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,
        mxemp_emp_dept_code,mxemp_emp_grade_code,mxgrd_name,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,
        mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,
        mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,
        mxemp_emp_present_address2,mxemp_emp_present_city,mxemp_emp_present_state_id,mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,
        mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state_id,mxemp_emp_fixed_state,mxemp_emp_fixed_country,mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,
        mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,
        mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxdpt_is_director,mxdpt_is_hr,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,
        mxemp_emp_resignation_status,mxemp_emp_resignation_reason,mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,
        mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,
        mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,
        empmaritaldate,mxemp_emp_present_since,mxemp_emp_fixed_present_since,mxemp_ty_name');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
        $this->db->where('mxemp_emp_autouniqueid', $id);
        $this->db->where('mxemp_emp_status', 1);
        $query1 = $this->db->get();
        $qry1 = $query1->result();
        $returnarray['employeeinfo'] = $qry1;
        return $returnarray;
    }

} ?>
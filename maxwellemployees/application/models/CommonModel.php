<?php

error_reporting(0);
defined('BASEPATH') or exit('No Direct Script Acesses Allowed');

class CommonModel extends CI_Model
{

    protected $imglink = 'uploads/';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getCompanyfilter(){
        $this->db->select('mxcp_id,mxcp_name');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_id','1');
        $query = $this->db->get();
        return $qury = $query->result();
    }

    public function grademaster($id){
        $this->db->select('mxgrd_id,mxgrd_name');
        $this->db->from('maxwell_grade_master');
        $this->db->where('mxgrd_status = 1');
        $this->db->where('mxgrd_comp_id',$id);
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    } 

    public function getdivisions_based_on_branch_master($cmp_id = null, $type = null){
        //--------------SUB QUERY GETTING DISTINCT STATES FROM BRANCH MASTER
        $this->db->select('distinct(mxb_div_id)');
        $this->db->from('maxwell_branch_master');
        $this->db->where('mxb_status', 1);
        if ($cmp_id != null) {
            $this->db->where('mxb_comp_id', $cmp_id);
        }
        // BASED ON PERMISSION WE WILL DISPLAY DIVISIONS ACCORDINGLY
        if($this->session->userdata('user_limiteddropdowns') == 1){
            $bruser = $this->session->userdata('user_branch');
            $brselected = $this->session->userdata('user_custom_branches');
            if(isset($brselected) && !empty($brselected)){
                $br = explode(',',$brselected);
                if(count($br)>0){
                    $bruser_assigned_br = $br;
                }else{
                    $bruser_assigned_br = array($brselected);
                }
            }else{
                $bruser_assigned_br = array($bruser);
            }
            $this->db->where_in('mxb_id',$bruser_assigned_br);
        }

        if ($type != null) {
            if ($type == "ESI") {
                $this->db->where('mxb_esi_eligibility', 1);
            } else if ($type == "LWF") {
                $this->db->where('mxb_lwf_eligibility', 1);
            } else if ($type == "PT") {
                $this->db->where('mxb_pt_eligibility', 1);
            }
        }

        $this->db->order_by('mxb_div_id');
        $sub_query = $this->db->get_compiled_select();

        //--------------END SUB QUERY GETTING DISTINCT STATES FROM BRANCH MASTER
        $this->db->select('mxd_id,mxd_name')->from('maxwell_division_master');
        $this->db->where("mxd_id in($sub_query)");
        $this->db->order_by('mxd_id');
        $query = $this->db->get();
                // echo $this->db->last_query();exit;
        $result = $query->result();
        return $result;
    }

    public function getemployeetypemasterdetails($id = null, $cmp_id = null){
        // print_r($cmp_id);exit;
        $this->db->select('mxemp_ty_id,mxemp_ty_cmpid,mxcp_name,mxemp_ty_name,mxemp_ty_short_name,mxemp_ty_table_name,mxemp_ty_is_director,mxemp_ty_is_professionals,mxemp_ty_is_trainees,mxemp_ty_supplementry_table_name');
        $this->db->from('maxwell_employee_type_master');
        $this->db->join('maxwell_company_master', 'mxcp_id=mxemp_ty_cmpid');
        $this->db->where('mxemp_ty_status = 1');
        if ($id != null) {
            $this->db->where('mxemp_ty_id', $id);
        }
        if ($cmp_id != null) {
            $this->db->where('mxemp_ty_cmpid', $cmp_id);
        }
        $query = $this->db->get();
        // echo $this->db->last_query();exit;
        $qry = $query->result();
        return $qry;
    }

    public function getstates_based_on_branch_master($cmp_id = null, $div_id = null, $type = null){
        //--------------SUB QUERY GETTING DISTINCT STATES FROM BRANCH MASTER
        $this->db->select('distinct(mxb_state_id)');
        $this->db->from('maxwell_branch_master');
        $this->db->where('mxb_status', 1);
        // BASED ON PERMISSION WE WILL DISPLAY DIVISIONS ACCORDINGLY
        if($this->session->userdata('user_limiteddropdowns') == 1){
            // $this->db->where('mxb_id',$this->session->userdata('user_branch'));
            $bruser = $this->session->userdata('user_branch');
            $brselected = $this->session->userdata('user_custom_branches');
            if(isset($brselected) && !empty($brselected)){
                $br = explode(',',$brselected);
                if(count($br)>0){
                    $bruser_assigned_br = $br;
                }else{
                    $bruser_assigned_br = array($brselected);
                }
            }else{
                $bruser_assigned_br = array($bruser);
            }
            $this->db->where_in('mxb_id',$bruser_assigned_br);
        }
        if ($cmp_id != null) {
            $this->db->where('mxb_comp_id', $cmp_id);
        }
        if ($div_id != null) {
            $this->db->where('mxb_div_id', $div_id);
        }

        if ($type != null) {
            if ($type == "ESI") {
                $this->db->where('mxb_esi_eligibility', 1);
            } else if ($type == "LWF") {
                $this->db->where('mxb_lwf_eligibility', 1);
            } else if ($type == "PT") {
                $this->db->where('mxb_pt_eligibility', 1);
            }
        }

        $this->db->order_by('mxb_state_id');
        $sub_query = $this->db->get_compiled_select();

        //--------------END SUB QUERY GETTING DISTINCT STATES FROM BRANCH MASTER
        $this->db->select('mxst_id,mxst_state')->from('maxwell_state_master');
        $this->db->where("mxst_id in($sub_query)");
        $this->db->order_by('mxst_id');
        $query = $this->db->get();
                // echo $this->db->last_query();exit;
        $result = $query->result();
        return $result;
    }

    public function getbranches_based_on_eligibility_state_wise($cmp_id = null, $div_id = null, $state_id = null, $type = null, $is_headoffice = null){

        $this->db->select('mxb_id,mxb_name,mxb_is_head_office');
        $this->db->from('maxwell_branch_master');
        $this->db->where('mxb_status', 1);
        // BASED ON PERMISSION WE WILL DISPLAY DIVISIONS ACCORDINGLY
        if($this->session->userdata('user_limiteddropdowns') == 1){
            // $this->db->where('mxb_id',$this->session->userdata('user_branch'));
            $bruser = $this->session->userdata('user_branch');
            $brselected = $this->session->userdata('user_custom_branches');
            if(isset($brselected) && !empty($brselected)){
                $br = explode(',',$brselected);
                if(count($br)>0){
                    $bruser_assigned_br = $br;
                }else{
                    $bruser_assigned_br = array($brselected);
                }
            }else{
                $bruser_assigned_br = array($bruser);
            }
            $this->db->where_in('mxb_id',$bruser_assigned_br);
        }
        if ($type == "ESI") {
            $this->db->where('mxb_esi_eligibility', 1);
        } else if ($type == "LWF") {
            $this->db->where('mxb_lwf_eligibility', 1);
        } else if ($type == 'PT') {
            $this->db->where('mxb_pt_eligibility', 1);
        }
        if ($cmp_id != null) {
            $this->db->where('mxb_comp_id', $cmp_id);
        }
        if ($div_id != null) {
            $this->db->where('mxb_div_id', $div_id);
        }
        if ($state_id != null) {
            $this->db->where('mxb_state_id', $state_id);
        }
        if ($is_headoffice != null) {
            $this->db->where('mxb_is_head_office', 1);
        }
        $this->db->order_by('mxb_id');
        $query = $this->db->get();
                // echo $this->db->last_query();exit;
        $result = $query->result();
        return $result;
    }
    
    public function cms_getcompany_data($fieldname){
        // $company_id = $this->session->userdata('user_company');
        $this->db->select('comapny_reg_id,company_reg_name');
        $this->db->from('work_company');
        // $this->db->where('comapny_reg_id',$company_id);
        $this->db->where('company_reg_status','1');
        $this->db->Order_by('company_reg_name');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }

    public function employeeLeaveMasterTypes($leaves){
        // $company_id = $this->session->userdata('user_company');
        $this->db->select('mxlt_leave_name,mxlt_leave_short_name,mxlt_id');
        $this->db->from('maxwell_leave_type_master');
        $this->db->where('mxlt_status','1');
        $this->db->where_in('mxlt_id',$leaves);
        $this->db->Order_by('mxlt_id');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }

    public function getEmployeesWhoAreAssignToAuthorsations($reporting_head_emp_code = ''){
        $employeecode = $this->session->userdata('session_loginperson_id');
        $this->db->select('mxauth_emp_code,mxemp_emp_fname');
        $this->db->from('maxwell_emp_authorsations');
        $this->db->join('maxwell_employees_info','mxemp_emp_id = mxauth_emp_code','inner');
        $this->db->where('mxauth_reporting_head_emp_code', $employeecode);
        $this->db->where('mxauth_status', 1);
        $this->db->where('mxemp_emp_resignation_status !=', 'R');
        $this->db->where('mxauth_emp_code !=', '');
        $this->db->order_by('mxauth_emp_code', 'ASC');
        $query = $this->db->get();
        return $empids = $query->result_array();
    }

    public function displayOptions($leaves){
        // $company_id = $this->session->userdata('user_company');
        
        $ids = explode(',', $leaves['customvalue']['Ids']); // convert string to array
        switch ($leaves['customvalue']['Type']) {
            case 'LeaveType':
                $this->db->select('mxlt_leave_name as descr,mxlt_id as field_value');
                $this->db->from('maxwell_leave_type_master');
                $this->db->where('mxlt_status','1');
                $this->db->where_in('mxlt_id',$ids);
                $this->db->Order_by('mxlt_id');
                $query = $this->db->get();
                // echo $this->db->last_query(); //exit;
                $qury = $query->result();
            break;
        default:
            $this->db->select('OptionValue as field_value,OptionName as descr');
            $this->db->from('options');
            $this->db->where('OptionType',$leaves);
            $this->db->Order_by('OptionOrder');
            $query = $this->db->get();
            $qury = $query->result();
            break;
        }
        return $qury;
    }

    public function options_data($filedname){
        switch ($filedname) {
        case 'CountryMaster':
            $this->db->select('country_id as field_value, country_name as descr');
            $this->db->from('country_master');
            $this->db->where('is_active','1');
            $this->db->Order_by('country_name');
            $query = $this->db->get();
            $qury = $query->result();
        break;
        case 'Originations':
        $this->db->select('OriginationID as field_value, OriginationName as descr');
        $this->db->from('Originations');
        $this->db->Order_by('OriginationName');
        $query = $this->db->get();
        $qury = $query->result();
        break;
        case 'Users':
        $this->db->select('UserID as field_value, UserName as descr');
        $this->db->from('Users');
        $this->db->Order_by('UserName');
        $query = $this->db->get();
        $qury = $query->result();
        break;
        case 'Auditor':
        $this->db->select('ClientAuditorID as field_value, ClientAuditorName as descr');
        $this->db->from('ClientAuditor');
        $this->db->Order_by('ClientAuditorName');
        $query = $this->db->get();
        $qury = $query->result();
        break;
        default:
            $this->db->select('OptionValue as field_value,OptionName as descr');
            $this->db->from('options');
            $this->db->where('OptionType',$filedname);
            $this->db->Order_by('OptionOrder');
            $query = $this->db->get();
            $qury = $query->result();
            break;
        }
        return $qury;
    }
}
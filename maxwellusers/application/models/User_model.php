<?php
// error_reporting(0);
defined('BASEPATH') or exit('No Direct Script Acesses Allowed');
class User_model extends Common_Model
{
    protected $imglink = 'uploads/';
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function googlemap($empid,$date){
        
        $cdate = date('Y-m-d',strtotime($date));
        $monthyear = date('Y_m',strtotime($date));
        $year = date('Y',strtotime($date));
        $my = explode('-',$monthyear);
        $len = strlen($my[1]);
        if($len == 1){
            $y_m = $my[0].'-'.'0'.$my[1];
        }else{
            $y_m =$monthyear;
        }
        $locarrylist= array();
        $locarry=[];
        $this->db->select('location,latitudes,longitudes,attendance_date,attendance_time,mxemp_emp_fname,mxcp_name,mxd_name,mxb_name,mxst_state,employee_code,entry_type,islocation'); 
		if($date)
		{
			$this->db->from('employee_punches_'.$year);
		}
		else
		{
			$year=date('Y');
			$this->db->from('employee_punches_'.$year);
		}
        
        $this->db->join('maxwell_employees_info', 'employee_code = mxemp_emp_id', 'INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = company', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = division', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = state', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = branch', 'INNER');
        $this->db->where('employee_code', $empid);
		
		if($date)
		{
			$this->db->where('attendance_date', $cdate);
		}
		else
		{
			$cdate=date('Y-m');
			$this->db->like('attendance_date', $cdate); 
		}
		
        
        $this->db->where('latitudes !=','');
        $this->db->where('longitudes !=','');
        // $this->db->where('location !=','');
        $query = $this->db->get();
        $qry1 = $query->result_array();
		//echo $this->db->last_query(); exit;
        // echo '<pre>';
        // print_r($qry1);
        $i=1;
        foreach($qry1 as $key=>$val){
           $key1= $key+1;
           $locarrylist['lc'][]= [$val['location'],$val['latitudes'],$val['longitudes'],$key1,$val['attendance_date'],$val['attendance_time']];
        }
        $locarrylist['list'] = $qry1;
        return $locarrylist;
    }
	public function getemployeeslist_attendance_google_map($data)
    {
        $cdate = date('Y-m-d',strtotime($data['attendance']));
        $monthyear = date('Y_m',strtotime($data['attendance']));
        $year = date('Y',strtotime($data['attendance']));
        $my = explode('-',$monthyear);
        $len = strlen($my[1]);
        if($len == 1){
            $y_m = $my[0].'-'.'0'.$my[1];
        }else{
            $y_m =$monthyear;
        }       
        $this->db->select('employee_code'); 
        $this->db->from('employee_punches_'.$year);
        $this->db->join('maxwell_employees_login', 'mxemp_emp_lg_employee_id = employee_code', 'INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = company', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = division', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = state', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = branch', 'INNER');
        
        $this->db->where('attendance_date', $cdate);
        $this->db->where('latitudes !=','');
        $this->db->where('longitudes !=','');
        $this->db->where('mxemp_emp_google_map', 1);
		$employeecode = $this->session->userdata('session_loginperson_id');
        //if(!empty($data['empid'])){
            //$this->db->where('employee_code',$data['empid']);
            $this->db->where('employee_code',$employeecode);
        //}
        $query = $this->db->get();
        $qry1 = $query->result_array();
        $gepemparry=[];
		//echo $this->db->last_query(); exit;
		
        if(count($qry1)>0){
        foreach($qry1 as $geokey =>$geoval){
           $gepemparry[]= $geoval['employee_code'];
        }
        
        $gepemparry1=array_values($gepemparry);
        
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxdesg_name,mxemp_emp_resignation_status,mxemp_emp_date_of_join,mxemp_emp_is_without_notice_period,mxcp_name,mxd_name,mxb_name,mxst_state');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_employees_login', 'mxemp_emp_lg_employee_id = mxemp_emp_id', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
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
        $this->db->where_In('mxemp_emp_id',$gepemparry1);
        $this->db->where('mxemp_emp_is_without_notice_period', 0); 
        $this->db->where('mxemp_emp_status', 1);
        $this->db->where('mxemp_emp_google_map', 1);
        $query = $this->db->get();
        $qry = $query->result();
         //echo $this->db->last_query(); exit;
        return $qry;
        
        }else{
            return $gepemparry;
        }
    }
    
	
	public function leave_listajax_get_data($data)
    {
        $cdate = date('Y-m-d',strtotime($data['attendance']));
        $monthyear = date('Y_m',strtotime($data['attendance']));
        $year = date('Y',strtotime($data['attendance']));
        $my = explode('-',$monthyear);
        $len = strlen($my[1]);
        if($len == 1){
            $y_m = $my[0].'-'.'0'.$my[1];
        }else{
            $y_m =$monthyear;
        } 
$employeecode = $this->session->userdata('session_loginperson_id');


$sql ="SELECT
     (
     select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentCL,
    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentSL,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentEL,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentML,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'OH' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentOH,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'OCH' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentOCH,
      CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
        count(*) AS Totaldays,
        sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                -- OCCASIONAL HOLIDAY
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'OCH' then 1 else 0 end) AS occasional_full_day,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half != 'OCH' then 0.5 else 0 end) AS First_Half_occasional,
                sum(case when mx_attendance_first_half != 'OCH' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS Second_Half_occasional,
                -- END OCCASIONAL HOLIDAY
                -- REGULATION
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1 else 0 end) AS regulation_full_day,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half != 'AR' then 0.5 else 0 end) AS First_Half_regulation,
                sum(case when mx_attendance_first_half != 'AR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS Second_Half_regulation,
                -- END REGULATION
                -- ON DUTY
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1 else 0 end) AS onduty_full_day,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half != 'OD' then 0.5 else 0 end) AS First_Half_onduty,
                sum(case when mx_attendance_first_half != 'OD' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS Second_Half_onduty,
                -- END ON DUTY
                -- ON TOUR
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1 else 0 end) AS ot_full_day,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half != 'OT' then 0.5 else 0 end) AS First_Half_ot,
                sum(case when mx_attendance_first_half != 'OT' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS Second_Half_ot,
                -- END ON TOUR
                -- Absent History
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                -- End Absent History
                -- SHORT LEAVE History
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1 else 0 end) AS Shortleave,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half != 'SHRT' then 0.5 else 0 end) AS First_Half_Shortleave,
                sum(case when mx_attendance_second_half = 'SHRT' AND mx_attendance_first_half != 'SHRT' then 0.5 else 0 end) AS Second_Half_Shortleave,
                -- End SHORT LEAVE History
                -- Present History
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'WO' then 0.5 else 0 end) AS First_Half_Present_WO_Applied,
                sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_WO_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS First_Half_Present_PH_Applied,
                sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_PH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS First_Half_Present_OPH_Applied,
                sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OPH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OCH' then 0.5 else 0 end) AS First_Half_Present_OCH_Applied,
                sum(case when mx_attendance_first_half = 'OCH' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OCH_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AR' then 0.5 else 0 end) AS First_Half_Present_AR_Applied,
                sum(case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_AR_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OD' then 0.5 else 0 end) AS First_Half_Present_OD_Applied,
                sum(case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OD_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'OT' then 0.5 else 0 end) AS First_Half_Present_OT_Applied,
                sum(case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_OT_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS First_Half_Present_ML_Applied,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_ML_Applied,
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                -- End Present History
                -- Maternity History
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                -- End Maternity History
                -- Casualleave History
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                -- End Casualleave History
                -- Sickleave History
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                -- End Sickleave History
                -- Earnedleave History
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                -- End Earnedleave History
                -- Meternityleave History
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
                -- End Meternityleave History
    FROM maxwell_attendance_$y_m
    INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
     where mx_attendance_emp_code = '$employeecode'
    GROUP BY EmployeeID";
        $query = $this->db->query($sql);
        return $qury = $query->result();


		
	}
	
	public function getemployeeslist_attendance_google_map_u($data)
    {
        $empid_frontend = $data['empid'];
        $cdate = date('Y-m-d',strtotime($data['attendance']));
        $monthyear = date('Y_m',strtotime($data['attendance']));
        $year = date('Y',strtotime($data['attendance']));
        $my = explode('-',$monthyear);
        $len = strlen($my[1]);
        if($len == 1){
            $y_m = $my[0].'-'.'0'.$my[1];
        }else{
            $y_m =$monthyear;
        }       
        
		
		/////////////////////////////////
		$employeeid = $this->session->userdata('session_loginperson_id');
        $this->db->distinct();
        $this->db->select('mxauth_emp_code as empid'); 
        $this->db->from('maxwell_emp_authorsations');
        $this->db->where('mxauth_reporting_head_emp_code', $employeeid);
        $this->db->where('mxauth_status = 1');
        $query = $this->db->get();
        $cnt = $query->result_array(); 
		
        $a=[];
        $employeeidval = $employeeid;
        if(count($cnt) > 0){
            array_push($a,$employeeid);
            foreach($cnt as $key=>$val1){  
                array_push($a,$val1['empid']);
            }
            $gepemparry1 = array_values($a);
        }else{
              $gepemparry1 = $employeeid;
        }   
		
		//////////////////////////////////
		
        
        $this->db->select('mxemp_emp_autouniqueid,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxdesg_name,mxemp_emp_resignation_status,mxemp_emp_date_of_join,mxemp_emp_is_without_notice_period,mxcp_name,mxd_name,mxb_name,mxst_state');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_employees_login', 'mxemp_emp_lg_employee_id = mxemp_emp_id', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
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
		
		
		$session_loginperson_dept = $this->session->userdata('session_loginperson_dept');  
		if($session_loginperson_dept=='2')
		{}
		else
		{
			if($empid_frontend)
			{
				if (in_array($empid_frontend, $gepemparry1)) 
				{
					$upper_empids = array_map('strtoupper', $empid_frontend);
					
					//$this->db->where_In('mxemp_emp_id',$empid_frontend);
					$this->db->where_in('UPPER(mxemp_emp_id)', $upper_empids, FALSE);					
				}
				else
				{
					$this->db->where_In('mxemp_emp_id',$employeeid); 
				}
			}
			else
			{
				$this->db->where_In('mxemp_emp_id',$gepemparry1);
			}
			
			
			
			
	    }
		
       
        $this->db->where('mxemp_emp_is_without_notice_period', 0); 
        //$this->db->where('mxemp_emp_resignation_status', 'W'); 
		$this->db->where("(mxemp_emp_resignation_status = 'W' OR mxemp_emp_resignation_status = 'N')");
        $this->db->where('mxemp_emp_status', 1);
        $this->db->where('mxemp_emp_google_map', 1);
        $query = $this->db->get();
        $qry = $query->result();
        //echo $this->db->last_query(); exit;
        return $qry;
        
        
    }
    
	
	
	

    public function checkuserclients($data){
        $emailid = $data['emailid'];
        $password = $data['password'];
        $client = $data['client'];
        $code = trim($data['code']);
        $count = 0;
        
		$this->db->select('mxemp_emp_lg_employee_id,mxemp_emp_lg_fullname,mxemp_emp_lg_role,maxuser_roles_add,maxuser_roles_edit,maxuser_roles_delete,mxemp_emp_inbranch,mxemp_emp_custom_branch');
        $this->db->from('maxwell_employees_login');
        $this->db->join('maxwell_user_roles', 'maxuser_roles_id = mxemp_emp_lg_role', 'INNER');
               if($emailid != '888666'){
            $this->db->join('maxwell_employees_info', 'mxemp_emp_lg_employee_id = mxemp_emp_id', 'INNER');
        }
        $this->db->where('mxemp_emp_lg_employee_id', $emailid);
        $this->db->where('mxemp_emp_lg_password', $password);
        $this->db->where('mxemp_emp_lg_desktop_status = 1');
        $this->db->where('mxemp_emp_lg_desktop_permissions = 1');
        if($emailid != '888666'){
            $this->db->where('mxemp_emp_resignation_status !=', 'R');
            $this->db->where('mxemp_emp_status', 1);
        }
        $query = $this->db->get();
		$count = count($query->row());
        $qry = $query->result();
	//echo $this->db->last_query();exit;
    if($count == 1){
            $qry = $query->result();
            $this->session->set_userdata('session_loginperson_id', $qry[0]->mxemp_emp_lg_employee_id);
            $this->session->set_userdata('session_loginperson_dept', $client);
            $this->session->set_userdata('session_company', $qry[0]->Company);
            $this->session->set_userdata('session_name', $qry[0]->mxemp_emp_lg_fullname);
            $this->session->set_userdata('session_types', $qry[0]->mxemp_emp_lg_role);
            $this->session->set_userdata('session_email', $qry[0]->Email);
            $this->session->set_userdata('is_session_active', 1);
			$emp_id=$qry[0]->mxemp_emp_lg_employee_id;
			$insert_date=date('Y-m-d');
			
			$data=$this->db->query("INSERT INTO login_attempts (emp_id, login_date)VALUES ('$emp_id', '$insert_date');"); 
           
		   echo $resp = json_encode(array('respone' => 200, 'responsetext' => 'Success'));
			}else{
           echo $resp = json_encode(array('respone' => 400, 'responsetext' => 'Invalid Details or You Dont Have Access'));
        }

    }

    public function verifypasscode($data){
        $emailid = $data['emailid'];
        $this->db->select("ConfigEmail,ConfigID");
        $this->db->from("Config");
        $this->db->where("ConfigLoginStatus = 1");
        $this->db->where("ConfigEmail",$emailid);
        $query = $this->db->get();
        $count = count($query->row());
        if($count == 1){
            $qry = $query->result();
            echo $resp = json_encode(array('respone' => 800, 'responsetext' => 'Verification Code Sent'));
            $codeGenerated = generateHexCode(8);
            $subject = 'Your Verification Code for GSR CONSULTANT';
            $html = "<!DOCTYPE html>";
            $html .= "<html>";
            $html .= '<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
            $html .= "<p>Hello <strong>ADMIN</strong>,</p>";

            $html .= "<p>Thank you for using <strong>GSR CONSULTANT</strong>. Your verification code is:</p>";

            $html .= '<p style="font-size: 24px; font-weight: bold; color: #2d89ef;">'.$codeGenerated.'</p>';

            $html .= "<p>Thank you,<br>";
            $html .= "The <strong>GSR CONSULTANT</strong> Team</p>";
            $html .= "</body>";
            $html .= "</html>";
            $data = array(
                "hidejosn" => '1',
                "type" => 'Verification Code',
                'to' => array($qry[0]->ConfigEmail),
                'cc' => array(),
                'bcc' => array(),
                'subject' => $subject,
                'body' => $html,
            );
            // print_r($data);
            sendmails($data);
            $uparray = array(
                "ConfigPassCode" => $codeGenerated
            );
            $this->db->where('ConfigID', $qry[0]->ConfigID);
            $this->db->update('Config', $uparray);
        }else{
            echo $resp = json_encode(array('respone' => 400, 'responsetext' => 'Invalid You Dont Have Access'));
        }
    }
	
	function getallleavetypescompanywise($companyid = '',$type=''){
        $ci=& get_instance();
        $ci->load->database();
        $ci->db->select('mxlt_leave_short_name');
        $ci->db->from('maxwell_leave_type_master');
        $ci->db->where('mxlt_comp_id',$companyid);
        if($type == 'attendance'){
        $ci->db->where('mxlt_showinattendance','1');
        $ci->db->Order_by('showinattendance_order');
        }
        $query = $ci->db->get(); 
        return $qry = $query->result();
    }
	
	  public function getemployeesattendancehistory($data)
    {
        $empcode = $data['employeecode'];
        $month = $data['month'];
        $year = $data['year'];
        $company = $data['company'];
        $division = $data['divison'];
        $state = $data['state'];
        $branch = $data['branch'];

        if (strlen($month) == 1) {
            $month = '0' . $data['month'];
        }
        
        // echo $empcode;exit;
        // leavescounts
        /*$subsql = "(SELECT
               
               
                
                sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SHRT' then 0.5 else 0 end) AS First_Half_Present_SHRT_Applied,
                sum(case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_SHRT_Applied,
                
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Full_day_Ml_Applied,
                
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
            FROM maxwell_attendance_" . $year . "_" . $month . "
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code"; */
                // Harish added dynamically
                $all_leave_types = array();
                $sumoftotaldays ='';
				//$this->cleanInput($data['employeeid']);
				
                $all_leave_types = $this->getallleavetypescompanywise($company,'attendance');
                $subsql = "(SELECT
                (
                select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentSL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentEL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentML,
                CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                count(*) AS Totaldays";
                foreach ($all_leave_types as $key => $shortnametype) {
                    $type = $shortnametype->mxlt_leave_short_name;
                    $subsql .= ", sum(case when mx_attendance_first_half = '$type' AND mx_attendance_second_half = '$type' then 1 else 0 end) AS {$type}_Full_Day";
                    $subsql .= ", sum(case when mx_attendance_first_half = '$type' AND mx_attendance_second_half != '$type' then 0.5 else 0 end) AS First_Half_$type";
                    $subsql .= ", sum(case when mx_attendance_first_half != '$type' AND mx_attendance_second_half = '$type' then 0.5 else 0 end) AS Second_Half_$type";
                    $leave_type_names .= "({$type}_Full_Day + First_Half_$type + Second_Half_$type) as $type,";
                    $sumoftotaldays .="{$type}_Full_Day + First_Half_$type + Second_Half_$type +"; 
                }
                $subsql .= " FROM maxwell_attendance_" . $year . "_" . $month . " INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code";
                $dynamic_columns =rtrim($leave_type_names, ',');
                if(strlen($sumoftotaldays)>=6){
                    $dynamic_days = "(".rtrim($sumoftotaldays,'+').") as totaldays";
                }else{
                    $dynamic_days = '';
                }
                // Harish added dynamically
                
                if($empcode){
                    $subsql .= " where mx_attendance_emp_code = '$empcode'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = '$empcode')";    
                }
                
                $subsql .= " GROUP BY EmployeeID) as sub_attendance";
            // echo $subsql;exit;
        // leavescounts
        

        $this->db->select('mx_attendance_emp_code,CONCAT(mxemp_emp_fname," ", mxemp_emp_lname) as fullname,mxemp_emp_img,mxemp_emp_autouniqueid,mxb_name');
        $this->db->select("GROUP_CONCAT(mx_attendance_first_half,'-',mx_attendance_second_half,'~',mx_attendance_date,'~',mx_attendance_id,'~*~' order by mx_attendance_date asc) as dates");
        // $this->db->select("(Shortleave + First_Half_Shortleave + Second_Half_Shortleave) as total_SHRT, (First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied) as total_OD,(Present + First_Half_Present + Second_Half_Present + First_Half_Present_Cl_Applied + Second_Half_Present_Cl_Applied + First_Half_Present_Sl_Applied + Second_Half_Present_Sl_Applied + First_Half_Present_El_Applied + Second_Half_Present_El_Applied + First_Half_Present_WO_Applied + Second_Half_Present_WO_Applied + First_Half_Present_PH_Applied + Second_Half_Present_PH_Applied + First_Half_Present_OPH_Applied + Second_Half_Present_OPH_Applied + First_Half_Present_OCH_Applied + Second_Half_Present_OCH_Applied + First_Half_Present_AR_Applied + Second_Half_Present_AR_Applied + First_Half_Present_OD_Applied + Second_Half_Present_OD_Applied + First_Half_Present_ML_Applied + Second_Half_Present_ML_Applied + First_Half_Present_SHRT_Applied + Second_Half_Present_SHRT_Applied + ot_full_day + First_Half_ot + Second_Half_ot) as total_PR,Full_day_Ml_Applied as total_ML,Week_Off as total_WO,(Public_Holiday + First_Half_Public_Holiday + Second_Half_Public_Holiday) as total_PH,(Optional_Holiday + First_Half_Optional_Holiday + Second_Half_Optional_Holiday) as total_OH,(occasional_full_day + First_Half_occasional + Second_Half_occasional) as total_OCH,(regulation_full_day + First_Half_regulation + Second_Half_regulation) as total_AR,(ot_full_day + First_Half_ot + Second_Half_ot) as total_OT,(onduty_full_day + First_Half_onduty + Second_Half_onduty) as total_OD ,(Absent + First_Half_Absent + Second_Half_Absent) as total_AB,(Casualleave + First_Half_Casualleave + Second_Half_Casualleave) as total_CL,(Sickleave + First_Half_Sickleave + Second_Half_Sickleave) as total_SL,(Earnedleave + First_Half_Earnedleave + Second_Half_Earnedleave) as total_EL");
        $this->db->select("$dynamic_columns,$dynamic_days");

        /*$this->db->select('mx_attendance_emp_code, GROUP_CONCAT(mx_attendance_first_half,'-',mx_attendance_second_half,"~",mx_attendance_date,"~*~" order by mx_attendance_date asc) as dates'); */
        $this->db->from('maxwell_attendance_' . $year . '_' . $month . '');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mx_attendance_emp_code', 'inner');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'inner');
        
        $this->db->join($subsql, 'sub_attendance.EmployeeID = mx_attendance_emp_code', 'inner');
        if (!empty($empcode)) {
            $this->db->where('mx_attendance_emp_code', $empcode);
        } else {
            if (!empty($company)) {
                $this->db->where('mx_attendance_cmp_id', $company);
            }
            if (!empty($division)) {
                $this->db->where('mx_attendance_division_id', $division);
            }
            if (!empty($state)) {
                $this->db->where('mx_attendance_state_id', $state);
            }
            if (!empty($branch)) {
                $this->db->where('mx_attendance_branch_id', $branch);
            }
			$employeecode = $this->session->userdata('session_loginperson_id');
			$this->db->where('mxemp_emp_id', $employeecode);
            $this->db->group_by('mx_attendance_emp_code');
        }
        $query = $this->db->get();
        // echo $this->db->last_query();exit; 
        // echo '<pre>';print_r($query->result_array());exit;
        return $query->result_array();
    }
   
   
   
   
   
    public function getemployeesattendancehistory_uu($data)
    {
        $empcode = $data['employeecode'];
        $month = $data['month'];
        $year = $data['year'];
        $company = $data['company'];
        $division = $data['divison'];
        $state = $data['state'];
        $branch = $data['branch'];

        if (strlen($month) == 1) {
            $month = '0' . $data['month'];
        }
        
       
                $all_leave_types = array();
                $sumoftotaldays ='';
				$employeeid = $this->session->userdata('session_loginperson_id');
        $this->db->distinct();
        $this->db->select('mxauth_emp_code as empid'); 
        $this->db->from('maxwell_emp_authorsations');
        $this->db->where('mxauth_reporting_head_emp_code', $employeeid);
        $this->db->where('mxauth_status = 1');
        $query = $this->db->get();
        $cnt = $query->result_array(); 
		
        $a=[];
        $employeeidval = $employeeid;
        if(count($cnt) > 0){
            array_push($a,$employeeid);
            foreach($cnt as $key=>$val1){  
                array_push($a,$val1['empid']);
            }
            $gepemparry1 = array_values($a);
        }else{
              $gepemparry1 = $employeeid;
        } 
				
                $all_leave_types = $this->getallleavetypescompanywise($company,'attendance');
                $subsql = "(SELECT
                (
                select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentSL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentEL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentML,
                CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                count(*) AS Totaldays";
                foreach ($all_leave_types as $key => $shortnametype) {
                    $type = $shortnametype->mxlt_leave_short_name;
                    $subsql .= ", sum(case when mx_attendance_first_half = '$type' AND mx_attendance_second_half = '$type' then 1 else 0 end) AS {$type}_Full_Day";
                    $subsql .= ", sum(case when mx_attendance_first_half = '$type' AND mx_attendance_second_half != '$type' then 0.5 else 0 end) AS First_Half_$type";
                    $subsql .= ", sum(case when mx_attendance_first_half != '$type' AND mx_attendance_second_half = '$type' then 0.5 else 0 end) AS Second_Half_$type";
                    $leave_type_names .= "({$type}_Full_Day + First_Half_$type + Second_Half_$type) as $type,";
                    $sumoftotaldays .="{$type}_Full_Day + First_Half_$type + Second_Half_$type +"; 
                }
                $subsql .= " FROM maxwell_attendance_" . $year . "_" . $month . " INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code";
                $dynamic_columns =rtrim($leave_type_names, ',');
                if(strlen($sumoftotaldays)>=6){
                    $dynamic_days = "(".rtrim($sumoftotaldays,'+').") as totaldays";
                }else{
                    $dynamic_days = '';
                }
              
                
                if($empcode){
                    $subsql .= " where mx_attendance_emp_code = '$empcode'
                                and mx_attendance_date >= (select mxemp_emp_date_of_join from maxwell_employees_info where mxemp_emp_id = '$empcode')";    
                }
                
                $subsql .= " GROUP BY EmployeeID) as sub_attendance";
            // echo $subsql;exit;
        // leavescounts
        

        $this->db->select('mx_attendance_emp_code,CONCAT(mxemp_emp_fname," ", mxemp_emp_lname) as fullname,mxemp_emp_img,mxemp_emp_autouniqueid,mxb_name');
        $this->db->select("GROUP_CONCAT(mx_attendance_first_half,'-',mx_attendance_second_half,'~',mx_attendance_date,'~',mx_attendance_id,'~*~' order by mx_attendance_date asc) as dates");
        
        $this->db->select("$dynamic_columns,$dynamic_days");

        
        $this->db->from('maxwell_attendance_' . $year . '_' . $month . '');
        $this->db->join('maxwell_employees_info', 'mxemp_emp_id = mx_attendance_emp_code', 'inner');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'inner');
        
        $this->db->join($subsql, 'sub_attendance.EmployeeID = mx_attendance_emp_code', 'inner');
        if (!empty($empcode)) {
            $this->db->where('mx_attendance_emp_code', $empcode);
        } 
		
		
		
		
		
		
		$session_loginperson_dept = $this->session->userdata('session_loginperson_dept');  
		if($session_loginperson_dept=='2'){}
		else{   
				if (!empty($gepemparry1)) {
				$this->db->where_In('mx_attendance_emp_code', $gepemparry1);
				}
			}
			
			
			
			
		 
            if (!empty($company)) {
                $this->db->where('mx_attendance_cmp_id', $company);
            }
            if (!empty($division)) {
                $this->db->where('mx_attendance_division_id', $division);
            }
            if (!empty($state)) {
                $this->db->where('mx_attendance_state_id', $state);
            }
            if (!empty($branch)) {
                $this->db->where('mx_attendance_branch_id', $branch);
            }
			$employeecode = $this->session->userdata('session_loginperson_id');
			//$this->db->where('mxemp_emp_id', $employeecode);
            $this->db->group_by('mx_attendance_emp_code');
        
        $query = $this->db->get();
         //echo $this->db->last_query();exit; 
        // echo '<pre>';print_r($query->result_array());exit;
        return $query->result_array();
    }
	
	
	
	
	
	
	public function saveappraisal($data)
	{
		
		       if($this->session->userdata('session_loginperson_id') == '888666'){
        //$departement = $data['departement'];
        //$employee = $data['employee'];
        }else{
            $employee = $this->session->userdata('session_loginperson_id');
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
                    "mxapfile_createdby" => $this->session->userdata('session_loginperson_id'),
                    "mxapfile_createdtime" => $date,
                    "mxapfile_created_ip" => $ip,
                );
                return $this->db->insert('maxwell_performanceappraisal_files', $inarray);
            }
        }

		
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
	


 public function savelegalnotifications($data){
	
$appid = "CASEID-".date('HisdmY');
        $category = $this->cleanInput($data['category']);
        //$company = $this->cleanInput($data['esi_company_id']);
		$company = $this->cleanInput(!empty($data['esi_company_id']) ? $data['esi_company_id'] : '');
        //$division = $this->cleanInput($data['esi_div_id']);
        //$state = $this->cleanInput($data['esi_state_id']);
        //$branch = $this->cleanInput($data['esi_branch_id']);		
		$division = $this->cleanInput(!empty($data['esi_div_id']) ? $data['esi_div_id'] : '');
		$state    = $this->cleanInput(!empty($data['esi_state_id']) ? $data['esi_state_id'] : '');
		$branch   = $this->cleanInput(!empty($data['esi_branch_id']) ? $data['esi_branch_id'] : '');
		
        $from = $this->cleanInput($data['from']);
        $to = $this->cleanInput($data['to']);
        $hearingdate = date('Y-m-d',strtotime($this->cleanInput($data['hearingdate'])));
        $referenceno = $this->cleanInput($data['referenceno']);
        $desc = $data['msg'];
        $this->db->trans_begin();
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        #documents
        for($i=0 ; $i< count($_FILES['file']['name']) ; $i++){
            if($_FILES['file']['name'][$i] == ''){
                continue;
            }else{
                $projectfolder = "uploads/documents/";
                if (!file_exists($projectfolder)) {
                    mkdir($projectfolder, 0777, true);
                }

                $targetfolder = $projectfolder."/".$appid."/";
                if (!file_exists($targetfolder)) {
                    mkdir($targetfolder, 0777, true);
                }
                if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
                    $targetfolder1 = basename($_FILES['file']['name'][$i]);
                    $orgname =pathinfo($targetfolder1, PATHINFO_FILENAME);
                    $fileext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
                    $destination = $targetfolder . $orgname.'_'.$appid.'_'.$i. "." . $fileext;
                    if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)){
                        $documents_inarray = array(
                            'doc_category' => 'CASES',
                            'doc_extra_info' => $appid,
                            'doc_url' => $destination,
                            'createdby' => $this->session->userdata('session_loginperson_id'),
                            'createdtime' => $date,
                            'created_ip' => $ip,
                        );
                        $this->db->insert('documents', $documents_inarray);
                    }
                }

            }
        }
        #documents
        $inarray = array(
            "mx_ntf_appid" => $appid,
            "mx_ntf_company" => $company,
            "mx_ntf_div" => $division,
            "mx_ntf_state" => $state,
            "mx_ntf_branch" => $branch,
            "mx_ntf_category" => $category,
            "mx_ntf_filedby" => $from,
            "mx_ntf_filedto" => $to,
            "mx_ntf_hearing_date" => $hearingdate,
            "mx_ntf_refrencce" => $referenceno,
            "mx_ntf_description" => $desc,
            "mx_ntf_createdby" =>$this->session->userdata('session_loginperson_id'),
            "mx_ntf_createdtime" => $date,
            "mx_ntf_created_ip" => $ip,
        );
        
        $ym = $this->cleanInput($data['ym']);
        if(!empty($ym)){
            $inarray['mx_ntf_ym'] = $ym;
        }
        $res = $this->db->insert('maxwell_legal_notifications', $inarray);
        $inarray['mx_ntf_type'] = 'INSERT';
        $res2 = $this->db->insert('maxwell_legal_notifications_log', $inarray);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
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
 public function updatelegalnotifications($data){
	 
	 $from = $this->cleanInput($data['from']);
        $to = $this->cleanInput($data['to']);
        $hearingdate = date('Y-m-d',strtotime($this->cleanInput($data['hearingdate'])));
        $referenceno = $this->cleanInput($data['referenceno']);
        $followupdate = $this->cleanInput($data['followupdate']);
        $ntf_delete = $this->cleanInput($data['ntf_delete']);
        $ntfstatus = $this->cleanInput($data['ntfstatus']);
        $cron = $this->cleanInput($data['ntf_cron']);
        $desc = $data['msg'];
        $this->db->trans_begin();
        $ip = $this->get_client_ip();
        $date = date('Y-m-d H:i:s');
        #documents
        $_FILES['file']['doc_uniqueid'] = $data['doc_uniqueid'];
        // print_r($_FILES);
        $appid = $data['appid'];
        for($i=0 ; $i< count($_FILES['file']['name']) ; $i++){
            if($_FILES['file']['name'][$i] == ''){
                continue;
            }else{
                $projectfolder = "uploads/documents/";
                if (!file_exists($projectfolder)) {
                    mkdir($projectfolder, 0777, true);
                }

                $targetfolder = $projectfolder."/".$appid."/";
                if (!file_exists($targetfolder)) {
                    mkdir($targetfolder, 0777, true);
                }
                if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
                    $targetfolder1 = basename($_FILES['file']['name'][$i]);
                    $orgname =pathinfo($targetfolder1, PATHINFO_FILENAME);
                    $fileext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
                    $destination = $targetfolder . $orgname.'_'.$appid.'_'.$i. "." . $fileext;
                    if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)){
                        $docs_id = $_FILES['file']['doc_uniqueid'][$i];
                        $documents_inarray = array(
                            'doc_category' => 'CASES',
                            'doc_extra_info' => $appid,
                            'doc_url' => $destination,
                            'modifyby' => $this->session->userdata('user_id'),
                            'modifiedtime' => $date,
                            'modified_ip' => $ip,
                        );
                        $this->db->where('doc_id', $docs_id);
                        $this->db->update('documents', $documents_inarray);
                    }
                }

            }
        }
        #documents
        $uparray = array(
            "mx_ntf_filedby" => $from,
            "mx_ntf_filedto" => $to,
            "mx_ntf_hearing_date" => $hearingdate,
            "mx_ntf_refrencce" => $referenceno,
            "mx_ntf_description" => $desc,
            "mx_ntf_notification" => $ntfstatus,
            "mx_ntf_modifyby" =>$this->session->userdata('user_id'),
            "mx_ntf_modifiedtime" => $date,
            "mx_ntf_modified_ip" => $ip,
            "mx_ntf_status" => $ntf_delete,
            "mx_ntf_notallow_cron" => $cron,
        );
        if(!empty($followupdate)){
            $uparray['mx_ntf_followup_date'] = date('Y-m-d',strtotime($this->cleanInput($data['followupdate'])));
        }
        
        $ym = $this->cleanInput($data['ym']);
        if(!empty($ym)){
            $uparray['mx_ntf_ym'] = $ym;
        }
        $this->db->where('mx_ntf_appid', $data['appid']);
        $this->db->where('mx_ntf_id', $data['id']);
        $this->db->update('maxwell_legal_notifications', $uparray);
        
        $this->db->select('mx_ntf_company,mx_ntf_div,mx_ntf_state,mx_ntf_branch,mx_ntf_category');
        $this->db->from('maxwell_legal_notifications');
        $this->db->where('mx_ntf_appid', $data['appid']);
        $this->db->where('mx_ntf_id', $data['id']);
        $getquery = $this->db->get();
        $maindata = $getquery->result();
        
        $uparray['mx_ntf_type'] = 'UPDATE';
        $uparray['mx_ntf_appid'] = $data['appid'];
        $uparray['mx_ntf_company'] = $maindata[0]->mx_ntf_company;
        $uparray['mx_ntf_div'] = $maindata[0]->mx_ntf_div;
        $uparray['mx_ntf_state'] = $maindata[0]->mx_ntf_state;
        $uparray['mx_ntf_branch'] = $maindata[0]->mx_ntf_branch;
        $uparray['mx_ntf_category'] = $maindata[0]->mx_ntf_category;
        $uparray['mx_ntf_createdby'] = $this->session->userdata('user_id');
        $res2 = $this->db->insert('maxwell_legal_notifications_log', $uparray);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 2;
        } else {
            $this->db->trans_commit();
            return 1;
        }
		
		
 }
 
 
 
 public function addnewfilestodocument($data){


// print_r($_FILES);exit;
        $this->db->trans_begin();
        $appid = $data['editticketid'];
        for($i=0 ; $i< count($_FILES['neweditfile']['name']) ; $i++){
            if($_FILES['neweditfile']['name'][$i] == ''){
                continue;
            }else{
                $projectfolder = "uploads/dcouments/";
                if (!file_exists($projectfolder)) {
                    mkdir($projectfolder, 0777, true);
                }

                $targetfolder = $projectfolder."/".$appid."/";
                if (!file_exists($targetfolder)) {
                    mkdir($targetfolder, 0777, true);
                }

                $ip = $this->get_client_ip();
                $date = date('Y-m-d H:i:s');
                if (is_uploaded_file($_FILES["neweditfile"]["tmp_name"][$i])) {
                    $targetfolder1 = basename($_FILES['neweditfile']['name'][$i]);
                    $orgname =pathinfo($targetfolder1, PATHINFO_FILENAME);
                    $fileext = pathinfo($_FILES['neweditfile']['name'][$i], PATHINFO_EXTENSION);
                    $destination = $targetfolder . $orgname.'_'.$appid.'_'.$i. "." . $fileext;
                    if(move_uploaded_file($_FILES['neweditfile']['tmp_name'][$i], $destination)){
                        $documents_inarray = array(
                            'doc_category' => 'CASES',
                            'doc_extra_info' => $appid,
                            'doc_url' => $destination,
                            'createdby' => $this->session->userdata('session_loginperson_id'),
                            'createdtime' => $date,
                            'created_ip' => $ip,
                        );
                        $this->db->insert('documents', $documents_inarray);
                    }
                }

            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $resp = array('respone' => 400);
            echo json_encode($resp);
        } else {
            $this->db->trans_commit();
            $resp = array('respone' => 200);
            echo json_encode($resp);
        }
		
	 
 }
 
 public function getlegalnotifications($data){
    // print_r($data);exit; 
        $userid = $this->session->userdata('session_loginperson_id');
        $this->db->select('mx_ntf_id,mx_ntf_appid,mxcp_name,mxd_name,mxst_state,mxb_name,mx_ntf_appid,mx_ntf_category,mx_ntf_filedby,mx_ntf_filedto,mx_ntf_hearing_date,mx_ntf_followup_date,mx_ntf_refrencce,mx_ntf_description,mx_ntf_notification,mx_ntf_status,mx_ntf_ym,mx_ntf_status,mx_ntf_notallow_cron');
        $this->db->from('maxwell_legal_notifications');
        $this->db->join('maxwell_company_master', 'mxcp_id = mx_ntf_company', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mx_ntf_div', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mx_ntf_state', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mx_ntf_branch', 'INNER');
        $this->db->where('mx_ntf_status', 1);
		
        if($userid != '888666'){
            //$this->db->where('mx_ntf_createdby',$userid);
        }
		$this->db->where('mx_ntf_createdby',$userid);
        if(!empty($data['applicationid'])){
            $appid = $data['applicationid'];
          $this->db->where('mx_ntf_appid', $appid);  
        }
		 
        if(!empty($data['uniqueid'])){
            $id = $data['uniqueid'];
          $this->db->where('mx_ntf_id', $id);  
        }
        
        if (!empty($data['esi_company_id'])) {
            //$this->db->where('mx_ntf_company', $data['esi_company_id']);
        }
        
        if (!empty($data['esi_div_id'])) {
            //$this->db->where('mx_ntf_div', $data['esi_div_id']);
        }
        
        if (!empty($data['esi_state_id'])) {
           // $this->db->where('mx_ntf_state', $data['esi_state_id']);
        }
        
        if (!empty($data['esi_branch_id'])) {
           // $this->db->where('mx_ntf_branch', $data['esi_branch_id']);
        }
        
        if (!empty($data['category'])) {
            $this->db->where('mx_ntf_category', $data['category']);
        }
       
        $this->db->order_by('mx_ntf_createdtime', 'DESC');
        $query = $this->db->get();
            // echo $this->db->last_query();exit;
        $qry = $query->result();
        #documents
		//echo "<pre>"; print_r($data);exit;
        if(!empty($data['applicationid'])){
        $appid = $data['applicationid'];
        $this->db->select('*');
        $this->db->from('documents');
        $this->db->where('doc_status = 1');
        $this->db->where('doc_extra_info', $appid);
        $this->db->where('doc_category','CASES');
        $query2 = $this->db->get();
         
        $qry['documents'] = $query2->result();
        }
        #documents
		//echo "===============================>".$this->db->last_query();die;
        return $qry;
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
	
	
	
	
	
	public function getemployee_stat_doc($data)
    {
        if($this->session->userdata('session_loginperson_id') == '888666'){
        //$emp = $data['emp'];
        //$dep = $data['dep'];
        }else{
        //$emp = $this->session->userdata('user_id');
        $file = $data['file'];
        }
		$emp = $this->session->userdata('session_loginperson_id');
        $file = $data['file'];
        $this->db->select('mxapfile_id,mxapfile_name,mxapfile_link,mxapfile_extension,mxapfile_size,mxapfile_createdtime,mxdpt_name');
        $this->db->from('maxwell_performanceappraisal_files');
        #$this->db->join('maxwell_designation_master', 'mxdesg_id = mxapfile_designation_id', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxapfile_department_id', 'INNER');
        $this->db->where('mxapfile_status = 1');
        if($this->session->userdata('user_id') == '888666'){
        //$this->db->where('mxapfile_department_id', $dep);
        //$this->db->where('mxapfile_employee_id', $emp);
        }else{
          $this->db->where('mxapfile_employee_id', $emp);
          if(!empty($file)){
          $this->db->like('mxapfile_name', $file);
          }
        }
        $this->db->order_by('mxapfile_createdtime', 'DESC');
        $query = $this->db->get();
          //echo $this->db->last_query();
        $qry = $query->result_array();
        return $qry;
       
               
				
    }
	
	
	
	
	
   public function punchdetails($from,$empid){
        // $tblappdate = date('Y',strtotime($from)); 
        
        $tblappdate = date('Y_m',strtotime($from)); 
        $attdate=date('Y-m-d',strtotime($from));
        
        // $query = "select max(attendance_time)as second_punch,min(attendance_time) as first_punch from employee_punches_$tblappdate where employee_code='$empid' and attendance_date='$attdate'";
        
        $query = "select mx_attendance_first_half as first_half_punch, mx_attendance_second_half as second_half_punch from maxwell_attendance_$tblappdate where mx_attendance_emp_code='$empid' and mx_attendance_date='$attdate'";

        $puncharr = $this->db->query($query)->result();
        // print_r($puncharr); exit;
        // echo $this->db->last_query();
    return $puncharr;
    }
	
	
    public function admin_regulation_hraccept_approval($data){
            $uniqid = $data['uniqid'];
            $approve = $data['approve'];
            $remarks = $data['remarks'];
            $this->db->select('mxar_id as mxid,mxar_category_type as category_type,mxar_appliedby_emp_code as employeeid,
                               mxar_intime as intime ,mxar_outtime as outtime,mxar_attend_countdays as noofdays,
                               mxar_from as from,mxar_to as to,mxar_reason as reason,mxar_desc as desc,mxar_auth1_empcode as auth1,
                               mxar_auth2_empcode as auth2,mxar_auth3_empcode as auth3,mxar_auth4_empcode as auth4,mxar_authfinal_empcode as authfinal,
                               mxar_status as status , mxar_intime as intime , mxar_outtime as outtime');
            $this->db->from('attendance_regulation');
            $this->db->where('mxar_status',1);
            $this->db->where('mxar_id', $uniqid);
            $query = $this->db->get();
            $res = $query->result_array();

            $applieddate = $res[0]['from'];
            $tblappdate = date('Y_m',strtotime($applieddate));      
            if($res[0]['noofdays'] == 1){
                    if($approve == 1){
                        if($res[0]['category_type'] == 1){ //firstHalf
                            $attendarray = array('mx_attendance_first_half'=>'AR'  );                       
                        }elseif($res[0]['category_type'] == 2){   //secondhalf
                            $attendarray = array('mx_attendance_second_half'=>'AR'  );
                        }else{   //fullday                        
                            $attendarray = array('mx_attendance_first_half'=>'AR',
                                                'mx_attendance_second_half'=>'AR'                    
                                                );
                        }
                            $this->db->select('mx_attendance_id as uniqid');  
                            $this->db->from('maxwell_attendance_'.$tblappdate);              
                            $this->db->where('mx_attendance_status',1);
                            $this->db->where('mx_attendance_emp_code', $res[0]['employeeid']);
                            $this->db->where('mx_attendance_date',$applieddate);
                            $query = $this->db->get();
                            $attunid = $query->result_array();
                            if(count($attunid)>0){
                                $this->db->where('mx_attendance_id',$attunid[0]['uniqid']);
                                $res1 = $this->db->update('maxwell_attendance_'.$tblappdate , $attendarray);
                            }
                    }
                    $autharry= array(
                        "mxar_hrfinal_accept"=>$this->session->userdata('user_id'),
                        "mxar_hrfinal_acceptdate"=>date('Y-m-d H:i:s'),
                        "mxar_hrfinal_acceptcreatedby"=>$this->session->userdata('user_id'),
                        "mxar_hrfinal_acceptname"=>$this->session->userdata('user_name'),
                        "mxar_authfinal_remarks"=>$remarks,
                        "mxar_authfinal_createdby"=>$this->session->userdata('user_id'),
                        "mxar_authfinal_status"=>$approve,
                        "mxar_authfinal_createdtime"=>date('Y-m-d H:i:s'),
                        "mxar_authfinal_deviceid"=>'Admin'
                    );
                    // ========================  added on 24-08-2024 ===================
                        if($approve == 1){
                            $autharry['mxar_authfinal_approve_date']=DBDT;
                        }elseif($approve==2){
                            $autharry['mxar_authfinal_reject_date']=DBDT;
                        }
                    // ========================  end on 24-08-2024 =====================
                    $this->db->where('mxar_id', $uniqid);
                    $res = $this->db->update('attendance_regulation',$autharry);
                    // echo $this->db->last_query();
                    if(($res1==1) && ($res==1) ){
                        return 'Sucessfully Updated' ;
                    }else{
                        return 'Something went wrong';
                    }
                }elseif($res[0]['noofdays'] > 1){
                    if($approve == 1){
                        for($i=0 ; $i< $res[0]['noofdays'] ; $i++){
                             if($i==0){
                                $new_date = $applieddate;
                            }else{
                                $applieddate = strtotime("1 day", strtotime($new_date));
                                $new_date = date("Y-m-d", $applieddate);
                            }
                            // $attdt =date("Y-m-d", strtotime($applieddate . ' + ' . $i));
                            $attendarray = array('mx_attendance_first_half'=>'AR',
                                                'mx_attendance_second_half'=>'AR'                    
                                                );
                            $this->db->select('mx_attendance_id as uniqid');  
                            $this->db->from('maxwell_attendance_'.$tblappdate);              
                            $this->db->where('mx_attendance_status',1);
                            $this->db->where('mx_attendance_emp_code', $res[0]['employeeid']);
                            $this->db->where('mx_attendance_date',$new_date);
                            $query = $this->db->get();
                            $attunid = $query->result_array();
                            
                            $this->db->where('mx_attendance_id',$attunid[0]['uniqid']);
                            $res1 = $this->db->update('maxwell_attendance_'.$tblappdate , $attendarray);
                            
                        }
                    }
                    $autharry= array(
                        "mxar_hrfinal_accept"=>$this->session->userdata('user_id'),
                        "mxar_hrfinal_acceptdate"=>date('Y-m-d H:i:s'),
                        "mxar_hrfinal_acceptcreatedby"=>$this->session->userdata('user_id'),
                        "mxar_hrfinal_acceptname"=>$this->session->userdata('user_name'),
                        "mxar_authfinal_remarks"=>$remarks,
                        "mxar_authfinal_createdby"=>$this->session->userdata('user_id'),
                        "mxar_authfinal_status"=>$approve,
                        "mxar_authfinal_createdtime"=>date('Y-m-d H:i:s'),
                        "mxar_authfinal_deviceid"=>'Admin'
                        );
                    $this->db->where('mxar_id', $uniqid);
                    $res = $this->db->update('attendance_regulation',$autharry);
                    // echo $this->db->last_query();exit;
                    if( ($res==1) ){
                        return 'Sucessfully Updated' ;
                    }else{
                        return 'Something went wrong';
                    }
                }
        }
   
   
   
     public function getemployeesattendancehistory_u($data)
    {
             if($status_type =='Approved'){
            $status_type = 1;
        }elseif($status_type =='Rejected'){
            $status_type = 2;
        }elseif($status_type =='Pending'){
            $status_type = 9;
        }else{
            $status_type = '';
        }
		
		$filteremployeeid=$data['employeecode'];
		$day=$data['day'];
		$month=$data['month'];
		if($month==10||$month==11||$month==12)
		{
		}else{
			$month="0".$month;
		}
		$year=$data['year'];
		$monthyear=$year."-".$month."-".$day;
		
        //print_r($data['month']);die;
        /*if($monthyear == ''){
            $monthyear=date('Y-m');
        }else{
            $monthyear= date('Y-m',strtotime($monthyear));
        }*/
        $employeeid = $this->session->userdata('session_loginperson_id');
        $this->db->distinct();
        $this->db->select('mxauth_emp_code as empid'); 
        $this->db->from('maxwell_emp_authorsations');
        $this->db->where('mxauth_reporting_head_emp_code', $employeeid);
        $this->db->where('mxauth_status = 1');
        $query = $this->db->get();
        $cnt = $query->result_array();

//echo $this->db->last_query(); die;		
		
        $a=[];
        $employeeidval = $employeeid;
        if(count($cnt) > 0){
            array_push($a,$employeeid);
            foreach($cnt as $key=>$val1){  
                array_push($a,$val1['empid']);
            }
            $employeeid = array_values($a);
        }else{
              $employeeid = $employeeid;
        }   
        
        // $tblappdate=date('Y_m',strtotime())
		//-- 
        $pyear=date('Y');
       $this->db->select("(select min(attendance_time) as maxtime from employee_punches_$pyear where attendance_date= mxar_from and employee_code = mxar_appliedby_emp_code limit 1 ) as orgifirstpunchin,");
        $this->db->select("(select max(attendance_time) as maxtime from employee_punches_$pyear where attendance_date= mxar_from and employee_code = mxar_appliedby_emp_code limit 1 ) as orgilastpunchout,");
        $this->db->select(" concat(mxemp_emp_fname,' ',mxemp_emp_lname) as employeename,mxar_id as uniqid,
                            mxar_category_type as category_type,mxar_appliedby_emp_code as employeeid,mxar_from as from,
                            mxar_to as to,mxar_reason as reason,mxar_desc as emp_description,  
                            mxar_intime as intime , mxar_outtime as outtime,mxar_status as status ,
                            mxar_auth1_status as auth1status,mxar_auth2_status as auth2status,mxar_auth3_status as auth3status,
                            mxar_auth4_status as auth4status, mxar_authfinal_status as authfinalstatus,
                            mxar_auth1_empcode as auth1,mxar_auth2_empcode as auth2,mxar_auth3_empcode as auth3,
                            mxar_auth4_empcode as auth4,mxar_authfinal_empcode as authfinal,
                            concat(mxar_auth1_empcode,' ',mxar_auth1_empname) as authempname1,concat(mxar_auth2_empcode,' ',mxar_auth2_empname) as authempname2,
                            concat(mxar_auth3_empcode,' ',mxar_auth3_empname) as authempname3,concat(mxar_auth4_empcode,' ',mxar_auth4_empname) as authempname4,
                            concat(mxar_authfinal_empcode,' ',mxar_authfinal_empname) as authfinalempname ,
                            concat(mxar_hrfinal_accept,' ',if(mxar_hrfinal_acceptname IS NULL ,' ',mxar_hrfinal_acceptname)) as hrfinalempname ,mxar_hrfinal_accept as finalhracceptid,
                            mxar_auth1_remarks as auth1desc,mxar_auth2_remarks as auth2desc,mxar_auth3_remarks as auth3desc,
                            mxar_auth4_remarks as auth4desc ,
                            if(mxar_authfinal_remarks IS NULL,'',mxar_authfinal_remarks) as authfinaldesc,
                            mxb_name as branchname, mxd_name as otdivname, '' as  otbranchname, mxst_state as otstatename, mxar_ot_branch_id ,
							'' as first_half_punch,'' as second_half_punch,mxar_type as regulation_type,
                            mxar_client_company as cl_company,
                            mxar_client_contact_person as cl_contact_person,
                            mxar_client_contact_no as cl_contact_number,
                            mxar_client_contact_email as cl_contact_email,
                            mxar_client_desc as cl_description
                            ,mxar_ot_div_id as divisonid_ot,mxar_ot_state_id as stateid_ot,mxar_ot_branch_id as branchid_ot");
                            $this->db->from('attendance_regulation');                            
                            $this->db->join('maxwell_employees_info','mxemp_emp_id = mxar_appliedby_emp_code','Inner');                            
                            $this->db->join('maxwell_division_master','mxd_id=mxar_ot_div_id','Left');
                            $this->db->join('maxwell_state_master','mxst_id=mxar_ot_state_id','Left');
                            $this->db->join('maxwell_branch_master','mxb_id=mxar_branch_id','Left');
                            $this->db->join('maxwell_emp_authorsations','mxemp_emp_id=mxauth_emp_code','Inner');
                            $this->db->where('mxar_status','1');
							//$logged_in_user_id=$this->session->userdata('user_id');
                            //$this->db->where('mxauth_reporting_head_emp_code',$logged_in_user_id);
							
							
							
							/*SELECT emp.mxemp_emp_id ,concat(emp.mxemp_emp_fname, ' ',emp. mxemp_emp_lname) as employeename
 ,underu.mxauth_reporting_head_emp_code
 ,underu.mxauth_emp_code
,ar.mxar_createdtime 
--FROM `maxwell_employees_info` as emp 
  JOIN `maxwell_emp_authorsations` as underu ON emp.`mxemp_emp_id`=underu.`mxauth_emp_code`
 JOIN `attendance_regulation` as ar ON underu.mxauth_emp_code=ar.`mxar_appliedby_emp_code`
WHERE underu. mxauth_reporting_head_emp_code='m0070'  AND DATE_FORMAT(ar.mxar_from,'%Y-%m') = '2025-02';*/




                            if(!empty($companyid)&& ($filter==1) ){
                                $this->db->where('mxar_comp_id', $companyid);
                            }
                            if(!empty($divisionid)&& ($filter==1) && ($divisionid !=0) ){
                                $this->db->where('mxar_div_id', $divisionid);
                            }
                            if(!empty($stateid)&& ($filter==1) && ($stateid !=0) ){
                                $this->db->where('mxar_state_id', $stateid);
                            }
                            if(!empty($branchid) && ($filter==1) && ($branchid !=0) ){
                                $this->db->where('mxar_branch_id', $branchid);
                            }
                            // if(!empty($monthyear)&& ($filter==1) ){
                            if(!empty($monthyear)){
                                // $my = explode('-',$monthyear);
                                // $len = strlen($my[1]);
                                // if($len == 1){
                                //     $monthyear = $my[0].'-'.'0'.$my[1];
                                // }else{
                                //     // $monthyear =$monthyear;
                                //     $monthyear = date('Y-m', strtotime($monthyear));
                                // }
                                $this->db->where("DATE_FORMAT(mxar_createdtime,'%Y-%m-%d')", $monthyear);
                                //$this->db->where("DATE_FORMAT(mxar_createdtime,'%Y-%m')", '2025-02');
                                // $this->db->where("DATE_FORMAT(mxar_from,'%Y-%m')", $monthyear);
                            }
							
							$session_loginperson_dept = $this->session->userdata('session_loginperson_dept');  
		if($session_loginperson_dept=='2'){}
		else{   
			if($employeeid !=''){
                                 $this->db->where_in('mxar_appliedby_emp_code', $employeeid);
                            } 
			}
		
		
                           
                            if($filteremployeeid !=''){
                               $this->db->where('mxar_appliedby_emp_code', $filteremployeeid);
                            }
                            if($type != ''){
                                 $this->db->where('mxar_type', $type);
                            }
                            if($status_type !=''){
                                $this->db->where('mxar_authfinal_status', $status_type);
                            }
                            // $this->db->group_by('attend_unid,attenddate');
							$this->db->group_by('mxar_appliedby_emp_code');
                            $this->db->order_by("mxar_createdtime", "desc");
                            $query= $this->db->get();
                            $result = $query->result_array();
							//echo $this->db->last_query(); die;
                            if(count($result) > 0){
                                $naval = 0;
                                $editbtn = 0;
                                $authempidstatus = '0';
                                $authempiddesc = '';
                                foreach($result as $key=>$val)
                                {
                                    if($val['category_type']==1){
                                        $result[$key]['category_Name']='First Half';
                                    }elseif($val['category_type']==2){
                                        $result[$key]['category_Name']='Second Half';
                                    }elseif($val['category_type']==3){
                                        $result[$key]['category_Name']='Full Day';
                                    }
                                    
                                    $det= $this->punchdetails($val['from'],$val['employeeid']);
                                    if(($det[0]->second_half_punch != '') || ($det[0]->first_half_punch !='') ){
                                        $result[$key]['second_half_punch']=$det[0]->second_half_punch;
                                        $result[$key]['first_half_punch']=$det[0]->first_half_punch;
                                    }else{
                                        $result[$key]['second_half_punch']='';
                                        $result[$key]['first_half_punch']='';
                                    }
                                    if($type =='OT' && !empty($val['mxar_ot_branch_id'])){
                                        $otval = $val['mxar_ot_branch_id'];
                                        $qry= " select GROUP_CONCAT(mxb_name) as otbranchname from maxwell_branch_master where mxb_id in ($otval) ";
                                         $query = $this->db->query($qry);
                                        $count= count($query->row());
                                        $qry = $query->result_array(); 
                                        $result[$key]['otbranchname']=$qry[0]['otbranchname'];
                                    }
                                        // 1 enable  2 disable 
                                        if($val['finalhracceptid'] != $val['authfinal'] ){
                                            $hrfinalnane =$val['hrfinalempname'];
                                        }else{
                                            $hrfinalnane ='';
                                        }
                                        if($val['auth1status']== 1){
                                            $result[$key]['authemp1'] =$val['authempname1'].'(Approved)';
                                            if($val['auth1'] == $employeeidval ){
                                                $editbtn =  2;
                                                $naval=2;
                                                $authempidstatus =$val['auth1status'];
                                                $authempiddesc = $val['auth1desc'];
                                                
                                            }
                                        }elseif($val['auth1status']== 2){
                                            $result[$key]['authemp1'] =$val['authempname1'].'(Rejected)';
                                            if($val['auth1']== $employeeidval ){
                                                $editbtn =1;
                                                $naval=2;
                                                $authempidstatus =$val['auth1status'];
                                                $authempiddesc = $val['auth1desc'];
                                            }
                                        }else{
                                            if(!empty($result[$key]['auth1'])){
                                                $result[$key]['authemp1'] = $val['authempname1'].'(Wating for approval)';
                                                if($val['auth1']== $employeeidval ){
                                                    $editbtn = 1;
                                                    $naval=2;
                                                    $authempidstatus =$val['auth1status'];
                                                    $authempiddesc = $val['auth1desc'];
                                                }
                                            }else{
                                                $result[$key]['authemp1'] = '';
                                            }
                                        }
                                        
                                        if($val['auth2status']== 1){
                                            $result[$key]['authemp2']= $val['authempname2'].'(Approved)';
                                            if($val['auth2']== $employeeidval ){
                                                $editbtn = 2;
                                                $naval=2;
                                                $authempidstatus =$val['auth2status'];
                                                $authempiddesc = $val['auth2desc'];
                                            }
                                        }elseif($val['auth2status']== 2){
                                            $result[$key]['authemp2']=$val['authempname2'].'(Rejected)';
                                            if($val['auth2']== $employeeidval ){
                                                $editbtn = 1;
                                                $naval=2;
                                                $authempidstatus =$val['auth2status'];
                                                $authempiddesc = $val['auth2desc'];
                                            }
                                        }else{
                                            if(!empty($result[$key]['auth2'])){
                                                $result[$key]['authemp2'] =$val['authempname2'].'(Wating for approval)';
                                                if($val['auth2']== $employeeidval ){
                                                    $editbtn =1;
                                                    $naval=2;
                                                    $authempidstatus =$val['auth2status'];
                                                    $authempiddesc = $val['auth2desc'];
                                                }
                                            }else{
                                                $result[$key]['authemp2'] = '';
                                            }                }
                                        if($val['auth3status']== 1){ 
                                            $result[$key]['authemp3']=$val['authempname3'].'(Approved)';
                                            if($val['auth3']== $employeeidval ){
                                                $editbtn =2;
                                                $naval=2;
                                                $authempidstatus =$val['auth3status'];
                                                $authempiddesc = $val['auth3desc'];
                                            }
                                        }elseif($val['auth3status']== 2){
                                            $result[$key]['authemp3'] =$val['authempname3'].'(Rejected)';
                                            if($val['auth3']== $employeeidval ){
                                                $editbtn = 1;
                                                $naval=2;
                                                $authempidstatus =$val['auth3status'];
                                                $authempiddesc = $val['auth3desc'];
                                            }
                                        }else{
                                            if(!empty($result[$key]['auth3'])){
                                                $result[$key]['authemp3'] =$val['authempname3'].'(Wating for approval)';
                                                if($val['auth3']== $employeeidval ){
                                                    $editbtn = 1;
                                                    $naval=2;
                                                    $authempidstatus =$val['auth3status'];
                                                    $authempiddesc = $val['auth3desc'];
                                                }
                                            }else{
                                                $result[$key]['authemp3'] = '';
                                            }
                                        }
                                        if($val['auth4status']== 1){
                                            $result[$key]['authdirector']= $val['authempname4'].'(Approved)';
                                            if($val['auth4']== $employeeidval ){
                                                $editbtn = 2;
                                                $naval=2;
                                                $authempidstatus =$val['auth4status'];
                                                $authempiddesc = $val['auth4desc'];
                                            }
                                        }elseif($val['auth4status']== 2){
                                            $result[$key]['authdirector'] =$val['authempname4'].'(Rejected)';
                                            if($val['auth4']== $employeeidval ){
                                                $editbtn = 1;
                                                $naval=2;
                                                $authempidstatus =$val['auth4status'];
                                                $authempiddesc = $val['auth4desc'];
                                            }
                                        }else{
                                            if(!empty($result[$key]['auth4'])){
                                                $result[$key]['authdirector'] =$val['authempname4'].'(Wating for approval)';
                                                if($val['auth4']== $employeeidval ){
                                                    $editbtn = 1;
                                                    $naval=2;
                                                    $authempidstatus =$val['auth4status'];
                                                    $authempiddesc = $val['auth4desc'];
                                                }
                                            }else{
                                                $result[$key]['authdirector'] = '';
                                            }              
                                        }
                                        if($val['authfinalstatus']== 1){
                                            $result[$key]['authfinalhr'] =$val['authfinalempname'].' '.$hrfinalnane.'(Approved)';
                                            if($val['authfinal']== $employeeidval ){
                                                $editbtn = 2;
                                                $naval=2;
                                                $authempidstatus =$val['authfinalstatus'];
                                                $authempiddesc = $val['auth1desc'];
                                            }
                                        }elseif($val['authfinalstatus']== 2){
                                            $result[$key]['authfinalhr']=$val['authfinalempname'].' '.$hrfinalnane.'(Rejected)';
                                            if($val['authfinal']== $employeeidval ){
                                                $editbtn = 1;
                                                $naval=2;
                                                $authempidstatus =$val['authfinalstatus'];
                                                $authempiddesc = $val['auth1desc'];
                                            }
                                        }else{
                                            if(!empty($result[$key]['authfinal'])){
                                                $result[$key]['authfinalhr'] = $val['authfinalempname'].' '.$hrfinalnane.'(Wating for approval)';
                                                if($val['authfinal']== $employeeidval ){
                                                    $editbtn = 1;
                                                    $naval=2;
                                                    $authempidstatus =$val['authfinal'];
                                                    $authempiddesc = $val['authfinaldesc'];
                                                }
                                            }else{
                                                $result[$key]['authfinalhr'] ='';
                                            }
                                        }
                                        
                                        if( ($val['employeeid'] == $employeeidval) && ($val['status'] == 1) && ( ($val['auth1status'] == 0) && ($val['auth2status'] == 0) && ($val['auth3status'] ==0 ) && ($val['aauth4status'] ==0) && ($val['authfinalstatus'] ==9) ) ){
                                            $editbtn = 1;
                                            $naval =1;
                                        }else if(($val['employeeid'] == $employeeidval) && ($val['status'] == 0)  && (($val['auth1status'] == 0)&&($val['auth2status'] == 0) && ($val['auth3status'] ==0 )&&($val['aauth4status'] ==0)&&($val['authfinalstatus'] ==9))){
                                            $editbtn = 2;
                                            $naval = 1;
                                        }else{
                                            $editbtn=$editbtn;
                                            $naval =$naval;
                                        }
                        
                                        // $result[$key]['status1']='Approval';
                                        $result[$key]['status2']=  $naval; 
                                        $result[$key]['editstatusval']=$editbtn;
                                        $result[$key]['authempidstatus']=$authempidstatus;
                                        $result[$key]['authempiddesc']=$authempiddesc;
                        
                                       
                                        unset($result[$key]['authempname1']);
                                        unset($result[$key]['authempname2']);
                                        unset($result[$key]['authempname3']);
                                        unset($result[$key]['authempname4']);
                                        unset($result[$key]['authfinalempname']);
                                        unset($result[$key]['authfinalname']);
                                        unset($result[$key]['finalhracceptid']);
                                     // unset($result[$key]['finalhracceptname']);
                                        unset($result[$key]['hrfinalempname']);
                                        unset($result[$key]['auth1status']);
                                        unset($result[$key]['auth2status']);
                                        unset($result[$key]['auth3status']);
                                        unset($result[$key]['auth4status']);
                                        unset($result[$key]['authfinalstatus']);
                                        unset($result[$key]['auth1']);
                                        unset($result[$key]['auth2']);
                                        unset($result[$key]['auth3']);
                                        unset($result[$key]['auth4']);
                                        unset($result[$key]['authfinal']);
                                        unset($result[$key]['status']);
                                        
                                }
                                    $x=array();
                                    if(($filteremployeeid !=0) || ($filteremployeeid !='')){
                                        foreach($result as $rkey=>$rval){
                                            if($rval['employeeid']==$filteremployeeid){
                                                array_push($x,$result[$rkey]);
                                            }else{
                                                continue;
                                            }
                                        }
                                       $res19= $x;
                                    }else{
                                        $res19=$result;
                                    }
                                    return $res19;
									//echo "<pre>";print_r($res19);die;
                            }else{
                                $data1='';
								
                                return $data1;
                            }
   
    }
   
   
   
    public function getstates_based_on_branch_master($cmp_id = null, $div_id = null, $type = null)
    {
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


public function getbranches_based_on_eligibility_state_wise($cmp_id = null, $div_id = null, $state_id = null, $type = null, $is_headoffice = null)
    {

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


   
 public function getcompany_master()
    {
        $this->db->select('mxcp_id,mxcp_name');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_status = 1');
        $query = $this->db->get();
        $qry = $query->result();
        return $qry;
    }
	
	
    public function UpdatePassword($data){
		$this->db->trans_begin();
        try {
            
            
           
//print_r($data);die;
//Array ( [oldpassword] => maxwell12345 [newpassword] => krish12345 [confirmpassword] => krish12345 )
		   //$employeecode = $data['employeecode'];
		    $employeecode = $this->session->userdata('session_loginperson_id');
     $cnfpswd = $data['confirmpassword'];
   $oldpswd = $data['oldpassword'];

        $this->db->select('mxemp_emp_lg_password,mxemp_emp_lg_employee_id,mxemp_emp_lg_id');
        $this->db->from('maxwell_employees_login');
        $this->db->where('mxemp_emp_lg_employee_id',$employeecode);
        $query = $this->db->get();
        $qry = $query->result();
		//echo $this->db->last_query(); exit;
		$newdate=date('Y-m-d');
        if($qry[0]->mxemp_emp_lg_password != $oldpswd){
            return 800; exit;
        }else{
            $uparray = array(
                "mxemp_emp_lg_password" => $cnfpswd,
                "first_time_passowrd_change" => '1',
                "every_days_passowrd_change" => $newdate
				
            );
            $this->db->where('mxemp_emp_lg_id', $qry[0]->mxemp_emp_lg_id);
            $this->db->where('mxemp_emp_lg_employee_id', $employeecode);
             $this->db->update('maxwell_employees_login', $uparray);
        }
		
		
		
		
 $this->session->set_userdata('first_time_passowrd_change', '1');         
 $this->session->set_userdata('every_days_passowrd_change', '1');
            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    public function getOrginations($id =''){
        
        $this->db->select('*');
        $this->db->from('Originations');
        if(!empty($id)){
        $this->db->where('OriginationID',$id);
        }
        // $this->db->where('OriginationStatus','1');
        $this->db->Order_by('OriginationName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $qury = $query->result();
        return $qury;
    }

    public function getorginationlist($data){
        $org = $data['orgination'];

        // Define the columns to select
        $columns = [
            'OriginationName',
            'OriginationContactPerson', 
            'OriginationAddress',
            'OriginationCountry',
            'OriginationCity',
            'OriginationPostalCode',
            'OriginationEmail', 
            'OriginationPhone',
            'OriginationFax', 
            'OriginationWebSiteUrl', 
            'OriginationStatus',
            'CreatedDt',
            'OriginationID'
        ];
        
        $this->db->select(implode(',', $columns));
        $this->db->from('Originations');
        if(!empty($org)){
        $this->db->where('OriginationID',$org);
        }
        $this->db->Order_by('OriginationName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $result = $query->result();


        // Define columns for links and edit actions
        $urllink = base_url().'user/company/';
        $linkColumns = array('OriginationName' => array('UrLLink' => $urllink,'UrlLinkID' => 'OriginationID')); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array('OriginationStatus' => 'status', 'OriginationCountry' => 'CountryMaster'),
        );
        print_r($result);exit;
        
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    public function saveorigination($data) {
        if(!isset($data['OriginationStatus'])){
            $data['OriginationStatus'] = 0;
        }
        // Validate mandatory
        $mandatoryFields = [
            'OriginationName',
            'OriginationContactPerson',
            'OriginationAddress',
            'OriginationCountry',
            'OriginationPhone',
        ];

        $missingFields = array_diff(
            $mandatoryFields,
            array_keys(array_filter($data, function ($value) {
                return !empty($value);
            }))
        );

        if (!empty($missingFields)) {
            $resp = array(
                'error' => 400,
                'message' => 'Validation failed. Missing fields: ' . implode(', ', $missingFields)
            );
            echo json_encode($resp);
            return;
        }

        // Compare and prepare update array
        if(!empty($data['OriginationID']) && is_numeric($data['OriginationID'])){
            $allowedFields = [
                'OriginationName',
                'OriginationContactPerson',
                'OriginationAddress',
                'OriginationCountry',
                'OriginationCity',
                'OriginationPostalCode',
                'OriginationEmail',
                'OriginationPhone',
                'OriginationFax',
                'OriginationWebSiteUrl',
                'OriginationStatus'
            ];
            $dbfields = implode(",",$allowedFields);
            $existingData = $this->db->select($dbfields)->from('Originations')->where('OriginationID', $data['OriginationID'])->get()->row_array();
            $updateArray = [];
            foreach ($allowedFields as $field) {
                $newValue = isset($data[$field]) ? cleanInput($data[$field]) : null;
                if (array_key_exists($field, $existingData) && $existingData[$field] !== $newValue) {
                    $updateArray[$field] = $newValue;
                }
            }
            
            if (empty($updateArray)) {
                $resp = [
                    'response' => 200,
                    'message' => 'No changes detected. Nothing to update.'
                ];
                echo json_encode($resp);
                return;
            }
        }
        // Compare and prepare update array
        // Validate phone number format

        if (!preg_match('/^\d{10}$/', $data['OriginationPhone'])) {
            $resp = array(
                'error' => 400,
                'message' => 'Invalid phone number. Must be exactly 10 digits.'
            );
            echo json_encode($resp);
            return;
        }

        // Check for duplicate OriginationPhone or OriginationName in a single query
            $this->db->select('OriginationPhone,OriginationName');
            $this->db->from('Originations');
            $this->db->group_start(); // Begin grouping conditions
            $this->db->where('OriginationPhone', $data['OriginationPhone']);
            $this->db->or_where('OriginationName', $data['OriginationName']);
            $this->db->group_end(); // End grouping conditions
            if(!empty($data['OriginationID']) && is_numeric($data['OriginationID'])){
               $this->db->where_not_in('OriginationID', $data['OriginationID']);
            }
            $querys = $this->db->get();
            // echo $this->db->last_query(); exit;
            $duplicate = $querys->result();
        if (!empty($duplicate)) {
            $resp = array(
                'error' => 400,
                'message' => 'Duplicate entry found. ' .
                    ($duplicate[0]->OriginationPhone == $data['OriginationPhone'] ? 'Phone number already exists. ' : '') .
                    ($duplicate[0]->OriginationName == $data['OriginationName'] ? 'OriginationName already exists.' : '')
            );
            echo json_encode($resp);
            return;
        }
        // Validate mandatory

        // Begin the transaction
        $this->db->trans_begin();

        try {
            $inarray = array(
                'OriginationName' => cleanInput($data['OriginationName']),
                'OriginationContactPerson' => cleanInput($data['OriginationContactPerson']),
                'OriginationAddress' => cleanInput($data['OriginationAddress']),
                'OriginationCountry' => cleanInput($data['OriginationCountry']),
                'OriginationCity' => cleanInput($data['OriginationCity']),
                'OriginationState' => cleanInput($data['OriginationState']),
                'OriginationPostalCode' => cleanInput($data['OriginationPostalCode']),
                'OriginationEmail' => cleanInput($data['OriginationEmail']),
                'OriginationPhone' => cleanInput($data['OriginationPhone']),
                'OriginationFax' => cleanInput($data['OriginationFax']),
                'OriginationWebSiteUrl' => cleanInput($data['OriginationWebSiteUrl']),
                'OriginationStatus' => cleanInput($data['OriginationStatus']),
            );

            if(!empty($data['OriginationID']) && is_numeric($data['OriginationID'])){
                $inarray['UpdatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['UpdatedDt'] = DBDT;
                $inarray['UpdatedIp'] = IP;
                $inarray['UpdatedType'] = $this->session->userdata('session_types');
                $inarray['UpdatedName'] = $this->session->userdata('session_name');
                $this->db->where('OriginationID', $data['OriginationID']);
                $this->db->update('Originations', $inarray);
            }else{
                $inarray['CreatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['CreatedDt'] = DBDT;
                $inarray['CreatedIp'] = IP; 
                $inarray['CreatedType'] = $this->session->userdata('session_types');
                $inarray['CreatedName'] = $this->session->userdata('session_name');
                $this->db->insert('Originations', $inarray);
            }

            // Check if the transaction has any issues
            if ($this->db->trans_status() === FALSE) {
                // Force a rollback if there's a problem
                throw new Exception("Transaction failed during insert operation.");
            }

            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    public function getClientAuditor($id =""){
        
        $this->db->select('*');
        $this->db->from('ClientAuditor');
        if(!empty($id)){
        $this->db->where('ClientAuditorID',$id);
        }
        // $this->db->where('OriginationStatus','1');
        $this->db->Order_by('ClientAuditorName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $qury = $query->result();
        return $qury;
    }

    public function getAuditorlist($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];

        // Define the columns to select
        $columns = [
            'ClientAuditorName',
            'ClientAuditorCompanys', 
            'ClientAuditorAddress',
            'ClientAuditorCountry',
            'ClientAuditorCity',
            'ClientAuditorPostalCode',
            'ClientAuditorEmail', 
            'ClientAuditorPhone',
            'ClientAuditorMobile', 
            'ClientAuditorFax', 
            'ClientAuditorStatus',
            'ClientAuditorBankAccountNo',
            'ClientAuditorBankName',
            'ClientAuditorBankIfscCode',
            'ClientAuditorBankBranch',
            'ClientAuditorPassword',
            'ClientAuditorLoginStatus',
            'CreatedDt',
            'ClientAuditorID'
        ];
        
        $this->db->select(implode(',', $columns));
        $this->db->from('ClientAuditor');
        if(!empty($org)){
            // foreach ($selected_values as $value) {
                $this->db->or_where('FIND_IN_SET("'.$org.'", ClientAuditorCompanys) > 0');
            // }
        }
        if(!empty($aud)){
        $this->db->where('ClientAuditorID',$aud);
        }
        $this->db->Order_by('ClientAuditorName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $result = $query->result();


        // Define columns for links and edit actions
        $urllink = base_url().'user/allclientssetup/';
        $linkColumns = array('ClientAuditorName' => array('UrLLink' => $urllink,'UrlLinkID' => 'ClientAuditorID')); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array('ClientAuditorStatus' => 'status', 'ClientAuditorLoginStatus' => 'status', 'ClientAuditorCountry' => 'CountryMaster', 'ClientAuditorCompanys' => 'Originations'),
        );
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    public function saveclientAuditor($data) {
        if(!isset($data['ClientAuditorStatus'])){
            $data['ClientAuditorStatus'] = 0;
        }
        if(!isset($data['ClientAuditorLoginStatus'])){
            $data['ClientAuditorLoginStatus'] = 0;
        }
        if(isset($data['ClientAuditorCompanys']) && !empty($data['ClientAuditorCompanys'])){
            $data['ClientAuditorCompanys'] = implode(",",$data['ClientAuditorCompanys']);
        }
        // Validate mandatory
        $mandatoryFields = [
            'ClientAuditorName',
            'ClientAuditorCompanys',
            'ClientAuditorAddress',
            'ClientAuditorCountry',
            'ClientAuditorEmail',
            'ClientAuditorPhone',
        ];

        $missingFields = array_diff(
            $mandatoryFields,
            array_keys(array_filter($data, function ($value) {
                return !empty($value);
            }))
        );

        if (!empty($missingFields)) {
            $resp = array(
                'error' => 400,
                'message' => 'Validation failed. Missing fields: ' . implode(', ', $missingFields)
            );
            echo json_encode($resp);
            return;
        }

        // Compare and prepare update array
        if(!empty($data['ClientAuditorID']) && is_numeric($data['ClientAuditorID'])){
            $allowedFields = [
                'ClientAuditorName',
                'ClientAuditorCompanys',
                'ClientAuditorAddress',
                'ClientAuditorCountry',
                'ClientAuditorCity',
                'ClientAuditorPostalCode',
                'ClientAuditorEmail',
                'ClientAuditorPhone',
                'ClientAuditorFax',
                'ClientAuditorStatus',
                'ClientAuditorLoginStatus',
                'ClientAuditorPassword',
            ];
            $dbfields = implode(",",$allowedFields);
            $existingData = $this->db->select($dbfields)->from('ClientAuditor')->where('ClientAuditorID', $data['ClientAuditorID'])->get()->row_array();
            $updateArray = [];
            foreach ($allowedFields as $field) {
                $newValue = isset($data[$field]) ? cleanInput($data[$field]) : null;
                if (array_key_exists($field, $existingData) && $existingData[$field] !== $newValue) {
                    $updateArray[$field] = $newValue;
                }
            }
            
            if (empty($updateArray)) {
                $resp = [
                    'response' => 200,
                    'message' => 'No changes detected. Nothing to update.'
                ];
                echo json_encode($resp);
                return;
            }
        }
        // Compare and prepare update array
        // Validate phone number format

        if (!preg_match('/^\d{10}$/', $data['ClientAuditorPhone'])) {
            $resp = array(
                'error' => 400,
                'message' => 'Invalid phone number. Must be exactly 10 digits.'
            );
            echo json_encode($resp);
            return;
        }

        // Check for duplicate OriginationPhone or OriginationName in a single query
            $this->db->select('ClientAuditorPhone,ClientAuditorName');
            $this->db->from('ClientAuditor');
            $this->db->group_start(); // Begin grouping conditions
            $this->db->where('ClientAuditorPhone', $data['ClientAuditorPhone']);
            $this->db->or_where('ClientAuditorName', $data['ClientAuditorName']);
            $this->db->group_end(); // End grouping conditions
            if(!empty($data['ClientAuditorID']) && is_numeric($data['ClientAuditorID'])){
               $this->db->where_not_in('ClientAuditorID', $data['ClientAuditorID']);
            }
            $querys = $this->db->get();
            // echo $this->db->last_query(); exit;
            $duplicate = $querys->result();
        if (!empty($duplicate)) {
            $resp = array(
                'error' => 400,
                'message' => 'Duplicate entry found. ' .
                    ($duplicate[0]->ClientAuditorPhone == $data['ClientAuditorPhone'] ? 'Phone number already exists. ' : '') .
                    ($duplicate[0]->ClientAuditorName == $data['ClientAuditorName'] ? 'ClientAuditorName already exists.' : '')
            );
            echo json_encode($resp);
            return;
        }
        // Validate mandatory

        // Begin the transaction
        $this->db->trans_begin();

        try {
            $inarray = array(
                'ClientAuditorName' => cleanInput($data['ClientAuditorName']),
                'ClientAuditorCompanys' => cleanInput($data['ClientAuditorCompanys']),
                'ClientAuditorAddress' => cleanInput($data['ClientAuditorAddress']),
                'ClientAuditorCountry' => cleanInput($data['ClientAuditorCountry']),
                'ClientAuditorCity' => cleanInput($data['ClientAuditorCity']),
                'ClientAuditorState' => cleanInput($data['ClientAuditorState']),
                'ClientAuditorPostalCode' => cleanInput($data['ClientAuditorPostalCode']),
                'ClientAuditorEmail' => cleanInput($data['ClientAuditorEmail']),
                'ClientAuditorPhone' => cleanInput($data['ClientAuditorPhone']),
                'ClientAuditorFax' => cleanInput($data['ClientAuditorFax']),
                'ClientAuditorMobile' => cleanInput($data['ClientAuditorMobile']),
                'ClientAuditorStatus' => cleanInput($data['ClientAuditorStatus']),
                'ClientAuditorImg' => cleanInput($data['ClientAuditorImg']),
                'ClientAuditorBankAccountNo' => cleanInput($data['ClientAuditorBankAccountNo']),
                'ClientAuditorBankName' => cleanInput($data['ClientAuditorBankName']),
                'ClientAuditorBankIfscCode' => cleanInput($data['ClientAuditorBankIfscCode']),
                'ClientAuditorBankBranch' => cleanInput($data['ClientAuditorBankBranch']),
                'ClientAuditorPassword' => cleanInput($data['ClientAuditorPassword']),
                'ClientAuditorLoginStatus' => cleanInput($data['ClientAuditorLoginStatus']),
            );

            if(!empty($data['ClientAuditorID']) && is_numeric($data['ClientAuditorID'])){
                $inarray['UpdatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['UpdatedDt'] = DBDT;
                $inarray['UpdatedIp'] = IP;
                $inarray['UpdatedType'] = $this->session->userdata('session_types');
                $inarray['UpdatedName'] = $this->session->userdata('session_name');
                $this->db->where('ClientAuditorID', $data['ClientAuditorID']);
                $this->db->update('ClientAuditor', $inarray);
            }else{
                $inarray['CreatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['CreatedDt'] = DBDT;
                $inarray['CreatedIp'] = IP; 
                $inarray['CreatedType'] = $this->session->userdata('session_types');
                $inarray['CreatedName'] = $this->session->userdata('session_name');
                $this->db->insert('ClientAuditor', $inarray);
            }

            // Check if the transaction has any issues
            if ($this->db->trans_status() === FALSE) {
                // Force a rollback if there's a problem
                throw new Exception("Transaction failed during insert operation.");
            }

            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    public function getallUser($id =""){
        
        $this->db->select('*');
        $this->db->from('Users');
        if(!empty($id)){
        $this->db->where('UserID',$id);
        }
        // $this->db->where('OriginationStatus','1');
        $this->db->Order_by('UserName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $qury = $query->result();
        return $qury;
    }

    public function getallUserList($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];
        $usr = $data['user'];

        // Define the columns to select
        $columns = [
            'UserName',
            'UserCompanys', 
            'UserAddress',
            'UserCountry',
            'UserCity',
            'UserPostalCode',
            'UserEmail', 
            'UserPhone',
            'UserMobile', 
            'UserFax', 
            'UserStatus',
            'UserBankAccountNo',
            'UserBankName',
            'UserBankIfscCode',
            'UserBankBranch',
            'UserPassword',
            'UserLoginStatus',
            'CreatedDt',
            'UserID'
        ];
        
        $this->db->select(implode(',', $columns));
        $this->db->from('Users');
        if(!empty($org)){
            // foreach ($selected_values as $value) {
                $this->db->or_where('FIND_IN_SET("'.$org.'", UserCompanys) > 0');
            // }
        }
        if(!empty($usr)){
        $this->db->where('UserID',$usr);
        }
        $this->db->Order_by('UserName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $result = $query->result();


        // Define columns for links and edit actions
        $urllink = base_url().'user/alluserssetup/';
        $linkColumns = array('UserName' => array('UrLLink' => $urllink,'UrlLinkID' => 'UserID')); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters

        $hideColumn = array('UserID');
        $dataMappingColumns = array(
            'Translate' => array('UserStatus' => 'status', 'UserLoginStatus' => 'status', 'UserCountry' => 'CountryMaster', 'UserCompanys' => 'Originations'),
        );
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns, $hideColumn);
    }

    public function saveallUsers($data) {
        if(!isset($data['UserStatus'])){
            $data['UserStatus'] = 0;
        }
        if(!isset($data['UserLoginStatus'])){
            $data['UserLoginStatus'] = 0;
        }
        if(isset($data['UserCompanys']) && !empty($data['UserCompanys'])){
            $data['UserCompanys'] = implode(",",$data['UserCompanys']);
        }
        // Validate mandatory
        $mandatoryFields = [
            'UserName',
            'UserCompanys',
            'UserAddress',
            'UserCountry',
            'UserEmail',
            'UserPhone',
        ];

        $missingFields = array_diff(
            $mandatoryFields,
            array_keys(array_filter($data, function ($value) {
                return !empty($value);
            }))
        );

        if (!empty($missingFields)) {
            $resp = array(
                'error' => 400,
                'message' => 'Validation failed. Missing fields: ' . implode(', ', $missingFields)
            );
            echo json_encode($resp);
            return;
        }

        // Compare and prepare update array
        if(!empty($data['UserID']) && is_numeric($data['UserID'])){
            $allowedFields = [
                'UserName',
                'UserCompanys',
                'UserAddress',
                'UserCountry',
                'UserCity',
                'UserPostalCode',
                'UserEmail',
                'UserPhone',
                'UserFax',
                'UserStatus',
                'UserLoginStatus',
                'UserPassword',
                'UserBankAccountNo',
                'UserBankName',
                'UserBankIfscCode',
                'UserBankBranch',
            ];
            $dbfields = implode(",",$allowedFields);
            $existingData = $this->db->select($dbfields)->from('Users')->where('UserID', $data['UserID'])->get()->row_array();
            $updateArray = [];
            foreach ($allowedFields as $field) {
                $newValue = isset($data[$field]) ? cleanInput($data[$field]) : null;
                if (array_key_exists($field, $existingData) && $existingData[$field] !== $newValue) {
                    $updateArray[$field] = $newValue;
                }
            }
            
            if (empty($updateArray)) {
                $resp = [
                    'response' => 200,
                    'message' => 'No changes detected. Nothing to update.'
                ];
                echo json_encode($resp);
                return;
            }
        }
        // Compare and prepare update array
        // Validate phone number format

        if (!preg_match('/^\d{10}$/', $data['UserPhone'])) {
            $resp = array(
                'error' => 400,
                'message' => 'Invalid phone number. Must be exactly 10 digits.'
            );
            echo json_encode($resp);
            return;
        }

        // Check for duplicate OriginationPhone or OriginationName in a single query
            $this->db->select('UserPhone,UserName');
            $this->db->from('Users');
            $this->db->group_start(); // Begin grouping conditions
            $this->db->where('UserPhone', $data['UserPhone']);
            $this->db->or_where('UserName', $data['UserName']);
            $this->db->group_end(); // End grouping conditions
            if(!empty($data['UserID']) && is_numeric($data['UserID'])){
               $this->db->where_not_in('UserID', $data['UserID']);
            }
            $querys = $this->db->get();
            // echo $this->db->last_query(); exit;
            $duplicate = $querys->result();
        if (!empty($duplicate)) {
            $resp = array(
                'error' => 400,
                'message' => 'Duplicate entry found. ' .
                    ($duplicate[0]->UserPhone == $data['UserPhone'] ? 'Phone number already exists. ' : '') .
                    ($duplicate[0]->UserName == $data['UserName'] ? 'User Name already exists.' : '')
            );
            echo json_encode($resp);
            return;
        }
        // Validate mandatory

        // Begin the transaction
        $this->db->trans_begin();

        try {
            $inarray = array(
                'UserName' => cleanInput($data['UserName']),
                'UserCompanys' => cleanInput($data['UserCompanys']),
                'UserAddress' => cleanInput($data['UserAddress']),
                'UserCountry' => cleanInput($data['UserCountry']),
                'UserCity' => cleanInput($data['UserCity']),
                'UserState' => cleanInput($data['UserState']),
                'UserPostalCode' => cleanInput($data['UserPostalCode']),
                'UserEmail' => cleanInput($data['UserEmail']),
                'UserPhone' => cleanInput($data['UserPhone']),
                'UserFax' => cleanInput($data['UserFax']),
                'UserMobile' => cleanInput($data['UserMobile']),
                'UserStatus' => cleanInput($data['UserStatus']),
                'UserImg' => cleanInput($data['UserImg']),
                'UserBankAccountNo' => cleanInput($data['UserBankAccountNo']),
                'UserBankName' => cleanInput($data['UserBankName']),
                'UserBankIfscCode' => cleanInput($data['UserBankIfscCode']),
                'UserBankBranch' => cleanInput($data['UserBankBranch']),
                'UserPassword' => cleanInput($data['UserPassword']),
                'UserLoginStatus' => cleanInput($data['UserLoginStatus']),
            );

            if(!empty($data['UserID']) && is_numeric($data['UserID'])){
                $inarray['UpdatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['UpdatedDt'] = DBDT;
                $inarray['UpdatedIp'] = IP;
                $inarray['UpdatedType'] = $this->session->userdata('session_types');
                $inarray['UpdatedName'] = $this->session->userdata('session_name');
                $this->db->where('UserID', $data['UserID']);
                $this->db->update('Users', $inarray);
            }else{
                $inarray['CreatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['CreatedDt'] = DBDT;
                $inarray['CreatedIp'] = IP; 
                $inarray['CreatedType'] = $this->session->userdata('session_types');
                $inarray['CreatedName'] = $this->session->userdata('session_name');
                $this->db->insert('Users', $inarray);
            }

            // Check if the transaction has any issues
            if ($this->db->trans_status() === FALSE) {
                // Force a rollback if there's a problem
                throw new Exception("Transaction failed during insert operation.");
            }

            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    public function getEmailSettings($id =""){
        
        $this->db->select('*');
        $this->db->from('MailSettings');
        if(!empty($id)){
        $this->db->where('SmtpID',$id);
        }
        // $this->db->where('OriginationStatus','1');
        $this->db->Order_by('EmailFromName');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $qury = $query->result();
        return $qury;
    }

    public function saveEmailSettings($data){
        // Validate mandatory
        $mandatoryFields = [
            'EmailFromAddress',
            'EmailFromName',
            'SmtpHost',
            'SmtpUser',
            'SmtpPassword',
            'SmtpPort',
            'SmtpSecurity',
            'SmtpAuthenticationDomain'
        ];

        $missingFields = array_diff(
            $mandatoryFields,
            array_keys(array_filter($data, function ($value) {
                return !empty($value);
            }))
        );

        if (!empty($missingFields)) {
            $resp = array(
                'error' => 400,
                'message' => 'Validation failed. Missing fields: ' . implode(', ', $missingFields)
            );
            echo json_encode($resp);
            return;
        }

        // Compare and prepare update array
        if(!empty($data['SmtpID']) && is_numeric($data['SmtpID'])){
            $allowedFields = [
            'EmailType',
            'EmailFromAddress',
            'EmailFromName',
            'SmtpHost',
            'SmtpUser',
            'SmtpPassword',
            'SmtpPort',
            'SmtpSecurity',
            'SmtpAuthenticationDomain',
            ];
            $dbfields = implode(",",$allowedFields);
            $existingData = $this->db->select($dbfields)->from('MailSettings')->where('SmtpID', $data['SmtpID'])->get()->row_array();
            $updateArray = [];
            foreach ($allowedFields as $field) {
                $newValue = isset($data[$field]) ? cleanInput($data[$field]) : null;
                if (array_key_exists($field, $existingData) && $existingData[$field] !== $newValue) {
                    $updateArray[$field] = $newValue;
                }
            }
            
            if (empty($updateArray)) {
                $resp = [
                    'response' => 200,
                    'message' => 'No changes detected. Nothing to update.'
                ];
                echo json_encode($resp);
                return;
            }
        }
        // Compare and prepare update array

        // Begin the transaction
        $this->db->trans_begin();

        try {
            $inarray = array(
                'EmailType' => cleanInput($data['EmailType']),
                'EmailFromAddress' => cleanInput($data['EmailFromAddress']),
                'EmailFromName' => cleanInput($data['EmailFromName']),
                'SmtpHost' => cleanInput($data['SmtpHost']),
                'SmtpUser' => cleanInput($data['SmtpUser']),
                'SmtpPassword' => cleanInput($data['SmtpPassword']),
                'SmtpPort' => cleanInput($data['SmtpPort']),
                'SmtpSecurity' => cleanInput($data['SmtpSecurity']),
                'SmtpAuthenticationDomain' => cleanInput($data['SmtpAuthenticationDomain']),
            );

            if(!empty($data['SmtpID']) && is_numeric($data['SmtpID'])){
                $inarray['UpdatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['UpdatedDt'] = DBDT;
                $inarray['UpdatedIp'] = IP;
                // $inarray['UpdatedType'] = $this->session->userdata('session_types');
                // $inarray['UpdatedName'] = $this->session->userdata('session_name');
                $this->db->where('SmtpID', $data['SmtpID']);
                $this->db->update('MailSettings', $inarray);
            }else{
                $inarray['CreatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['CreatedDt'] = DBDT;
                $inarray['CreatedIp'] = IP; 
                // $inarray['CreatedType'] = $this->session->userdata('session_types');
                // $inarray['CreatedName'] = $this->session->userdata('session_name');
                $this->db->insert('MailSettings', $inarray);
            }

            // Check if the transaction has any issues
            if ($this->db->trans_status() === FALSE) {
                // Force a rollback if there's a problem
                throw new Exception("Transaction failed during insert operation.");
            }

            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    /*public function getTaskDetails($data){
        $dateKeys = ["formdate", "todate"];
        foreach ($dateKeys as $key) {
            if (!empty($data[$key])) {
                $data[$key] = date("Y-m-d", strtotime(str_replace('/', '-', $data[$key])));
            }
        }
        $id = $data['id'];
        $fromdate = $data['formdate'];
        $todate = $data['todate'];
        $this->db->select('*');
        $this->db->from('Tasks');
        if(!empty($id)){
        $this->db->where('TaskID',$id);
        }
        if(!empty($fromdate)){
        $this->db->where('CreatedDt >=',$fromdate);
        }
        if(!empty($todate)){
        $this->db->where('CreatedDt <=',$todate);
        }
        // $this->db->where('OriginationStatus','1');
        $this->db->Order_by('CreatedDt','DESC');
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        $qury = $query->result();
        print_r($qury);
        // return $qury;
    }*/

    public function getTaskDetails($data) {
        $dateKeys = ["formdate", "todate"];
        foreach ($dateKeys as $key) {
            if (!empty($data[$key])) {
                $data[$key] = date("Y-m-d", strtotime(str_replace('/', '-', $data[$key])));
            }
        }

        $id = isset($data['id']) ? $data['id'] : null;
        $fromdate = isset($data['formdate']) ? $data['formdate'] : null;
        $todate = isset($data['todate']) ? $data['todate'] : null;

        // Define the columns to select
        $columns = [
            'TaskDateOfFiling',
            'TaskCompany', 
            'TaskWorkType',
            'TaskFromType',
            'TaskSRN',
            'TaskWorkStatus',
            'TaskUser',
            'TaskAuditor', 
            'TaskPriority',
            'TaskStartDate', 
            'TaskEndDate', 
            'TaskGovernmentFee',
            'TaskCompanyFee',
            'CreatedDt',
            'TaskID',
        ];

        // Select only required columns dynamically
        $this->db->select(implode(',', $columns));
        $this->db->from('Tasks');
        if (!empty($id)) {
            $this->db->where('TaskID', $id);
        }
        if (!empty($fromdate)) {
            $this->db->where('CreatedDt >=', $fromdate);
        }
        if (!empty($todate)) {
            $this->db->where('CreatedDt <=', $todate);
        }
        $this->db->order_by('CreatedDt', 'DESC');

        $query = $this->db->get();
        $result = $query->result();
        if($data['jsonreject'] == 1){
            return $result; exit;
        }


        // Define columns for links and edit actions
        $urllink = base_url().'user/company/';
        $linkColumns = array('TaskCompany' => array('UrLLink' => $urllink)); // Columns where links will be provided
        $editColumns = array('TaskID' => array('AddFunction' => 'openpopup','AddModelFunction' => 'usertasksform','CallID' => 'add_ticket')); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
            "TaskID" => "Edit",
            "TaskDateOfFiling" => "Date of Filing",
            "TaskCompany" => "Name of the Company",
            "TaskWorkType" => "Purpose",
            "TaskFromType" => "Form",
            "TaskWorkStatus" => "Status",
            "TaskUser" => "User",
            "TaskAuditor" => "Auditor",
            "TaskPriority" => "Priority",
            "TaskStartDate" => "Start Date",
            "TaskEndDate" => "End Date",
            "TaskGovernmentFee" => "Government Fee",
            "TaskCompanyFee" => "Company Fee",
            "TaskSRN" => "SRN",

        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array('TaskCompany' => 'Originations', 'TaskAuditor' => 'Auditor', 'TaskUser' => 'Users', 'TaskPriority' => 'priority', 'TaskWorkStatus' => 'workstatus'),
        );
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
       
    }

    public function dynamicTable($result,$columns,$linkColumns = array(), $editColumns = array(), $dataMappingColumns = array(), $renameHeaderColumns = array(), $hideColumn = array()){

        // Define the JSON response structure
        $response = [
            'columns' => array_merge(['SNo'], $columns),  // Include SNo as the first column
            'linkColumns' => $linkColumns,
            'editColumns' => $editColumns,
            'data' => []
        ];
        $replacename = '';

         // Populate the "data" array with rows
        $sno = 1;  // Initialize Serial Number counter
        $jsonReject = 1;
        foreach ($result as $row) {
            $rowData = ['SNo' => $sno++];  // Add serial number for the row

            foreach ($columns as $col) {
                if (in_array($col, $hideColumn)) {
                    continue;
                }
                if (array_key_exists($col, $linkColumns)) {
                    // Make column a clickable link
                    if (array_key_exists($col, $dataMappingColumns['Translate'])) {
                        $masters = $this->getmasternames($dataMappingColumns['Translate'][$col]);
                        if(isset($linkColumns[$col]['UrlLinkID'])){
                            $columUrl = $linkColumns[$col]['UrlLinkID']; 
                        }else{
                            $columUrl = $col;
                        }
      
                        if (strpos($row->$col, ',') !== false) {
                            $replace_desc = explode(',', $row->$col);
                            foreach ($replace_desc as $rekey => $reval) {
                                $replacename .= $masters[$dataMappingColumns['Translate'][$col]][$reval] ?? ''; // Use null coalescing for safety
                                $replacename .= ',';
                            }
                            $replacename = rtrim($replacename, ',');

                        } else {
                            // Handle cases where no comma is present
                            $replacename = $masters[$dataMappingColumns['Translate'][$col]][$row->$col] ?? 'No Translation Found';
                        }

                        $rowData[$col] = '<a href="'.$linkColumns[$col]['UrLLink'].$row->$columUrl.'" target="_blank">' . $replacename . '</a>';
                    }else{
                        if(isset($linkColumns[$col]['UrlLinkID'])){
                            $columUrl = $linkColumns[$col]['UrlLinkID']; 
                        }else{
                            $columUrl = $col;
                        }
                       $rowData[$col] = '<a href="'.$linkColumns[$col]['UrLLink'].$row->$columUrl.'" target="_blank">' . $row->$col . '</a>';
                    }
                } elseif (array_key_exists($col, $editColumns)) {
                    // Add an Edit Button for editable columns
                    $aDFunction = 'onclick="' . $editColumns[$col]['AddFunction'] . '(\'\', \'' . $editColumns[$col]['AddModelFunction'] . '\', \'' . $row->$col . '\', \'' . $jsonReject . '\')"';
                    $rowData[$col] = '<a href="#" data-bs-toggle="modal" data-bs-target="#' . $editColumns[$col]['CallID'] . '" ' . $aDFunction . '><i class="fas fa-pen"></i></a>';
                } else {
                    // Regular column data
                    $rowData[$col] = $col === 'CreatedDt' ? date('d-m-Y', strtotime($row->$col)) : $row->$col;
                    if (array_key_exists($col, $dataMappingColumns['Translate'])) {
                        $masters = $this->getmasternames($dataMappingColumns['Translate'][$col]);
                            if (strpos($row->$col, ',') !== false) { 
                                $replace_desc = explode(',', $row->$col);
                                foreach ($replace_desc as $rekey => $reval) {
                                    $replacename .= $masters[$dataMappingColumns['Translate'][$col]][$reval] ?? ''; // Use null coalescing for safety
                                    $replacename .= ',';
                                }
                                $replacename = rtrim($replacename, ',');

                            } else {
                                // Handle cases where no comma is present
                                $replacename = $masters[$dataMappingColumns['Translate'][$col]][$row->$col] ?? 'No Translation Found';
                            }
                        $rowData[$col] = $replacename;
                    }
                }
            }


            $response['columns'] = array_map(function ($column) use ($renameHeaderColumns) {
                return $renameHeaderColumns[$column] ?? $column; // Replace if mapping exists, otherwise keep original
            }, $response['columns']);

            $response['columns'] = array_filter($response['columns'], function ($column) use ($hideColumn) {
                return !in_array($column, $hideColumn);
            });

            $renamedRow = array();
            foreach ($rowData as $key => $value) {
                if (in_array($key, $hideColumn)) {
                    continue; // Skip hidden columns
                }
                // Check if the key exists in the mapping, otherwise retain the original key
                $newKey = isset($renameHeaderColumns[$key]) ? $renameHeaderColumns[$key] : $key;
                $renamedRow[$newKey] = $value;
            }
           $response['data'][] = $renamedRow;
        }

        if (empty($response['data'])) {
            $response['columns'] = array_map(function ($column) use ($renameHeaderColumns) {
                return $renameHeaderColumns[$column] ?? $column; // Replace if mapping exists, otherwise keep original
            }, $response['columns']);

            $response['columns'] = array_filter($response['columns'], function ($column) use ($hideColumn) {
                return !in_array($column, $hideColumn);
            });

            $renamedRow = array();
            foreach ($rowData as $key => $value) {
                if (in_array($key, $hideColumn)) {
                    continue; // Skip hidden columns
                }
                // Check if the key exists in the mapping, otherwise retain the original key
                $newKey = isset($renameHeaderColumns[$key]) ? $renameHeaderColumns[$key] : $key;
                $renamedRow[$newKey] = $value;
            }
           $response['data'] = $renamedRow;
        }
        // Return JSON response
        return json_encode($response);
    }

    public function getmasternames($filedname){
        $common = array();
        switch ($filedname) {
        case 'Originations':
            $OriginationData = $this->Common_model->options_data($filedname);
            foreach($OriginationData as $orkey => $orval){
                $common[$orval->field_value] = $orval->descr;
            }
        break;
        case 'Auditor':
            $AuditorData = $this->Common_model->options_data($filedname);
            foreach($AuditorData as $aukey => $auval){
                $common[$auval->field_value] = $auval->descr;
            }
        break;
        case 'Users';
            $UsersData = $this->Common_model->options_data($filedname);
            foreach($UsersData as $uskey => $usval){
                $common[$usval->field_value] = $usval->descr;
            }
        break;
        default:
            $CMData = $this->Common_model->options_data($filedname);
            foreach($CMData as $cskey => $csval){
                $common[$csval->field_value] = $csval->descr;
            }
        break;
        }
        $master = array($filedname => $common);
        return $master;
    }


    public function saveTasks($data){
        // Validate mandatory
        $mandatoryFields = [
            'TaskCompany',
            'TaskUser',
            'TaskAuditor',
            'TaskPriority',
            'TaskStartDate',
            'TaskWorkStatus',
            'TaskWorkType'
        ];

        $missingFields = array_diff(
            $mandatoryFields,
            array_keys(array_filter($data, function ($value) {
                return !empty($value);
            }))
        );

        if (!empty($missingFields)) {
            $resp = array(
                'error' => 400,
                'message' => 'Validation failed. Missing fields: ' . implode(', ', $missingFields)
            );
            echo json_encode($resp);
            return;
        }

        $dateKeys = ["TaskStartDate", "TaskEndDate", "TaskDateOfFiling"];
        foreach ($dateKeys as $key) {
            if (!empty($data[$key])) {
                $data[$key] = date("Y-m-d", strtotime(str_replace('/', '-', $data[$key])));
            }
        }

        // Compare and prepare update array
        if(!empty($data['TaskID']) && is_numeric($data['TaskID'])){
            $allowedFields = [
            'TaskCompany',
            'TaskUser',
            'TaskAuditor',
            'TaskPriority',
            'TaskFromType',
            'TaskStartDate',
            'TaskEndDate',
            'TaskGovernmentFee',
            'TaskCompanyFee',
            'TaskWorkStatus',
            'TaskSRN',
            'TaskDateOfFiling',
            'TaskWorkType',
            ];
            $dbfields = implode(",",$allowedFields);
            $existingData = $this->db->select($dbfields)->from('Tasks')->where('TaskID', $data['TaskID'])->get()->row_array();
            $updateArray = [];
            foreach ($allowedFields as $field) {
                $newValue = isset($data[$field]) ? cleanInput($data[$field]) : null;
                if (array_key_exists($field, $existingData) && $existingData[$field] !== $newValue) {
                    $updateArray[$field] = $newValue;
                }
            }
            
            if (empty($updateArray)) {
                $resp = [
                    'response' => 200,
                    'message' => 'No changes detected. Nothing to update.'
                ];
                echo json_encode($resp);
                return;
            }
        }
        // Compare and prepare update array

        // Begin the transaction
        $this->db->trans_begin();

        try {
            $inarray = array(
                'TaskCompany' => cleanInput($data['TaskCompany']),
                'TaskUser' => cleanInput($data['TaskUser']),
                'TaskAuditor' => cleanInput($data['TaskAuditor']),
                'TaskPriority' => cleanInput($data['TaskPriority']),
                'TaskFromType' => cleanInput($data['TaskFromType']),
                'TaskStartDate' => cleanInput($data['TaskStartDate']),
                'TaskEndDate' => cleanInput($data['TaskEndDate']),
                'TaskGovernmentFee' => cleanInput($data['TaskGovernmentFee']),
                'TaskCompanyFee' => cleanInput($data['TaskCompanyFee']),
                'TaskWorkStatus' => cleanInput($data['TaskWorkStatus']),
                'TaskSRN' => cleanInput($data['TaskSRN']),
                'TaskDateOfFiling' => cleanInput($data['TaskDateOfFiling']),
                'TaskWorkType' => cleanInput($data['TaskWorkType']),
            );

            if(!empty($data['TaskID']) && is_numeric($data['TaskID'])){
                $inarray['UpdatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['UpdatedDt'] = DBDT;
                $inarray['UpdatedIp'] = IP;
                $inarray['UpdatedType'] = $this->session->userdata('session_types');
                $inarray['UpdatedName'] = $this->session->userdata('session_name');
                $this->db->where('TaskID', $data['TaskID']);
                $this->db->update('Tasks', $inarray);
            }else{
                $inarray['CreatedBy'] = $this->session->userdata('session_loginperson_id');
                $inarray['CreatedDt'] = DBDT;
                $inarray['CreatedIp'] = IP; 
                $inarray['CreatedType'] = $this->session->userdata('session_types');
                $inarray['CreatedName'] = $this->session->userdata('session_name');
                $this->db->insert('Tasks', $inarray);
            }

            // Check if the transaction has any issues
            if ($this->db->trans_status() === FALSE) {
                // Force a rollback if there's a problem
                throw new Exception("Transaction failed during insert operation.");
            }

            // Commit the transaction
            $this->db->trans_commit();
            $resp = array('error' => 200, 'message' => 'Data saved successfully.');
        } catch (Exception $e) {
            // Rollback the transaction in case of an error
            $this->db->trans_rollback();

            // Log the error for debugging
            log_message('error', $e->getMessage());

            // Return an error response
            $resp = array('error' => 400, 'message' => 'An error occurred: ' . $e->getMessage());
        }

        // Return the JSON response
        echo json_encode($resp);
    }

    public function getcompanywisetasksummary($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];
        $usr = $data['user'];
        $columns = [
            'OriginationName',
            'PendingGovernmentFee', 
            'PendingCompanyFee',
            'ApprovedGovernmentFee',
            'ApprovedCompanyFee',
            'RejectedGovernmentFee',
            'RejectedCompanyFee', 
            'HoldGovernmentFee',
            'HoldCompanyFee', 
            'CancelledGovernmentFee', 
            'CancelledCompanyFee',
            'PendingTasks',
            'ApprovedTasks',
            'RejectedTasks',
            'HoldTasks',
            'CancelledTasks',
            'TotalGovernmentFee',
            'TotalCompanyFee',
        ];
        $qlo = "SELECT 
                o.OriginationName,
                -- Fees segregated by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskGovernmentFee ELSE 0 END) AS PendingGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskCompanyFee ELSE 0 END) AS PendingCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskGovernmentFee ELSE 0 END) AS ApprovedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskCompanyFee ELSE 0 END) AS ApprovedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskGovernmentFee ELSE 0 END) AS RejectedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskCompanyFee ELSE 0 END) AS RejectedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskGovernmentFee ELSE 0 END) AS HoldGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskCompanyFee ELSE 0 END) AS HoldCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskGovernmentFee ELSE 0 END) AS CancelledGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskCompanyFee ELSE 0 END) AS CancelledCompanyFee,

                -- Task counts by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN 1 ELSE 0 END) AS PendingTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN 1 ELSE 0 END) AS ApprovedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN 1 ELSE 0 END) AS RejectedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN 1 ELSE 0 END) AS HoldTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN 1 ELSE 0 END) AS CancelledTasks,
                
                -- Total counts and amounts
                COUNT(*) AS TotalTasks,
                SUM(t.TaskGovernmentFee) AS TotalGovernmentFee,
                SUM(t.TaskCompanyFee) AS TotalCompanyFee

            FROM Tasks AS t
            INNER JOIN Originations AS o ON o.OriginationID = t.TaskCompany
            INNER JOIN ClientAuditor AS a ON a.ClientAuditorID = t.TaskAuditor
            INNER JOIN Users AS u ON u.UserID = t.TaskUser";
            if(!empty($org)){
            $qlo .= " where o.OriginationID  = $org";
            }
            $qlo .= " GROUP BY o.OriginationName";
        $querylo = $this->db->query($qlo);
        $result = $querylo->result();
        // Define columns for links and edit actions
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array();
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    
    public function getauditorwisetasksummary($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];
        $usr = $data['user'];
        $columns = [
            'ClientAuditorName',
            'PendingGovernmentFee', 
            'PendingCompanyFee',
            'ApprovedGovernmentFee',
            'ApprovedCompanyFee',
            'RejectedGovernmentFee',
            'RejectedCompanyFee', 
            'HoldGovernmentFee',
            'HoldCompanyFee', 
            'CancelledGovernmentFee', 
            'CancelledCompanyFee',
            'PendingTasks',
            'ApprovedTasks',
            'RejectedTasks',
            'HoldTasks',
            'CancelledTasks',
            'TotalGovernmentFee',
            'TotalCompanyFee',
        ];
        $qlo = "SELECT 
                a.ClientAuditorName,
                -- Fees segregated by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskGovernmentFee ELSE 0 END) AS PendingGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskCompanyFee ELSE 0 END) AS PendingCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskGovernmentFee ELSE 0 END) AS ApprovedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskCompanyFee ELSE 0 END) AS ApprovedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskGovernmentFee ELSE 0 END) AS RejectedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskCompanyFee ELSE 0 END) AS RejectedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskGovernmentFee ELSE 0 END) AS HoldGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskCompanyFee ELSE 0 END) AS HoldCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskGovernmentFee ELSE 0 END) AS CancelledGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskCompanyFee ELSE 0 END) AS CancelledCompanyFee,

                -- Task counts by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN 1 ELSE 0 END) AS PendingTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN 1 ELSE 0 END) AS ApprovedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN 1 ELSE 0 END) AS RejectedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN 1 ELSE 0 END) AS HoldTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN 1 ELSE 0 END) AS CancelledTasks,
                
                -- Total counts and amounts
                COUNT(*) AS TotalTasks,
                SUM(t.TaskGovernmentFee) AS TotalGovernmentFee,
                SUM(t.TaskCompanyFee) AS TotalCompanyFee

            FROM Tasks AS t
            INNER JOIN Originations AS o ON o.OriginationID = t.TaskCompany
            INNER JOIN ClientAuditor AS a ON a.ClientAuditorID = t.TaskAuditor
            INNER JOIN Users AS u ON u.UserID = t.TaskUser";
            if(!empty($aud)){
            $qlo .= " where a.ClientAuditorID  = $aud";
            }
            $qlo .= " GROUP BY a.ClientAuditorName";
        $querylo = $this->db->query($qlo);
        $result = $querylo->result();
        // Define columns for links and edit actions
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array();
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    public function getuserwisetasksummary($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];
        $usr = $data['user'];
        $columns = [
            'UserName',
            'PendingGovernmentFee', 
            'PendingCompanyFee',
            'ApprovedGovernmentFee',
            'ApprovedCompanyFee',
            'RejectedGovernmentFee',
            'RejectedCompanyFee', 
            'HoldGovernmentFee',
            'HoldCompanyFee', 
            'CancelledGovernmentFee', 
            'CancelledCompanyFee',
            'PendingTasks',
            'ApprovedTasks',
            'RejectedTasks',
            'HoldTasks',
            'CancelledTasks',
            'TotalGovernmentFee',
            'TotalCompanyFee',
        ];
        $qlo = "SELECT 
               u.UserName,
                -- Fees segregated by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskGovernmentFee ELSE 0 END) AS PendingGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskCompanyFee ELSE 0 END) AS PendingCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskGovernmentFee ELSE 0 END) AS ApprovedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskCompanyFee ELSE 0 END) AS ApprovedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskGovernmentFee ELSE 0 END) AS RejectedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskCompanyFee ELSE 0 END) AS RejectedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskGovernmentFee ELSE 0 END) AS HoldGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskCompanyFee ELSE 0 END) AS HoldCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskGovernmentFee ELSE 0 END) AS CancelledGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskCompanyFee ELSE 0 END) AS CancelledCompanyFee,

                -- Task counts by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN 1 ELSE 0 END) AS PendingTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN 1 ELSE 0 END) AS ApprovedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN 1 ELSE 0 END) AS RejectedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN 1 ELSE 0 END) AS HoldTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN 1 ELSE 0 END) AS CancelledTasks,
                
                -- Total counts and amounts
                COUNT(*) AS TotalTasks,
                SUM(t.TaskGovernmentFee) AS TotalGovernmentFee,
                SUM(t.TaskCompanyFee) AS TotalCompanyFee

            FROM Tasks AS t
            INNER JOIN Originations AS o ON o.OriginationID = t.TaskCompany
            INNER JOIN ClientAuditor AS a ON a.ClientAuditorID = t.TaskAuditor
            INNER JOIN Users AS u ON u.UserID = t.TaskUser";
            if(!empty($usr)){
            $qlo .= " where u.UserID  = $usr";
            }
            $qlo .= " GROUP BY u.UserName";
        $querylo = $this->db->query($qlo);
        $result = $querylo->result();
        // Define columns for links and edit actions
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array();
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    public function getorginationauditorusertasksummary($data){
        $org = $data['orgination'];
        $aud = $data['auditor'];
        $usr = $data['user'];
        $columns = [
            'OriginationName',
            'ClientAuditorName',
            'UserName',
            'PendingGovernmentFee', 
            'PendingCompanyFee',
            'ApprovedGovernmentFee',
            'ApprovedCompanyFee',
            'RejectedGovernmentFee',
            'RejectedCompanyFee', 
            'HoldGovernmentFee',
            'HoldCompanyFee', 
            'CancelledGovernmentFee', 
            'CancelledCompanyFee',
            'PendingTasks',
            'ApprovedTasks',
            'RejectedTasks',
            'HoldTasks',
            'CancelledTasks',
            'TotalGovernmentFee',
            'TotalCompanyFee',
        ];
        $qlo = "SELECT 
                o.OriginationName,
                a.ClientAuditorName,
                u.UserName,
                -- Fees segregated by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskGovernmentFee ELSE 0 END) AS PendingGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN t.TaskCompanyFee ELSE 0 END) AS PendingCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskGovernmentFee ELSE 0 END) AS ApprovedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN t.TaskCompanyFee ELSE 0 END) AS ApprovedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskGovernmentFee ELSE 0 END) AS RejectedGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN t.TaskCompanyFee ELSE 0 END) AS RejectedCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskGovernmentFee ELSE 0 END) AS HoldGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN t.TaskCompanyFee ELSE 0 END) AS HoldCompanyFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskGovernmentFee ELSE 0 END) AS CancelledGovernmentFee,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN t.TaskCompanyFee ELSE 0 END) AS CancelledCompanyFee,

                -- Task counts by status
                SUM(CASE WHEN t.TaskWorkStatus = 1 THEN 1 ELSE 0 END) AS PendingTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 2 THEN 1 ELSE 0 END) AS ApprovedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 3 THEN 1 ELSE 0 END) AS RejectedTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 4 THEN 1 ELSE 0 END) AS HoldTasks,
                SUM(CASE WHEN t.TaskWorkStatus = 5 THEN 1 ELSE 0 END) AS CancelledTasks,
                
                -- Total counts and amounts
                COUNT(*) AS TotalTasks,
                SUM(t.TaskGovernmentFee) AS TotalGovernmentFee,
                SUM(t.TaskCompanyFee) AS TotalCompanyFee

            FROM Tasks AS t
            INNER JOIN Originations AS o ON o.OriginationID = t.TaskCompany
            INNER JOIN ClientAuditor AS a ON a.ClientAuditorID = t.TaskAuditor
            INNER JOIN Users AS u ON u.UserID = t.TaskUser where 1";
            if(!empty($org)){
            $qlo .= " and o.OriginationID  = $org";
            }
            if(!empty($aud)){
            $qlo .= " and a.ClientAuditorID  = $aud";
            }
            if(!empty($usr)){
            $qlo .= " and u.UserID  = $usr";
            }
            $qlo .= " GROUP BY o.OriginationName, a.ClientAuditorName, u.UserName";
        $querylo = $this->db->query($qlo);
        $result = $querylo->result();
        // Define columns for links and edit actions
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array();
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
    }

    public function uploadclientsexcel($data){
        foreach ($data as $key => $val) {
            $id = cleanInput($val['Sl No']);
            $client = cleanInput($val['Name of the Client']);
            $amt = cleanInput($val['Invoice']);

            // Fetch the existing record from the database
            $this->db->select('id, client_name, amount');
            $this->db->from('clients_excel');
            $this->db->where('id',$id);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                // Record exists, check for changes
                $existingRecord = $query->row_array();
                $updateArray = [];

                // Compare each column and update only if different
                if ($existingRecord['client_name'] !== $client) {
                    $updateArray['client_name'] = $client;
                }
                if ($existingRecord['amount'] !== $amt) {
                    $updateArray['amount'] = $amt;
                }

                // If there are changes, update the record
                if (!empty($updateArray)) {
                    $this->db->where('id', $existingRecord['id']);
                    $this->db->update('clients_excel', $updateArray);
                }
            } else {
                // Record does not exist, insert a new entry
                $insertArray = array('id' => $id,'client_name' => $client, 'amount' => $amt);
                $this->db->insert('clients_excel', $insertArray);
            }
        }
            $resp = array('error' => 200, 'message' => 'Data Processed');
            echo json_encode($resp); exit;
    }

    public function getclientexceldata($data) {
        // $dateKeys = ["formdate", "todate"];
        // foreach ($dateKeys as $key) {
        //     if (!empty($data[$key])) {
        //         $data[$key] = date("Y-m-d", strtotime(str_replace('/', '-', $data[$key])));
        //     }
        // }

        // $id = isset($data['id']) ? $data['id'] : null;
        // $fromdate = isset($data['formdate']) ? $data['formdate'] : null;
        // $todate = isset($data['todate']) ? $data['todate'] : null;

        // Define the columns to select
        $columns = [
            'id',
            'client_name', 
            'amount',
            'created_at',
        ];

        // Select only required columns dynamically
        $this->db->select(implode(',', $columns));
        $this->db->from('clients_excel');
        // if (!empty($id)) {
        //     $this->db->where('TaskID', $id);
        // }
        // if (!empty($fromdate)) {
        //     $this->db->where('CreatedDt >=', $fromdate);
        // }
        // if (!empty($todate)) {
        //     $this->db->where('CreatedDt <=', $todate);
        // }
        // $this->db->order_by('CreatedDt', 'DESC');

        $query = $this->db->get();
        $result = $query->result();
        if($data['jsonreject'] == 1){
            return $result; exit;
        }


        // Define columns for links and edit actions
        $urllink = '';
        $linkColumns = array(); // Columns where links will be provided
        $editColumns = array(); // Columns with edit options

        // Mapping for renaming columns
        $renameHeaderColumns = array(
            "id" => "Sl No",
            "client_name" => "Name of the Client",
            "amount" => "Invoice",
            "created_at" => "CreatedDt"
        );
        // Mapping id and replace with name form masters
        $dataMappingColumns = array(
            'Translate' => array(),
        );
        echo $this->dynamicTable($result,$columns,$linkColumns, $editColumns, $dataMappingColumns, $renameHeaderColumns);
       
    }

}
?>

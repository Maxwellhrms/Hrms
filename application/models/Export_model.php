<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_model extends CI_Model {
 
        public function __construct()
        {
            $this->load->database();
        }
        
    public function exportList() {
            $this->db->select(array('id', 'first_name', 'last_name', 'email', 'dob', 'contact_no'));
            $this->db->from('import');
            $query = $this->db->get();
            return $query->result_array();
    }

    
    function cleanInput($val)
    {
        $value = strip_tags(html_entity_decode($val));
        $value = filter_var($value, FILTER_SANITIZE_STRIPPED);
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        return $value;
    }
      
	    public function get_paysheet_data_financial_year_pt_m_h_y($data){
          // print_r($data['column_names']);exit;
        
        
        if(isset($data['userdata']['month_year'])){
            $finan_ex = explode('~@~',$data['userdata']['month_year']);
            // print_r($finan_ex);exit;
            $from_date  = $finan_ex[0];
            $to_date = $finan_ex[1];
            // $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym_from = date('Y_m',strtotime($from_date));
            $ym_to   = date('Y_m',strtotime($to_date));
        }else{
            // echo "202";exit;//--->NO MONTH YEAR
            $message = "Please Provide Financial Year";
            getjsondata(0,$message);
        }
        // for($i = 0;$i < 12; $i++){
        //     // echo "+$i month".'<br>';
        //     // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
        //     $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
        //     // echo '<br>';
        //     if($this->db->table_exists("maxwell_attendance_$ymd") == false){
        //         getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ymd maxwell_attendance_$ymd");
        //     }    
        // }
        // exit;
        $statutory_type = $data['statutory_type'];
        $emp_types = $this->get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type);
        // echo '<pre>';print_r($emp_types);exit;
        // echo $year_month;exit;
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
         $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
       
        
       $this->db->trans_start();
        
         
            $year_month_array = [];
            for($i = 0;$i < 12; $i++){
                // echo "+$i month".'<br>';
                // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
                $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $year_month_array[] = date("Ym", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                
            }
        
        // print_r($year_month_array);exit;
        $query1 = "SET @serial_number:=0";
        $query = '';
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            $attendance_query = '';
            
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            // $query .= " select $column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            // $query .= " inner join $after_merge_query on  EmployeeID = mxsal_emp_code";
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_pt >0";
            $query .= " and mxsal_year_month in (".implode(',',$year_month_array).")";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            $query .= " group by mxsal_emp_code";
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_paid_status_flag = ". $data['userdata']['companyid'];
            // }
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_emp_code = ". $data['userdata']['companyid'];
            // }
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        // echo $query;exit;
        // $final_query = "select @serial_number:=@serial_number+1 as serial_number,$orignal_column_names from ($query) as fina_table group by mxsal_emp_code";
        // echo $final_query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        // $query_data2 = $this->db->query($final_query);
        $res = $query_data2->result_array();
        for($i = 0; $i < count($res); $i++){
            unset($res[$i]['mxsal_emp_code']);
        }

        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
     
    } 
 
      
    public function get_paysheet_data_financial_yearattach($data){
        if(isset($data['userdata']['month_year'])){
            $finan_ex = explode('~@~',$data['userdata']['month_year']);
            $from_date  = $finan_ex[0];
            $to_date = $finan_ex[1];
            $ym_from = date('Y_m',strtotime($from_date));
            $ym_to   = date('Y_m',strtotime($to_date));
        }else{
            $message = "Please Provide Financial Year";
            getjsondata(0,$message);
        }
        $statutory_type = $data['statutory_type'];
        $emp_types = $this->get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type);
         $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
       $this->db->trans_start();
            $year_month_array = [];
            for($i = 0;$i < 12; $i++){
                $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $year_month_array[] = date("Ym", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
            }
        $query1 = "SET @serial_number:=0";
        $query = '';
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            $attendance_query = '';
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month in (".implode(',',$year_month_array).")";
      
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            $query .= " group by mxsal_emp_code";
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        } 
        
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
		$res = $query_data2->result_array();
        for($i = 0; $i < count($res); $i++){
            unset($res[$i]['mxsal_emp_code']);
        }

        return $res;
        
        $this->db->trans_complete(); 
    } 
    
     public function get_paysheet_data6_year($data){
      
        if(isset($data['userdata']['month_year'])){
            $ex = explode('@~@',$data['userdata']['month_year']);
			
            $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym = date('Y_m',strtotime($ex[1].'-'.$ex[0].'-01'));
			//print_r($ym);die;
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
        
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                //getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
        // echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    }
    
      public function get_paysheet_data1($data){
      
        if(isset($data['userdata']['month_year'])){
            $ex = explode('-',$data['userdata']['month_year']);
            $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym = date('Y_m',strtotime($ex[1].'-'.$ex[0].'-01'));
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
        
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
        // echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    } 
 
    
    
     public function get_paysheet_data61($data){
	   
	   $extracting = explode('~@~',$data['userdata']['month_year']);
		$fromdate_frontend=$extracting[0];
		 $todate_frontend=$extracting[1];
		
		$temp_array=array();	
$dates_format_from_foreachloop = explode('-',$fromdate_frontend);
$start=$dates_format_from_foreachloop[1].'-'.$dates_format_from_foreachloop[0];

$dates_format_to_foreachloop = explode('-',$todate_frontend);
 $end=	$dates_format_to_foreachloop[1].'-'.$dates_format_to_foreachloop[0];
	
		for($i=0;$i<=12;$i++){
			
			if($i==0) {}else{ 
			//$fromdate_frontend = '2025-05-10'; // your input date
$date = new DateTime($fromdate_frontend);
$date->modify('+30 days');
$fromdate_frontend= $date->format('Y-m-d');  
}
   
        if(isset($fromdate_frontend)){
            $ex = explode('-',$fromdate_frontend);
			//print_r($ex);die;
            $year_month = date('Ym',strtotime($ex[0].'-'.$ex[1].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[0].'-'.$ex[1].'-01'));
            $ym = date('Y_m',strtotime($ex[0].'-'.$ex[1].'-01'));
			//print_r($ym);die;
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
         //echo  "<br>".$i."=======>".$ym; 
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                //getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
        // echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
        // print_r($query1);exit;
		array_push($temp_array,$res);
   }
        //echo"<pre>";print_r( $temp_array);
        return $temp_array;
        
        $this->db->trans_complete(); 
    } 
    
       public function get_paysheet_data6($data){
	   
	   $extracting = explode('~@~',$data['userdata']['month_year']);
		$fromdate_frontend=$extracting[0];
		 $todate_frontend=$extracting[1];
		
		$temp_array=array();	
$dates_format_from_foreachloop = explode('-',$fromdate_frontend);
$start=$dates_format_from_foreachloop[1].'-'.$dates_format_from_foreachloop[0];

$dates_format_to_foreachloop = explode('-',$todate_frontend);
 $end=	$dates_format_to_foreachloop[1].'-'.$dates_format_to_foreachloop[0];
	
		for($i=0;$i<=6;$i++){
			
			if($i==0) {}else{ 
			//$fromdate_frontend = '2025-05-10'; // your input date
$date = new DateTime($fromdate_frontend);
$date->modify('+30 days');
$fromdate_frontend= $date->format('Y-m-d');  
}
   
        if(isset($fromdate_frontend)){
            $ex = explode('-',$fromdate_frontend);
			//print_r($ex);die;
            $year_month = date('Ym',strtotime($ex[0].'-'.$ex[1].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[0].'-'.$ex[1].'-01'));
            $ym = date('Y_m',strtotime($ex[0].'-'.$ex[1].'-01'));
			//print_r($ym);die;
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
         //echo  "<br>".$i."=======>".$ym; 
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                //getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
        // echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
        // print_r($res);exit;
		array_push($temp_array,$res);
   }
        //echo"<pre>";print_r( $temp_array);
        return $temp_array;
        
        $this->db->trans_complete(); 
    } 


    
    // -------------- added 02-07-2023 ---------
     public function daily_attendance_details($data){

        $company = $this->cleanInput($data['companyid']);
        $division = $this->cleanInput($data['divisonid']);
        $state = $this->cleanInput($data['stateid']);
        $branch = $this->cleanInput($data['branchid']);
        $employeeid = $this->cleanInput($data['employeeid']);
        $filter = $this->cleanInput($data['filter']);
        $from = $this->cleanInput($data['from']);

        $ymd =date("Y-m-d",strtotime($from));
        $year =date("Y",strtotime($from));
        $month =date("m",strtotime($from));

        if ($month < 10 && strlen($month) == 1) {
            $month_updated = "0" . $month;
        } else {
            $month_updated = $month;
        }
        $ym = $year.'_'.$month_updated;
        
        $subsql="(select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,
                  max(attendance_time) as max_att_punch_time,attendance_date
                  from employee_punches_".$year;
        $subsql .= "  where attendance_date='".$ymd."'";
        $subsql .= " group by eid) as punch";

        // echo $subsql; exit;
        
        // case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        // else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        // else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        // else '' end end end as AB,

        $this->db->select("
        mxst_state as state,mxd_name as division,mxb_name as branch,mxemp_emp_id as employee_code,
        CONCAT(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxdesg_name as designation,att_punch_time,max_att_punch_time,
        
        case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD,
        
        case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count,
        
        case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR,
        
        case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count,
        
        case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT,
        
        case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count,
        
        case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT,
        
        case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count,
        
        
        case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB,
        
        case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else '' end as AB_first,
        
        case when mx_attendance_second_half = 'AB' then mx_attendance_second_half 
        else '' end as AB_second,
        
        case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count,
            
        case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR,
        
        case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else '' end as PR_first,
        
        case when mx_attendance_second_half = 'PR' then mx_attendance_second_half 
        else '' end  as PR_second,
        
        case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count,
            
        case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves,
          
        case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count,
        mx_attendance_date as attendate
        ");
        $this->db->from('maxwell_attendance_'.$ym);
        $this->db->join('maxwell_employees_info','mxemp_emp_id=mx_attendance_emp_code','INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join($subsql, 'punch.attuniq=mx_attendance_id', 'LEFT');
        // $this->db->where('attendance_date',$ymd);
        if (!empty($company)) {
            $this->db->where('mxemp_emp_comp_code', $company);
        }
        if (!empty($division)) {
            $this->db->where('mxemp_emp_division_code', $division);
        }
        if (!empty($branch)) {
            $this->db->where('mxemp_emp_branch_code', $branch);
        }
        if (!empty($employeeid)) {
            $this->db->where('mxemp_emp_id', $employeeid);
        }
        if (!empty($state)) {
            $this->db->where('mxemp_emp_state_code', $state);
        }     
        $this->db->where('mx_attendance_date',$ymd);
        $this->db->where('mx_attendance_first_half !=','WO');
        $this->db->where('mx_attendance_second_half !=','WO');
        // $where= "(mx_attendance_first_half != 'PR' OR mx_attendance_second_half != 'PR')";
        // $this->db->where( $where);
        // $this->db->order_by('state,division,branch,PR,AB,employee_code,OT,SHRT,leaves','desc');
        $this->db->order_by('mxemp_emp_grade_code','asc');
        

        $query = $this->db->get();
        $qry = $query->result_array();
        // echo $this->db->last_query(); exit;
        return $qry;    

    }
    public function daily_attendance_details_previous($data){

        $company = $this->cleanInput($data['companyid']);
        $division = $this->cleanInput($data['divisonid']);
        $state = $this->cleanInput($data['stateid']);
        $branch = $this->cleanInput($data['branchid']);
        $employeeid = $this->cleanInput($data['employeeid']);
        $filter = $this->cleanInput($data['filter']);
        $from = $this->cleanInput($data['from']);

        $ymd =date("Y-m-d",strtotime($from));
        $year =date("Y",strtotime($from));
        $month =date("m",strtotime($from));

        if ($month < 10 && strlen($month) == 1) {
            $month_updated = "0" . $month;
        } else {
            $month_updated = $month;
        }
        $ym = $year.'_'.$month_updated;
        
        $subsql="(select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,max(attendance_time) as max_att_punch_time,attendance_date
        from employee_punches_".$year;
        $subsql .= "  where attendance_date='".$ymd."'";
        $subsql .= " group by eid) as punch";

// echo $subsql; exit;
        $this->db->select("
        mxst_state as state,mxd_name as division,mxb_name as branch,mxemp_emp_id as employee_code,
        CONCAT(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxdesg_name as designation,att_punch_time,max_att_punch_time,
        
        case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD,
        
        case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count,
        
        case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR,
        
        case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count,
        
        case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT,
        
        case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count,
        
        case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT,
        
        case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count,
        
        case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB,
        
        case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count,
        
        case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR,
        
        case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count,
            
        case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half ,'/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves,
          
        case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count");
        $this->db->from('maxwell_attendance_'.$ym);
        $this->db->join('maxwell_employees_info','mxemp_emp_id=mx_attendance_emp_code','INNER');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join($subsql, 'punch.attuniq=mx_attendance_id', 'LEFT');
        if (!empty($company)) {
            $this->db->where('mxemp_emp_comp_code', $company);
        }
        if (!empty($division)) {
            $this->db->where('mxemp_emp_division_code', $division);
        }
        if (!empty($branch)) {
            $this->db->where('mxemp_emp_branch_code', $branch);
        }
        if (!empty($employeeid)) {
            $this->db->where('mxemp_emp_id', $employeeid);
        }
        if (!empty($state)) {
            $this->db->where('mxemp_emp_state_code', $state);
        }     
        $this->db->where('mx_attendance_date',$ymd);
        $this->db->where('mx_attendance_first_half !=','WO');
        $this->db->where('mx_attendance_second_half !=','WO');
        // $where= "(mx_attendance_first_half != 'PR' OR mx_attendance_second_half != 'PR')";
        // $this->db->where( $where);
        $this->db->order_by('mxemp_emp_id ');

        $query = $this->db->get();
        $qry = $query->result_array();
        // echo $this->db->last_query(); exit;
        // print_r($qry);  exit;
        return $qry;    

    }
    // ------------- end added 02-07-2023 -----------
    
    
    public function getalldetailaddress($data){
        $company = $this->cleanInput($data['esi_company_id']);
        $division = $this->cleanInput($data['esi_div_id']);
        $state = $this->cleanInput($data['esi_state_id']);
        $branch = $this->cleanInput($data['esi_branch_id']);
    
        $this->db->select('mxcp_id,mxcp_name');
        $this->db->from('maxwell_company_master');
        $this->db->where('mxcp_status = 1');
        $this->db->where('mxcp_id', $company);
        $query = $this->db->get();
        $qry['cp'] = $query->result();
    
        $this->db->select('mxd_id,mxd_name');
        $this->db->from('maxwell_division_master');
        $this->db->where('mxd_status = 1');
        $this->db->where('mxd_comp_id', $company);
        $this->db->where('mxd_id', $division);
        $query = $this->db->get();
        $qry['dv'] = $query->result();
    
        $this->db->select('mxst_id,mxst_state');
        $this->db->from('maxwell_state_master');
        $this->db->where('mxst_id', $state);
        $query = $this->db->get();
        $qry['st'] = $query->result();
    
        $this->db->select('mxb_id,mxb_name,mxb_address');
        $this->db->from('maxwell_branch_master');
        $this->db->where('mxb_status = 1');
        $this->db->where('mxb_state_id', $state);
        $this->db->where('mxb_comp_id', $division);
        $this->db->where('mxb_comp_id', $company);
        $this->db->where_in('mxb_id', $branch);
        $query = $this->db->get();
        $qry['br'] = $query->result();
        // print_r($qry); die;
        return $qry;
    }


    public function monthattendance($data,$sundaydays=0)
    {
    $mnth = $this->cleanInput($data['attndmonth']);
    $year = $this->cleanInput($data['attndyear']);
    $empcode = $this->cleanInput($data['attndempid']);
    $compid = $this->cleanInput($data['esi_company_id']);
    $divid = $this->cleanInput($data['esi_div_id']);
    $stateid = $this->cleanInput($data['esi_state_id']);
    $branchid = $this->cleanInput($data['esi_branch_id']);
    $statusid = $this->cleanInput($data['approvstatus']);
    
    if(strlen($mnth) == 1){
        $mnth = '0'.$mnth;
    }
    $ym = $year.'_'.$mnth;

    $query = "SELECT( 
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentCL,
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end)
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentSL, 
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentEL,  
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentML,  
                   
                    (select max(case when mxemp_leave_cron_short_name = 'EL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '$ym' ) as AcumilatedEL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'CL' then mxemp_leave_cron_present_adding end)
                     from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '$ym'  ) as AcumilatedCL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'SL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '$ym' ) as AcumilatedSL,
                 
                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_$ym
                    where mx_attendance_date in($sundaydays) and  mx_attendance_emp_code = mxemp_emp_id )AS WOAbsent,

                    ( select  sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_$ym
                    where mx_attendance_date in($sundaydays) and  mx_attendance_emp_code = mxemp_emp_id )AS WOfirsthalfAbsent,

                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 1 else 0 end) from maxwell_attendance_$ym
                    where mx_attendance_date in($sundaydays) and  mx_attendance_emp_code = mxemp_emp_id )AS WOsecondhalfAbsent,

                    count(*) AS Totaldays, 
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, 
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, 
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, 
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, 
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Matleave, 
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Matleave, 
                    mx_attendance_emp_code as empid, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as fullname,
                    GROUP_CONCAT(mx_attendance_first_half, '-', mx_attendance_second_half, '~', mx_attendance_date, '~', mx_attendance_id, '~*~' order by mx_attendance_date asc) as dates, 
                    mxdesg_name as designame, mxdpt_name as deptname, mxemp_emp_gender as gender FROM maxwell_attendance_$ym 
                    INNER JOIN maxwell_employees_info ON mxemp_emp_id = mx_attendance_emp_code 
                    INNER JOIN maxwell_designation_master ON mxdesg_id = mxemp_emp_desg_code 
                    INNER JOIN maxwell_department_master ON mxdpt_id = mxemp_emp_dept_code ";
                    // if($empcode !='' && $empcode ==0){
                    //     $query .= " where mx_attendance_emp_code = '$empcode' "; 
                    // }
                    $query .= " where ";
                    if($compid !='' ){
                        $query .= " mxemp_emp_comp_code = '$compid' "; 
                    }
                    if($empcode !='' && $empcode ==0){
                        $query .= " and mx_attendance_emp_code = '$empcode' "; 
                    }
                    if($divid !='' && $divid !=0){
                        $query .= " and mxemp_emp_division_code = '$divid' "; 
                    }
                    if($branchid !='' && $branchid !=0){
                        $query .= " and mxemp_emp_branch_code = '$branchid' "; 
                    }
                    if($stateid !='' && $stateid !=0){
                        $query .= " and mxemp_emp_state_code = '$stateid' "; 
                    }
                    $query .= " GROUP BY mx_attendance_emp_code ";
                    $query = $this->db->query($query);
                    return $qury = $query->result();
        }
     /*
         Author : SHABABU
         DATE   : 31-08-2022
         DESC   : FOR PAYSHEET DATA FOR SPECIFIC YEAR & MONTH
         NOTE   : GETTING ESI CONTAINANING EMPLOYEMENT TYPES FIRST AND THEN GENETRATING PAYSHEET
    */
    public function get_paysheet_data($data){
      
        if(isset($data['userdata']['month_year'])){
            $ex = explode('-',$data['userdata']['month_year']);
            $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym = date('Y_m',strtotime($ex[1].'-'.$ex[0].'-01'));
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
        
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
        // echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    } 
    /*
         Author : SHABABU
         DATE   : 31-08-2022
         DESC   : FOR PAYSHEET DATA FOR FINANCIAL YEAR
    */
    public function get_paysheet_data_financial_year_backup($data){
        // print_r($data['column_names']);exit;
        
        
        if(isset($data['userdata']['month_year'])){
            $finan_ex = explode('~@~',$data['userdata']['month_year']);
            // print_r($finan_ex);exit;
            $from_date  = $finan_ex[0];
            $to_date = $finan_ex[1];
            // $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym_from = date('Y_m',strtotime($from_date));
            $ym_to   = date('Y_m',strtotime($to_date));
        }else{
            // echo "202";exit;//--->NO MONTH YEAR
            $message = "Please Provide Financial Year";
            getjsondata(0,$message);
        }
        for($i = 0;$i < 12; $i++){
            // echo "+$i month".'<br>';
            // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
            $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
            // echo '<br>';
            if($this->db->table_exists("maxwell_attendance_$ymd") == false){
                getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ymd maxwell_attendance_$ymd");
            }    
        }
        // exit;
        $statutory_type = $data['statutory_type'];
        $emp_types = $this->get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type);
        // echo '<pre>';print_r($emp_types);exit;
        // echo $year_month;exit;
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
         $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        if(isset($data['orignal_column_names'])){
            if(is_array($data['orignal_column_names'])){
                $orignal_column_names = implode(',',$data['orignal_column_names']);
            }else{
                $orignal_column_names = $data['orignal_column_names'];
            }
        }else{
            $orignal_column_names = '*';
        }
        // echo $table_name;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
       $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            $attendance_query = '';
            //------ATTENDANCE QUERY
            $year_month_array = [];
            for($i = 0;$i < 12; $i++){
                // echo "+$i month".'<br>';
                // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
                $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $year_month_array[] = date("Ym", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $attendance_query .= "(SELECT
                        (
                        select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                        group by mxemp_leave_bal_emp_id) as CurrentCL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                        group by mxemp_leave_bal_emp_id) as CurrentSL,
                        (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                        group by mxemp_leave_bal_emp_id) as CurrentEL,
                        -- NEW BY SHABABU(12-06-2022)-->  ML
                        (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                        group by mxemp_leave_bal_emp_id) as CurrentML,
                        CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                        count(*) AS Totaldays,
                        sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                        sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                        sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                        sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                        sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                        sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                        sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                        -- Absent History
                        sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                        sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                        sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                        -- End Absent History
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
                        -- End Present History
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
                    FROM maxwell_attendance_$ymd
                    INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                        
                    GROUP BY EmployeeID)";
                if($i != 11){
                    $attendance_query .= "UNION ALL";
                }
            }
            $after_merge_query = "";
            $after_merge_query = "(select CurrentCL,CurrentSL, EmployeeID, sum(Totaldays) as Totaldays, sum(Week_Off) as Week_Off,";
            $after_merge_query .= " sum(Public_Holiday) as Public_Holiday, sum(First_Half_Public_Holiday) as First_Half_Public_Holiday, sum(Second_Half_Public_Holiday) as Second_Half_Public_Holiday,";
            $after_merge_query .= "  sum(Optional_Holiday) as Optional_Holiday, sum(First_Half_Optional_Holiday) as First_Half_Optional_Holiday, sum(Second_Half_Optional_Holiday) as Second_Half_Optional_Holiday,";
            $after_merge_query .= " sum(Absent) as Absent, sum(First_Half_Absent) as First_Half_Absent, sum(Second_Half_Absent) as Second_Half_Absent,";
            $after_merge_query .= "sum(Present) as Present, sum(First_Half_Present) as First_Half_Present, sum(Second_Half_Present) as Second_Half_Present,";
            $after_merge_query .= "sum(First_Half_Present_Cl_Applied) as First_Half_Present_Cl_Applied, sum(Second_Half_Present_Cl_Applied) as Second_Half_Present_Cl_Applied,";
            $after_merge_query .= "sum(First_Half_Present_Sl_Applied) as First_Half_Present_Sl_Applied, sum(Second_Half_Present_Sl_Applied) as Second_Half_Present_Sl_Applied,";
            $after_merge_query .= "sum(First_Half_Present_El_Applied) as First_Half_Present_El_Applied, sum(Second_Half_Present_El_Applied) as Second_Half_Present_El_Applied";
            $after_merge_query .= " from ($attendance_query) as attendance group by EmployeeID) as attendance";
                // echo $after_merge_query;exit;
            //------END ATTENDANCE QUERY
            
            // $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " select $column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " inner join $after_merge_query on  EmployeeID = mxsal_emp_code";
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month in (".implode(',',$year_month_array).")";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_paid_status_flag = ". $data['userdata']['companyid'];
            // }
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_emp_code = ". $data['userdata']['companyid'];
            // }
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        $final_query = "select @serial_number:=@serial_number+1 as serial_number,$orignal_column_names from ($query) as fina_table group by mxsal_emp_code";
        // echo $final_query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        // $query_data2 = $this->db->query($query);
        $query_data2 = $this->db->query($final_query);
        $res = $query_data2->result_array();
        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    }

public function get_paysheet_data_esi_2($data){
      
        if(isset($data['userdata']['month_year'])){
            $ex = explode('-',$data['userdata']['month_year']);
            $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $year_month_day = date('Y-m-01',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym = date('Y_m',strtotime($ex[1].'-'.$ex[0].'-01'));
            
        }else{
            $message = "Please Provide MONTH AND YEAR";
            getjsondata(0,$message);
            // echo "202";exit;//--->NO MONTH YEAR
        }
        
        if($this->db->table_exists("maxwell_attendance_$ym") == false){
                getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ym maxwell_attendance_$ym");
        }
        $statutory_type = $data['statutory_type'];
        // echo $statutory_type;exit;
        $emp_types = $this->get_employee_types_based_on_statutory_data($year_month_day,$year_month_day,$statutory_type);
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
        $this->db->trans_start();
        
        $query1 = "SET @serial_number:=0";
        $query = '';
        // echo count($res);exit;
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            //------ATTENDANCE QUERY
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $attendance_query = "(SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
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
                    -- End Present History
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
                FROM maxwell_attendance_$ym
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance";
            }
            //------END ATTENDANCE QUERY
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            $query .= " left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason";
            //$query .= " left join mxsal_supplimentary_m on mxsal_emp_code = mxemp_emp_esi_reason";
			
            if(isset($data['is_attendance']) && $data['is_attendance'] == 1){
                $query .= " inner join $attendance_query on  EmployeeID = mxsal_emp_code";
            }
            
            $query .= " where mxsal_status=1";
            $query .= " and   mxemp_emp_current_salary <= 21000";
            //$query .= " and   mxsal_actual_gross <> 0";
            
            $query .= " and mxsal_year_month=$year_month";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        
        // echo $attendance_query;exit;
         //echo $query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        $res = $query_data2->result_array();
         //print_r($res);
        return $res;
        
        $this->db->trans_complete(); 
    } 
    public function get_paysheet_data_financial_year($data){
        // print_r($data['column_names']);exit;
        
        
        if(isset($data['userdata']['month_year'])){
            $finan_ex = explode('~@~',$data['userdata']['month_year']);
            // print_r($finan_ex);exit;
            $from_date  = $finan_ex[0];
            $to_date = $finan_ex[1];
            // $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym_from = date('Y_m',strtotime($from_date));
            $ym_to   = date('Y_m',strtotime($to_date));
        }else{
            // echo "202";exit;//--->NO MONTH YEAR
            $message = "Please Provide Financial Year";
            getjsondata(0,$message);
        }
        // for($i = 0;$i < 12; $i++){
        //     // echo "+$i month".'<br>';
        //     // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
        //     $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
        //     // echo '<br>';
        //     if($this->db->table_exists("maxwell_attendance_$ymd") == false){
        //         getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ymd maxwell_attendance_$ymd");
        //     }    
        // }
        // exit;
        $statutory_type = $data['statutory_type'];
        $emp_types = $this->get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type);
        // echo '<pre>';print_r($emp_types);exit;
        // echo $year_month;exit;
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
         $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // if(isset($data['orignal_column_names'])){
        //     if(is_array($data['orignal_column_names'])){
        //         $orignal_column_names = implode(',',$data['orignal_column_names']);
        //     }else{
        //         $orignal_column_names = $data['orignal_column_names'];
        //     }
        // }else{
        //     $orignal_column_names = '*';
        // }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
       $this->db->trans_start();
        
         
            $year_month_array = [];
            for($i = 0;$i < 12; $i++){
                // echo "+$i month".'<br>';
                // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
                $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $year_month_array[] = date("Ym", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                
            }
        
        // print_r($year_month_array);exit;
        $query1 = "SET @serial_number:=0";
        $query = '';
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            $attendance_query = '';
            
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            // $query .= " select $column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            // $query .= " inner join $after_merge_query on  EmployeeID = mxsal_emp_code";
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month in (".implode(',',$year_month_array).")";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            $query .= " group by mxsal_emp_code";
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_paid_status_flag = ". $data['userdata']['companyid'];
            // }
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_emp_code = ". $data['userdata']['companyid'];
            // }
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        // echo $query;exit;
        // $final_query = "select @serial_number:=@serial_number+1 as serial_number,$orignal_column_names from ($query) as fina_table group by mxsal_emp_code";
        // echo $final_query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        // $query_data2 = $this->db->query($final_query);
        $res = $query_data2->result_array();
        for($i = 0; $i < count($res); $i++){
            unset($res[$i]['mxsal_emp_code']);
        }

        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    } 
    public function get_paysheet_data_quaterly($data){
        // print_r($data);exit;
        
        
        if(isset($data['userdata']['month_year'])){
            $finan_ex = explode('~@~',$data['userdata']['month_year']);
            // print_r($finan_ex);exit;
            $from_date  = $finan_ex[0];
            $to_date = $finan_ex[1];
            // $year_month = date('Ym',strtotime($ex[1].'-'.$ex[0].'-01'));
            $ym_from = date('Y_m',strtotime($from_date));
            $ym_to   = date('Y_m',strtotime($to_date));
        }else{
            // echo "202";exit;//--->NO MONTH YEAR
            $message = "Please Provide Qaterly Year";
            getjsondata(0,$message);
        }
        // for($i = 0;$i < 12; $i++){
        //     // echo "+$i month".'<br>';
        //     // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
        //     $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
        //     // echo '<br>';
        //     if($this->db->table_exists("maxwell_attendance_$ymd") == false){
        //         getjsondata(0,"ATTENDANCE TABLE NOT EXIST for month and year $ymd maxwell_attendance_$ymd");
        //     }    
        // }
        // exit;
        $statutory_type = $data['statutory_type'];
        $emp_types = $this->get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type);
        // echo '<pre>';print_r($emp_types);exit;
        // echo $year_month;exit;
        //---------------------GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
         $this->db->select('mxemp_ty_cmpid,mxemp_ty_id,mxemp_ty_name,mxemp_ty_table_name');
        $this->db->from("maxwell_employee_type_master");
        $this->db->where("mxemp_ty_status", 1);
        $this->db->where_in("mxemp_ty_id", $emp_types);
        $qry = $this->db->get();
        $res = $qry->result();
        // print_r($res);exit;
        
        //---------------------END GETTING TABLE NAME FROM EMPLOYEE TYPE TABLE
        
        foreach($res as $emp_type){
            $table_name = $emp_type->mxemp_ty_table_name;
            if($this->db->table_exists($table_name) == false){
                // echo "203";exit;//---->NO SALARY TABLE EXIST
                getjsondata(0,'SALARY TABLE NOT EXIST FOR EMPLOYE TYPE = '.$emp_type->mxemp_ty_name);
            }
        }
        
        
        
        if(isset($data['column_names'])){
            if(is_array($data['column_names'])){
                $column_names = implode(',',$data['column_names']);
            }else{
                $column_names = $data['column_names'];
            }
        }else{
            $column_names = '*';
        }
        // if(isset($data['orignal_column_names'])){
        //     if(is_array($data['orignal_column_names'])){
        //         $orignal_column_names = implode(',',$data['orignal_column_names']);
        //     }else{
        //         $orignal_column_names = $data['orignal_column_names'];
        //     }
        // }else{
        //     $orignal_column_names = '*';
        // }
        // echo $column_names;exit;
        
        



        //--------------GETTING PAYSHEET DATA FROM THE RELATED EMPLOYEMENT TABLE

        
        
          
        
       $this->db->trans_start();
        
         
            $year_month_array = [];
            for($i = 0;$i < 3; $i++){
                // echo "+$i month".'<br>';
                // echo $ymd = date('Y_m',strtotime($from_date)."+$i month");
                $ymd = date("Y_m", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                $year_month_array[] = date("Ym", strtotime(date("Y-m-d", strtotime($from_date)) . "+$i month"));
                
            }
        
        // print_r($year_month_array);exit;
        $query1 = "SET @serial_number:=0";
        $query = '';
        for($x = 0; $x < count($res); $x++){
            $table_name = $res[$x]->mxemp_ty_table_name;
            $attendance_query = '';
            
            
            $query .= " select @serial_number:=@serial_number+1 as serial_number,$column_names"; 
            // $query .= " select $column_names"; 
            $query .= " from ".$table_name;
            $query .= " inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code";
            $query .= " inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code";
            $query .= " inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code";
            $query .= " inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code";
            $query .= " inner join maxwell_division_master on mxd_id = mxemp_emp_division_code";
            $query .= " inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code";
            $query .= " inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code";
            $query .= " inner join maxwell_state_master on mxst_id = mxemp_emp_state_code";
            // $query .= " inner join $after_merge_query on  EmployeeID = mxsal_emp_code";
            
            $query .= " where mxsal_status=1";
            
            $query .= " and mxsal_year_month in (".implode(',',$year_month_array).")";
            
    
            if (isset($data['userdata']['companyid']) && $data['userdata']['companyid']) {
                $query .= " and mxsal_cmp_id = ". $data['userdata']['companyid'];
            }
            if (isset($data['userdata']['divisonid']) && $data['userdata']['divisonid']) {
                $query .= " and mxsal_div_id = ". $data['userdata']['divisonid'];
            }
            if (isset($data['userdata']['branchid']) && $data['userdata']['branchid']) {
                $query .= " and mxsal_branch_code = ". $data['userdata']['branchid'];
            }
            if (isset($data['userdata']['stateid']) && $data['userdata']['stateid']) {
                $query .= " and mxsal_state_code = ". $data['userdata']['stateid'];
            }
            if (isset($data['userdata']['emp_type']) && $data['userdata']['emp_type']) {
                $query .= " and mxsal_emp_type = ". $data['userdata']['emp_type'];
            }
            $query .= " group by mxsal_emp_code";
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_paid_status_flag = ". $data['userdata']['companyid'];
            // }
            // if (isset($data['userdata']['emp_type']) && $data['userdata']['companyid']) {
            //     $query .= " and mxsal_emp_code = ". $data['userdata']['companyid'];
            // }
            if($x != count($res) - 1 && count($res) > 1){
                $query .= " UNION ALL";
            }
            
        }//--->for 
        
        // echo $query;exit;
        // $final_query = "select @serial_number:=@serial_number+1 as serial_number,$orignal_column_names from ($query) as fina_table group by mxsal_emp_code";
        // echo $final_query;exit;
        // $query .= ",(SELECT @serial_number:= 0) AS serial_number";
        $query_data = $this->db->query($query1);
        $query_data2 = $this->db->query($query);
        // $query_data2 = $this->db->query($final_query);
        $res = $query_data2->result_array();
        for($i = 0; $i < count($res); $i++){
            unset($res[$i]['mxsal_emp_code']);
        }

        // print_r($res);exit;
        return $res;
        
        $this->db->trans_complete(); 
    } 
    
    public function get_employee_types_based_on_statutory_data($from_date,$to_date,$statutory_type = NULL){
        if(!$statutory_type){
            getjsondata(0,'STATUTORY TYPE MISSING CONTACT DEVELOPER');
        }
        // SELECT a.mxps_emptype_id FROM `maxwell_pay_structure_master` as a
        // inner join maxwell_pay_structure_child as b on b.mxpsc_parent_id = a.mxps_id
        // where a.mxps_affect_from <= '2022-08-01' and a.mxps_affect_to >= '2022-08-01'
        // and mxps_status = 1 and b.mxpsc_status = 1 and b.mxpsc_ispf = 1
        
        $this->db->select('a.mxps_emptype_id');
        $this->db->from('maxwell_pay_structure_master as a');
        $this->db->join('maxwell_pay_structure_child as b','b.mxpsc_parent_id = a.mxps_id','inner');
        $this->db->where('a.mxps_affect_from <=', $from_date);
        $this->db->where('a.mxps_affect_to >=',$to_date);
        $this->db->where('a.mxps_status',1);
        $this->db->where('b.mxpsc_status',1);
        if($statutory_type == 'PF'){
            $this->db->where('b.mxpsc_ispf',1);
        }
        if($statutory_type == 'ESI'){
            $this->db->where('b.mxpsc_isesi',1);
        }
        if($statutory_type == 'PT'){
            $this->db->where('b.mxpsc_ispt',1);
        }
        if($statutory_type == 'LWF'){
            $this->db->where('b.mxpsc_islwf',1);
        }
        if($statutory_type == 'BONUS'){
            $this->db->where('b.mxpsc_isbns',1);
        }
        if($statutory_type == 'GRATUITY'){
            $this->db->where('b.mxpsc_isgratuity',1);
        }
        if($statutory_type == 'STAIFUND'){
            $this->db->where('b.mxpsc_isstaipend',1);
        }
        $query = $this->db->get();
        // echo $this->db->last_query();exit;
        $res = $query->result_array();
        if(count($res) > 0){
            foreach($res as $data){
                $res_final[] = $data['mxps_emptype_id'];
            }
        }
        // print_r($res_final);exit;
        return $res_final;
        
    }

// ---------------------------- To Get address of the company -----------------

    public function agegreaterthanfiftyseven($data){
        $regarr=array('W'=>'Working','R'=>'Resigned','N'=>'Notice');
        $this->db->select('mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,mxemp_emp_dept_code,mxemp_emp_grade_code,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,
                           mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,
                           mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,mxemp_emp_present_address2,mxemp_emp_present_city,
                           mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state,mxemp_emp_fixed_country,
                           mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,
                           mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,mxemp_emp_resignation_status,mxemp_emp_resignation_reason,
                           mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,
                           mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,empmaritaldate,mxemp_emp_is_without_notice_period,
                           mxemp_emp_unpay_sal_months,mxemp_emp_joiningorgination,mxemp_emp_joiningorginationofferpackage,mxemp_emp_joiningorginationdesignation,mxemp_emp_resignationletter,mxemp_emp_employee_lic_no,mxemp_emp_gratuity,
                           mxemp_emp_esiimage,mxemp_emp_resignation_status');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
        // $this->db->where("mxemp_emp_resignation_status != 'R'");
        if (!empty($data['companyid'])) {
            $this->db->where('mxemp_emp_comp_code', $data['companyid']);
        }
        if (!empty($data['divisionid'])) {
            $this->db->where('mxemp_emp_division_code', $data['divisionid']);
        }
        if (!empty($data['branchid'])) {
            $this->db->where('mxemp_emp_branch_code', $data['branchid']);
        }
        if (!empty($data['employeeid'])) {
            $this->db->where('mxemp_emp_id', $data['employeeid']);
        }
        if (!empty($data['stateid'])) {
            $this->db->where('mxemp_emp_state_code', $data['stateid']);
        }
        
        $query = $this->db->get();
        $qr = $query->result();
        #echo $this->db->last_query(); exit;
        $retrunarray = array();
        foreach($qr as $key => $val){
             if(array_key_exists($val->mxemp_emp_resignation_status,$regarr) ) {
                $restatus=$regarr[$val->mxemp_emp_resignation_status];
            }
            $age = $this->getages($val->mxemp_emp_date_of_birth);
            // print_r($age);exit;
            if($age['years'] >= '57' && $age['months'] >= '6'){
                $agewithdays = $age['years'].' Years '.$age['months'].' Months '. $age['days'].' Days';
                $buldarray = array(
                    "employee code" =>$val->mxemp_emp_id,
                    "employee Name" =>$val->mxemp_emp_fname.' '.$val->mxemp_emp_lname,
                    "company name" =>$val->mxcp_name,
                    "division name" =>$val->mxd_name,
                    "state name" =>$val->mxst_state,
                    "branch name" =>$val->mxb_name,
                    "designation name" =>$val->mxdesg_name,
                    "department name" =>$val->mxdpt_name,
                    "grade name"=>$val->mxgrd_name,
                    "date of join"=>$val->mxemp_emp_date_of_join,
                    "blood group"=>$val->mxemp_emp_bloodgroup,
                    "phone no"=>$val->mxemp_emp_phone_no,
                    "email"=>$val->mxemp_emp_email_id,
                    "date of birth"=>$val->mxemp_emp_date_of_birth,
                    "age" => $agewithdays,
                    "address"=>$val->mxemp_emp_present_address1,
                    "status"=>$restatus,
                    );
            array_push($retrunarray,$buldarray);
            }elseif($age['years'] >= '58'){
                $agewithdays = $age['years'].' Years '.$age['months'].' Months '. $age['days'].' Days';
                $buldarray = array(
                    "employee code" =>$val->mxemp_emp_id,
                    "employee Name" =>$val->mxemp_emp_fname.' '.$val->mxemp_emp_lname,
                    "company name" =>$val->mxcp_name,
                    "division name" =>$val->mxd_name,
                    "state name" =>$val->mxst_state,
                    "branch name" =>$val->mxb_name,
                    "designation name" =>$val->mxdesg_name,
                    "department name" =>$val->mxdpt_name,
                    "grade name"=>$val->mxgrd_name,
                    "date of join"=>$val->mxemp_emp_date_of_join,
                    "blood group"=>$val->mxemp_emp_bloodgroup,
                    "phone no"=>$val->mxemp_emp_phone_no,
                    "email"=>$val->mxemp_emp_email_id,
                    "date of birth"=>$val->mxemp_emp_date_of_birth,
                    "age" => $agewithdays,
                    "address"=>$val->mxemp_emp_present_address1,
                    "status"=>$restatus,
                    );
             array_push($retrunarray,$buldarray);   
            }
        }
        return $retrunarray;
        
    } 
    
    
    public function employeeservicehistory($data){
        $regarr=array('W'=>'Working','R'=>'Resigned','N'=>'Notice');
        $this->db->select('mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,mxemp_emp_dept_code,mxemp_emp_grade_code,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,
                           mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,
                           mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,mxemp_emp_present_address2,mxemp_emp_present_city,
                           mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state,mxemp_emp_fixed_country,
                           mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,
                           mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,mxemp_emp_resignation_status,mxemp_emp_resignation_reason,
                           mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,
                           mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,empmaritaldate,mxemp_emp_is_without_notice_period,
                           mxemp_emp_unpay_sal_months,mxemp_emp_joiningorgination,mxemp_emp_joiningorginationofferpackage,mxemp_emp_joiningorginationdesignation,mxemp_emp_resignationletter,mxemp_emp_employee_lic_no,mxemp_emp_gratuity,
                           mxemp_emp_esiimage,mxemp_emp_resignation_status');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
       // $this->db->where("mxemp_emp_resignation_status != 'R'");
        if (!empty($data['companyid'])) {
            $this->db->where('mxemp_emp_comp_code', $data['companyid']);
        }
        if (!empty($data['divisionid'])) {
            $this->db->where('mxemp_emp_division_code', $data['divisionid']);
        }
        if (!empty($data['branchid'])) {
            $this->db->where('mxemp_emp_branch_code', $data['branchid']);
        }
        if (!empty($data['employeeid'])) {
            $this->db->where('mxemp_emp_id', $data['employeeid']);
        }
        if (!empty($data['stateid'])) {
            $this->db->where('mxemp_emp_state_code', $data['stateid']);
        }
        
        $query = $this->db->get();
        $qr = $query->result();
        #echo $this->db->last_query(); exit;
        $retrunarray = array();
        foreach($qr as $key => $val){
            if(array_key_exists($val->mxemp_emp_resignation_status,$regarr) ) {
                $restatus=$regarr[$val->mxemp_emp_resignation_status];
            }
                $age = $this->getages($val->mxemp_emp_date_of_join,$val->mxemp_emp_resignation_relieving_date);
                $agewithdays = $age['years'].' Years '.$age['months'].' Months '. $age['days'].' Days';
                $buldarray = array(
                    "employee code" =>$val->mxemp_emp_id,
                    "employee Name" =>$val->mxemp_emp_fname.' '.$val->mxemp_emp_lname,
                    "company name" =>$val->mxcp_name,
                    "division name" =>$val->mxd_name,
                    "state name" =>$val->mxst_state,
                    "branch name" =>$val->mxb_name,
                    "designation name" =>$val->mxdesg_name,
                    "department name" =>$val->mxdpt_name,
                    "grade name"=>$val->mxgrd_name,
                    "date of join"=>$val->mxemp_emp_date_of_join,
                    "blood group"=>$val->mxemp_emp_bloodgroup,
                    "phone no"=>$val->mxemp_emp_phone_no,
                    "email"=>$val->mxemp_emp_email_id,
                    "date of birth"=>$val->mxemp_emp_date_of_birth,
                    "service" => $agewithdays,
                    "address"=>$val->mxemp_emp_present_address1,
                    "status"=>$restatus,          // $val->mxemp_emp_resignation_status,
                    );
             array_push($retrunarray,$buldarray);   
        }
        return $retrunarray;    
    }
    
    public function employeeage($data){
            $regarr=array('W'=>'Working','R'=>'Resigned','N'=>'Notice');
        $this->db->select('mxemp_emp_date_of_join,mxemp_emp_comp_code,mxemp_emp_division_code,mxemp_emp_branch_code,mxemp_emp_sub_branch_code,mxemp_emp_dept_code,mxemp_emp_grade_code,mxemp_emp_desg_code,mxemp_emp_state_code,mxemp_emp_type,
                           mxemp_emp_type_name,mxemp_emp_id,mxemp_emp_fname,mxemp_emp_lname,mxemp_emp_img,mxemp_emp_gender,mxemp_emp_marital_status,mxemp_emp_bloodgroup,mxemp_emp_phone_no,mxemp_emp_alt_phn_no,mxemp_emp_email_id,
                           mxemp_emp_date_of_birth,mxemp_emp_mother_tongue,mxemp_emp_caste,mxemp_emp_age,mxemp_emp_empguarantorsdetails,mxemp_emp_license,mxemp_emp_present_address1,mxemp_emp_present_address2,mxemp_emp_present_city,
                           mxemp_emp_present_state,mxemp_emp_present_country,mxemp_emp_present_postalcode,mxemp_emp_fixed_address1,mxemp_emp_fixed_address2,mxemp_emp_fixed_city,mxemp_emp_fixed_state,mxemp_emp_fixed_country,
                           mxemp_emp_fixed_postalcode,mxemp_emp_current_salary,mxemp_emp_bank_name,mxemp_emp_bank_branch_name,mxemp_emp_bank_acc_no,mxemp_emp_bank_ifsci_no,mxemp_emp_panno,mxemp_emp_esi_number,mxemp_emp_pf_number,
                           mxemp_emp_uan_number,mxemp_emp_status,mxcp_name,mxdesg_name,mxdpt_name,mxd_name,mxb_name,mxgrd_name,mxemp_emp_having_vehicle,mxemp_emp_vehicle_type,mxemp_emp_resignation_status,mxemp_emp_resignation_reason,
                           mxemp_emp_resignation_date,mxemp_emp_resignation_relieving_date,mxemp_emp_resignation_relieving_settlement_date,mxemp_emp_resignation_relieving_settlement_amount,mxemp_emp_resignation_relieving_esi_settlement_date,
                           mxemp_emp_resignation_relieving_pf_settlement_date,mxemp_emp_panimage,mxemp_emp_aadhar,mxemp_emp_aadharimage,mxst_state,mxemp_ty_name,mxemp_emp_guarantors_letter,empmaritaldate,mxemp_emp_is_without_notice_period,
                           mxemp_emp_unpay_sal_months,mxemp_emp_joiningorgination,mxemp_emp_joiningorginationofferpackage,mxemp_emp_joiningorginationdesignation,mxemp_emp_resignationletter,mxemp_emp_employee_lic_no,mxemp_emp_gratuity,
                           mxemp_emp_esiimage,mxemp_emp_resignation_status');
        $this->db->from('maxwell_employees_info');
        $this->db->join('maxwell_company_master', 'mxcp_id = mxemp_emp_comp_code', 'INNER');
        $this->db->join('maxwell_designation_master', 'mxdesg_id = mxemp_emp_desg_code', 'INNER');
        $this->db->join('maxwell_department_master', 'mxdpt_id = mxemp_emp_dept_code', 'INNER');
        $this->db->join('maxwell_division_master', 'mxd_id = mxemp_emp_division_code', 'INNER');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->join('maxwell_grade_master', 'mxgrd_id = mxemp_emp_grade_code', 'INNER');
        $this->db->join('maxwell_state_master', 'mxst_id = mxemp_emp_state_code', 'INNER');
        $this->db->join('maxwell_employee_type_master', 'mxemp_ty_id = mxemp_emp_type', 'INNER');
       // $this->db->where("mxemp_emp_resignation_status != 'R'");
        if (!empty($data['companyid'])) {
            $this->db->where('mxemp_emp_comp_code', $data['companyid']);
        }
        if (!empty($data['divisionid'])) {
            $this->db->where('mxemp_emp_division_code', $data['divisionid']);
        }
        if (!empty($data['branchid'])) {
            $this->db->where('mxemp_emp_branch_code', $data['branchid']);
        }
        if (!empty($data['employeeid'])) {
            $this->db->where('mxemp_emp_id', $data['employeeid']);
        }
        if (!empty($data['stateid'])) {
            $this->db->where('mxemp_emp_state_code', $data['stateid']);
        }
        
        $query = $this->db->get();
        $qr = $query->result();
        #echo $this->db->last_query(); exit;
        $retrunarray = array();
        foreach($qr as $key => $val){
            if(array_key_exists($val->mxemp_emp_resignation_status,$regarr) ) {
                $restatus=$regarr[$val->mxemp_emp_resignation_status];
            }
                $age = $this->getages($val->mxemp_emp_date_of_birth);
                $agewithdays = $age['years'].' Years '.$age['months'].' Months '. $age['days'].' Days';
                $buldarray = array(
                    "employee code" =>$val->mxemp_emp_id,
                    "employee Name" =>$val->mxemp_emp_fname.' '.$val->mxemp_emp_lname,
                    "company name" =>$val->mxcp_name,
                    "division name" =>$val->mxd_name,
                    "state name" =>$val->mxst_state,
                    "branch name" =>$val->mxb_name,
                    "designation name" =>$val->mxdesg_name,
                    "department name" =>$val->mxdpt_name,
                    "grade name"=>$val->mxgrd_name,
                    "date of join"=>$val->mxemp_emp_date_of_join,
                    "blood group"=>$val->mxemp_emp_bloodgroup,
                    "phone no"=>$val->mxemp_emp_phone_no,
                    "email"=>$val->mxemp_emp_email_id,
                    "date of birth"=>$val->mxemp_emp_date_of_birth,
                    "age" => $agewithdays,
                    "address"=>$val->mxemp_emp_present_address1,
                    "status"=>$restatus,          // $val->mxemp_emp_resignation_status,
                    );
             array_push($retrunarray,$buldarray);   
        }
        return $retrunarray;    
    }

    
    
    public function getages($empdob,$relivingdt = null){
    date_default_timezone_set("Asia/Calcutta");
        
    if($relivingdt != '0000-00-00 00:00:00' && $relivingdt !=''){
        $relivingdate = date('d-m-Y', strtotime($relivingdt));
    }
    else{
        $relivingdate = date('d-m-Y');
    }
    
    
    $date1 = $empdob;
    $dob=$day.'-'.$month.'-'.$year;
    $dob = date('d-m-Y', strtotime($date1));
    
    // $age=$bday->diff(new DateTime);
    
    $bday=new DateTime($dob);
    $relivingdate = new DateTime($relivingdate);
    $age=$bday->diff($relivingdate);

    //  $today=date('d-m-Y'); 
   
     return $re = array("years" => $age->y,"months" => $age->m,"days" => $age->d);
    }
    
    // ----------------------  Added on 09-10-2022 ------------------
    
    public function yearlyleave_list($datas)
    {
        $data = [];
        $year = $datas['monthyear'];
        $condarry =array('mxlass_leave_type_id'=>1,'mxemp_leave_cron_processdate'=>$year,'mxemp_leave_cron_leavetype'=>1);
        $this->db->select("
        distinct(mxemp_emp_id) as emp_code ,CONCAT( mxemp_emp_fname,' ',mxemp_emp_lname) as Name,mxemp_emp_resignation_status_future_referance,
                           mxb_name,mxemp_emp_type,mxemp_emp_current_salary,mxemp_leave_cron_previous_bal,mxemp_leave_cron_crnt_bal,
                           mxemp_leave_cron_leavetype,mxlass_is_carry_forward_month,mxlass_is_carry_forward_year,mxlass_max_leaves_carry_forward");
        $this->db->from("maxwell_employees_info");
        $this->db->join('maxwell_leave_assigning_master', 'mxlass_emp_type_id = mxemp_emp_type', 'INNER');
        $this->db->join('maxwell_emp_leave_cron_history','mxemp_leave_cron_emp_id=mxemp_emp_id','inner');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'inner');
        $this->db->join('maxwell_attendance_'.$year.'_03','mx_attendance_emp_code =  mxemp_emp_id','inner');
        $this->db->where($condarry);
        if (!empty($datas['employeeid'])) {
            $this->db->where('mxemp_emp_id', $datas['employeeid']);
        }
        if (!empty($datas['companyid'])) {
            $this->db->where('mxemp_emp_comp_code', $datas['companyid']);
        }
        if (!empty($datas['divisonid'])) {
            $this->db->where('mxemp_emp_division_code', $datas['divisonid']);
        }
        if (!empty($datas['stateid'])) {
            $this->db->where('mxemp_emp_state_code', $datas['stateid']);
        }
        if (!empty($datas['branchid'])) {
            $this->db->where('mxemp_emp_branch_code', $datas['branchid']);
        }
        $this->db->order_by('mxemp_emp_id');
        $query = $this->db->get();
        $data1['employee_attendance_history']=$query->result();
        $saldays=30;
        $sno=0;
        foreach($data1['employee_attendance_history'] as $cykey=>$cyear){
           $sno++;
           $data['leave_encashment'][$cykey]['Slno']=$sno;
           $sal = ($cyear->mxemp_emp_current_salary)/$saldays;
           if($cyear->mxemp_emp_resignation_status_future_referance != 'W'){
                $data['leave_encashment'][$cykey]['Status']='LEFT';
           }else{
                $data['leave_encashment'][$cykey]['Status']='ACTIVE';
           }
           $basicSalary = 0;
           $basicSalary = ($cyear->mxemp_emp_current_salary * 42) / 100;
           $data['leave_encashment'][$cykey]['emp_code']=$cyear->emp_code;
           $data['leave_encashment'][$cykey]['name']=$cyear->Name;
           $data['leave_encashment'][$cykey]['branch']=$cyear->mxb_name;
           $data['leave_encashment'][$cykey]['el_balance_31-03-'.$year]=$cyear->mxemp_leave_cron_previous_bal;
           $data['leave_encashment'][$cykey]['el_balance_cf']=$cyear->mxlass_max_leaves_carry_forward;

            if($cyear->mxlass_is_carry_forward_year == 1 ){
                if( $cyear->mxemp_leave_cron_previous_bal > $cyear->mxlass_max_leaves_carry_forward ){
                    $carryfwdminus = $cyear->mxemp_leave_cron_previous_bal - $cyear->mxlass_max_leaves_carry_forward;
                    $data['leave_encashment'][$cykey]['leave_encashment_days']=$carryfwdminus;  
                    // $data['leave_encashment'][$cykey]['basic_salary']=$cyear->mxemp_emp_current_salary;
                    $data['leave_encashment'][$cykey]['gross_salary']=$cyear->mxemp_emp_current_salary;
                    $data['leave_encashment'][$cykey]['basic_salary']=$basicSalary;
                    // $data['leave_encashment'][$cykey]['leave_encashment_amount']=intval(round(($sal)*($carryfwdminus)));
                    
                    $salb = ($basicSalary)/$saldays;
                    $data['leave_encashment'][$cykey]['leave_encashment_amount']=intval(round(($salb)*($carryfwdminus)));
                    $data['leave_encashment'][$cykey]['leave_amount_carry_forward']=intval(round(($salb)*($cyear->mxlass_max_leaves_carry_forward)));
                    // $data['leave_encashment'][$cykey]['leave_amount_carry_forward']=0.00;
                }else{
                    $data['leave_encashment'][$cykey]['leave_encashment_days']=0.0;  
                    // $data['leave_encashment'][$cykey]['basic_salary']=$cyear->mxemp_emp_current_salary;
                    $data['leave_encashment'][$cykey]['gross_salary']=$cyear->mxemp_emp_current_salary;
                    $data['leave_encashment'][$cykey]['basic_salary']=$basicSalary;
                    $data['leave_encashment'][$cykey]['leave_encashment_amount']=0.00;
                    $salb = ($basicSalary)/$saldays;
                    $data['leave_encashment'][$cykey]['leave_amount_carry_forward']=intval(round(($salb)*($cyear->mxemp_leave_cron_previous_bal)));
                }
            }else{
                $data['leave_encashment'][$cykey]['leave_encashment_days']=0.0;
                // $data['leave_encashment'][$cykey]['basic_salary']=$cyear->mxemp_emp_current_salary;
                $data['leave_encashment'][$cykey]['gross_salary']=$cyear->mxemp_emp_current_salary;
                $data['leave_encashment'][$cykey]['basic_salary']=$basicSalary;
                $data['leave_encashment'][$cykey]['leave_encashment_amount']=0.00;
                $data['leave_encashment'][$cykey]['leave_amount_carry_forward']=0.00;
            }
            if($cyear->mxemp_emp_resignation_status_future_referance != 'W'){
                $data['leave_encashment'][$cykey]['signature_of_emp']='paid on';
            }else{
                $data['leave_encashment'][$cykey]['signature_of_emp']='';
            }
        } 

        if(count($data1)>0){
            $message="Success";
            $statuscode="200";
            $data['status']=$statuscode;
            $data['msg']=$message;
            $data['description']='';
            return $data;
        }else{
            $message="Failed";
            $statuscode="500";
            $desc = "No Data Exist";
            $data['status']=$statuscode;
            $data['msg']=$message;
            $data['description']=$desc;
            return $data;
        }
    }
    
    // --------------------  end added on 09-10-2022 ------------------
    
    //  ================  added on 24-10-2022 -------------------
    
    public function staff($data){

        $this->db->distinct('mxemp_emp_branch_code');
        $this->db->select('count(mxemp_emp_branch_code),mxemp_emp_branch_code,mxb_name');
        $this->db->join('maxwell_branch_master', 'mxb_id = mxemp_emp_branch_code', 'INNER');
        $this->db->from('maxwell_employees_info');
        if($data['esi_branch_id'] !=0 ){
            $this->db->where('mxemp_emp_branch_code', $data['esi_branch_id']);
        }
        $this->db->group_by('mxemp_emp_branch_code');
        $qry = $this->db->get();
        return $qry->result();
    }
    
    public function divisionname($id){
            $this->db->select('mxd_name');
            $this->db->from('maxwell_division_master');
            $this->db->where('mxd_id',$id);
            $qry = $this->db->get();
            $dn= $qry->result();
        return $dn[0]->mxd_name;
    }
    
    public function statename($id){
            $this->db->select('mxst_state');
            $this->db->from('maxwell_state_master');
            $this->db->where('mxst_id',$id);
            $qry = $this->db->get();
            $dn= $qry->result();
        return $dn[0]->mxst_state;
    }
    
    public function getpopupinfo($data){
        $etd = explode('[#-#]',$data['empid']);
        $employeeid = $etd[0];
        $date = $etd[1];
        $table = 'employee_punches_'.date('Y',strtotime($etd[1]));
        $this->db->select('employee_code as employee_code, attendance_date, attendance_time as punch_time,entry_type,latitudes,longitudes,location,createdtime as registertime,islocation');
        $this->db->from($table);
        $this->db->where('employee_code', $employeeid);
         $this->db->where('attendance_date', $date);
        $qry = $this->db->get();
        return $qry->result_array();
    }
        
} ?>
<?php

error_reporting(0);
defined('BASEPATH') or exit('No Direct Script Acesses Allowed');

class Common_model extends CI_Model
{

    protected $imglink = 'uploads/';

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getcountsstrips($data){
        $qlo = "SELECT 'Originations' AS Category, COUNT(*) AS Count 
            FROM Originations 
            WHERE OriginationStatus = 1
            UNION ALL
            SELECT 'Auditors' AS Category, COUNT(*) AS Count 
            FROM ClientAuditor 
            WHERE ClientAuditorStatus = 1
            UNION ALL
            SELECT 'Users' AS Category, COUNT(*) AS Count 
            FROM Users 
            WHERE UserStatus = 1
            UNION ALL
            SELECT 'Tasks' AS Category, COUNT(*) AS Count 
            FROM Tasks";
        $querylo = $this->db->query($qlo);
        return $querylo->result_array();
    }

    public function gettasksstatus($data){
        $qlo = "SELECT 
                -- Task counts based on status
                SUM(CASE WHEN TaskWorkStatus = 1 THEN 1 ELSE 0 END) AS PendingCount,
                SUM(CASE WHEN TaskWorkStatus = 2 THEN 1 ELSE 0 END) AS ApprovedCount,
                SUM(CASE WHEN TaskWorkStatus = 3 THEN 1 ELSE 0 END) AS RejectedCount,
                SUM(CASE WHEN TaskWorkStatus = 4 THEN 1 ELSE 0 END) AS HoldCount,
                SUM(CASE WHEN TaskWorkStatus = 5 THEN 1 ELSE 0 END) AS CancelledCount,
                
                -- Government fees based on status
                SUM(CASE WHEN TaskWorkStatus = 1 THEN TaskGovernmentFee ELSE 0 END) AS PendingGovernmentFee,
                SUM(CASE WHEN TaskWorkStatus = 2 THEN TaskGovernmentFee ELSE 0 END) AS ApprovedGovernmentFee,
                SUM(CASE WHEN TaskWorkStatus = 3 THEN TaskGovernmentFee ELSE 0 END) AS RejectedGovernmentFee,
                SUM(CASE WHEN TaskWorkStatus = 4 THEN TaskGovernmentFee ELSE 0 END) AS HoldGovernmentFee,
                SUM(CASE WHEN TaskWorkStatus = 5 THEN TaskGovernmentFee ELSE 0 END) AS CancelledGovernmentFee,
                
                -- Company fees based on status
                SUM(CASE WHEN TaskWorkStatus = 1 THEN TaskCompanyFee ELSE 0 END) AS PendingCompanyFee,
                SUM(CASE WHEN TaskWorkStatus = 2 THEN TaskCompanyFee ELSE 0 END) AS ApprovedCompanyFee,
                SUM(CASE WHEN TaskWorkStatus = 3 THEN TaskCompanyFee ELSE 0 END) AS RejectedCompanyFee,
                SUM(CASE WHEN TaskWorkStatus = 4 THEN TaskCompanyFee ELSE 0 END) AS HoldCompanyFee,
                SUM(CASE WHEN TaskWorkStatus = 5 THEN TaskCompanyFee ELSE 0 END) AS CancelledCompanyFee,
                
                -- Overall totals
                COUNT(*) AS TotalTasks,
                SUM(TaskGovernmentFee) AS TotalGovernmentFee,
                SUM(TaskCompanyFee) AS TotalCompanyFee
            FROM Tasks";
        $querylo = $this->db->query($qlo);
        return $querylo->result_array();
    }

    public function getloggedpersonprofile($data){
        if($this->session->userdata('session_types') =='AUDITOR'){
            $this->db->select("ClientAuditorName as name, ClientAuditorEmail as email, ClientAuditorPhone as mobile, 'AUDITOR' as Type");
            $this->db->from("ClientAuditor");
            $this->db->where("ClientAuditorLoginStatus = 1");
            $query = $this->db->get();
        }else if($this->session->userdata('session_types') =='USER'){
            $this->db->select("UserName as name, UserEmail as email, UserPhone as mobile, 'USER' as Type");
            $this->db->from("Users");
            $this->db->where("UserLoginStatus = 1");
            $query = $this->db->get();
        }else{
            $this->db->select("ConfigName as name, ConfigEmail as email,'' as mobile, 'ADMIN' as Type");
            $this->db->from("Config");
            $this->db->where("ConfigLoginStatus = 1");
            $query = $this->db->get();
        }
        $qry = $query->result_array();
        return $qry;
    }

    public function getcountry_data($fieldname){
        $company_id = $this->session->userdata('user_company');
        $this->db->select('*');
        $this->db->from('country_master');
        // $this->db->where('comapny_reg_id',$company_id);
        $this->db->where('is_active','1');
        $this->db->Order_by('country_name');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }

    public function getemployee_data($fieldname){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $this->db->select('ws.id,ws.employee_name');
        $this->db->join('assigned_projects as asp', 'ws.id = asp.project_employee_id', 'INNER');
        $this->db->from('work_users as ws');
        $this->db->where('ws.work_company',$company_id);
        $this->db->where('ws.employee_status','1');
        $this->db->where('asp.project_id',$projectid);
        $this->db->Order_by('ws.employee_name');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }

    public function projects_dropdown($fieldname){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $this->db->select('project_name,id');
        $this->db->from('projects');
        $this->db->where('project_company_id',$company_id);
        $this->db->where('id',$projectid);
        $this->db->where('project_status','1');
        $this->db->Order_by('project_name');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }
   
    public function category_dropdown($fieldname){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $this->db->select('cat_name,id');
        $this->db->from('module');
        $this->db->where('cat_company_id',$company_id);
        $this->db->where('cat_project_id',$projectid);
        $this->db->where('cat_status','1');
        $this->db->Order_by('cat_name');
        $query = $this->db->get();
        $qury = $query->result();
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

    public function getlogincompany($fieldname){
        $this->db->select('comapny_reg_id,company_reg_name,company_reg_img');
        $this->db->from('work_company');
        $this->db->where('company_reg_status','1');
        $this->db->Order_by('company_reg_name');
        $query = $this->db->get();
        $qury = $query->result();
        return $qury;
    }

    public function getcompanyandprojectwisedashboard($fieldname){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $this->db->select('dash_processid,dash_shortname');
        $this->db->from('work_company_wise_dashboard');
        $this->db->where('dash_status = 1');
        $this->db->where('dash_company_id',$company_id);
        $this->db->where('dash_project_id',$projectid);
        $this->db->order_by('dash_order', 'asc');
        $query1 = $this->db->get();
        // echo $this->db->last_query();
        $count1= count($query1->row());
        return $qry1 = $query1->result(); 
    }

    public function mentionsemails(){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $emails = array();
        $this->db->select('ws.id,ws.employee_img,ws.employee_email,ws.employee_name');
        $this->db->join('assigned_projects as asp', 'ws.id = asp.project_employee_id', 'INNER');
        $this->db->from('work_users as ws');
        $this->db->where('ws.employee_status = 1');
        $this->db->where('ws.work_company',$company_id);
        $this->db->where('asp.project_company_id',$company_id);
        $this->db->where('asp.project_id',$projectid);
        $this->db->order_by('ws.employee_name', 'asc');
        $query1 = $this->db->get();
        $qry1 = $query1->result();
        foreach ($qry1 as $key => $value) {
            $push = array(
                "id" => $value->id,
                "avatar" => base_url().$value->employee_img,
                "email" => $value->employee_email,
                "username" => $value->employee_name,
            );
            array_push($emails, $push);
        }
        return json_encode($emails);
    }

    public function getdashboardtickets($ticketstatus,$employeeid){
        $company_id = $this->session->userdata('user_company');
        $projectid = $this->session->userdata('user_selected_project');
        $this->db->select('ws.id,wt.Ticketid,wt.work_title,wt.work_tag,wt.work_priority,wt.work_category,wt.work_description,wt.work_current_status,ws.employee_name,wt.createdtime,wt.work_id,wt.work_employeeid,ws.employee_img,wt.work_type,wt.work_projects,wt.work_end_date');
        $this->db->join('work_users as ws', 'ws.id = wt.work_employeeid', 'INNER');
        $this->db->from('work_tickets as wt');
        $this->db->where('wt.work_status = 1');
        $this->db->where('wt.work_isdashboard = 1');
        $this->db->where('wt.work_employeeid',$employeeid);
        $this->db->where('wt.work_company_id',$company_id);
        $this->db->where('wt.work_projects',$projectid);
        $this->db->where('wt.work_current_status',$ticketstatus);
        $this->db->where('wt.work_start_date <=', DBD);
        $query2 = $this->db->get();
        // echo $this->db->last_query();
        $count2= count($query2->row());
        return $qry2 = $query2->result();
    }

    public function getemailconfig(){
        $this->db->select('*');
        $this->db->from('MailSettings');
        $query = $this->db->get();
        return $qry = $query->result();
    }

    public function mail_log($data,$response){
        $inarray = array(
            'email_type' => $data['type'],
            'email_sent' => json_encode($data),
            'email_response' => $response,
            'createdby' => $this->session->userdata('user_name'),
            'createdtime' => DBDT,
            'createdempid' => $this->session->userdata('user_unique_id'),
            'created_ip' => IP,
        );
        $this->db->insert('work_email_sent_log', $inarray);
    }

    public function work_ticket_mails_logs($id){
        $uparray = array('mail_status' => '0','modifyby' => 'CRON', 'modifiedtime' =>DBDT, 'modified_ip' => IP);
        $this->db->where('id', $id);
        $this->db->update('work_ticket_mails', $uparray);
    }
   
}
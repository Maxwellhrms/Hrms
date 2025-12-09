<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Common.php';
class Performanceappraisal extends Common {

    public function __construct() {
        parent::__construct();
        $this->load->model('Performanceappraisalmodel');
    }

    public function verifylogin(){
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url() . 'admin/logout');
            die();
        }
    }

    public function performanceappraisal(){
        $this->verifylogin();
        $this->header();
        $data['depart'] = $this->Performanceappraisalmodel->departmentmaster();
        #$data['design'] = $this->Performanceappraisalmodel->designationmaster();
        $this->load->view('appraisal/performanceappraisal',$data);
        $this->footer();
    }

    public function fileterthedata(){
        $userdata = $this->input->post();
        $data['alldata'] = $this->Performanceappraisalmodel->getalluploadedfiles($userdata);
        $this->load->view('appraisal/performanceappraisalfilterdata',$data);
    }

    public function saveappraisal(){
        $userdata = $this->input->post();
        if (!is_uploaded_file($_FILES["fileupload"]["tmp_name"])) {
            echo '404'; exit;
        }
        $res = $this->Performanceappraisalmodel->saveappraisal($userdata);
        if($res == 1){
            echo '200'; exit();
        }else{
            echo '500'; exit();
        }
    }
    
    public function deletefiles(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->deletefiles($userdata);
        if($res == 1){
            echo '200'; exit();
        }else{
            echo '500'; exit();
        }  
    }

    public function appraisal_questions(){
        $this->verifylogin();
        $this->header();
        $data['depart'] = $this->Performanceappraisalmodel->departmentmaster();
        $data['catg'] = array("1" => "KRA","2" => "KEY COMPENTENCIES",);
        $this->load->view('appraisal/appraisalquestions',$data);
        $this->footer();   
    }

    public function savequestion(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savequestion($userdata);
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function filterappraisalquestion(){
        $userdata = $this->input->post();
        $dd = $this->Performanceappraisalmodel->filterappraisalquestion($userdata);
        if($dd > 0){
            $sno = 1; foreach ($dd as $key => $value) {
                $id = $value['mxap_id'];
            $table = "<tr>";
            $table .= "<td style='width:40px;'>".$sno."</td>";
            $table .= "<td>".$value['mxap_question']."</td>";
            $table .= "<td  style='width: 64px;'><button type='button' class='btn btn-danger' onclick=deleteque($id)><i class='fa fa-trash-o'></i></button></td>";
            $table .= "</tr>";
            echo $table;
            $sno++; }
        }
    }

    public function updateappraisalquestion(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->updateappraisalquestion($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function appraisal_questions_assign(){
        $this->verifylogin();
        $this->header();
        $data['depart'] = $this->Performanceappraisalmodel->departmentmaster();
        $data['catg'] = array("1" => "KRA","2" => "KEY COMPENTENCIES",);
        $this->load->view('appraisal/appraisalquestions_assign_to_employee',$data);
        $this->footer();   
    }

    public function filterappraisalquestion_details(){
        $kc = array("0"=>"Select","1" => "Excellent","2" => "Very Good","3" => "Good","4" => "Need Improvement", "5" => "Unsatisfactory");
        $userdata = $this->input->post();
        $dd = $this->Performanceappraisalmodel->filterappraisalquestion($userdata);
        $assigned = $this->Performanceappraisalmodel->getassignquestionlist($userdata);

        if(count($assigned) > 0){
            $checktable = "<tr>";
            $checktable .= "<td></td>";
            $checktable .= "<td>Data</td>";
            $checktable .= "<td>Already</td>";
            $checktable .= "<td>There</td>";
            foreach($assigned as $key => $vals){
            $mydate = str_replace("_","-",$vals);
                $checktable .= "<td>".$month = date("Y F",strtotime($mydate))."</td>";
            }
            $checktable .= "</tr>";
            echo $checktable;
            exit;
        }

        if($dd > 0){
            $sno = 1; foreach ($dd as $key => $value) {
            $id = $value['mxap_id'];
            $objective = $value['mxap_assign_objective'];
            $table = "<tr>";
            $table .= "<input type='hidden' name='question_id[]' class='form-control' value='$id'>";
            $table .= "<td>".$sno."</td>";
            $table .= "<td>".$value['mxap_question']."</td>";
            $table .= "<td><input type='text' name='question_objective[]' class='form-control' value='$objective'></td>";
            $table .= "<td><select name='question_assign[]' class='form-control'><option value='0'>NO</option><option value='1'>YES</option></select></td>";
            $table .= "<td><input type='text' name='question_unit_measure[]' class='form-control'></td>";
            $table .= "<td><input type='text' name='question_weightage_measure[]' class='form-control'></td>";
            $start = $month = strtotime(date('Y').'-04-01');
            $end = strtotime((date('Y')+1).'-04-01');
            while($month < $end){
                 //echo date('F Y', $month), PHP_EOL; echo '<br>';
                 $yearmonth = date('Y_m', $month);
                 $assignym = $yearmonth .'[]';
                 if($userdata['quecategory'] == 1){
                    $table .= "<td><input type='text' name='$assignym' class='form-control'></td>";
                 }else{
                    $table .= "<td><select name='$assignym' class='form-control'>";
                        foreach($kc as $kckey => $kcval){
                        $table .= "<option value='$kckey'>$kcval</option>";
                        }
                    $table .="</select></td>";
                 }
                 $month = strtotime("+1 month", $month);
            }
            
            // $table .= "<th><input type='text' name='question_accounts_target[]' class='form-control' value='$accounttarget' ></th>";
            // $table .= "<th><button type='button' class='btn btn-danger' onclick=deleteque($id)><i class='fa fa-trash-o'></i></button></th>";
            $table .= "</tr>";
            echo $table;
            $sno++; }
        }
    }

    public function getappremployeeslist(){
        $userdata = $this->input->post();
        $employees = $this->Performanceappraisalmodel->getappremployeeslist($userdata); 
        $sel = "<option value=''>Select Employees</option>";
        if(count($employees) > 0){
            foreach($employees as $key => $emp){
            $sel .= "<option value='".$emp['mxemp_emp_id']."'>".$emp['mxemp_emp_id'].' ( '.$emp['mxemp_emp_fname']. ' ' .$emp['mxemp_emp_lname'].' )'."</option>";
            }
        }
        echo $sel;
    }

    public function saveassignedquestion(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->saveassignedquestion($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function edit_appraisal_questions_assigned(){
        $this->verifylogin();
        $this->header();
        $this;
        $data['depart'] = $this->Performanceappraisalmodel->departmentmaster();
        $data['catg'] = array("1" => "KRA","2" => "KEY COMPENTENCIES",);
        $this->load->view('appraisal/edit_appraisalquestions_assigned_to_employee',$data);
        $this->footer();   
    }


    public function editfilterappraisalquestion_details(){
        $kc = array("0"=>"Select","1" => "Excellent","2" => "Very Good","3" => "Good","4" => "Need Improvement", "5" => "Unsatisfactory");
        $userdata = $this->input->post();
        $assigned = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'0');
        if(count($assigned) > 0){
            $sno = 1; foreach ($assigned as $key => $value) {
            $id = $value['mxap_assign_id'];
            $unitmeasure = $value['mxap_assign_unitmeasure'];
            $weightmeasure = $value['mxap_assign_weightage'];
            $monthlytarget = $value['mxap_assign_monthlytarget'];
            $objective = $value['mxap_assign_objective'];

            $empnoofaccounts = $value['mxap_assign_emp_noofaccounts'];
            $empclientname = $value['mxap_assign_emp_client_name'];
            $empdesc = $value['mxap_assign_emp_description'];
            $empachivement = $value['mxap_assign_emp_achievement'];

            $managernoofaccounts = $value['mxap_assign_manager_noofaccounts'];
            $managerclientname = $value['mxap_assign_manager_client_name'];
            $managerdesc = $value['mxap_assign_manager_review'];
            $managerachivement = $value['mxap_assign_manager_actual_assesment'];

            $employees = $userdata['employees'];
            $quecategory = $userdata['quecategory'];
            $department = $userdata['department'];
            $year = $userdata['year'];
            $months = $userdata['month'];
            $assignornot = $value['mxap_assign_que_show'];
            
            $assignarray = array("0"=>"NO","1"=>"YES");
            $table = "<tr>";
            $table .= "<input type='hidden' name='question_id[]' class='form-control' value='$id'>";
            $table .= "<td>".$sno."</td>";
            $table .= "<td>".$value['mxap_question']."</td>";
            $table .= "<td><select name='question_assign[]' class='form-control'>";
            foreach($assignarray as $skey => $svals) { 
                if($assignornot == $skey){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
             $table .="<option value='$skey' $sel >$svals</option>";   
            }
            $table .= "</select></td>";
            $table .= "<td><input type='text' name='question_objective[]' class='form-control' value='$objective'></td>";
            $table .= "<td><input type='text' name='question_unit_measure[]' class='form-control' value='$unitmeasure'></td>";
            $table .= "<td><input type='text' name='question_weightage_measure[]' class='form-control' value='$weightmeasure'></td>";
            $start = $month = strtotime(date('Y').'-04-01');
            $end = strtotime((date('Y')+1).'-04-01');
                 if($userdata['quecategory'] == 1){
                    $table .= "<td><input type='text' name='mxap_assign_monthlytarget[]' class='form-control' value='$monthlytarget'></td>";
                 }else{
                    $table .= "<td><select name='mxap_assign_monthlytarget[]' class='form-control'>";
                        foreach($kc as $kckey => $kcval){
                            if($kckey == $monthlytarget){
                                $sel = "selected";
                            }else{
                                $sel = "";
                            }
                        $table .= "<option value='$kckey' $sel>$kcval</option>";
                        }
                    $table .="</select></td>";
                 }
            // $table .= "<td><input type='text' name='noofaccounts[]' class='form-control' value='$empnoofaccounts'></td>";
            // $table .= "<td><input type='text' name='clientname[]' class='form-control' value='$empclientname'></td>";
            // $table .= "<td><input type='text' name='desc[]' class='form-control' value='$empdesc'></td>";
            // $table .= "<td><input type='text' name='empachivement[]' class='form-control' value='$empachivement'></td>";
            // $table .= "<td><input type='text' name='managernoofaccounts[]' class='form-control' value='$managernoofaccounts'></td>";
            // $table .= "<td><input type='text' name='managerclientname[]' class='form-control' value='$managerclientname'></td>";
            // $table .= "<td><input type='text' name='managerdesc[]' class='form-control' value='$managerdesc'></td>";
            // $table .= "<td><input type='text' name='managerachivement[]' class='form-control' value='$managerachivement'></td>";
            // $table .= "<td><a href='#' onclick=getempprofile('$employees','$quecategory','$department','$year','$months') class='btn add-btn' data-toggle='modal' data-target='#add_appraisal'><i class='fa fa-plus'></i> View In Detailed</a></td>";
            // $table .= "<th><button type='button' class='btn btn-danger' onclick=deleteque($id)><i class='fa fa-trash-o'></i></button></th>";
            if($sno == 1){
            $table .= "<td><a href='#' onclick=getempprofile('$employees','$quecategory','$department','$year','$months') class='btn' data-toggle='modal' data-target='#add_appraisal'><i class='fa fa-eye'></i></a></td>";
            }else{
            $table .= "<th></th>";
            }
            $table .= "</tr>";
            echo $table;
            $sno++; }
        }
    }


    public function getassignedandunassignedquestion(){
        $this->header();
        $userdata = $this->input->get();
        $data['allqu'] = $this->Performanceappraisalmodel->getassignedandunassignedquestion($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/assignnewlyaddedquestions',$data);
        $this->footer();
    }

    public function savenewlyaddedquestion(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savenewlyaddedquestion($userdata);
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function getempfulldetails(){
        $userdata = $this->input->post();
        $data['empinfo'] = $this->Performanceappraisalmodel->getempfulldetails($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/fulldetailspopdisplay',$data);
    }


    public function getemployeekradata(){
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/employeekra',$data);
    }


    public function getemployeekpadata(){
        $data['kc'] = array("0"=>"Select","1" => "Excellent","2" => "Very Good","3" => "Good","4" => "Need Improvement", "5" => "Unsatisfactory");
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/employeekpa',$data);
    }


    public function editsaveassignedquestion(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->editsaveassignedquestion($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function saveemployeekra(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->saveemployeekra($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function saveemployeekpa(){
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->saveemployeekpa($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }
// check manager
    public function managerappraisaltoemp(){
        $this->verifylogin();
        $this->header();
        $userdata = $this->input->post();
        $data['managerappraisaltoemp'] = $this->Performanceappraisalmodel->checkismanager($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/manager_appraisal',$data);
        $this->footer();
    }

    public function getmgempfulldetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['empinfo'] = $this->Performanceappraisalmodel->getempfulldetails($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/manager_fulldetailspopdisplay',$data);
    }

    public function getmgemployeekradata(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/manager_employeekra',$data);
    }

    public function getmgemployeekpadata(){
        $this->verifylogin();
        $data['kc'] = array("0"=>"Select","1" => "Excellent","2" => "Very Good","3" => "Good","4" => "Need Improvement", "5" => "Unsatisfactory");
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/manager_employeekpa',$data);
    }
    
    public function savemanagerapprovedkra(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savemanagerapprovedkra($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function savemanagerkpa(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savemanagerkpa($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }
// check manager
    // check hod
    public function hodappraisaltoemp(){
        $this->verifylogin();
        $this->header();
        $userdata = $this->input->post();
        $data['managerappraisaltoemp'] = $this->Performanceappraisalmodel->checkishod($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/hod_appraisal',$data);
        $this->footer();
        // print_r($res);

    }

    public function gethodempfulldetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['empinfo'] = $this->Performanceappraisalmodel->getempfulldetails($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('appraisal/hod_fulldetailspopdisplay',$data);
    }

    public function gethodemployeekradata(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/hod_employeekra',$data);
    }

    public function gethodemployeekpadata(){
        $this->verifylogin();
        $data['kc'] = array("0"=>"Select","1" => "Excellent","2" => "Very Good","3" => "Good","4" => "Need Improvement", "5" => "Unsatisfactory");
        $userdata = $this->input->post();
        $data['assigned'] = $this->Performanceappraisalmodel->geteditassignquestionlist($userdata,'1');
        $data['userdata'] = $this->input->post();
        $this->load->view('appraisal/hod_employeekpa',$data);
    }
    
    public function savehodapprovedkra(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savehodapprovedkra($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }

    public function savehodkpa(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Performanceappraisalmodel->savehodkpa($userdata);   
        if($res == 1){
            echo '200';
        }else{
            echo '400';
        }
    }
// check hod
    public function createappraisaltables(){
        $this->Performanceappraisalmodel->createappraisaltables();   
    }

}

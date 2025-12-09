<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
    }

    public function header($page){
        $data['page'] = $page;
        $data['functionName'] = $this->uri->segment(1);
        $data['parameters'] = $this->uri->segment(2);
        // $data['mentions'] = $this->Common_model->mentionsemails();
        $this->load->view('common/header',$data);
    }

    public function footer($page){
        $data['page'] = $page;
        $this->load->view('common/footer',$data);
    }

    public function settingsmenu(){
        $setupmenu[] = array("icon" => "la la-building","functionaccess"=>"company","displayname"=>"Orginations");
        $setupmenu[] = array("icon" => "la la-users","functionaccess"=>"allclientssetup","displayname"=>"Client Auditor");
        $setupmenu[] = array("icon" => "la la-user","functionaccess"=>"alluserssetup","displayname"=>"User");
        $setupmenu[] = array("icon" => "la la-at","functionaccess"=>"emailsetup","displayname"=>"Email Server Credentials");
        $setupmenu[] = array("icon" => "la la-lock","functionaccess"=>"changepasswordsetup","displayname"=>"Change Password");
        // $setupmenu[] = array("icon" => "la la-key","functionaccess"=>"rolesandpermissions","displayname"=>"Roles & Permissions");
        $data['innermenu'] = $setupmenu;
        $this->load->view('common/settingsmenu',$data);
    }

    public function commonFilters($data = array()){
        $data['selectedFilter'] = $data;
        $this->load->view('common/commonfilters',$data);
    }

    public function countsstrips($data = array()){
        $data['userdata'] = $data;
        $data['stripdata'] = $this->Common_model->getcountsstrips($data);
        $data['taskstatus'] = $this->Common_model->gettasksstatus($data);
        $data['loggedprofile'] = $this->Common_model->getloggedpersonprofile($data);
        $this->load->view('dashboard/countsstrips',$data);
    }

    public function display_options($filedname,$selected = '',$display_name = ''){
        $data = $this->Common_model->options_data($filedname);
        if($display_name != 2){
            $def = '<option value="">Select</option>';
            foreach ($data as $key => $value) {
                if($selected == $value->field_value){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
                $def .= "<option value=".$value->field_value."  ".$sel.">".$value->descr."</option>";
            }
        }elseif($display_name == 2){
            foreach ($data as $key => $value) {
                if($selected == $value->field_value){
                    $def = $value->descr;
                }
            }
        }
        return $def;
    }

    public function project_options($filedname,$selected = '',$display_name = ''){
        $data = $this->Common_model->projects_dropdown($filedname);
        if($display_name != 2){
            $def = '<option value="">Select</option>';
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
                $def .= "<option value=".$value->id."  ".$sel.">".$value->project_name."</option>";
            }
        }elseif($display_name == 2){
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $def = $value->project_name;
                }
            }
        }
        return $def;
    }

    public function getcompanyandprojectwisedashboard($filedname,$selected = '',$display_name = ''){
        $data = $this->Common_model->getcompanyandprojectwisedashboard($filedname);
        if($display_name != 2){
            $def = '<option value="">Select</option>';
            foreach ($data as $key => $value) {
                if($selected == $value->dash_processid){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
                $def .= "<option value=".$value->dash_processid."  ".$sel.">".$value->dash_shortname."</option>";
            }
        }elseif($display_name == 2){
            foreach ($data as $key => $value) {
                if($selected == $value->dash_processid){
                    $def = $value->dash_shortname;
                }
            }
        }
        return $def;
    }

    public function category_options($filedname,$selected = '',$display_name = ''){
        $data = $this->Common_model->category_dropdown($filedname);
        if($display_name != 2){
            $def = '<option value="">Select</option>';
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
                $def .= "<option value=".$value->id."  ".$sel.">".$value->cat_name."</option>";
            }
        }elseif($display_name == 2){
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $def = $value->cat_name;
                }
            }
        }
        return $def;
    }

    public function employees_options($filedname,$selected = '',$display_name = ''){
        $data = $this->Common_model->getemployee_data($filedname);
        if($display_name != 2){
            $def = '<option value="">Select</option>';
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $sel = 'selected';
                }else{
                    $sel = '';
                }
                $def .= "<option value=".$value->id."  ".$sel.">".$value->employee_name."</option>";
            }
        }elseif($display_name == 2){
            foreach ($data as $key => $value) {
                if($selected == $value->id){
                    $def = $value->employee_name;
                }
            }
        }
        return $def;
    }

    public function getdashboardtickets($ticketstatus,$employeeid){
        $data['list'] = $this->Common_model->getdashboardtickets($ticketstatus,$employeeid);
        $data['ticketstatus'] = $ticketstatus;
        $this->load->view('dashboardtickets',$data);
    }
    
    public function PolicyHeader($page){
		$data['page'] = $page;
		$data['functionName'] = $this->uri->segment(1);
		$data['parameters'] = $this->uri->segment(2);
		// $data['mentions'] = $this->Common_model->mentionsemails();
		$this->load->view('common/policy_header',$data);
		//$this->load->view('policy/policy',$data);
	}

	public function PolicyFooter($page){
		$data['page'] = $page;
		$this->load->view('common/footer',$data);
	}

    public function sendmailsharihs($data){
        print_r($data);exit;
        $configinfo = $this->Common_model->getemailconfig();
        if(count($configinfo) <= 0){
            echo 'please check the mail server';exit;
        }
        
        if(count($data['to']) <= 0){
            $recipient_to = array(); 
        }else{
            $recipient_to = $data['to'];
        }

        if(count($data['cc']) <= 0){
           $recipient_cc = array();
        }else{
            $recipient_cc = $data['cc'];
        }

        if(count($data['bcc']) <= 0){
            $recipient_bcc = array(); 
        }else{
            $recipient_bcc = $data['bcc'];
        }

        if(count($data['attachments']) <= 0){
            $att = array(); 
        }else{
            $att = $data['attachments'];
        }

        #$recipient_name = array('Harish Kumar');

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $configinfo[0]->SmtpAuthenticationDomain;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $configinfo[0]->SmtpUser;                     //SMTP username
            $mail->Password   = $configinfo[0]->SmtpPassword;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = $configinfo[0]->SmtpPort;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('developerhkumar@gmail.com', 'Workboard');
            #$mail->addAddress($recipient_to, $recipient_name);     //Add a recipient
            foreach ($recipient_to as $recptokey => $allrecipient) {
                $mail->addAddress($allrecipient);               //Name is optional
            }
            $mail->addReplyTo('developerhkumar@gmail.com', 'Workboard');

            foreach ($recipient_cc as $recpcckey => $ccrecipient) {
                $mail->addCC($ccrecipient);
            }
            foreach ($recipient_bcc as $recpbcckey => $bccrecipient) {
                $mail->addBCC($bccrecipient);
            }

            //Attachments
            foreach ($att as $attkey => $attval) {
               $mail->addAttachment($attval);         //Add attachments
            }
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $data['subject'];
            $mail->Body    = $data['body'];

            $res = $mail->send();
            if($res == 1){
                $this->Common_model->mail_log($data,$res);
                if($data['type'] == 'CRON'){
                    $this->Common_model->work_ticket_mails_logs($data['id']);
                }
            }else{
                $this->Common_model->mail_log($data,$res);
            }
        } catch (Exception $e) {
            $res = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $this->Common_model->mail_log($data,$res);
        }
    }

}

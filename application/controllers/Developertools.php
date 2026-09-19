<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Common.php';
class Developertools extends Common {

    public function __construct() {
        parent::__construct();
        $this->load->model('Developertoolsmodels');
    }

    public function verifylogin(){
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url() . 'admin/logout');
            die();
        }
    }

    public function createmenu(){
        $this->verifylogin();
        $this->header();
        $this->load->view('developertools/create_menus',$data);
        $this->footer();
    }

    public function getmenuslist(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['displaymenulist'] = $this->Developertoolsmodels->getmenus($userdata);
        $menuname=$userdata['menuname'];
        if($userdata['submenu'] == 'Yes'){
            $def = '<option value="">Select Menu</option>';
            foreach ($data['displaymenulist'] as $key => $value) {
                if($menuname == $value->maxgp_id){
                    $def .= "<option value=".$value->maxgp_id." selected>".$value->maxgp_name."</option>";
                }else{

                    $def .= "<option value=".$value->maxgp_id.">".$value->maxgp_name."</option>";
                }
            }
            echo $def;
        }else{
            $data['userdata'] = $userdata;
            $this->load->view('developertools/menulist',$data);
        }
    }

    public function savemenudetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Developertoolsmodels->savemenudetails($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        }
    }

    public function editsavemenudetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Developertoolsmodels->editsavemenudetails($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        }       
    }

    public function createsubmenu(){
        $this->verifylogin();
        $this->header();
        $this->load->view('developertools/create_submenus',$data);
        $this->footer();
    }

    public function getsubmenuslist(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['menutype'] = $userdata['menutype'];
        $data['menuname'] = $userdata['menuname'];
        $data['displaymenulist'] = $this->Developertoolsmodels->getsubmenus($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('developertools/submenulist',$data);
    }

    public function savesubmenudetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Developertoolsmodels->savesubmenudetails($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        }
    }

    public function editsavesubmenudetails(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $res = $this->Developertoolsmodels->editsavesubmenudetails($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        }           
    }
    
    public function employeedetailinfo(){
        $this->verifylogin();
        $this->header();
        $this->load->view('developertools/employeedetailinfo',$data);
        $this->footer();
      
    }
    
    public function employeedetails_list(){
        $userdata = $this->input->post();
        $employeeid = $userdata['empid'];
        $year = $userdata['selyear'];
        $data['respdata'] = $this->Developertoolsmodels->employeedetails_list($employeeid,$year);
        $data['alluserroles'] = $this->Developertoolsmodels->getallroles();
        $data['mobilealluserroles'] = $this->Developertoolsmodels->mobile_getallroles();
        $this->load->view('developertools/employeedetails_list',$data);
    }
    
    public function csvupload(){
        $this->verifylogin();
        $this->header();
        $data['respdata'] = $this->Developertoolsmodels->getprocesscsvupload();
        $this->load->view('developertools/csvupload',$data);
        $this->footer();
    }

    public function processcsvupload(){
        $csv = $_FILES['file']['tmp_name'];
        $handle = fopen($csv,"r");
        $csvdata = array();
        while (($row = fgetcsv($handle, 10000, ",")) != FALSE){
            if(count($row) > 1){ $csvdata[] = $row; }
        }
        fclose($handle);
        array_shift($csvdata);
        $res = $this->Developertoolsmodels->processcsvupload($csvdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        }  
    }
    
    public function deletecsvdata(){
        $userdata = $this->input->post();
        $res = $this->Developertoolsmodels->deletecsvdata($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        } 
    }
    
    public function config(){
        $this->verifylogin();
        $this->header();
        $data['cnf'] = $this->Developertoolsmodels->config_details();
        $this->load->view('developertools/mx_config',$data);
        $this->footer();
    }
    
    public function updateconfig(){
       $this->verifylogin();
       $userdata = $this->input->post();
       $res = $this->Developertoolsmodels->updateconfig($userdata);
        if ($res == 1) {
            echo 200;
            die();
        } else {
            echo 500;
            die();
        } 
    }
    
    public function jsontags(){
        $this->verifylogin();
        $this->header();
        $data['empcode'] = $this->Developertoolsmodels->json_employees_code();
        $this->load->view('developertools/json_tags',$data);
        $this->footer();
    }
    
    public function employee_json_list(){
        $userdata = $this->input->post();
        $data[tags_list] = custom_tags($userdata['empcode'],$desc='',$tagsrender=false);
        $this->load->view('developertools/json_tags_list',$data);
    }
    
    public function cronlogs(){
        $this->verifylogin();
        $this->header();
        $data['filtertype'] = $this->Developertoolsmodels->getdistinctofcrontypes();
        $this->load->view('developertools/cron_log_filters',$data);
        $this->footer();
    }
    
    public function getcronlogslist(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['displaymenulist'] = $this->Developertoolsmodels->getcronslogs($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('developertools/cron_log_lists',$data);
    }
    
    public function getemaillogs(){
        $this->verifylogin();
        $this->header();
        $userdata = $this->input->post();
        $data['showlist'] = $this->Developertoolsmodels->getemaillogs($userdata);
        $data['type'] = $this->Developertoolsmodels->getdistinctemailtypes($userdata);
        $data['userdata'] = $userdata;
        $this->load->view('developertools/email_logs_list',$data);
        $this->footer();
    }
    
    public function getdetailedemaillogs(){
        $this->verifylogin();
        $this->header();
        $userdata = $this->input->get();
        $data['showlist'] = $this->Developertoolsmodels->getemaillogs($userdata);
        $this->load->view('developertools/email_logs_details',$data);
        $this->footer();
    }
    
    public function mobilelogs(){
        $this->verifylogin();
        $this->header();
        $data['controller'] = $this;
        $this->load->view('developertools/cron_mobile_logs',$data);
        $this->footer();
    }
    
    public function getmobilenoteslist(){
        $this->verifylogin();
        $userdata = $this->input->post();
        $data['notes'] = $this->Developertoolsmodels->getmobilenoteslist($userdata);
        $data['getoptions'] = get_options_data('notes');
        $this->load->view('developertools/cron_mobile_logs_list',$data);
    }

    public function dailybackups(){
        $this->header();
        $data['title']= "Daily Backups";
        $data['titlehead']= "Daily Backups report";
        $data['check']="";
        $data['controller'] = $this;
        $this->load->view('dailybackups/dbbackups',$data);
        $this->footer();    
    }
    
    public function dailybackupslist(){
        $userdata = $this->input->post();
        echo $this->Developertoolsmodels->dailybackupslist($userdata);
    }

    public function downloadBackup() {
        $this->load->helper('download');

        $file = basename($this->input->get('file')); // prevent path traversal
        $path = $_SERVER['DOCUMENT_ROOT'] . '/backups/' . $file;

        if (!file_exists($path)) {
            show_404();
        }

        force_download($path, NULL);
    }

    public function getAllCronlist(){
        $this->verifylogin();
        $data['cronslist'] = $this->Developertoolsmodels->get_cron_jobs();
        $this->header();
        $this->load->view('developertools/cronslist',$data);
        $this->footer(); 
    }

    public function companyvalidations(){
        $this->verifylogin();
        $data['leavedetails'] = $this->Developertoolsmodels->getLeaveValidationRules();
        // echo '<pre>'; print_r($data['leavedetails']);exit;
        $this->header();
        $this->load->view('developertools/companyvalidations',$data);
        $this->footer(); 
    }

    public function saveLeaveValidationRules()
{

    $leaveTypes        = $this->input->post('leave_type');
    $fromDays          = $this->input->post('from_days');
    $toDays            = $this->input->post('to_days');
    $allowCombination  = $this->input->post('allow_combination');

    if(empty($leaveTypes)){

        echo json_encode([
            'status'  => false,
            'message' => 'No data received'
        ]);
        exit;
    }

    foreach($leaveTypes as $key => $leaveType){

        $combinationTypes = $this->input->post(
            'allow_combination_type_'.$leaveType
        );

        $data = [

            'leave_type' => $leaveType,

            'from_days' => isset($fromDays[$key])
                ? $fromDays[$key]
                : 0,

            'to_days' => isset($toDays[$key])
                ? $toDays[$key]
                : 0,

            'allow_combination' => isset($allowCombination[$key])
                ? $allowCombination[$key]
                : 0,

            'allow_combination_type' =>
                !empty($combinationTypes)
                ? implode(',', $combinationTypes)
                : NULL,

            'status' => 1

        ];

        $this->Developertoolsmodels->saveLeaveValidationRule($data);

    }

    echo json_encode([
        'status'  => true,
        'message' => 'Leave validation rules saved successfully'
    ]);

}

    public function update_uat_database()
    {
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '512M');

        // =========================================================
        // DATABASE DETAILS
        // =========================================================

        $dbHost     = 'localhost';
        $dbUsername = 'maxwellhrms_uat';
        $dbPassword = 'sairam-143';
        $dbName     = 'maxwellhrms_uat';

        // =========================================================
        // LIVE SERVER BACKUP
        // =========================================================

        $backupFile = '/home/maxwellhrms/public_html/backups/dbbackup_2026-09-19_21-40-01.sql.gz';

        // =========================================================
        // CHECK BACKUP
        // =========================================================

        if (!file_exists($backupFile)) {

            echo json_encode([
                'status'  => false,
                'message' => 'Backup file not found.',
                'backup'  => $backupFile
            ]);

            return;
        }

        // =========================================================
        // CONNECT TO UAT DATABASE
        // =========================================================

        $mysqli = new mysqli(
            $dbHost,
            $dbUsername,
            $dbPassword,
            $dbName
        );

        if ($mysqli->connect_error) {

            echo json_encode([
                'status'  => false,
                'message' => 'Database connection failed.',
                'error'   => $mysqli->connect_error
            ]);

            return;
        }

        $mysqli->set_charset('utf8mb4');

        // =========================================================
        // STEP 1
        // DROP ALL STORED PROCEDURES
        // =========================================================

        $procedureResult = $mysqli->query("
            SELECT ROUTINE_NAME
            FROM information_schema.ROUTINES
            WHERE ROUTINE_SCHEMA = '{$dbName}'
            AND ROUTINE_TYPE = 'PROCEDURE'
        ");

        if ($procedureResult) {

            while ($row = $procedureResult->fetch_assoc()) {

                $procedureName = str_replace(
                    '`',
                    '``',
                    $row['ROUTINE_NAME']
                );

                if (!$mysqli->query(
                    "DROP PROCEDURE IF EXISTS `{$procedureName}`"
                )) {

                    $error = $mysqli->error;

                    $mysqli->close();

                    echo json_encode([
                        'status'  => false,
                        'message' => 'Failed to drop stored procedure.',
                        'procedure' => $procedureName,
                        'error'   => $error
                    ]);

                    return;
                }
            }
        }

        // =========================================================
        // STEP 2
        // DROP ALL TABLES
        // =========================================================

        $mysqli->query("SET FOREIGN_KEY_CHECKS = 0");

        $tableResult = $mysqli->query("
            SELECT TABLE_NAME
            FROM information_schema.TABLES
            WHERE TABLE_SCHEMA = '{$dbName}'
            AND TABLE_TYPE = 'BASE TABLE'
        ");

        if ($tableResult) {

            while ($row = $tableResult->fetch_assoc()) {

                $tableName = str_replace(
                    '`',
                    '``',
                    $row['TABLE_NAME']
                );

                if (!$mysqli->query(
                    "DROP TABLE IF EXISTS `{$tableName}`"
                )) {

                    $error = $mysqli->error;

                    $mysqli->query(
                        "SET FOREIGN_KEY_CHECKS = 1"
                    );

                    $mysqli->close();

                    echo json_encode([
                        'status'  => false,
                        'message' => 'Failed to drop table.',
                        'table'   => $tableName,
                        'error'   => $error
                    ]);

                    return;
                }
            }
        }

        $mysqli->query("SET FOREIGN_KEY_CHECKS = 1");

        $mysqli->close();

        // =========================================================
        // STEP 3
        // CREATE TEMPORARY MYSQL CONFIG
        // =========================================================

        $mysqlConfig = tempnam(
            sys_get_temp_dir(),
            'uat_mysql_'
        );

        if ($mysqlConfig === false) {

            echo json_encode([
                'status'  => false,
                'message' => 'Unable to create temporary MySQL configuration.'
            ]);

            return;
        }

        file_put_contents(
            $mysqlConfig,
            "[client]\n" .
            "user={$dbUsername}\n" .
            "password={$dbPassword}\n" .
            "host={$dbHost}\n"
        );

        chmod($mysqlConfig, 0600);

        // =========================================================
        // STEP 4
        // CREATE TEMPORARY SQL FILE
        // =========================================================

        $temporarySql = tempnam(
            sys_get_temp_dir(),
            'uat_restore_'
        );

        if ($temporarySql === false) {

            unlink($mysqlConfig);

            echo json_encode([
                'status'  => false,
                'message' => 'Unable to create temporary SQL file.'
            ]);

            return;
        }

        // =========================================================
        // STEP 5
        // DECOMPRESS + MODIFY SQL
        //
        // Adds ROW_FORMAT=DYNAMIC to InnoDB tables.
        // =========================================================

        $gzipCommand =
            'gzip -dc ' .
            escapeshellarg($backupFile);

        $sqlContent = shell_exec($gzipCommand);

        if ($sqlContent === null || $sqlContent === '') {

            unlink($temporarySql);
            unlink($mysqlConfig);

            echo json_encode([
                'status'  => false,
                'message' => 'Unable to decompress SQL backup.'
            ]);

            return;
        }

        // ---------------------------------------------------------
        // Add ROW_FORMAT=DYNAMIC to InnoDB table definitions
        // ---------------------------------------------------------

        $sqlContent = preg_replace(
            '/ENGINE\s*=\s*InnoDB(?!\s+ROW_FORMAT)/i',
            'ENGINE=InnoDB ROW_FORMAT=DYNAMIC',
            $sqlContent
        );

        // ---------------------------------------------------------
        // Save modified SQL
        // ---------------------------------------------------------

        if (file_put_contents(
            $temporarySql,
            $sqlContent
        ) === false) {

            unset($sqlContent);

            unlink($temporarySql);
            unlink($mysqlConfig);

            echo json_encode([
                'status'  => false,
                'message' => 'Unable to create modified SQL file.'
            ]);

            return;
        }

        // Free memory
        unset($sqlContent);

        // =========================================================
        // STEP 6
        // FIND MYSQL
        // =========================================================

        $mysql = '/usr/bin/mysql';

        if (!file_exists($mysql)) {

            $mysql = trim(
                shell_exec('command -v mysql')
            );

            if (empty($mysql)) {

                unlink($temporarySql);
                unlink($mysqlConfig);

                echo json_encode([
                    'status'  => false,
                    'message' => 'MySQL command not found.'
                ]);

                return;
            }
        }

        // =========================================================
        // STEP 7
        // RESTORE DATABASE
        // =========================================================

        $restoreCommand =
            escapeshellarg($mysql) .
            ' --defaults-extra-file=' .
            escapeshellarg($mysqlConfig) .
            ' ' .
            escapeshellarg($dbName) .
            ' < ' .
            escapeshellarg($temporarySql) .
            ' 2>&1';

        $output = [];
        $returnCode = 0;

        exec(
            $restoreCommand,
            $output,
            $returnCode
        );

        // =========================================================
        // CLEANUP
        // =========================================================

        unlink($temporarySql);
        unlink($mysqlConfig);

        // =========================================================
        // RESTORE FAILED
        // =========================================================

        if ($returnCode !== 0) {

            echo json_encode([
                'status'  => false,
                'message' => 'UAT database restore failed.',
                'backup'  => basename($backupFile),
                'error'   => implode("\n", $output)
            ]);

            return;
        }

        // =========================================================
        // SUCCESS
        // =========================================================

        echo json_encode([
            'status'   => true,
            'message'  => 'UAT database updated successfully.',
            'database' => $dbName,
            'backup'   => basename($backupFile)
        ]);
    }
    
}

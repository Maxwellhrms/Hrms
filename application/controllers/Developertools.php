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

public function take_database_backup()
{
    // =========================================================
    // LIVE OUTPUT SETTINGS
    // =========================================================

    set_time_limit(0);
    ini_set('max_execution_time', '0');
    ini_set('output_buffering', 'off');
    ini_set('zlib.output_compression', '0');

    while (ob_get_level() > 0) {
        ob_end_flush();
    }

    ob_implicit_flush(true);

    header('Content-Type: text/html; charset=utf-8');
    header('Cache-Control: no-cache');
    header('X-Accel-Buffering: no');

    echo str_repeat(' ', 4096);
    flush();


    // =========================================================
    // LOG FUNCTION
    // =========================================================

    $log = function ($message, $type = 'info') {

        $time = date('H:i:s');

        if ($type === 'success') {
            $color = '#198754';
            $icon  = '✓';
        } elseif ($type === 'error') {
            $color = '#dc3545';
            $icon  = '✗';
        } elseif ($type === 'warning') {
            $color = '#fd7e14';
            $icon  = '⚠';
        } else {
            $color = '#0d6efd';
            $icon  = '→';
        }

        echo '<div style="
                font-family:monospace;
                font-size:14px;
                padding:5px 10px;
                color:' . $color . ';
            ">
                [' . $time . '] ' .
                $icon . ' ' .
                htmlspecialchars($message) .
            '</div>';

        echo str_repeat(' ', 1024);

        flush();
    };


    // =========================================================
    // START HTML
    // =========================================================

    echo '
    <!DOCTYPE html>
    <html>
    <head>

        <title>Database Backup</title>

        <style>

            body {
                background:#111827;
                color:#ffffff;
                font-family:Arial, sans-serif;
                padding:30px;
            }

            .container {
                max-width:1000px;
                margin:auto;
            }

            .header {
                background:#1f2937;
                padding:20px;
                border-radius:8px 8px 0 0;
            }

            .logs {
                background:#000000;
                padding:20px;
                min-height:400px;
                border-radius:0 0 8px 8px;
            }

        </style>

    </head>

    <body>

    <div class="container">

        <div class="header">
            <h2>Database Backup</h2>
        </div>

        <div class="logs">
    ';

    flush();


    // =========================================================
    // DATABASE DETAILS
    // =========================================================

    $dbHost     = 'localhost';
    $dbUsername = 'maxwellhrms_root';

    /*
     * IMPORTANT:
     *
     * Use your current LIVE database password here.
     *
     * Do not use a password that has been exposed publicly.
     * Rotate the database password after testing.
     */
    $dbPassword = 'sairam-143';

    $dbName     = 'maxwellhrms_hr';


    // =========================================================
    // BACKUP DIRECTORY
    // =========================================================

    $backupDirectory =
        '/home/maxwellhrms/public_html/backups/';


    if (!is_dir($backupDirectory)) {

        $log(
            'Backup directory does not exist.',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    if (!is_writable($backupDirectory)) {

        $log(
            'Backup directory is not writable.',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    $log(
        'Backup directory verified.',
        'success'
    );


    // =========================================================
    // BACKUP FILE NAME
    // =========================================================

    $backupFileName =
        'dbbackup_' .
        date('Y-m-d_H-i-s') .
        '.sql.gz';

    $backupFile =
        $backupDirectory .
        $backupFileName;


    $log(
        'Backup file: ' .
        $backupFileName
    );


    // =========================================================
    // MYSQLDUMP
    // =========================================================

    $mysqldump = '/usr/bin/mysqldump';

    if (!file_exists($mysqldump)) {

        $mysqldump = trim(
            shell_exec('command -v mysqldump')
        );
    }


    if (empty($mysqldump)) {

        $log(
            'mysqldump command not found.',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    $log(
        'mysqldump found: ' .
        $mysqldump,
        'success'
    );


    // =========================================================
    // TEMP MYSQL CONFIG
    // =========================================================

    $mysqlConfig =
        '/tmp/backup_mysql_' .
        date('YmdHis') .
        '_' .
        getmypid() .
        '.cnf';


    $configContent =
        "[client]\n" .
        "host={$dbHost}\n" .
        "user={$dbUsername}\n" .
        "password={$dbPassword}\n";


    $configCreated =
        file_put_contents(
            $mysqlConfig,
            $configContent
        );


    if ($configCreated === false) {

        $log(
            'Unable to create temporary MySQL configuration.',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    chmod(
        $mysqlConfig,
        0600
    );


    $log(
        'Temporary MySQL configuration created.'
    );


    // =========================================================
    // BACKUP COMMAND
    // =========================================================

    $command =
        escapeshellarg($mysqldump) .
        ' --defaults-extra-file=' .
        escapeshellarg($mysqlConfig) .
        ' --no-tablespaces' .
        ' --routines' .
        ' --triggers' .
        ' --events' .
        ' ' .
        escapeshellarg($dbName) .
        ' | /usr/bin/gzip > ' .
        escapeshellarg($backupFile) .
        ' 2>&1';


    $log(
        'Database backup started...',
        'warning'
    );


    $startTime = microtime(true);

    $output = [];

    $returnCode = 0;


    // =========================================================
    // EXECUTE BACKUP
    // =========================================================

    exec(
        $command,
        $output,
        $returnCode
    );


    $endTime = microtime(true);

    $duration =
        round(
            $endTime - $startTime,
            2
        );


    // =========================================================
    // REMOVE TEMP CONFIG
    // =========================================================

    @unlink($mysqlConfig);


    // =========================================================
    // CHECK RESULT
    // =========================================================

    if ($returnCode !== 0) {

        $log(
            'Database backup failed.',
            'error'
        );


        if (!empty($output)) {

            foreach ($output as $errorLine) {

                $log(
                    $errorLine,
                    'error'
                );
            }
        }


        // Remove incomplete backup
        if (file_exists($backupFile)) {

            @unlink($backupFile);
        }


        $log(
            'Backup file removed because the backup was unsuccessful.',
            'warning'
        );


        $log(
            'DATABASE BACKUP FAILED',
            'error'
        );


        echo '
            </div>
            </div>
            </body>
            </html>
        ';

        flush();

        return;
    }


    // =========================================================
    // VERIFY BACKUP FILE
    // =========================================================

    if (!file_exists($backupFile)) {

        $log(
            'Backup command completed but backup file was not created.',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    $backupSize =
        filesize($backupFile);


    if ($backupSize === false || $backupSize <= 0) {

        $log(
            'Backup file is empty.',
            'error'
        );

        @unlink($backupFile);

        echo '</div></div></body></html>';

        flush();

        return;
    }


    // =========================================================
    // FORMAT FILE SIZE
    // =========================================================

    $formattedSize =
        number_format(
            $backupSize / 1024 / 1024,
            2
        ) .
        ' MB';


    // =========================================================
    // SUCCESS
    // =========================================================

    $log(
        'Backup completed successfully.',
        'success'
    );


    $log(
        'Backup file: ' .
        $backupFileName,
        'success'
    );


    $log(
        'Backup size: ' .
        $formattedSize,
        'success'
    );


    $log(
        'Backup duration: ' .
        $duration .
        ' seconds.',
        'success'
    );


    $log(
        'Included: Tables, Data, Procedures, Functions, Triggers and Events.',
        'success'
    );


    $log(
        'DATABASE BACKUP COMPLETED SUCCESSFULLY ✓',
        'success'
    );


    echo '
        </div>
        </div>
        </body>
        </html>
    ';

    flush();
}

public function update_uat_database()
{
    $selectedBackup = $this->input->get('file', true);

    if (empty($selectedBackup)) {

        echo 'Backup file was not selected.';
        return;
    }

    // Only allow the expected backup filename format
    if (
        !preg_match(
            '/^dbbackup_\d{4}-\d{2}-\d{2}_\d{2}-\d{2}-\d{2}\.sql\.gz$/',
            $selectedBackup
        )
    ) {

        echo 'Invalid backup file.';
        return;
    }
    // =========================================================
    // LIVE OUTPUT SETTINGS
    // =========================================================

    set_time_limit(0);
    ini_set('max_execution_time', '0');
    ini_set('output_buffering', 'off');
    ini_set('zlib.output_compression', '0');

    while (ob_get_level() > 0) {
        ob_end_flush();
    }

    ob_implicit_flush(true);

    header('Content-Type: text/html; charset=utf-8');
    header('Cache-Control: no-cache');
    header('X-Accel-Buffering: no');

    echo str_repeat(' ', 4096);
    flush();


    // =========================================================
    // HELPER FUNCTION
    // =========================================================

    $log = function ($message, $type = 'info') {

        $time = date('H:i:s');

        if ($type === 'success') {
            $color = '#198754';
            $icon  = '✓';
        } elseif ($type === 'error') {
            $color = '#dc3545';
            $icon  = '✗';
        } elseif ($type === 'warning') {
            $color = '#fd7e14';
            $icon  = '⚠';
        } else {
            $color = '#0d6efd';
            $icon  = '→';
        }

        echo '<div style="
                font-family:monospace;
                font-size:14px;
                padding:5px 10px;
                color:' . $color . ';
            ">
                [' . $time . '] ' .
                $icon . ' ' .
                htmlspecialchars($message) .
            '</div>';

        echo str_repeat(' ', 1024);

        flush();
    };


    // =========================================================
    // START HTML
    // =========================================================

    echo '
    <!DOCTYPE html>
    <html>
    <head>

        <title>UAT Database Update</title>

        <style>

            body {
                background:#111827;
                color:#ffffff;
                font-family:Arial, sans-serif;
                padding:30px;
            }

            .container {
                max-width:1000px;
                margin:auto;
            }

            .header {
                background:#1f2937;
                padding:20px;
                border-radius:8px 8px 0 0;
            }

            .logs {
                background:#000000;
                padding:20px;
                min-height:500px;
                border-radius:0 0 8px 8px;
            }

        </style>

    </head>

    <body>

    <div class="container">

        <div class="header">
            <h2>UAT Database Update</h2>
        </div>

        <div class="logs">
    ';

    flush();


    // =========================================================
    // DATABASE DETAILS
    // =========================================================

    $dbHost     = 'localhost';
    $dbUsername = 'maxwellhrms_uat';

    /*
     * IMPORTANT:
     *
     * Put the current UAT database password here.
     *
     * Do not use the password that was previously exposed
     * in the conversation. Rotate the password after testing.
     */
    $dbPassword = 'sairam-143';

    $dbName     = 'maxwellhrms_uat';


    // =========================================================
    // BACKUP FILE
    // =========================================================

    $backupFile =
        '/home/maxwellhrms/public_html/backups/' .
        $selectedBackup;


    $startTime = date('Y-m-d H:i:s');

    $log(
        'UAT Database Update Started',
        'success'
    );

    $log(
        'Start Time: ' . $startTime
    );

    $log(
        'Backup file: ' . basename($backupFile)
    );


    // =========================================================
    // CHECK BACKUP
    // =========================================================

    $log(
        'Checking backup file...'
    );

    if (!file_exists($backupFile)) {

        $log(
            'Backup file not found.',
            'error'
        );

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }

    $log(
        'Backup file found.',
        'success'
    );


    // =========================================================
    // DATABASE CONNECTION
    // =========================================================

    $log(
        'Connecting to UAT database...'
    );

    $mysqli = new mysqli(
        $dbHost,
        $dbUsername,
        $dbPassword,
        $dbName
    );

    if ($mysqli->connect_error) {

        $log(
            'Database connection failed: ' .
            $mysqli->connect_error,
            'error'
        );

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }

    $mysqli->set_charset('utf8mb4');

    $log(
        'Connected to UAT database successfully.',
        'success'
    );


    // =========================================================
    // DROP PROCEDURES
    // =========================================================

    $log(
        'Getting stored procedures...'
    );

    $result = $mysqli->query("
        SELECT ROUTINE_NAME
        FROM information_schema.ROUTINES
        WHERE ROUTINE_SCHEMA = '{$dbName}'
        AND ROUTINE_TYPE = 'PROCEDURE'
    ");

    $procedureCount = 0;

    if ($result) {

        while ($row = $result->fetch_assoc()) {

            $procedureName = str_replace(
                '`',
                '``',
                $row['ROUTINE_NAME']
            );

            if (!$mysqli->query(
                "DROP PROCEDURE IF EXISTS `{$procedureName}`"
            )) {

                $log(
                    'Failed to drop procedure ' .
                    $procedureName . ': ' .
                    $mysqli->error,
                    'error'
                );
            }

            $procedureCount++;
        }

        $result->free();
    }

    $log(
        $procedureCount .
        ' stored procedures dropped.',
        'success'
    );


    // =========================================================
    // DROP TABLES
    // =========================================================

    $log(
        'Starting table deletion...'
    );

    $mysqli->query(
        "SET FOREIGN_KEY_CHECKS = 0"
    );

    $result = $mysqli->query("
        SELECT TABLE_NAME
        FROM information_schema.TABLES
        WHERE TABLE_SCHEMA = '{$dbName}'
        AND TABLE_TYPE = 'BASE TABLE'
    ");

    $tableCount = 0;

    if ($result) {

        while ($row = $result->fetch_assoc()) {

            $tableName = str_replace(
                '`',
                '``',
                $row['TABLE_NAME']
            );

            if (!$mysqli->query(
                "DROP TABLE IF EXISTS `{$tableName}`"
            )) {

                $log(
                    'Failed to drop table ' .
                    $tableName . ': ' .
                    $mysqli->error,
                    'error'
                );

                $mysqli->query(
                    "SET FOREIGN_KEY_CHECKS = 1"
                );

                $mysqli->close();

                echo '</div></div></body></html>';

                flush();

                return;
            }

            $tableCount++;

            if ($tableCount % 25 === 0) {

                $log(
                    $tableCount .
                    ' tables dropped...'
                );
            }
        }

        $result->free();
    }

    $mysqli->query(
        "SET FOREIGN_KEY_CHECKS = 1"
    );

    $log(
        $tableCount .
        ' tables dropped successfully.',
        'success'
    );

    $mysqli->close();


    // =========================================================
    // TEMP SQL FILE
    // =========================================================

    $tempSql =
        '/tmp/uat_restore_' .
        date('YmdHis') .
        '.sql';

    $modifiedSql =
        $tempSql . '.modified';

    $log(
        'Preparing SQL restore file...'
    );


    // =========================================================
    // DECOMPRESS
    // =========================================================

    $log(
        'Decompressing backup...'
    );

    $command =
        'gzip -dc ' .
        escapeshellarg($backupFile) .
        ' > ' .
        escapeshellarg($tempSql);

    $output = [];
    $returnCode = 0;

    exec(
        $command,
        $output,
        $returnCode
    );

    if ($returnCode !== 0) {

        $log(
            'Failed to decompress backup.',
            'error'
        );

        @unlink($tempSql);

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }

    $log(
        'Backup decompressed successfully.',
        'success'
    );


    // =========================================================
    // SQL STRUCTURE ANALYSIS
    // =========================================================

    $log(
        'Starting intelligent SQL structure analysis...',
        'warning'
    );

    $log(
        'Only CREATE TABLE definitions will be analysed.'
    );

    $log(
        'INSERT/data rows will NOT be scanned for VARCHAR definitions.'
    );


    // =========================================================
    // OPEN SQL FILE
    // =========================================================

    $inputHandle = fopen(
        $tempSql,
        'r'
    );

    if ($inputHandle === false) {

        $log(
            'Unable to open SQL file.',
            'error'
        );

        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }

    $outputHandle = fopen(
        $modifiedSql,
        'w'
    );

    if ($outputHandle === false) {

        fclose($inputHandle);

        $log(
            'Unable to create modified SQL file.',
            'error'
        );

        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }


    // =========================================================
    // ANALYSIS VARIABLES
    // =========================================================

    $insideCreateTable = false;

    $currentTable = '';

    $createBuffer = [];

    $tableCreateStatements = 0;

    $modifiedTableNames = [];

    $modifiedColumnCount = 0;

    $lineNumber = 0;

    $lastProgressTime = time();


    // =========================================================
    // FUNCTION:
    // PROCESS CREATE TABLE
    // =========================================================

    $processCreateTable = function (
        $createLines,
        $tableName
    ) use (
        &$modifiedTableNames,
        &$modifiedColumnCount,
        &$log
    ) {

        if (empty($createLines)) {
            return $createLines;
        }

        $fullCreate = implode(
            '',
            $createLines
        );

        /*
         * -----------------------------------------------------
         * Find KEY / INDEX columns
         * -----------------------------------------------------
         *
         * We do NOT convert indexed VARCHAR columns to TEXT.
         *
         * Otherwise MySQL can produce:
         *
         * BLOB/TEXT column used in key specification
         *
         */

        $indexedColumns = [];

        foreach ($createLines as $createLine) {

            if (
                preg_match(
                    '/^\s*(PRIMARY\s+KEY|UNIQUE\s+KEY|UNIQUE\s+INDEX|KEY|INDEX|FULLTEXT\s+KEY|SPATIAL\s+KEY)/i',
                    trim($createLine)
                )
            ) {

                if (
                    preg_match_all(
                        '/`([^`]+)`\s*(?:\(\d+\))?/i',
                        $createLine,
                        $indexMatches
                    )
                ) {

                    foreach (
                        $indexMatches[1]
                        as $indexColumn
                    ) {

                        $indexedColumns[
                            strtolower($indexColumn)
                        ] = true;
                    }
                }
            }
        }


        // -----------------------------------------------------
        // Find VARCHAR columns
        // -----------------------------------------------------

        $varcharColumns = [];

        foreach ($createLines as $index => $createLine) {

            if (
                preg_match(
                    '/^\s*`([^`]+)`\s+varchar\s*\(\s*(\d+)\s*\)(.*)$/i',
                    $createLine,
                    $matches
                )
            ) {

                $columnName =
                    $matches[1];

                $varcharLength =
                    (int)$matches[2];

                $rest =
                    $matches[3];

                $isIndexed =
                    isset(
                        $indexedColumns[
                            strtolower($columnName)
                        ]
                    );

                if (!$isIndexed) {

                    /*
                     * Approximate maximum bytes.
                     *
                     * The dump uses utf8/utf8mb4 in many places.
                     * 4 bytes per character is therefore used
                     * as the conservative estimate.
                     */

                    $estimatedBytes =
                        $varcharLength * 4;

                    $varcharColumns[] = [
                        'line'          => $index,
                        'column'        => $columnName,
                        'length'        => $varcharLength,
                        'bytes'         => $estimatedBytes,
                        'rest'          => $rest
                    ];
                }
            }
        }


        // -----------------------------------------------------
        // Calculate approximate row size
        // -----------------------------------------------------

        $varcharBytes = 0;

        foreach ($varcharColumns as $column) {

            $varcharBytes +=
                $column['bytes'];
        }


        /*
         * MySQL's 8126 limit is not simply the sum of VARCHAR
         * sizes. Fixed-length columns, nullable columns, record
         * overhead, etc. also consume space.
         *
         * Therefore use a conservative working limit.
         */

        $safeLimit = 6000;


        // -----------------------------------------------------
        // No correction required
        // -----------------------------------------------------

        if ($varcharBytes <= $safeLimit) {

            return $createLines;
        }


        $log(
            'Table [' .
            $tableName .
            '] estimated VARCHAR row size: ' .
            number_format($varcharBytes) .
            ' bytes.',
            'warning'
        );


        /*
         * Largest VARCHAR columns first.
         */

        usort(
            $varcharColumns,
            function ($a, $b) {

                return
                    $b['bytes'] -
                    $a['bytes'];
            }
        );


        $converted = 0;

        $currentEstimatedBytes =
            $varcharBytes;


        // -----------------------------------------------------
        // Convert largest non-indexed VARCHAR columns
        // -----------------------------------------------------

        foreach (
            $varcharColumns
            as $column
        ) {

            if (
                $currentEstimatedBytes <=
                $safeLimit
            ) {
                break;
            }


            $lineIndex =
                $column['line'];

            $line =
                $createLines[
                    $lineIndex
                ];


            /*
             * Remove DEFAULT from the definition.
             *
             * TEXT columns cannot have a normal DEFAULT
             * value in the target MySQL configuration.
             */

            $rest =
                preg_replace(
                    "/\s+DEFAULT\s+(?:NULL|'(?:''|[^']*)')/i",
                    '',
                    $column['rest']
                );


            /*
             * Also remove ON UPDATE if present.
             */

            $rest =
                preg_replace(
                    "/\s+ON\s+UPDATE\s+[^,\s]+/i",
                    '',
                    $rest
                );


            /*
             * Preserve NOT NULL / NULL / COMMENT etc.
             */

            $createLines[$lineIndex] =
                preg_replace(
                    '/^(\s*`[^`]+`\s+)varchar\s*\(\s*\d+\s*\)/i',
                    '$1TEXT',
                    $line
                );


            /*
             * Remove DEFAULT from the actual resulting line.
             */

            $createLines[$lineIndex] =
                preg_replace(
                    "/\s+DEFAULT\s+(?:NULL|'(?:''|[^']*)')/i",
                    '',
                    $createLines[$lineIndex]
                );


            $currentEstimatedBytes -=
                $column['bytes'];

            $converted++;

            $modifiedColumnCount++;

            $log(
                '  ' .
                $tableName .
                '.' .
                $column['column'] .
                ' VARCHAR(' .
                $column['length'] .
                ') → TEXT',
                'success'
            );
        }


        if ($converted > 0) {

            $modifiedTableNames[] =
                $tableName;

            $log(
                'Table [' .
                $tableName .
                '] adjusted. Estimated VARCHAR bytes reduced from ' .
                number_format($varcharBytes) .
                ' to approximately ' .
                number_format(max(0, $currentEstimatedBytes)) .
                '.',
                'success'
            );
        }


        /*
         * If all non-indexed VARCHAR columns were converted and
         * the estimated size is still high, report it.
         *
         * The MySQL restore will then show the exact remaining
         * table if there is another structural problem.
         */

        if (
            $currentEstimatedBytes >
            $safeLimit
        ) {

            $log(
                'Table [' .
                $tableName .
                '] still has a high estimated row size after safe conversions. ' .
                'Indexed VARCHAR columns were intentionally preserved.',
                'warning'
            );
        }


        return $createLines;
    };


    // =========================================================
    // STREAM SQL FILE
    // =========================================================

    while (
        ($line = fgets($inputHandle)) !== false
    ) {

        $lineNumber++;


        // -----------------------------------------------------
        // Start CREATE TABLE
        // -----------------------------------------------------

        if (
            !$insideCreateTable &&
            preg_match(
                '/^\s*CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?`([^`]+)`/i',
                $line,
                $tableMatch
            )
        ) {

            $insideCreateTable = true;

            $currentTable =
                $tableMatch[1];

            $createBuffer = [];

            $createBuffer[] =
                $line;

            $tableCreateStatements++;

            continue;
        }


        // -----------------------------------------------------
        // Inside CREATE TABLE
        // -----------------------------------------------------

        if ($insideCreateTable) {

            $createBuffer[] =
                $line;


            /*
             * CREATE TABLE ends when we encounter:
             *
             * );
             *
             * optionally followed by ENGINE...
             *
             */

            if (
                preg_match(
                    '/^\s*\)\s*(?:ENGINE=.*)?;\s*$/i',
                    trim($line)
                )
            ) {

                /*
                 * Make ROW_FORMAT=DYNAMIC.
                 */

                $processedLines =
                    $createBuffer;


                /*
                 * Remove an existing ROW_FORMAT.
                 */

                foreach (
                    $processedLines
                    as $index => $createLine
                ) {

                    if (
                        stripos(
                            $createLine,
                            'ENGINE=InnoDB'
                        ) !== false
                    ) {

                        $createLine =
                            preg_replace(
                                '/\s+ROW_FORMAT\s*=\s*[A-Za-z]+/i',
                                '',
                                $createLine
                            );

                        /*
                         * Add ROW_FORMAT=DYNAMIC.
                         */

                        if (
                            stripos(
                                $createLine,
                                'ROW_FORMAT=DYNAMIC'
                            ) === false
                        ) {

                            $createLine =
                                rtrim(
                                    $createLine
                                );

                            $createLine =
                                preg_replace(
                                    '/;\s*$/',
                                    '',
                                    $createLine
                                );

                            $createLine .=
                                ' ROW_FORMAT=DYNAMIC;';

                        }

                        $processedLines[$index] =
                            $createLine;
                    }
                }


                /*
                 * Process row-size issue.
                 */

                $processedLines =
                    $processCreateTable(
                        $processedLines,
                        $currentTable
                    );


                /*
                 * Write corrected CREATE TABLE.
                 */

                foreach (
                    $processedLines
                    as $processedLine
                ) {

                    fwrite(
                        $outputHandle,
                        $processedLine
                    );
                }


                $insideCreateTable = false;

                $currentTable = '';

                $createBuffer = [];

                continue;
            }

            continue;
        }


        // -----------------------------------------------------
        // Outside CREATE TABLE
        // -----------------------------------------------------

        /*
         * Remove DEFINER from procedures/functions.
         *
         * This avoids:
         *
         * ERROR 1227
         * SUPER or SET_USER_ID privilege required
         */

        $line =
            preg_replace(
                '/DEFINER\s*=\s*`[^`]+`@`[^`]+`\s*/i',
                '',
                $line
            );

        $line =
            preg_replace(
                "/DEFINER\s*=\s*'[^']*'@'[^']*'\s*/i",
                '',
                $line
            );


        fwrite(
            $outputHandle,
            $line
        );


        // -----------------------------------------------------
        // Progress
        // -----------------------------------------------------

        if (
            time() -
            $lastProgressTime >=
            10
        ) {

            $fileSize =
                filesize($tempSql);

            $currentPosition =
                ftell($inputHandle);

            $percentage = 0;

            if (
                $fileSize !== false &&
                $fileSize > 0
            ) {

                $percentage =
                    round(
                        (
                            $currentPosition /
                            $fileSize
                        ) * 100,
                        1
                    );
            }

            $log(
                'SQL processing progress: ' .
                $percentage .
                '%'
            );

            $lastProgressTime =
                time();
        }
    }


    // =========================================================
    // CLOSE FILES
    // =========================================================

    fclose($inputHandle);

    fclose($outputHandle);


    // =========================================================
    // CHECK CREATE TABLE PARSING
    // =========================================================

    $log(
        'CREATE TABLE definitions processed: ' .
        $tableCreateStatements,
        'success'
    );

    $log(
        'Tables adjusted: ' .
        count(array_unique($modifiedTableNames)),
        'success'
    );

    $log(
        'VARCHAR columns converted to TEXT: ' .
        $modifiedColumnCount,
        'success'
    );


    // =========================================================
    // REPLACE TEMP SQL
    // =========================================================

    if (
        !file_exists($modifiedSql)
    ) {

        $log(
            'Modified SQL file was not created.',
            'error'
        );

        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }


    if (
        !rename(
            $modifiedSql,
            $tempSql
        )
    ) {

        $log(
            'Failed to replace temporary SQL file.',
            'error'
        );

        @unlink($modifiedSql);
        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }


    $log(
        'SQL structure preparation completed successfully.',
        'success'
    );


    // =========================================================
    // MYSQL CLIENT
    // =========================================================

    $mysql =
        '/usr/bin/mysql';

    if (
        !file_exists($mysql)
    ) {

        $mysql =
            trim(
                shell_exec(
                    'command -v mysql'
                )
            );
    }

    if (
        empty($mysql)
    ) {

        $log(
            'MySQL command not found.',
            'error'
        );

        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }

    $log(
        'MySQL client found: ' .
        $mysql,
        'success'
    );


    // =========================================================
    // MYSQL TEMP CONFIG
    // =========================================================

    $mysqlConfig =
        '/tmp/uat_mysql_' .
        date('YmdHis') .
        '.cnf';


    $configContent =
        "[client]\n" .
        "host={$dbHost}\n" .
        "user={$dbUsername}\n" .
        "password={$dbPassword}\n";


    $configCreated =
        file_put_contents(
            $mysqlConfig,
            $configContent
        );


    if (
        $configCreated === false
    ) {

        $log(
            'Failed to create temporary MySQL configuration.',
            'error'
        );

        @unlink($tempSql);

        echo '</div></div></body></html>';

        flush();

        return;
    }


    chmod(
        $mysqlConfig,
        0600
    );


    // =========================================================
    // RESTORE
    // =========================================================

    $log(
        'Restore started...',
        'warning'
    );

    $restoreStart =
        date('Y-m-d H:i:s');

    $log(
        'Restore Start Time: ' .
        $restoreStart
    );


    /*
     * --force is intentionally NOT used.
     *
     * If a real SQL error occurs, restore must stop and show
     * the error instead of silently continuing.
     */

    $restoreCommand =
        escapeshellarg($mysql) .
        ' --defaults-extra-file=' .
        escapeshellarg($mysqlConfig) .
        ' ' .
        escapeshellarg($dbName) .
        ' < ' .
        escapeshellarg($tempSql) .
        ' 2>&1';


    $restoreOutput = [];

    $restoreReturnCode = 0;


    exec(
        $restoreCommand,
        $restoreOutput,
        $restoreReturnCode
    );


    // =========================================================
    // CLEAN TEMP FILES
    // =========================================================

    @unlink($tempSql);

    @unlink($mysqlConfig);


    // =========================================================
    // RESTORE RESULT
    // =========================================================

    $endTime =
        date('Y-m-d H:i:s');


    if (
        $restoreReturnCode !== 0
    ) {

        $log(
            'Restore failed.',
            'error'
        );


        if (
            !empty($restoreOutput)
        ) {

            foreach (
                $restoreOutput
                as $errorLine
            ) {

                $log(
                    $errorLine,
                    'error'
                );
            }
        }


        $log(
            'End Time: ' .
            $endTime
        );

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );


        echo '
            </div>
            </div>
            </body>
            </html>
        ';

        flush();

        return;
    }


    // =========================================================
    // SUCCESS
    // =========================================================

    $log(
        'Restore completed successfully.',
        'success'
    );

    $log(
        'End Time: ' .
        $endTime,
        'success'
    );

    $log(
        'UAT DATABASE UPDATE COMPLETED SUCCESSFULLY ✓',
        'success'
    );


    echo '
        </div>
        </div>
        </body>
        </html>
    ';

    flush();
}
    
}

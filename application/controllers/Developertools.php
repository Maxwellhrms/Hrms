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
    // =========================================================
    // LIVE OUTPUT SETTINGS
    // =========================================================

    set_time_limit(0);
    ini_set('max_execution_time', 0);
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
    // START
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

    // Put your current UAT database password here.
    // Rotate the password after testing because it was exposed.
    $dbPassword = 'sairam-143';

    $dbName     = 'maxwellhrms_uat';


    // =========================================================
    // BACKUP FILE
    // =========================================================

    $backupFile =
        '/home/maxwellhrms/public_html/backups/' .
        'dbbackup_2026-09-19_21-40-01.sql.gz';


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
    // SQL STRUCTURE FIXES
    // =========================================================

    $log(
        'Starting SQL structure analysis...'
    );


    // =========================================================
    // 1. ROW_FORMAT=DYNAMIC
    // =========================================================

    $log(
        'Applying ROW_FORMAT=DYNAMIC to InnoDB tables...'
    );

    $command =
        "sed -i -E " .
        "'s/ENGINE=InnoDB[[:space:]]*(ROW_FORMAT=[A-Za-z]+[[:space:]]*)?/ENGINE=InnoDB ROW_FORMAT=DYNAMIC /g' " .
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
            'Failed to apply ROW_FORMAT=DYNAMIC.',
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
        'ROW_FORMAT=DYNAMIC applied successfully.',
        'success'
    );


    // =========================================================
    // 2. GENERIC LARGE VARCHAR FIX
    // =========================================================

    $log(
        'Scanning all tables for oversized VARCHAR columns...'
    );

    /*
     * IMPORTANT:
     *
     * Do NOT load the complete SQL dump into memory.
     *
     * The SQL backup can be very large.
     *
     * We process it line-by-line instead.
     *
     * Any VARCHAR > 500 is converted to TEXT.
     *
     * Examples:
     *
     * VARCHAR(555)  -> TEXT
     * VARCHAR(600)  -> TEXT
     * VARCHAR(1000) -> TEXT
     *
     * VARCHAR(255) and VARCHAR(355) remain unchanged.
     */

    $modifiedSql =
        $tempSql . '.modified';


    $inputHandle = fopen(
        $tempSql,
        'r'
    );

    if ($inputHandle === false) {

        $log(
            'Unable to open SQL file for reading.',
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

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    $currentTable = '';

    $modifiedTableNames = [];

    $modifiedColumnCount = 0;

    $lineNumber = 0;

    $lastProgressTime = time();


    // =========================================================
    // PROCESS SQL FILE LINE BY LINE
    // =========================================================

    while (($line = fgets($inputHandle)) !== false) {

        $lineNumber++;


        // -----------------------------------------------------
        // Detect CREATE TABLE
        // -----------------------------------------------------

        if (
            preg_match(
                '/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?`([^`]+)`/i',
                $line,
                $tableMatch
            )
        ) {

            $currentTable =
                $tableMatch[1];

            $log(
                'Processing table: ' .
                $currentTable
            );
        }


        // -----------------------------------------------------
        // Detect VARCHAR definition
        // -----------------------------------------------------

        /*
         * Example:
         *
         * `column_name` varchar(555) DEFAULT ''
         *
         * We intentionally process only normal column
         * definition lines.
         */

        if (
            preg_match(
                '/^(\s*`([^`]+)`\s+)varchar\((\d+)\)(.*)$/i',
                $line,
                $columnMatch
            )
        ) {

            $columnName =
                $columnMatch[2];

            $varcharLength =
                (int)$columnMatch[3];

            $remainingDefinition =
                $columnMatch[4];


            // -------------------------------------------------
            // VARCHAR > 500
            // -------------------------------------------------

            if ($varcharLength > 500) {

                /*
                 * TEXT cannot have a DEFAULT value.
                 *
                 * Remove:
                 *
                 * DEFAULT ''
                 * DEFAULT NULL
                 * DEFAULT 'something'
                 */

                $remainingDefinition =
                    preg_replace(
                        '/\s+DEFAULT\s+(?:NULL|\'[^\']*\')/i',
                        '',
                        $remainingDefinition
                    );


                /*
                 * Replace VARCHAR(length) with TEXT.
                 */

                $line =
                    $columnMatch[1] .
                    'TEXT' .
                    $remainingDefinition;


                $modifiedColumnCount++;


                if (
                    !in_array(
                        $currentTable,
                        $modifiedTableNames,
                        true
                    )
                ) {

                    $modifiedTableNames[] =
                        $currentTable;

                    $log(
                        'Table [' .
                        $currentTable .
                        '] requires row-size adjustment.',
                        'warning'
                    );
                }


                $log(
                    '  ' .
                    $currentTable .
                    '.' .
                    $columnName .
                    ' VARCHAR(' .
                    $varcharLength .
                    ') → TEXT',
                    'success'
                );
            }
        }


        // -----------------------------------------------------
        // Write line
        // -----------------------------------------------------

        fwrite(
            $outputHandle,
            $line
        );


        // -----------------------------------------------------
        // Progress every 10 seconds
        // -----------------------------------------------------

        if (
            time() - $lastProgressTime >= 10
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
                        ($currentPosition / $fileSize) * 100,
                        1
                    );
            }

            $log(
                'SQL scan progress: ' .
                $percentage .
                '%'
            );

            $lastProgressTime =
                time();
        }
    }


    fclose($inputHandle);

    fclose($outputHandle);


    // =========================================================
    // CHECK MODIFIED FILE
    // =========================================================

    if (!file_exists($modifiedSql)) {

        $log(
            'Modified SQL file was not created.',
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


    // =========================================================
    // REPLACE ORIGINAL TEMP SQL
    // =========================================================

    if (!rename($modifiedSql, $tempSql)) {

        $log(
            'Failed to replace temporary SQL file.',
            'error'
        );

        @unlink($modifiedSql);
        @unlink($tempSql);

        $log(
            'UAT DATABASE UPDATE FAILED',
            'error'
        );

        echo '</div></div></body></html>';

        flush();

        return;
    }


    // =========================================================
    // STRUCTURE SUMMARY
    // =========================================================

    $modifiedTableCount =
        count($modifiedTableNames);


    $log(
        'SQL structure analysis completed.',
        'success'
    );

    $log(
        'Tables modified: ' .
        $modifiedTableCount,
        'success'
    );

    $log(
        'VARCHAR columns converted to TEXT: ' .
        $modifiedColumnCount,
        'success'
    );


    if ($modifiedColumnCount === 0) {

        $log(
            'No VARCHAR columns greater than 500 were found.',
            'warning'
        );
    }


    // =========================================================
    // MYSQL CLIENT
    // =========================================================

    $mysql = '/usr/bin/mysql';

    if (!file_exists($mysql)) {

        $mysql = trim(
            shell_exec('command -v mysql')
        );
    }

    if (empty($mysql)) {

        $log(
            'MySQL command not found.',
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


    $configCreated = file_put_contents(
        $mysqlConfig,
        "[client]\n" .
        "host={$dbHost}\n" .
        "user={$dbUsername}\n" .
        "password={$dbPassword}\n"
    );


    if ($configCreated === false) {

        $log(
            'Failed to create temporary MySQL configuration.',
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


    if ($restoreReturnCode !== 0) {

        $log(
            'Restore failed.',
            'error'
        );


        if (!empty($restoreOutput)) {

            foreach ($restoreOutput as $errorLine) {

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

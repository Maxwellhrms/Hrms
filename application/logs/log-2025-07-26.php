<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-07-26 12:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-07-26'
AND `mxesi_affect_to` >= '2025-07-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-07-26 13:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Common.php:139) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-07-26 13:15:19 --> Severity: Compile Error --> Cannot declare class Common, because the name is already in use /home/maxwellhrms/public_html/application/controllers/Common.php 139
ERROR - 2025-07-26 15:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-07-26'
AND `mxesi_affect_to` >= '2025-07-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-07-26 16:13:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-07-26'
AND `mxesi_affect_to` >= '2025-07-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-07-26 17:39:36 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessionc994799c844fc905234a2d12d7fc199000cebe37 /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-07-26 17:39:36 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-07-26 18:17:07 --> Query error: Table 'maxwellhrms_hr.mxsal_bonus_percentage_amount' doesn't exist - Invalid query: SELECT `mxsal_bonus`
FROM `mxsal_bonus_percentage_amount` as `mxsal_m`
WHERE DATE_FORMAT(mxsal_createdtime, '%Y-%m') = '2025-04'
AND `mxsal_emp_code` = 'MD0001'
AND `mxsal_status` = '1'
ERROR - 2025-07-26 18:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 9 - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_settlement_date`, `mxd_name`, `mxb_name`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
WHERE `mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` <> '5'
AND (
    mxemp_emp_resignation_relieving_settlement_date IS NULL OR 
    `mxemp_emp_resignation_relieving_settlement_date` <= ')'
ERROR - 2025-07-26 18:59:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 9 - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_settlement_date`, `mxd_name`, `mxb_name`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
WHERE `mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` <> '5'
AND (
    mxemp_emp_resignation_relieving_settlement_date IS NULL OR 
    `mxemp_emp_resignation_relieving_settlement_date` <=)
ERROR - 2025-07-26 23:52:12 --> Query error: Table 'maxwellhrms_hr.expenduture' doesn't exist - Invalid query: INSERT INTO expenduture (teacher, date, acadamic,amt,staff,school_id,time_inserted)
VALUES ('', '', '', '', '', '', '');
ERROR - 2025-07-26 23:53:15 --> Query error: Unknown column 'teacher' in 'field list' - Invalid query: INSERT INTO update_bonus_status (teacher, date, acadamic,amt,staff,school_id,time_inserted)
VALUES ('', '', '', '', '', '', '');

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-12 10:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 10:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 11:05:54 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessioncf12ab52a69c0cd477c45f331ab072d04618025a /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-12 11:05:54 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-05-12 11:05:54 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessioncf12ab52a69c0cd477c45f331ab072d04618025a /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-12 11:05:54 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-05-12 12:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 13:20:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 14:14:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 17:34:48 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessionca1915dd34887df4ad0755be5b02f5f878eb6f4f /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-12 17:34:48 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-05-12 17:53:43 --> Severity: error --> Exception: Call to undefined method Adminmodel::getemployeedetailstosetsession3() /home/maxwellhrms/public_html/application/controllers/Export.php 81
ERROR - 2025-05-12 17:54:30 --> Severity: error --> Exception: Call to undefined method Adminmodel::getemployeedetailstosetsession3() /home/maxwellhrms/public_html/application/controllers/Export.php 81
ERROR - 2025-05-12 17:58:57 --> Query error: Unknown column 'mxemp_emp_resignation_pf_reason' in 'field list' - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_uan_number`, `mxemp_emp_pf_number`, `mxemp_emp_fname`, `mxemp_emp_nm_relationname`, `mxemp_emp_resignation_relieving_date`, `mxemp_emp_resignation_pf_reason`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_employees_nominee` ON `mxemp_emp_nm_employee_id` = `mxemp_emp_id`
WHERE DATE_FORMAT(mxemp_emp_resignation_relieving_date, '%Y-%m') = '2025-05'
AND `mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` <> '5'
ERROR - 2025-05-12 17:59:10 --> Query error: Unknown column 'mxemp_emp_resignation_pf_reason' in 'field list' - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_uan_number`, `mxemp_emp_pf_number`, `mxemp_emp_fname`, `mxemp_emp_nm_relationname`, `mxemp_emp_resignation_relieving_date`, `mxemp_emp_resignation_pf_reason`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_employees_nominee` ON `mxemp_emp_nm_employee_id` = `mxemp_emp_id`
WHERE DATE_FORMAT(mxemp_emp_resignation_relieving_date, '%Y-%m') = '2025-05'
AND `mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` <> '5'
ERROR - 2025-05-12 18:36:48 --> Query error: Table 'maxwellhrms_hr.ecr_attachments' doesn't exist - Invalid query:  SELECT * FROM ecr_attachments where attndyear = '04-2025' 
ERROR - 2025-05-12 18:37:07 --> Query error: Table 'maxwellhrms_hr.ecr_attachments' doesn't exist - Invalid query:  SELECT * FROM ecr_attachments where attndyear = '03-2025' 
ERROR - 2025-05-12 18:43:04 --> Query error: Table 'maxwellhrms_hr.ecr_attachments' doesn't exist - Invalid query:  SELECT * FROM ecr_attachments where attndyear = '03-2025' 
ERROR - 2025-05-12 18:53:04 --> The upload path does not appear to be valid.
ERROR - 2025-05-12 23:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-12 23:41:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-12'
AND `mxesi_affect_to` >= '2025-05-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0

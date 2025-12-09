<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-19 12:07:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-19'
AND `mxesi_affect_to` >= '2025-02-19'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-19 15:32:35 --> Query error: Column 'mxar_previous_bal' cannot be null - Invalid query: INSERT INTO `attendance_user_leaveadjust_log` (`mxar_leaveadjust_unique_id`, `mxar_roll_status`, `mxar_comp_id`, `mxar_div_id`, `mxar_state_id`, `mxar_branch_id`, `mxar_category_type`, `mxar_leave_type_id`, `mxar_leave_type`, `mxar_appliedby_emp_code`, `mxar_from`, `mxar_to`, `mxar_noofdays`, `mxar_desc`, `mxar_minus_leaves`, `mxar_previous_bal`, `mxar_current_bal`, `mxar_createdby`, `mxar_createdtime`, `mxar_authfinal_deviceid`) VALUES ('2738', 'Reject', '1', '1', '21', '21', '3', '13', 'LOP', 'M0038', '2025-02-10', '2025-02-15', '6', NULL, '6', NULL, 6, 'M0009', '2025-02-19 15:32:35', 'Admin')
ERROR - 2025-02-19 17:28:56 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_session64a5636f6cb12447e4f9588e1701e5142422eabf /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-02-19 17:28:56 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2025-02-19 17:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-19'
AND `mxesi_affect_to` >= '2025-02-19'
AND FIND_IN_SET(, mxesi_emp_types) > 0

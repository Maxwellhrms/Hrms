<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-12-24 10:48:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-12-24'
AND `mxesi_affect_to` >= '2025-12-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-12-24 12:29:32 --> Query error: Column 'mxar_previous_bal' cannot be null - Invalid query: INSERT INTO `attendance_user_leaveadjust_log` (`mxar_leaveadjust_unique_id`, `mxar_roll_status`, `mxar_comp_id`, `mxar_div_id`, `mxar_state_id`, `mxar_branch_id`, `mxar_category_type`, `mxar_leave_type_id`, `mxar_leave_type`, `mxar_appliedby_emp_code`, `mxar_from`, `mxar_to`, `mxar_noofdays`, `mxar_desc`, `mxar_minus_leaves`, `mxar_previous_bal`, `mxar_current_bal`, `mxar_createdby`, `mxar_createdtime`, `mxar_authfinal_deviceid`) VALUES ('5545', 'Reject', '1', '1', '36', '1', '3', '13', 'LOP', 'M1135', '2025-12-11', '2025-12-11', '1', NULL, '1', NULL, 1, 'M0009', '2025-12-24 12:29:32', 'Admin')
ERROR - 2025-12-24 16:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `mxsal_emp_code` = ''
AND `mxsal_year_month` = '202511'
AND `mxsal_status`' at line 2 - Invalid query: SELECT *
WHERE `mxsal_emp_code` = ''
AND `mxsal_year_month` = '202511'
AND `mxsal_status` = 1
ERROR - 2025-12-24 17:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-12-24'
AND `mxesi_affect_to` >= '2025-12-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0

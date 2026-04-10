<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-04-10 09:56:12 --> Query error: Table 'maxwellhrms_hr.maxwell_attendance__03' doesn't exist - Invalid query: SELECT distinct(mxemp_emp_id) as emp_code, CONCAT( mxemp_emp_fname, ' ', mxemp_emp_lname) as Name, `mxemp_emp_resignation_status_future_referance`, `mxb_name`, `mxemp_emp_type`, `mxemp_emp_current_salary`, `mxemp_leave_cron_previous_bal`, `mxemp_leave_cron_crnt_bal`, `mxemp_leave_cron_leavetype`, `mxlass_is_carry_forward_month`, `mxlass_is_carry_forward_year`, `mxlass_max_leaves_carry_forward`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_leave_assigning_master` ON `mxlass_emp_type_id` = `mxemp_emp_type`
INNER JOIN `maxwell_emp_leave_cron_history` ON `mxemp_leave_cron_emp_id`=`mxemp_emp_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_attendance__03` ON `mx_attendance_emp_code` =  `mxemp_emp_id`
WHERE `mxlass_leave_type_id` = 1
AND `mxemp_leave_cron_processdate` IS NULL
AND `mxemp_leave_cron_leavetype` = 1
AND `mxemp_emp_id` = 'm0978'
ORDER BY `mxemp_emp_id`
ERROR - 2026-04-10 12:39:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2026-04-10'
AND `mxesi_affect_to` >= '2026-04-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0

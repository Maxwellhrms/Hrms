<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-09 20:16:10 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_03' doesn't exist - Invalid query: SELECT distinct(mxemp_emp_id) as emp_code, CONCAT( mxemp_emp_fname, ' ', mxemp_emp_lname) as Name, `mxemp_emp_resignation_status_future_referance`, `mxb_name`, `mxemp_emp_type`, `mxemp_emp_current_salary`, `mxemp_leave_cron_previous_bal`, `mxemp_leave_cron_crnt_bal`, `mxemp_leave_cron_leavetype`, `mxlass_is_carry_forward_month`, `mxlass_is_carry_forward_year`, `mxlass_max_leaves_carry_forward`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_leave_assigning_master` ON `mxlass_emp_type_id` = `mxemp_emp_type`
INNER JOIN `maxwell_emp_leave_cron_history` ON `mxemp_leave_cron_emp_id`=`mxemp_emp_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_attendance_2021_03` ON `mx_attendance_emp_code` =  `mxemp_emp_id`
WHERE `mxlass_leave_type_id` = 1
AND `mxemp_leave_cron_processdate` = '2021'
AND `mxemp_leave_cron_leavetype` = 1
AND `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_division_code` = '1'
ORDER BY `mxemp_emp_id`
ERROR - 2022-10-09 20:16:12 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_03' doesn't exist - Invalid query: SELECT distinct(mxemp_emp_id) as emp_code, CONCAT( mxemp_emp_fname, ' ', mxemp_emp_lname) as Name, `mxemp_emp_resignation_status_future_referance`, `mxb_name`, `mxemp_emp_type`, `mxemp_emp_current_salary`, `mxemp_leave_cron_previous_bal`, `mxemp_leave_cron_crnt_bal`, `mxemp_leave_cron_leavetype`, `mxlass_is_carry_forward_month`, `mxlass_is_carry_forward_year`, `mxlass_max_leaves_carry_forward`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_leave_assigning_master` ON `mxlass_emp_type_id` = `mxemp_emp_type`
INNER JOIN `maxwell_emp_leave_cron_history` ON `mxemp_leave_cron_emp_id`=`mxemp_emp_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_attendance_2021_03` ON `mx_attendance_emp_code` =  `mxemp_emp_id`
WHERE `mxlass_leave_type_id` = 1
AND `mxemp_leave_cron_processdate` = '2021'
AND `mxemp_leave_cron_leavetype` = 1
AND `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_division_code` = '1'
ORDER BY `mxemp_emp_id`
ERROR - 2022-10-09 20:16:17 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_03' doesn't exist - Invalid query: SELECT distinct(mxemp_emp_id) as emp_code, CONCAT( mxemp_emp_fname, ' ', mxemp_emp_lname) as Name, `mxemp_emp_resignation_status_future_referance`, `mxb_name`, `mxemp_emp_type`, `mxemp_emp_current_salary`, `mxemp_leave_cron_previous_bal`, `mxemp_leave_cron_crnt_bal`, `mxemp_leave_cron_leavetype`, `mxlass_is_carry_forward_month`, `mxlass_is_carry_forward_year`, `mxlass_max_leaves_carry_forward`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_leave_assigning_master` ON `mxlass_emp_type_id` = `mxemp_emp_type`
INNER JOIN `maxwell_emp_leave_cron_history` ON `mxemp_leave_cron_emp_id`=`mxemp_emp_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_attendance_2021_03` ON `mx_attendance_emp_code` =  `mxemp_emp_id`
WHERE `mxlass_leave_type_id` = 1
AND `mxemp_leave_cron_processdate` = '2021'
AND `mxemp_leave_cron_leavetype` = 1
AND `mxemp_emp_comp_code` = '1'
ORDER BY `mxemp_emp_id`

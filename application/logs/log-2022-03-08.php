<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-08 09:05:24 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 09:05:32 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '13'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 09:05:38 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 09:05:40 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '8'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 09:05:45 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 09:05:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '13'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 09:06:17 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 09:07:35 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 09:07:57 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 09:08:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 09:08:21 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 09:08:31 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:02:09 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:02:27 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 10:05:02 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:05:23 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:05:31 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '6'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:05:49 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '16'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:05:57 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '1'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:06:02 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 10:06:04 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '16'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:06:10 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 10:06:12 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '1'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:06:36 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:06:46 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 10:06:54 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '16'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 10:07:32 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 12:00:47 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:00:49 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '6'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 12:01:13 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 12:01:27 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 12:03:35 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:03:45 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:03:49 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 12:04:00 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 12:04:13 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 12:06:25 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:06:33 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '6'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 12:53:17 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:55:30 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:55:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 12:55:51 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '1'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 12:56:03 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 12:58:21 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 12:59:27 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 13:00:12 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 13:00:23 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 13:01:17 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 13:01:29 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 13:01:35 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 21:12:04 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 21:12:07 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '13'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 21:12:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '8'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 21:12:30 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 21:15:39 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 21:15:42 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '13'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 21:23:34 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 21:23:38 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '13'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 21:25:19 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 21:25:22 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
INNER JOIN `maxwell_grade_master` ON `mxemp_emp_grade_code` = `mxgrd_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mxemp_emp_branch_code` = Array
AND `mxemp_emp_dept_code` = '8'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-08 21:26:05 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 21:26:12 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-08 21:26:16 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = 1)
ERROR - 2022-03-08 21:26:31 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-08 16:44:27 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-08 19:10:59 --> 404 Page Not Found: Admin/index.html

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-09 00:42:44 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_director` = '0'
AND `mxdpt_is_hr` = '0')
ERROR - 2022-03-09 00:43:22 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxdpt_id`, `mxdpt_comp_id`, `mxdpt_name`
FROM `maxwell_department_master`
WHERE mxdpt_id in(SELECT distinct(mxemp_emp_dept_code)
FROM `maxwell_employees_info`
WHERE `mxemp_emp_branch_code` = Array
AND `mxemp_emp_comp_code` = '1'
AND `mxdpt_is_hr` = 1)
ERROR - 2022-03-09 00:46:12 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mxemp_emp_autouniqueid`, `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxemp_emp_comp_code`, `mxcp_name`, `mxemp_emp_division_code`, `mxd_name`, `mxemp_emp_state_code`, `mxst_state`, `mxemp_emp_branch_code`, `mxb_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_dept_code`, `mxdpt_name`, `mxemp_emp_desg_code`, `mxdesg_name`, `mxemp_emp_type`, `mxemp_ty_name`, `mxemp_emp_current_salary`, `mxemp_emp_grade_code`, `mxgrd_name`, `mxemp_emp_date_of_birth`, `mxemp_emp_resignation_status`, `mxemp_emp_resignation_date`, `mxemp_emp_resignation_relieving_date`
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
AND `mxemp_emp_dept_code` = '17'
AND `mxemp_emp_status` = 1
AND `mxemp_emp_resignation_status` != 'R'
ORDER BY `mxemp_emp_type`, `mxemp_emp_comp_code`
ERROR - 2022-03-09 02:55:11 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 02:55:11 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 02:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 02:55:12 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 02:56:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 02:56:03 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 02:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 02:56:04 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:20 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:20 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 03:00:21 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 03:00:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:00:53 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:05:39 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 03:05:39 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:05:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:06:07 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-09 03:06:07 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-09 03:06:07 --> 404 Page Not Found: Assets/js

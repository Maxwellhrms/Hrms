<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-03-19 11:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2026-03-19'
AND `mxesi_affect_to` >= '2026-03-19'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2026-03-19 16:15:55 --> Query error: Unknown column 'CASE WHEN synced = 1 THEN 1 ELSE 0 END' in 'field list' - Invalid query: SELECT `employeecode`, `punchdatetime`, `punch`, `punchtype`, `deviceid`, `inserted_at`, `CASE WHEN synced = 1 THEN 1 ELSE 0 END` AS `synced`, `synceddatetime`, `mxemp_emp_fname`, `mxcp_name`, `mxd_name`, `mxst_state`, `mxb_name`, `mxdesg_name`, `mxdpt_name`, `mxgrd_name`, `mxemp_emp_fname`, `mxemp_emp_lname`
FROM `essl_attendance_logs`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `employeecode`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
WHERE `punchdatetime` >= '2026-03-18 00:00:00'
AND `punchdatetime` <= '2026-03-19 23:59:59'
AND `synced` = 1
ERROR - 2026-03-19 16:16:00 --> Query error: Unknown column 'CASE WHEN synced = 1 THEN 1 ELSE 0 END' in 'field list' - Invalid query: SELECT `employeecode`, `punchdatetime`, `punch`, `punchtype`, `deviceid`, `inserted_at`, `CASE WHEN synced = 1 THEN 1 ELSE 0 END` AS `synced`, `synceddatetime`, `mxemp_emp_fname`, `mxcp_name`, `mxd_name`, `mxst_state`, `mxb_name`, `mxdesg_name`, `mxdpt_name`, `mxgrd_name`, `mxemp_emp_fname`, `mxemp_emp_lname`
FROM `essl_attendance_logs`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `employeecode`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
WHERE `punchdatetime` >= '2026-03-19 00:00:00'
AND `punchdatetime` <= '2026-03-19 23:59:59'
AND `synced` = 0
ERROR - 2026-03-19 16:16:14 --> Query error: Unknown column 'CASE WHEN synced = 1 THEN 1 ELSE 0 END' in 'field list' - Invalid query: SELECT `employeecode`, `punchdatetime`, `punch`, `punchtype`, `deviceid`, `inserted_at`, `CASE WHEN synced = 1 THEN 1 ELSE 0 END` AS `synced`, `synceddatetime`, `mxemp_emp_fname`, `mxcp_name`, `mxd_name`, `mxst_state`, `mxb_name`, `mxdesg_name`, `mxdpt_name`, `mxgrd_name`, `mxemp_emp_fname`, `mxemp_emp_lname`
FROM `essl_attendance_logs`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `employeecode`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
INNER JOIN `maxwell_employee_type_master` ON `mxemp_ty_id` = `mxemp_emp_type`
WHERE `synced` = 0

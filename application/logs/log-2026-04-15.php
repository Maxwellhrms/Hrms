<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-04-15 11:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2026-04-15'
AND `mxesi_affect_to` >= '2026-04-15'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2026-04-15 12:40:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_year_month` = '202603'
AND `mxsal_cmp_id` = '1'
AND `mxsal_status` = 1
ORDER BY `mxsal_emp_code` ASC
ERROR - 2026-04-15 13:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2026-04-15'
AND `mxesi_affect_to` >= '2026-04-15'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2026-04-15 13:23:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_year_month` = '202603'
AND `mxsal_cmp_id` = '1'
AND `mxsal_status` = 1
ORDER BY `mxsal_emp_code` ASC
ERROR - 2026-04-15 13:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_year_month` = '202603'
AND `mxsal_cmp_id` = '1'
AND `mxsal_div_id` = '1'
AND `mxsal_status` = 1
ORDER BY `mxsal_emp_code` ASC
ERROR - 2026-04-15 13:23:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_year_month` = '202603'
AND `mxsal_cmp_id` = '1'
AND `mxsal_div_id` = '1'
AND `mxsal_status` = 1
ORDER BY `mxsal_emp_code` ASC
ERROR - 2026-04-15 15:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_year_month` = '202603'
AND `mxsal_cmp_id` = '1'
AND `mxsal_div_id` = '1'
AND `mxsal_branch_code` = '26'
AND `mxsal_state_code` = '2'
AND `mxsal_status` = 1
ORDER BY `mxsal_emp_code` ASC

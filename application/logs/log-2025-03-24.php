<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-24 00:54:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Common.php:138) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2025-03-24 00:54:49 --> Severity: Compile Error --> Cannot declare class Common, because the name is already in use /home/maxwellhrms/public_html/application/controllers/Common.php 138
ERROR - 2025-03-24 10:55:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` an' at line 2 - Invalid query: SELECT *
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_comp_code` = `mxsal_cmp_id` and `mxemp_emp_type` = `mxsal_emp_type` and `mxemp_emp_id` = `mxsal_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_grade_master` ON `mxgrd_id` = `mxemp_emp_grade_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
WHERE `mxsal_status` = 1
ERROR - 2025-03-24 12:17:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-03-24'
AND `mxesi_affect_to` >= '2025-03-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-03-24 16:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-03-24'
AND `mxesi_affect_to` >= '2025-03-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0

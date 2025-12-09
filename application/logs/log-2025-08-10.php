<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-08-10 17:52:32 --> Query error: Unknown column 'finacial_month_year' in 'field list' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`, `sal`.`mxsal_amount // example field from salary` `table`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN (SELECT `mxsal_emp_code`, MAX(finacial_month_year) as max_month
FROM `mxsal_m`
WHERE `finacial_month_year` <= '2025-04-01~@~2026-03-31'
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code` = `maxwell_employees_info`.`mxemp_emp_id`
LEFT JOIN `mxsal_m` as `sal` ON `sal`.`mxsal_emp_code` = `latest_sal`.`mxsal_emp_code` AND `sal`.`finacial_month_year` = `latest_sal`.`max_month`
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= 2026
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-10 17:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code`' at line 7 - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`, `sal`.`mxsal_amount // example field from salary` `table`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN (SELECT `mxsal_emp_code`, MAX(finacial_month_year) as max_month
FROM `mxsal_m`
WHERE `finacial_month_year` < `IS` `NULL`
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code` = `maxwell_employees_info`.`mxemp_emp_id`
LEFT JOIN `mxsal_m` as `sal` ON `sal`.`mxsal_emp_code` = `latest_sal`.`mxsal_emp_code` AND `sal`.`finacial_month_year` = `latest_sal`.`max_month`
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= 
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-10 17:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC' at line 15 - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`, `sal`.`mxsal_amount // example field from salary` `table`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN (SELECT `mxsal_emp_code`, MAX(finacial_month_year) as max_month
FROM `mxsal_m`
WHERE `mxsal_basic` <= 21000
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code` = `maxwell_employees_info`.`mxemp_emp_id`
LEFT JOIN `mxsal_m` as `sal` ON `sal`.`mxsal_emp_code` = `latest_sal`.`mxsal_emp_code`
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= 
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-10 17:59:01 --> Query error: Unknown column 'finacial_month_year' in 'field list' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`, `sal`.`mxsal_amount // example field from salary` `table`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN (SELECT `mxsal_emp_code`, MAX(finacial_month_year) as max_month
FROM `mxsal_m`
WHERE `mxsal_basic` <= 21000
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code` = `maxwell_employees_info`.`mxemp_emp_id`
LEFT JOIN `mxsal_m` as `sal` ON `sal`.`mxsal_emp_code` = `latest_sal`.`mxsal_emp_code`
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= 2026
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-10 18:18:06 --> Query error: Unknown column 'sal.mxsal_amount // example field from salary' in 'field list' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`, `sal`.`mxsal_amount // example field from salary` `table`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN (SELECT `mxsal_emp_code`
FROM `mxsal_m`
WHERE `mxsal_basic` <= 21000
GROUP BY `mxsal_emp_code`) as latest_sal ON `latest_sal`.`mxsal_emp_code` = `maxwell_employees_info`.`mxemp_emp_id`
LEFT JOIN `mxsal_m` as `sal` ON `sal`.`mxsal_emp_code` = `latest_sal`.`mxsal_emp_code`
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= 2026
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-10 19:36:16 --> Query error: Unknown column 'mxemp_emp_comp_code' in 'field list' - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_password`, `mxemp_emp_lg_role`, `mxemp_emp_lg_desktop_permissions`, `mxemp_emp_lg_id`, `mxemp_emp_google_map`, `mxemp_emp_inbranch`, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_branch_code`, `mxemp_emp_dept_code`, `mxemp_emp_grade_code`, `mxemp_emp_desg_code`, `mxemp_emp_state_code`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
WHERE `mxemp_emp_lg_employee_id` = '888666'
ERROR - 2025-08-10 19:36:22 --> Query error: Unknown column 'mxemp_emp_comp_code' in 'field list' - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_password`, `mxemp_emp_lg_role`, `mxemp_emp_lg_desktop_permissions`, `mxemp_emp_lg_id`, `mxemp_emp_google_map`, `mxemp_emp_inbranch`, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_branch_code`, `mxemp_emp_dept_code`, `mxemp_emp_grade_code`, `mxemp_emp_desg_code`, `mxemp_emp_state_code`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
WHERE `mxemp_emp_lg_employee_id` = '888666'
ERROR - 2025-08-10 19:36:35 --> Query error: Unknown column 'mxemp_emp_comp_code' in 'field list' - Invalid query: SELECT `mxemp_emp_lg_employee_id`, `mxemp_emp_lg_fullname`, `mxemp_emp_lg_password`, `mxemp_emp_lg_role`, `mxemp_emp_lg_desktop_permissions`, `mxemp_emp_lg_id`, `mxemp_emp_google_map`, `mxemp_emp_inbranch`, `mxemp_emp_comp_code`, `mxemp_emp_division_code`, `mxemp_emp_branch_code`, `mxemp_emp_dept_code`, `mxemp_emp_grade_code`, `mxemp_emp_desg_code`, `mxemp_emp_state_code`, `mxemp_emp_custom_branch`
FROM `maxwell_employees_login`
WHERE `mxemp_emp_lg_employee_id` = '888666'
ERROR - 2025-08-10 19:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-10'
AND `mxesi_affect_to` >= '2025-08-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0

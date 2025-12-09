<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-28 12:32:58 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxemp_emp_id`, `mxemp_emp_fname`, `mxemp_emp_lname`, `mxap_assign_employee_code`, `mxap_assign_year_month`, `mxap_assign_dep`, `mxap_assign_catg`, `mxap_assign_emp_createdtime`, `mxap_assign_emp_modifiedtime`, `mxap_assign_manager_createdtime`, `mxap_assign_manager_modifiedtime`
FROM `maxwell_employees_info`
INNER JOIN `maxwell_apprasial_assign_employees_2025_04` ON `mxap_assign_employee_code` = `mxemp_emp_id`
WHERE `mxap_assign_employee_code` IN('M00143')
AND `mxemp_emp_id` NOT IN('M0070')
GROUP BY `mxap_assign_employee_code`
ERROR - 2025-04-28 16:46:29 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:46:41 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '2'
ERROR - 2025-04-28 16:46:49 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '2'
ERROR - 2025-04-28 16:47:17 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:48:04 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2026_04' doesn't exist - Invalid query: SELECT `mxap_question`, `mxap_assign_id`, `mxap_assign_year_month`, `mxap_assign_dep`, `mxap_assign_catg`, `mxap_assign_queid`, `mxap_assign_employee_code`, `mxap_assign_unitmeasure`, `mxap_assign_weightage`, `mxap_assign_monthlytarget`, `mxap_assign_emp_noofaccounts`, `mxap_assign_emp_client_name`, `mxap_assign_emp_description`, `mxap_assign_emp_achievement`, `mxap_assign_emp_createdtime`, `mxap_assign_emp_modifiedtime`, `mxap_assign_manager_noofaccounts`, `mxap_assign_manager_client_name`, `mxap_assign_manager_review`, `mxap_assign_manager_actual_assesment`, `mxap_assign_manager_createdtime`, `mxap_assign_manager_modifiedtime`, `mxap_assign_hod_noofaccounts`, `mxap_assign_hod_client_name`, `mxap_assign_hod_review`, `mxap_assign_hod_actual_assesment`, `mxap_assign_hod_createdtime`, `mxap_assign_hod_modifiedtime`, `mxap_assign_que_show`, `mxap_assign_objective`
FROM `maxwell_apprasial_assign_employees_2026_04`
INNER JOIN `maxwell_apprasial_questions` ON `mxap_id` = `mxap_assign_queid`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:48:28 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:49:11 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_04' doesn't exist - Invalid query: SELECT `mxap_assign_employee_code`, `mxap_assign_year_month`
FROM `maxwell_apprasial_assign_employees_2025_04`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:52:16 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_05' doesn't exist - Invalid query: SELECT `mxap_question`, `mxap_assign_id`, `mxap_assign_year_month`, `mxap_assign_dep`, `mxap_assign_catg`, `mxap_assign_queid`, `mxap_assign_employee_code`, `mxap_assign_unitmeasure`, `mxap_assign_weightage`, `mxap_assign_monthlytarget`, `mxap_assign_emp_noofaccounts`, `mxap_assign_emp_client_name`, `mxap_assign_emp_description`, `mxap_assign_emp_achievement`, `mxap_assign_emp_createdtime`, `mxap_assign_emp_modifiedtime`, `mxap_assign_manager_noofaccounts`, `mxap_assign_manager_client_name`, `mxap_assign_manager_review`, `mxap_assign_manager_actual_assesment`, `mxap_assign_manager_createdtime`, `mxap_assign_manager_modifiedtime`, `mxap_assign_hod_noofaccounts`, `mxap_assign_hod_client_name`, `mxap_assign_hod_review`, `mxap_assign_hod_actual_assesment`, `mxap_assign_hod_createdtime`, `mxap_assign_hod_modifiedtime`, `mxap_assign_que_show`, `mxap_assign_objective`
FROM `maxwell_apprasial_assign_employees_2025_05`
INNER JOIN `maxwell_apprasial_questions` ON `mxap_id` = `mxap_assign_queid`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:52:17 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_05' doesn't exist - Invalid query: SELECT `mxap_question`, `mxap_assign_id`, `mxap_assign_year_month`, `mxap_assign_dep`, `mxap_assign_catg`, `mxap_assign_queid`, `mxap_assign_employee_code`, `mxap_assign_unitmeasure`, `mxap_assign_weightage`, `mxap_assign_monthlytarget`, `mxap_assign_emp_noofaccounts`, `mxap_assign_emp_client_name`, `mxap_assign_emp_description`, `mxap_assign_emp_achievement`, `mxap_assign_emp_createdtime`, `mxap_assign_emp_modifiedtime`, `mxap_assign_manager_noofaccounts`, `mxap_assign_manager_client_name`, `mxap_assign_manager_review`, `mxap_assign_manager_actual_assesment`, `mxap_assign_manager_createdtime`, `mxap_assign_manager_modifiedtime`, `mxap_assign_hod_noofaccounts`, `mxap_assign_hod_client_name`, `mxap_assign_hod_review`, `mxap_assign_hod_actual_assesment`, `mxap_assign_hod_createdtime`, `mxap_assign_hod_modifiedtime`, `mxap_assign_que_show`, `mxap_assign_objective`
FROM `maxwell_apprasial_assign_employees_2025_05`
INNER JOIN `maxwell_apprasial_questions` ON `mxap_id` = `mxap_assign_queid`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:52:17 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_05' doesn't exist - Invalid query: SELECT `mxap_question`, `mxap_assign_id`, `mxap_assign_year_month`, `mxap_assign_dep`, `mxap_assign_catg`, `mxap_assign_queid`, `mxap_assign_employee_code`, `mxap_assign_unitmeasure`, `mxap_assign_weightage`, `mxap_assign_monthlytarget`, `mxap_assign_emp_noofaccounts`, `mxap_assign_emp_client_name`, `mxap_assign_emp_description`, `mxap_assign_emp_achievement`, `mxap_assign_emp_createdtime`, `mxap_assign_emp_modifiedtime`, `mxap_assign_manager_noofaccounts`, `mxap_assign_manager_client_name`, `mxap_assign_manager_review`, `mxap_assign_manager_actual_assesment`, `mxap_assign_manager_createdtime`, `mxap_assign_manager_modifiedtime`, `mxap_assign_hod_noofaccounts`, `mxap_assign_hod_client_name`, `mxap_assign_hod_review`, `mxap_assign_hod_actual_assesment`, `mxap_assign_hod_createdtime`, `mxap_assign_hod_modifiedtime`, `mxap_assign_que_show`, `mxap_assign_objective`
FROM `maxwell_apprasial_assign_employees_2025_05`
INNER JOIN `maxwell_apprasial_questions` ON `mxap_id` = `mxap_assign_queid`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 16:52:18 --> Query error: Table 'maxwellhrms_hr.maxwell_apprasial_assign_employees_2025_05' doesn't exist - Invalid query: SELECT `mxap_assign_queid`
FROM `maxwell_apprasial_assign_employees_2025_05`
INNER JOIN `maxwell_apprasial_questions` ON `mxap_id` = `mxap_assign_queid`
WHERE `mxap_assign_status` = 1
AND `mxap_assign_employee_code` = 'M0170'
AND `mxap_assign_dep` = '6'
AND `mxap_assign_catg` = '1'
ERROR - 2025-04-28 17:49:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-04-28'
AND `mxesi_affect_to` >= '2025-04-28'
AND FIND_IN_SET(, mxesi_emp_types) > 0

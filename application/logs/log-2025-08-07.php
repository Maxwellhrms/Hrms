<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-08-07 10:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 11:15:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 11:43:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 12:09:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 13:28:49 --> Query error: Unknown column 'update_bonus_status.status' in 'on clause' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
JOIN `update_bonus_status` ON `update_bonus_status`.`emp_code` = `maxwell_employees_info`.`mxemp_emp_id` AND `update_bonus_status`.`status` = 'paid' and `finacial_month_year`='2024-04-01~@~2025-03-31' 
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= '2025'
 )
ORDER BY `mxemp_emp_id` ASC
ERROR - 2025-08-07 13:29:17 --> Query error: Unknown column 'update_bonus_status.status' in 'on clause' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
JOIN `update_bonus_status` ON `update_bonus_status`.`emp_code` = `maxwell_employees_info`.`mxemp_emp_id` AND `update_bonus_status`.`status` = 'paid' and `finacial_month_year`='2024-04-01~@~2025-03-31' 
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= '2025'
 )
ORDER BY `mxemp_emp_id` ASC
ERROR - 2025-08-07 13:45:24 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:24 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:29 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:29 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:29 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:30 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:30 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:30 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:45:30 --> Severity: error --> Exception: syntax error, unexpected '--' (T_DEC) /home/maxwellhrms/public_html/application/models/Adminmodel.php 124
ERROR - 2025-08-07 13:46:09 --> Query error: Unknown column '$end_year1' in 'where clause' - Invalid query: SELECT `maxwell_employees_info`.`mxemp_emp_id`, `maxwell_employees_info`.`mxemp_emp_fname`, `maxwell_employees_info`.`mxemp_emp_resignation_status`, `maxwell_employees_info`.`mxemp_emp_resignation_date`, `maxwell_employees_info`.`mxemp_emp_resignation_relieving_settlement_date`, `maxwell_division_master`.`mxd_name`, `maxwell_branch_master`.`mxb_name`
FROM `maxwell_employees_info`
JOIN `maxwell_division_master` ON `maxwell_division_master`.`mxd_id` = `maxwell_employees_info`.`mxemp_emp_division_code`
JOIN `maxwell_branch_master` ON `maxwell_branch_master`.`mxb_id` = `maxwell_employees_info`.`mxemp_emp_branch_code`
LEFT JOIN `update_bonus_status` ON `update_bonus_status`.`emp_code` = `maxwell_employees_info`.`mxemp_emp_id` AND `update_bonus_status`.`bonus_status` = 'bonus_payable'  AND `update_bonus_status`.`finacial_month_year` = '2024-04-01~@~2025-03-31' 
WHERE `maxwell_employees_info`.`mxemp_emp_division_code` = '1'
AND `maxwell_employees_info`.`mxemp_emp_type` = '4'
AND   (
maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date IS NULL
OR YEAR(maxwell_employees_info.mxemp_emp_resignation_relieving_settlement_date) >= $end_year1
 )
ORDER BY `maxwell_employees_info`.`mxemp_emp_id` ASC
ERROR - 2025-08-07 14:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 14:49:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-08-07 17:36:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-08-07'
AND `mxesi_affect_to` >= '2025-08-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0

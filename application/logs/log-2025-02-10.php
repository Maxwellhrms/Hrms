<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-10 06:08:11 --> Severity: error --> Exception: Call to undefined method DynamicReportsModel::getages() /home/maxwellhrms/public_html/application/models/DynamicReportsModel.php 57
ERROR - 2025-02-10 08:36:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/ AND MONTH(attendance_date) = MONTH(CURRENT_DATE) 
                        // A' at line 15 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname as name, mxd_name, mxst_state,mxb_name, 
                        COUNT(*) AS late_count,
                        GROUP_CONCAT(attendance_date ORDER BY attendance_date SEPARATOR ', ') AS late_dates,
                        (FLOOR(COUNT(*) / 3) * 0.5) AS penalty
                    FROM 
                        employee_punches_2025
                        inner join maxwell_employees_info on employee_code = mxemp_emp_id 
                        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
                        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
                        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
                    WHERE 
                        attendance_time BETWEEN '09:40:00' AND '13:30:00'
                        // AND MONTH(attendance_date) = MONTH(CURRENT_DATE) 
                        // AND YEAR(attendance_date) = YEAR(CURRENT_DATE)
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND entry_type = 'QRCODE'
                    GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-10 08:36:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '/ AND MONTH(attendance_date) = MONTH(CURRENT_DATE) 
                        // A' at line 15 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname as name, mxd_name, mxst_state,mxb_name, 
                        COUNT(*) AS late_count,
                        GROUP_CONCAT(attendance_date ORDER BY attendance_date SEPARATOR ', ') AS late_dates,
                        (FLOOR(COUNT(*) / 3) * 0.5) AS penalty
                    FROM 
                        employee_punches_2025
                        inner join maxwell_employees_info on employee_code = mxemp_emp_id 
                        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
                        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
                        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
                    WHERE 
                        attendance_time BETWEEN '09:40:00' AND '13:30:00'
                        // AND MONTH(attendance_date) = MONTH(CURRENT_DATE) 
                        // AND YEAR(attendance_date) = YEAR(CURRENT_DATE)
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND entry_type = 'QRCODE'
                    GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-10 10:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 10:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 11:11:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 11:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 13:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 14:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-10 14:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-10'
AND `mxesi_affect_to` >= '2025-02-10'
AND FIND_IN_SET(, mxesi_emp_types) > 0

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-12 08:45:56 --> Query error: Table 'maxwellhrms_hr.employee_punches_1970' doesn't exist - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
                        COUNT(*) AS late_count,
                        GROUP_CONCAT(attendance_date ORDER BY attendance_date SEPARATOR ', ') AS late_dates,
                        (FLOOR(COUNT(*) / 3) * 0.5) AS penalty
                    FROM 
                        employee_punches_1970
                        inner join maxwell_employees_info on employee_code = mxemp_emp_id 
                        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
                        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
                        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
                    WHERE 
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '01'
                        AND YEAR(attendance_date) = '1970'

                        AND islocation = 'YES'
                    GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:46:04 --> Query error: Table 'maxwellhrms_hr.employee_punches_1970' doesn't exist - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
                        COUNT(*) AS late_count,
                        GROUP_CONCAT(attendance_date ORDER BY attendance_date SEPARATOR ', ') AS late_dates,
                        (FLOOR(COUNT(*) / 3) * 0.5) AS penalty
                    FROM 
                        employee_punches_1970
                        inner join maxwell_employees_info on employee_code = mxemp_emp_id 
                        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
                        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
                        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
                    WHERE 
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '01'
                        AND YEAR(attendance_date) = '1970'

                        AND islocation = 'YES'
                    GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:47:07 --> Query error: Table 'maxwellhrms_hr.employee_punches_1970' doesn't exist - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
                        COUNT(*) AS late_count,
                        GROUP_CONCAT(attendance_date ORDER BY attendance_date SEPARATOR ', ') AS late_dates,
                        (FLOOR(COUNT(*) / 3) * 0.5) AS penalty
                    FROM 
                        employee_punches_1970
                        inner join maxwell_employees_info on employee_code = mxemp_emp_id 
                        inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code
                        inner join maxwell_state_master on mxst_id = mxemp_emp_state_code
                        inner join maxwell_division_master on mxd_id = mxemp_emp_division_code
                    WHERE 
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '01'
                        AND YEAR(attendance_date) = '1970'

                        AND islocation = 'YES'
                    GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:56:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'company = '1' GROUP BY 
                        employee_code
                  ' at line 18 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
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
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND islocation = 'YES'  company = '1' GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:56:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'company = '1' GROUP BY 
                        employee_code
                  ' at line 18 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
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
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND islocation = 'YES'  company = '1' GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'company = '1' GROUP BY 
                        employee_code
                  ' at line 18 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
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
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND islocation = 'YES'  company = '1' GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 08:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'division = '1' GROUP BY 
                        employee_code
                 ' at line 18 - Invalid query: SELECT 
                        employee_code, 
                        mxemp_emp_fname, mxd_name, mxst_state,mxb_name, 
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
                        attendance_time BETWEEN '09:40:00' AND '10:00:00'
                        AND MONTH(attendance_date) = '02'
                        AND YEAR(attendance_date) = '2025'

                        AND islocation = 'YES'  and company = '1' division = '1' GROUP BY 
                        employee_code
                    HAVING 
                        late_count >= 3
                    ORDER BY 
                        late_count DESC;
                    
ERROR - 2025-02-12 13:14:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-12 13:26:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-12 14:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-12 14:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-12 17:09:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-02-12 17:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-02-12'
AND `mxesi_affect_to` >= '2025-02-12'
AND FIND_IN_SET(, mxesi_emp_types) > 0

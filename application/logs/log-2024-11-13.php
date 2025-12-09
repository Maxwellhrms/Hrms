<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-13 11:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 11:12:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 11:37:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 13:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 17:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 17:51:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-13'
AND `mxesi_affect_to` >= '2024-11-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-13 18:09:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'A' at line 3 - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,mxb_name
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2024_11
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            INNER JOIN maxwell_branch_master on mxb_id = mx_attendance_branch_id
            WHERE mx_attendance_cmp_id = 1  GROUP BY EmployeeID

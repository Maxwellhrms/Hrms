<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-03 02:05:53 --> 404 Page Not Found: Owa/auth
ERROR - 2024-05-03 03:04:08 --> 404 Page Not Found: Autodiscover/autodiscover.json
ERROR - 2024-05-03 03:07:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-03 03:07:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-03 06:57:20 --> 404 Page Not Found: Actuator/health
ERROR - 2024-05-03 14:05:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:05:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:05:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 14:05:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
      ' at line 9 - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance__
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            WHERE mx_attendance_cmp_id =   and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2024-05-03 14:05:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-03 14:08:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 14:08:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:08:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:08:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 14:09:17 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:09:17 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:11:00 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:11:00 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:14 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:23 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:23 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:26 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:27 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:32 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:12:41 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:13:08 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-03 14:13:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-03 14:27:27 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessionecf95e2c0d2476253502f5a661df3d0d81e8e78a /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2024-05-03 14:27:27 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143
ERROR - 2024-05-03 14:32:00 --> 404 Page Not Found: Owa/auth
ERROR - 2024-05-03 16:11:31 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:31 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:31 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:31 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:32 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:33 --> 404 Page Not Found: Dns-query/index
ERROR - 2024-05-03 16:11:33 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:34 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:34 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:34 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:35 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:36 --> 404 Page Not Found: Query/index
ERROR - 2024-05-03 16:11:36 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:11:36 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:11:38 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:11:38 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:11:38 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:11:39 --> 404 Page Not Found: Resolve/index
ERROR - 2024-05-03 16:31:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-03 16:50:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 16:53:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 16:53:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 16:53:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 16:53:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 16:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:02:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:02:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:02:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:02:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:04:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:04:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:04:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:04:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:04:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:05:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-05-03 17:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:14:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:14:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 17:14:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:14:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 17:23:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:27:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 17:58:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:00:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:12:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:12:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:12:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:12:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:13:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:13:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:13:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:13:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:14:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:14:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:14:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:14:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:15:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 18:15:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:15:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 18:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:33:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 18:48:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:02:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:02:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:04:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:04:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:04:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:04:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:06:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:06:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:06:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:06:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:11:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-03'
AND `mxesi_affect_to` >= '2024-05-03'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-03 19:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-03 19:11:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 19:11:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-03 21:33:32 --> 404 Page Not Found: Ecp/Current

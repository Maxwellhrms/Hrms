<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-26 08:38:04 --> 404 Page Not Found: Env/index
ERROR - 2024-05-26 09:54:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-26 12:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-05-26'
AND `mxesi_affect_to` >= '2024-05-26'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-05-26 12:51:04 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-26 12:51:04 --> 404 Page Not Found: Admin/assets
ERROR - 2024-05-26 13:43:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-26 13:43:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-26 13:43:22 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-05-26 13:57:41 --> 404 Page Not Found: Inputsphp/index
ERROR - 2024-05-26 13:58:05 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-05-26 14:09:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-26 14:09:59 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-05-26 14:39:54 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-05-26 15:05:53 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-05-26 15:09:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-26 17:38:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as totaldays
FROM `maxwell_attendance_2024_05`
INNER JOIN `maxwell_employees_i' at line 1 - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, `mxemp_emp_img`, `mxemp_emp_autouniqueid`, `mxb_name`, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates, () as totaldays
FROM `maxwell_attendance_2024_05`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN (SELECT
                (
                select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentSL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentEL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                group by mxemp_leave_bal_emp_id) as CurrentML,
                CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                count(*) AS Totaldays FROM maxwell_attendance_2024_05 INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code GROUP BY EmployeeID) as sub_attendance ON `sub_attendance`.`EmployeeID` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2024-05-26 17:39:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:39:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:39:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:39:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:43:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:43:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:43:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:50:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:50:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:50:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:50:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:51:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:51:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:51:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:51:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:57:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 17:57:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 17:58:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:01:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:01:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:01:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:01:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:02:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:02:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:02:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:02:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:03:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:03:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:03:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:03:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:04:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:04:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:04:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:04:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:05:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:05:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:05:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:05:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:06:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:06:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:06:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:06:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:09:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:09:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:09:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:09:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:16:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:17:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:17:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:17:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:18:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:18:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:18:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:18:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:21:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:21:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:21:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:21:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:34:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:34:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:34:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:34:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:35:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:35:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-26 18:35:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:35:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-26 18:39:35 --> 404 Page Not Found: Owa/auth
ERROR - 2024-05-26 18:46:29 --> 404 Page Not Found: Git/config
ERROR - 2024-05-26 19:49:57 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-26 19:49:57 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-26 19:49:58 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-26 19:49:59 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-26 19:50:00 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-26 19:50:01 --> 404 Page Not Found: 400shtml/index

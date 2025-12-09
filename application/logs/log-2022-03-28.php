<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-28 11:54:11 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_03`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-28 11:54:14 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_03`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-28 11:54:19 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_03`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-28 11:54:24 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_03`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-28 11:54:29 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_01' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, CONCAT(mxemp_emp_fname, " ", mxemp_emp_lname) as fullname, GROUP_CONCAT(mx_attendance_first_half, '-', `mx_attendance_second_half`, '~', `mx_attendance_date`, '~', `mx_attendance_id`, '~*~' order by mx_attendance_date asc) as dates
FROM `maxwell_attendance_2022_01`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mx_attendance_emp_code`
WHERE `mx_attendance_cmp_id` = '1'
GROUP BY `mx_attendance_emp_code`
ERROR - 2022-03-28 13:36:46 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-28 13:36:46 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-28 13:36:46 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-28 13:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-28 21:53:24 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2022_03' doesn't exist - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2022_03
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID

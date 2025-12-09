<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-16 01:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-16 01:41:55 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-16 01:41:56 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-09-16 04:20:22 --> 404 Page Not Found: Login/index
ERROR - 2023-09-16 06:41:54 --> 404 Page Not Found: Env/index
ERROR - 2023-09-16 06:52:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-16 13:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_s' at line 37 - Invalid query: SELECT `mxst_state` as `state`, `mxd_name` as `division`, `mxb_name` as `branch`, `mxemp_emp_id` as `employee_code`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as name, `mxdesg_name` as `designation`, `att_punch_time`, `max_att_punch_time`, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB, case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else '' end as AB_first, case when mx_attendance_second_half = 'AB' then mx_attendance_second_half 
        else '' end as AB_second, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR, case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else '' end end end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_second_half 
        else '' end  as PR_second, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count, `mx_attendance_date` as `attendate`
FROM `maxwell_attendance_2023_09`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id`=`mx_attendance_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
LEFT JOIN (select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,
                  max(attendance_time) as max_att_punch_time,attendance_date
                  from employee_punches_2023  where attendance_date='2023-09-15' group by eid) as punch ON `punch`.`attuniq`=`mx_attendance_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mx_attendance_date` = '2023-09-15'
AND `mx_attendance_first_half` != 'WO'
AND `mx_attendance_second_half` != 'WO'
ORDER BY `state`, `division`, `branch`, `name`
ERROR - 2023-09-16 13:43:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-16 13:53:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_s' at line 37 - Invalid query: SELECT `mxst_state` as `state`, `mxd_name` as `division`, `mxb_name` as `branch`, `mxemp_emp_id` as `employee_code`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as name, `mxdesg_name` as `designation`, `att_punch_time`, `max_att_punch_time`, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB, case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else '' end as AB_first, case when mx_attendance_second_half = 'AB' then mx_attendance_second_half 
        else '' end as AB_second, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR, case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else '' end end end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_second_half 
        else '' end  as PR_second, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count, `mx_attendance_date` as `attendate`
FROM `maxwell_attendance_2023_09`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id`=`mx_attendance_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
LEFT JOIN (select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,
                  max(attendance_time) as max_att_punch_time,attendance_date
                  from employee_punches_2023  where attendance_date='2023-09-15' group by eid) as punch ON `punch`.`attuniq`=`mx_attendance_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mx_attendance_date` = '2023-09-15'
AND `mx_attendance_first_half` != 'WO'
AND `mx_attendance_second_half` != 'WO'
ORDER BY `state`, `division`, `branch`, `name`
ERROR - 2023-09-16 13:54:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-16 13:54:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_s' at line 37 - Invalid query: SELECT `mxst_state` as `state`, `mxd_name` as `division`, `mxb_name` as `branch`, `mxemp_emp_id` as `employee_code`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as name, `mxdesg_name` as `designation`, `att_punch_time`, `max_att_punch_time`, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB, case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else '' end as AB_first, case when mx_attendance_second_half = 'AB' then mx_attendance_second_half 
        else '' end as AB_second, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR, case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else '' end end end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_second_half 
        else '' end  as PR_second, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count, `mx_attendance_date` as `attendate`
FROM `maxwell_attendance_2023_09`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id`=`mx_attendance_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
LEFT JOIN (select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,
                  max(attendance_time) as max_att_punch_time,attendance_date
                  from employee_punches_2023  where attendance_date='2023-09-16' group by eid) as punch ON `punch`.`attuniq`=`mx_attendance_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mx_attendance_date` = '2023-09-16'
AND `mx_attendance_first_half` != 'WO'
AND `mx_attendance_second_half` != 'WO'
ORDER BY `state`, `division`, `branch`, `name`
ERROR - 2023-09-16 13:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-16 13:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:54:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_s' at line 37 - Invalid query: SELECT `mxst_state` as `state`, `mxd_name` as `division`, `mxb_name` as `branch`, `mxemp_emp_id` as `employee_code`, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as name, `mxdesg_name` as `designation`, `att_punch_time`, `max_att_punch_time`, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OD' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OD' then mx_attendance_second_half
        else '' end end end as OD, case when mx_attendance_first_half = 'OD' AND mx_attendance_second_half = 'OD' then 1.0 
        else case when mx_attendance_first_half = 'OD' then 0.5
        else  case when mx_attendance_second_half = 'OD' then 0.5
        else 0.0 end end end as OD_count, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AR' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'AR' then mx_attendance_second_half
        else '' end end end as AR, case when mx_attendance_first_half = 'AR' AND mx_attendance_second_half = 'AR' then 1.0 
        else case when mx_attendance_first_half = 'AR' then 0.5
        else  case when mx_attendance_second_half = 'AR' then 0.5
        else 0.0 end end end as AR_count, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SHRT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'SHRT' then mx_attendance_second_half
        else '' end end end as SHRT, case when mx_attendance_first_half = 'SHRT' AND mx_attendance_second_half = 'SHRT' then 1.0 
        else case when mx_attendance_first_half = 'SHRT' then 0.5
        else  case when mx_attendance_second_half = 'SHRT' then 0.5
        else 0.0 end end end as SHRT_count, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'OT' then mx_attendance_first_half 
        else  case when mx_attendance_second_half = 'OT' then mx_attendance_second_half
        else '' end end end as OT, case when mx_attendance_first_half = 'OT' AND mx_attendance_second_half = 'OT' then 1.0 
        else case when mx_attendance_first_half = 'OT' then 0.5
        else  case when mx_attendance_second_half = 'OT' then 0.5
        else 0.0 end end end as OT_count, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'AB' then mx_attendance_second_half
        else '' end end end as AB, case when mx_attendance_first_half = 'AB' then mx_attendance_first_half 
        else '' end as AB_first, case when mx_attendance_second_half = 'AB' then mx_attendance_second_half 
        else '' end as AB_second, case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1.0 
        else case when mx_attendance_first_half = 'AB' then 0.5
        else  case when mx_attendance_second_half = 'AB' then 0.5
        else 0.0 end end end as AB_count, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'PR' then mx_attendance_second_half
        else '' end end end as PR, case when mx_attendance_first_half = 'PR' then mx_attendance_first_half 
        else '' end end end as PR_first, case when mx_attendance_second_half = 'PR' then mx_attendance_second_half 
        else '' end  as PR_second, case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1.0 
        else case when mx_attendance_first_half = 'PR' then 0.5
        else  case when mx_attendance_second_half = 'PR' then 0.5
        else 0.0 end end end as PR_count, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then mx_attendance_first_half 
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half) 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then CONCAT(mx_attendance_first_half, '/', mx_attendance_second_half)
        
        else case when mx_attendance_first_half = 'CL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'CL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'EL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'EL' then mx_attendance_second_half
        
        else case when mx_attendance_first_half = 'SL' then mx_attendance_first_half 
        else case when mx_attendance_second_half = 'SL' then mx_attendance_second_half
        
        else '' end end end end end end end end end end end end end end end as leaves, case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'EL' then 1.0 
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'CL' then 1.0
        
        else case when mx_attendance_first_half = 'CL'  AND mx_attendance_second_half = 'SL' then 1.0 
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'CL' then 1.0 
        
        else case when mx_attendance_first_half = 'SL'  AND mx_attendance_second_half = 'EL' then 1.0
        else case when mx_attendance_first_half = 'EL'  AND mx_attendance_second_half = 'SL' then 1.0
        
        else case when mx_attendance_first_half = 'CL' then 0.5
        else case when mx_attendance_second_half = 'CL' then 0.5
        
        else case when mx_attendance_first_half = 'EL' then 0.5
        else case when mx_attendance_second_half = 'EL' then 0.5
        
        else case when mx_attendance_first_half = 'SL' then 0.5
        else case when mx_attendance_second_half = 'SL' then 0.5
        
        else '' end end end end end end end end end end end end end end end as leave_count, `mx_attendance_date` as `attendate`
FROM `maxwell_attendance_2023_09`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id`=`mx_attendance_emp_code`
INNER JOIN `maxwell_company_master` ON `mxcp_id` = `mxemp_emp_comp_code`
INNER JOIN `maxwell_designation_master` ON `mxdesg_id` = `mxemp_emp_desg_code`
INNER JOIN `maxwell_department_master` ON `mxdpt_id` = `mxemp_emp_dept_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxemp_emp_division_code`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxemp_emp_branch_code`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxemp_emp_state_code`
LEFT JOIN (select distinct(employee_code) as eid,attendance_uniqid as attuniq,min(attendance_time) as att_punch_time,
                  max(attendance_time) as max_att_punch_time,attendance_date
                  from employee_punches_2023  where attendance_date='2023-09-16' group by eid) as punch ON `punch`.`attuniq`=`mx_attendance_id`
WHERE `mxemp_emp_comp_code` = '1'
AND `mx_attendance_date` = '2023-09-16'
AND `mx_attendance_first_half` != 'WO'
AND `mx_attendance_second_half` != 'WO'
ORDER BY `state`, `division`, `branch`, `name`
ERROR - 2023-09-16 13:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-16 13:55:36 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:55:36 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:55:36 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 13:55:37 --> 404 Page Not Found: Assets/js
ERROR - 2023-09-16 14:21:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-09-16 20:09:55 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-09-16 21:50:35 --> 404 Page Not Found: Sdk/index
ERROR - 2023-09-16 21:50:35 --> 404 Page Not Found: Nmaplowercheck1694881232/index
ERROR - 2023-09-16 21:50:37 --> 404 Page Not Found: HNAP1/index
ERROR - 2023-09-16 21:50:37 --> 404 Page Not Found: Evox/about

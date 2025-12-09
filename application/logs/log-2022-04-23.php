<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-23 05:54:34 --> 404 Page Not Found: Developertools/processcsvupload
ERROR - 2022-04-23 12:54:38 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_11' doesn't exist - Invalid query: SELECT( 
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentCL,
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end)
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentSL, 
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentEL,  
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentML,  
                   
                    (select max(case when mxemp_leave_cron_short_name = 'EL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04' ) as AcumilatedEL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'CL' then mxemp_leave_cron_present_adding end)
                     from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04'  ) as AcumilatedCL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'SL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04' ) as AcumilatedSL,
                 
                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOAbsent,

                    ( select  sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOfirsthalfAbsent,

                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOsecondhalfAbsent,

                    count(*) AS Totaldays, 
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, 
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, 
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, 
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, 
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Matleave, 
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Matleave, 
                    mx_attendance_emp_code as empid, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as fullname,
                    GROUP_CONCAT(mx_attendance_first_half, '-', mx_attendance_second_half, '~', mx_attendance_date, '~', mx_attendance_id, '~*~' order by mx_attendance_date asc) as dates, 
                    mxdesg_name as designame, mxdpt_name as deptname, mxemp_emp_gender as gender FROM maxwell_attendance_2022_04 
                    INNER JOIN maxwell_employees_info ON mxemp_emp_id = mx_attendance_emp_code 
                    INNER JOIN maxwell_designation_master ON mxdesg_id = mxemp_emp_desg_code 
                    INNER JOIN maxwell_department_master ON mxdpt_id = mxemp_emp_dept_code  where mx_attendance_emp_code = 'M0009'  GROUP BY mx_attendance_emp_code 
ERROR - 2022-04-23 12:54:51 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_11' doesn't exist - Invalid query: SELECT( 
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentCL,
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end)
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentSL, 
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentEL,  
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentML,  
                   
                    (select max(case when mxemp_leave_cron_short_name = 'EL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04' ) as AcumilatedEL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'CL' then mxemp_leave_cron_present_adding end)
                     from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04'  ) as AcumilatedCL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'SL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_04' ) as AcumilatedSL,
                 
                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOAbsent,

                    ( select  sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOfirsthalfAbsent,

                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in('2022-04-03','2022-04-10','2022-04-17','2022-04-24') and  mx_attendance_emp_code = mxemp_emp_id )AS WOsecondhalfAbsent,

                    count(*) AS Totaldays, 
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off, 
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday, 
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present, 
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied, 
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave, 
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave, 
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave, 
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave, 
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave, 
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Matleave, 
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Matleave, 
                    mx_attendance_emp_code as empid, CONCAT(mxemp_emp_fname, ' ', mxemp_emp_lname) as fullname,
                    GROUP_CONCAT(mx_attendance_first_half, '-', mx_attendance_second_half, '~', mx_attendance_date, '~', mx_attendance_id, '~*~' order by mx_attendance_date asc) as dates, 
                    mxdesg_name as designame, mxdpt_name as deptname, mxemp_emp_gender as gender FROM maxwell_attendance_2022_04 
                    INNER JOIN maxwell_employees_info ON mxemp_emp_id = mx_attendance_emp_code 
                    INNER JOIN maxwell_designation_master ON mxdesg_id = mxemp_emp_desg_code 
                    INNER JOIN maxwell_department_master ON mxdpt_id = mxemp_emp_dept_code  GROUP BY mx_attendance_emp_code 
ERROR - 2022-04-23 07:30:06 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:30:06 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:30:06 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:32:07 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:32:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:32:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:37:34 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:37:34 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:37:35 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 13:08:07 --> Query error: Table 'maxwelll_hrms.maxwell_attendance__01' doesn't exist - Invalid query: SELECT `mx_attendance_emp_code`, `mxcp_name` as `companyname`, `mxd_name` as `divisionname`, `mxst_state` as `statename`, `mxb_name` as `branchname`, count(*) as days, `mx_attendance_cmp_id`, `mx_attendance_division_id`, `mx_attendance_state_id`, `mx_attendance_branch_id`
FROM `maxwell_attendance__01`
LEFT JOIN `maxwell_company_master` ON `mxcp_id` = `mx_attendance_cmp_id`
LEFT JOIN `maxwell_division_master` ON `mxd_id` = `mx_attendance_division_id`
LEFT JOIN `maxwell_state_master` ON `mxst_id` = `mx_attendance_state_id`
LEFT JOIN `maxwell_branch_master` ON `mxb_id` = `mx_attendance_branch_id`
WHERE `mx_attendance_emp_code` IS NULL
ERROR - 2022-04-23 07:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:38:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:38:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:38:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:42:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:42:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:42:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:50:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:50:08 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:50:09 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:51:00 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:00 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:02 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:51:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:51:28 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:52:29 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:52:29 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:52:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:53:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:53:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:53:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:54:17 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:55:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:55:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:55:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 07:56:20 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:56:20 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 07:56:21 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:10:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:10:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:10:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:11:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:12:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:12:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:12:41 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:13:35 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:13:35 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:13:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:13:37 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:13:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:14:56 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:14:57 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:14:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 08:15:10 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:15:10 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 08:15:10 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:08:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:08:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:08:31 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 09:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-04-23 09:09:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:09:25 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 09:09:26 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 10:43:04 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /home/maxwelllogistics/public_html/maxwellhrms/application/controllers/Salaries_controller.php 1363
ERROR - 2022-04-23 10:55:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 10:55:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 10:55:38 --> 404 Page Not Found: Assets/js
ERROR - 2022-04-23 10:55:39 --> 404 Page Not Found: Assets/css

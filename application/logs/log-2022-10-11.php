<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-11 08:04:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:04:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:04:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:04:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 13:35:18 --> Query error: Column 'mxsal_pt_id' cannot be null - Invalid query: INSERT INTO `mxsal_m` (`mxsal_emp_code`, `mxsal_year_month`, `mxsal_cmp_id`, `mxsal_div_id`, `mxsal_branch_code`, `mxsal_dept_code`, `mxsal_grade_code`, `mxsal_desg_code`, `mxsal_state_code`, `mxsal_emp_type`, `mxsal_gross_sal`, `mxsal_present_days_from_attendance`, `mxsal_sundays_from_attendance`, `mxsal_public_holidays_from_attendance`, `mxsal_optional_holidays_from_attendance`, `mxsal_cl_from_attendance`, `mxsal_sl_from_attendance`, `mxsal_el_from_attendance`, `mxsal_ml_from_attendance`, `mxsal_lop_from_attendance`, `mxsal_total_days_from_attendance`, `mxsal_paid_status_flag`, `mxsal_basic`, `mxsal_hra`, `mxsal_total_ded`, `mxsal_actual_basic`, `mxsal_actual_hra`, `mxsal_actual_tsp`, `mxsal_actual_prof_charges`, `mxsal_tds_amount`, `mxsal_actual_gross`, `mxsal_pf_emp_cont`, `mxsal_pf_comp_cont`, `mxsal_pf_pension_cont`, `mxsal_pf_edli`, `mxsal_pf_admin`, `mxsal_eps_wages`, `mxsal_edli_wages`, `mxsal_esi_emp_cont`, `mxsal_esi_comp_cont`, `mxsal_esi_wages`, `mxsal_pt`, `mxsal_pt_id`, `mxsal_pt_no`, `mxsal_lwf_emp_cont`, `mxsal_lwf_comp_cont`, `mxsal_bonus`, `mxsal_bonus_percentage`, `mxsal_bonus_percentage_amount`, `mxsal_gratuity_amount`, `mxsal_lta_amount`, `mxsal_mediclaim_amount`, `mxsal_emp_weak_offs`, `mxsal_present_days`, `mxsal_emp_days_in_month`, `mxsal_incentive_amount`, `mxsal_miscelleneous_amount`, `mxsal_loan_amount`, `mxsal_net_sal`, `mxsal_ctc`) VALUES ('M0785', '202205', '1', '2', '32', '8', '11', '122', '21', '4', '31500', 0, '1', 0, 0, 0, 0, 0, 0, 30, 1, 1, 13230, 18270, 51, '427.00', '589.00', '0.00', '0.00', 0, 1016, '51.00', 15, '36.00', '2.00', '2.00', '427.00', '427.00', '0.00', '0.00', 0, 0, NULL, NULL, 0, 0, '427.00', '12', 51.24, '636.00', 0, 0, 5, '1.00', 31, 0, 0, 0, '965.00', 2135)
ERROR - 2022-10-11 08:45:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:45:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:45:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:45:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 08:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 09:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 09:29:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 09:29:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 09:29:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 09:29:47 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 15:17:36 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_11' doesn't exist - Invalid query: SELECT( 
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentCL,
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end)
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentSL, 
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentEL,  
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentML,  
                   
                    (select max(case when mxemp_leave_cron_short_name = 'EL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10' ) as AcumilatedEL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'CL' then mxemp_leave_cron_present_adding end)
                     from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10'  ) as AcumilatedCL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'SL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10' ) as AcumilatedSL,
                 
                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOAbsent,

                    ( select  sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOfirsthalfAbsent,

                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOsecondhalfAbsent,

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
                    mxdesg_name as designame, mxdpt_name as deptname, mxemp_emp_gender as gender FROM maxwell_attendance_2022_10 
                    INNER JOIN maxwell_employees_info ON mxemp_emp_id = mx_attendance_emp_code 
                    INNER JOIN maxwell_designation_master ON mxdesg_id = mxemp_emp_desg_code 
                    INNER JOIN maxwell_department_master ON mxdpt_id = mxemp_emp_dept_code  GROUP BY mx_attendance_emp_code 
ERROR - 2022-10-11 15:18:09 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_2021_11' doesn't exist - Invalid query: SELECT( 
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) 
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentCL,
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end)
                     from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentSL, 
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentEL,  
                   
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal end) 
                    from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id group by mxemp_leave_bal_emp_id) as CurrentML,  
                   
                    (select max(case when mxemp_leave_cron_short_name = 'EL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10' ) as AcumilatedEL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'CL' then mxemp_leave_cron_present_adding end)
                     from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10'  ) as AcumilatedCL,
                   
                    (select max(case when mxemp_leave_cron_short_name = 'SL' then mxemp_leave_cron_present_adding end) 
                    from maxwell_emp_leave_cron_history where mxemp_leave_cron_emp_id = mx_attendance_emp_code and mxemp_leave_cron_processdate = '2022_10' ) as AcumilatedSL,
                 
                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOAbsent,

                    ( select  sum(case when mx_attendance_first_half != 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOfirsthalfAbsent,

                    ( select  sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half != 'WO' then 1 else 0 end) from maxwell_attendance_2021_11
                    where mx_attendance_date in(0) and  mx_attendance_emp_code = mxemp_emp_id )AS WOsecondhalfAbsent,

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
                    mxdesg_name as designame, mxdpt_name as deptname, mxemp_emp_gender as gender FROM maxwell_attendance_2022_10 
                    INNER JOIN maxwell_employees_info ON mxemp_emp_id = mx_attendance_emp_code 
                    INNER JOIN maxwell_designation_master ON mxdesg_id = mxemp_emp_desg_code 
                    INNER JOIN maxwell_department_master ON mxdpt_id = mxemp_emp_dept_code  GROUP BY mx_attendance_emp_code 
ERROR - 2022-10-11 10:14:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 10:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 10:14:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:14:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 10:22:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:22:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:22:42 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 10:22:45 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2022-10-11 10:30:43 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:30:43 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:30:43 --> 404 Page Not Found: Assets/js
ERROR - 2022-10-11 10:30:46 --> 404 Page Not Found: Assets/js

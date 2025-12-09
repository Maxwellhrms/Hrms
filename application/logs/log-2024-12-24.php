<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-24 13:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-24'
AND `mxesi_affect_to` >= '2024-12-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-24 15:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-24'
AND `mxesi_affect_to` >= '2024-12-24'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-12-24 22:29:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_m inne' at line 1 - Invalid query:  select @serial_number:=@serial_number+1 as serial_number,mxsal_year_month as yearmonth,mxsal_emp_code as emp_code,concat(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxemp_emp_panno as pan,mxemp_emp_uan_number as uan,designation as designation,mxemp_emp_date_of_birth as dob,mxemp_emp_date_of_join as doj,mxemp_emp_resignation_relieving_date as dol,mxsal_actual_basic as basic,mxsal_actual_hra as hra,mxsal_misc_income as misc_income,mxsal_lta_amount as lta_amount,mxsal_mediclaim_amount as mediclaim_amount,mxsal_bonus as bonus,mxsal_incentive_amount as incenti_amount,others as others,others as others,total_sal as total_sal,mxsal_pf_comp_cont as pf,mxsal_esi_comp_cont as esi,mxsal_pt as pt,mxsal_tds_amount as tds,staff advance,others 1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_m inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code inner join maxwell_division_master on mxd_id = mxemp_emp_division_code inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code inner join maxwell_state_master on mxst_id = mxemp_emp_state_code left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason inner join (SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
                    -- Present History
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                    -- End Present History
                    -- Casualleave History
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    -- End Casualleave History
                    -- Sickleave History
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    -- End Sickleave History
                    -- Earnedleave History
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                    -- End Earnedleave History
                    -- Meternityleave History
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
                    -- End Meternityleave History
                FROM maxwell_attendance_2024_11
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance on  EmployeeID = mxsal_emp_code where mxsal_status=1 and mxsal_year_month=202411 and mxsal_cmp_id = 1 UNION ALL select @serial_number:=@serial_number+1 as serial_number,mxsal_year_month as yearmonth,mxsal_emp_code as emp_code,concat(mxemp_emp_fname,' ',mxemp_emp_lname) as name,mxemp_emp_panno as pan,mxemp_emp_uan_number as uan,designation as designation,mxemp_emp_date_of_birth as dob,mxemp_emp_date_of_join as doj,mxemp_emp_resignation_relieving_date as dol,mxsal_actual_basic as basic,mxsal_actual_hra as hra,mxsal_misc_income as misc_income,mxsal_lta_amount as lta_amount,mxsal_mediclaim_amount as mediclaim_amount,mxsal_bonus as bonus,mxsal_incentive_amount as incenti_amount,others as others,others as others,total_sal as total_sal,mxsal_pf_comp_cont as pf,mxsal_esi_comp_cont as esi,mxsal_pt as pt,mxsal_tds_amount as tds,staff advance,others 1,mxsal_total_ded as total_deduction, mxsal_net_sal as net_sal from mxsal_md inner join maxwell_employees_info on mxemp_emp_comp_code = mxsal_cmp_id and mxemp_emp_type = mxsal_emp_type and mxemp_emp_id = mxsal_emp_code inner join maxwell_company_master on mxcp_id = mxemp_emp_comp_code inner join maxwell_designation_master on mxdesg_id = mxemp_emp_desg_code inner join maxwell_department_master on mxdpt_id = mxemp_emp_dept_code inner join maxwell_division_master on mxd_id = mxemp_emp_division_code inner join maxwell_branch_master on mxb_id = mxemp_emp_branch_code inner join maxwell_grade_master on mxgrd_id = mxemp_emp_grade_code inner join maxwell_state_master on mxst_id = mxemp_emp_state_code left join maxwell_esi_reasons on mxesi_rsn_id = mxemp_emp_esi_reason inner join (SELECT
                    (
                    select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentCL,
                (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentSL,
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentEL,
                    -- NEW BY SHABABU(12-06-2022)-->  ML
                    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'ML' then mxemp_leave_bal_crnt_bal ELSE 0 end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
                    group by mxemp_leave_bal_emp_id) as CurrentML,
                    CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
                    count(*) AS Totaldays,
                    sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
                    sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half != 'PH' then 0.5 else 0 end) AS First_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half != 'PH' AND mx_attendance_second_half = 'PH' then 0.5 else 0 end) AS Second_Half_Public_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
                    sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half != 'OPH' then 0.5 else 0 end) AS First_Half_Optional_Holiday,
                    sum(case when mx_attendance_first_half != 'OPH' AND mx_attendance_second_half = 'OPH' then 0.5 else 0 end) AS Second_Half_Optional_Holiday,
                    -- Absent History
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
                    sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent,
                    -- End Absent History
                    -- Present History
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'PR' then 1 else 0 end) AS Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'AB' then 0.5 else 0 end) AS First_Half_Present,
                    sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS First_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Cl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS First_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_Sl_Applied,
                    sum(case when mx_attendance_first_half = 'PR' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS First_Half_Present_El_Applied,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'PR' then 0.5 else 0 end) AS Second_Half_Present_El_Applied,
                    -- End Present History
                    -- Casualleave History
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half = 'CL' then 1 else 0 end) AS Casualleave,
                    sum(case when mx_attendance_first_half = 'CL' AND mx_attendance_second_half != 'CL' then 0.5 else 0 end) AS First_Half_Casualleave,
                    sum(case when mx_attendance_first_half != 'CL' AND mx_attendance_second_half = 'CL' then 0.5 else 0 end) AS Second_Half_Casualleave,
                    -- End Casualleave History
                    -- Sickleave History
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half = 'SL' then 1 else 0 end) AS Sickleave,
                    sum(case when mx_attendance_first_half = 'SL' AND mx_attendance_second_half != 'SL' then 0.5 else 0 end) AS First_Half_Sickleave,
                    sum(case when mx_attendance_first_half != 'SL' AND mx_attendance_second_half = 'SL' then 0.5 else 0 end) AS Second_Half_Sickleave,
                    -- End Sickleave History
                    -- Earnedleave History
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half = 'EL' then 1 else 0 end) AS Earnedleave,
                    sum(case when mx_attendance_first_half = 'EL' AND mx_attendance_second_half != 'EL' then 0.5 else 0 end) AS First_Half_Earnedleave,
                    sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave,
                    -- End Earnedleave History
                    -- Meternityleave History
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half = 'ML' then 1 else 0 end) AS Meternityleave,
                    sum(case when mx_attendance_first_half = 'ML' AND mx_attendance_second_half != 'ML' then 0.5 else 0 end) AS First_Half_Meternityleave,
                    sum(case when mx_attendance_first_half != 'ML' AND mx_attendance_second_half = 'ML' then 0.5 else 0 end) AS Second_Half_Meternityleave
                    -- End Meternityleave History
                FROM maxwell_attendance_2024_11
                INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
                    
                GROUP BY EmployeeID) as attendance on  EmployeeID = mxsal_emp_code where mxsal_status=1 and mxsal_year_month=202411 and mxsal_cmp_id = 1

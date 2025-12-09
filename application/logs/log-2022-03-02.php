<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-02 00:54:23 --> Query error: Table 'maxwelll_hrms.maxwell_attendance_1970_01' doesn't exist - Invalid query: SELECT
     (
     select max(case when mxemp_leave_bal_leave_type_shrt_name = 'CL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentCL,
    (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'SL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentSL,
     (select max(case when mxemp_leave_bal_leave_type_shrt_name = 'EL' then mxemp_leave_bal_crnt_bal end) from maxwell_emp_leave_balance where mx_attendance_emp_code = mxemp_leave_bal_emp_id
     group by mxemp_leave_bal_emp_id) as CurrentEL,
      CONCAT(mxemp_emp_fname , ' ' , mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,
        count(*) AS Totaldays,
        sum(case when mx_attendance_first_half = 'WO' AND mx_attendance_second_half = 'WO' then 1 else 0 end) AS Week_Off,
        sum(case when mx_attendance_first_half = 'PH' AND mx_attendance_second_half = 'PH' then 1 else 0 end) AS Public_Holiday,
        sum(case when mx_attendance_first_half = 'OPH' AND mx_attendance_second_half = 'OPH' then 1 else 0 end) AS Optional_Holiday,
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
        sum(case when mx_attendance_first_half != 'EL' AND mx_attendance_second_half = 'EL' then 0.5 else 0 end) AS Second_Half_Earnedleave
        -- End Earnedleave History
    FROM maxwell_attendance_1970_01
    INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
     where mx_attendance_emp_code = 'MD0005'
    GROUP BY EmployeeID
ERROR - 2022-03-02 15:51:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-02 15:51:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-02 15:51:01 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-02 15:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-02 15:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-02 15:51:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-02 15:51:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-03-02 15:51:38 --> 404 Page Not Found: Assets/js

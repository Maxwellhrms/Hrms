<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-01-23 23:43:39 --> Query error: Column 'mxd_name' in field list is ambiguous - Invalid query: SELECT concat(mxemp_emp_fname, ' ', mxemp_emp_lname) as employeename, `mxar_id` as `uniqid`, `mxar_category_type` as `category_type`, `mxar_appliedby_emp_code` as `employeeid`, `mxar_from` as `from`, `mxar_to` as `to`, `mxar_reason` as `reason`, `mxar_desc` as `emp_description`, `mxar_intime` as `intime`, `mxar_outtime` as `outtime`, `mxar_status` as `status`, `mxar_auth1_status` as `auth1status`, `mxar_auth2_status` as `auth2status`, `mxar_auth3_status` as `auth3status`, `mxar_auth4_status` as `auth4status`, `mxar_authfinal_status` as `authfinalstatus`, `mxar_auth1_empcode` as `auth1`, `mxar_auth2_empcode` as `auth2`, `mxar_auth3_empcode` as `auth3`, `mxar_auth4_empcode` as `auth4`, `mxar_authfinal_empcode` as `authfinal`, concat(mxar_auth1_empcode, ' ', mxar_auth1_empname) as authempname1, concat(mxar_auth2_empcode, ' ', mxar_auth2_empname) as authempname2, concat(mxar_auth3_empcode, ' ', mxar_auth3_empname) as authempname3, concat(mxar_auth4_empcode, ' ', mxar_auth4_empname) as authempname4, concat(mxar_authfinal_empcode, ' ', mxar_authfinal_empname) as authfinalempname, concat(mxar_hrfinal_accept, ' ', mxar_hrfinal_acceptname) as hrfinalempname, `mxar_auth1_remarks` as `auth1desc`, `mxar_auth2_remarks` as `auth2desc`, `mxar_auth3_remarks` as `auth3desc`, `mxar_auth4_remarks` as `auth4desc`, `mxar_authfinal_remarks` as `authfinaldesc`, `mxd_name` as `divisionname`, `mxb_name` as `branchname`, `mxst_state` as `statename`
FROM `attendance_regulation`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mxar_appliedby_emp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxar_div_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxar_branch_id`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxar_state_id`
LEFT JOIN `maxwell_division_master` as `otdiv` ON `otdiv`.`mxd_id` = `mxar_ot_div_id`
LEFT JOIN `maxwell_state_master` as `otst` ON `otst`.`mxst_id` = `mxar_ot_state_id`
WHERE `mxar_status` = '1'
AND `mxar_type` = 'OT'
AND `mxar_comp_id` = '1'
AND DATE_FORMAT(mxar_from,'%Y-%m') = '2023-01'
ORDER BY `mxar_createdtime` DESC
ERROR - 2023-01-23 18:13:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-01-23 18:13:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-01-23 18:13:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-01-23 18:13:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-01-23 18:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-23 23:43:55 --> Query error: Column 'mxd_name' in field list is ambiguous - Invalid query: SELECT concat(mxemp_emp_fname, ' ', mxemp_emp_lname) as employeename, `mxar_id` as `uniqid`, `mxar_category_type` as `category_type`, `mxar_appliedby_emp_code` as `employeeid`, `mxar_from` as `from`, `mxar_to` as `to`, `mxar_reason` as `reason`, `mxar_desc` as `emp_description`, `mxar_intime` as `intime`, `mxar_outtime` as `outtime`, `mxar_status` as `status`, `mxar_auth1_status` as `auth1status`, `mxar_auth2_status` as `auth2status`, `mxar_auth3_status` as `auth3status`, `mxar_auth4_status` as `auth4status`, `mxar_authfinal_status` as `authfinalstatus`, `mxar_auth1_empcode` as `auth1`, `mxar_auth2_empcode` as `auth2`, `mxar_auth3_empcode` as `auth3`, `mxar_auth4_empcode` as `auth4`, `mxar_authfinal_empcode` as `authfinal`, concat(mxar_auth1_empcode, ' ', mxar_auth1_empname) as authempname1, concat(mxar_auth2_empcode, ' ', mxar_auth2_empname) as authempname2, concat(mxar_auth3_empcode, ' ', mxar_auth3_empname) as authempname3, concat(mxar_auth4_empcode, ' ', mxar_auth4_empname) as authempname4, concat(mxar_authfinal_empcode, ' ', mxar_authfinal_empname) as authfinalempname, concat(mxar_hrfinal_accept, ' ', mxar_hrfinal_acceptname) as hrfinalempname, `mxar_auth1_remarks` as `auth1desc`, `mxar_auth2_remarks` as `auth2desc`, `mxar_auth3_remarks` as `auth3desc`, `mxar_auth4_remarks` as `auth4desc`, `mxar_authfinal_remarks` as `authfinaldesc`, `mxd_name` as `divisionname`, `mxb_name` as `branchname`, `mxst_state` as `statename`
FROM `attendance_regulation`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mxar_appliedby_emp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxar_div_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxar_branch_id`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxar_state_id`
LEFT JOIN `maxwell_division_master` as `otdiv` ON `otdiv`.`mxd_id` = `mxar_ot_div_id`
LEFT JOIN `maxwell_state_master` as `otst` ON `otst`.`mxst_id` = `mxar_ot_state_id`
WHERE `mxar_status` = '1'
AND `mxar_type` = 'OT'
AND `mxar_comp_id` = '1'
AND DATE_FORMAT(mxar_from,'%Y-%m') = '2023-01'
ORDER BY `mxar_createdtime` DESC
ERROR - 2023-01-23 23:44:06 --> Query error: Column 'mxd_name' in field list is ambiguous - Invalid query: SELECT concat(mxemp_emp_fname, ' ', mxemp_emp_lname) as employeename, `mxar_id` as `uniqid`, `mxar_category_type` as `category_type`, `mxar_appliedby_emp_code` as `employeeid`, `mxar_from` as `from`, `mxar_to` as `to`, `mxar_reason` as `reason`, `mxar_desc` as `emp_description`, `mxar_intime` as `intime`, `mxar_outtime` as `outtime`, `mxar_status` as `status`, `mxar_auth1_status` as `auth1status`, `mxar_auth2_status` as `auth2status`, `mxar_auth3_status` as `auth3status`, `mxar_auth4_status` as `auth4status`, `mxar_authfinal_status` as `authfinalstatus`, `mxar_auth1_empcode` as `auth1`, `mxar_auth2_empcode` as `auth2`, `mxar_auth3_empcode` as `auth3`, `mxar_auth4_empcode` as `auth4`, `mxar_authfinal_empcode` as `authfinal`, concat(mxar_auth1_empcode, ' ', mxar_auth1_empname) as authempname1, concat(mxar_auth2_empcode, ' ', mxar_auth2_empname) as authempname2, concat(mxar_auth3_empcode, ' ', mxar_auth3_empname) as authempname3, concat(mxar_auth4_empcode, ' ', mxar_auth4_empname) as authempname4, concat(mxar_authfinal_empcode, ' ', mxar_authfinal_empname) as authfinalempname, concat(mxar_hrfinal_accept, ' ', mxar_hrfinal_acceptname) as hrfinalempname, `mxar_auth1_remarks` as `auth1desc`, `mxar_auth2_remarks` as `auth2desc`, `mxar_auth3_remarks` as `auth3desc`, `mxar_auth4_remarks` as `auth4desc`, `mxar_authfinal_remarks` as `authfinaldesc`, `mxd_name` as `divisionname`, `mxb_name` as `branchname`, `mxst_state` as `statename`
FROM `attendance_regulation`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mxar_appliedby_emp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxar_div_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxar_branch_id`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxar_state_id`
LEFT JOIN `maxwell_division_master` as `otdiv` ON `otdiv`.`mxd_id` = `mxar_ot_div_id`
LEFT JOIN `maxwell_state_master` as `otst` ON `otst`.`mxst_id` = `mxar_ot_state_id`
WHERE `mxar_status` = '1'
AND `mxar_type` = 'OT'
AND `mxar_comp_id` = '1'
AND DATE_FORMAT(mxar_from,'%Y-%m') = '2023-01'
ORDER BY `mxar_createdtime` DESC
ERROR - 2023-01-23 23:44:17 --> Query error: Column 'mxd_name' in field list is ambiguous - Invalid query: SELECT concat(mxemp_emp_fname, ' ', mxemp_emp_lname) as employeename, `mxar_id` as `uniqid`, `mxar_category_type` as `category_type`, `mxar_appliedby_emp_code` as `employeeid`, `mxar_from` as `from`, `mxar_to` as `to`, `mxar_reason` as `reason`, `mxar_desc` as `emp_description`, `mxar_intime` as `intime`, `mxar_outtime` as `outtime`, `mxar_status` as `status`, `mxar_auth1_status` as `auth1status`, `mxar_auth2_status` as `auth2status`, `mxar_auth3_status` as `auth3status`, `mxar_auth4_status` as `auth4status`, `mxar_authfinal_status` as `authfinalstatus`, `mxar_auth1_empcode` as `auth1`, `mxar_auth2_empcode` as `auth2`, `mxar_auth3_empcode` as `auth3`, `mxar_auth4_empcode` as `auth4`, `mxar_authfinal_empcode` as `authfinal`, concat(mxar_auth1_empcode, ' ', mxar_auth1_empname) as authempname1, concat(mxar_auth2_empcode, ' ', mxar_auth2_empname) as authempname2, concat(mxar_auth3_empcode, ' ', mxar_auth3_empname) as authempname3, concat(mxar_auth4_empcode, ' ', mxar_auth4_empname) as authempname4, concat(mxar_authfinal_empcode, ' ', mxar_authfinal_empname) as authfinalempname, concat(mxar_hrfinal_accept, ' ', mxar_hrfinal_acceptname) as hrfinalempname, `mxar_auth1_remarks` as `auth1desc`, `mxar_auth2_remarks` as `auth2desc`, `mxar_auth3_remarks` as `auth3desc`, `mxar_auth4_remarks` as `auth4desc`, `mxar_authfinal_remarks` as `authfinaldesc`, `mxd_name` as `divisionname`, `mxb_name` as `branchname`, `mxst_state` as `statename`
FROM `attendance_regulation`
INNER JOIN `maxwell_employees_info` ON `mxemp_emp_id` = `mxar_appliedby_emp_code`
INNER JOIN `maxwell_division_master` ON `mxd_id` = `mxar_div_id`
INNER JOIN `maxwell_branch_master` ON `mxb_id` = `mxar_branch_id`
INNER JOIN `maxwell_state_master` ON `mxst_id` = `mxar_state_id`
LEFT JOIN `maxwell_division_master` as `otdiv` ON `otdiv`.`mxd_id` = `mxar_ot_div_id`
LEFT JOIN `maxwell_state_master` as `otst` ON `otst`.`mxst_id` = `mxar_ot_state_id`
WHERE `mxar_status` = '1'
AND `mxar_type` = 'OT'
AND `mxar_comp_id` = '1'
AND DATE_FORMAT(mxar_from,'%Y-%m') = '2023-01'
ORDER BY `mxar_createdtime` DESC

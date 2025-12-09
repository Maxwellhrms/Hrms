<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-01 00:00:03 --> Severity: error --> Exception: Parameter $source should be an array. /home/maxwelllogistics/public_html/maxwellhrms/application/libraries/PHPExcel-1.8/Classes/PHPExcel/Worksheet.php 2446
ERROR - 2023-04-01 07:48:39 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 07:48:39 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 07:48:39 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 07:48:39 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 07:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 15:43:53 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:14 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:15 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:16 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:16 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:16 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:16 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:17 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:17 --> Unable to connect to the database
ERROR - 2023-04-01 15:45:17 --> Unable to connect to the database
ERROR - 2023-04-01 16:04:47 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:04:47 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:05:02 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:05:02 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:05:02 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:05:03 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:27:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-01 16:49:15 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:15 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:49:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:44 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:59 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:59 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:49:59 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:00 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:16 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 16:50:16 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 16:50:20 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 16:57:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:57:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:57:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:57:50 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 16:58:42 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'maxwellhrms_hr.maxwell_employees_info.mxemp_emp_fname' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: select CONCAT(mxemp_emp_fname,' ', mxemp_emp_lname) as EmployeeName,mx_attendance_emp_code as EmployeeID,mx_attendance_date,
            
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half = 'AB' then 1 else 0 end) AS Absent,
            sum(case when mx_attendance_first_half = 'AB' AND mx_attendance_second_half != 'AB' then 0.5 else 0 end) AS First_Half_Absent,
            sum(case when mx_attendance_second_half = 'AB' AND mx_attendance_first_half != 'AB' then 0.5 else 0 end) AS Second_Half_Absent
            
            FROM maxwell_attendance_2023_04
            INNER JOIN maxwell_employees_info on mxemp_emp_id = mx_attendance_emp_code
            WHERE mx_attendance_cmp_id = 1  and (mx_attendance_first_half = 'AB' OR mx_attendance_second_half = 'AB')
            GROUP BY EmployeeID
ERROR - 2023-04-01 18:14:09 --> 404 Page Not Found: Env/index
ERROR - 2023-04-01 18:44:07 --> 404 Page Not Found: Ab2g/index
ERROR - 2023-04-01 18:44:07 --> 404 Page Not Found: Ab2h/index
ERROR - 2023-04-01 18:44:14 --> 404 Page Not Found: T4/index
ERROR - 2023-04-01 18:44:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-01 19:25:47 --> 404 Page Not Found: OStF/index
ERROR - 2023-04-01 20:05:46 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 20:05:46 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 20:05:50 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 20:06:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-04-01 20:06:16 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 20:06:16 --> 404 Page Not Found: Assets/ckeditor
ERROR - 2023-04-01 20:06:16 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 20:06:17 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 20:06:17 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 20:06:17 --> 404 Page Not Found: Assets/js
ERROR - 2023-04-01 20:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-01 21:15:17 --> 404 Page Not Found: Owa/auth
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Env/index
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Infophp/index
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Server-status/index
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Debug/default
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Git/config
ERROR - 2023-04-01 23:09:36 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-04-01 23:09:37 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-04-01 23:09:37 --> 404 Page Not Found: Server-status/index
ERROR - 2023-04-01 23:09:37 --> 404 Page Not Found: Infophp/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Git/config
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Env/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Debug/default
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Api/search
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Configjson/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: About/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Git/config
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-04-01 23:09:38 --> 404 Page Not Found: About/index
ERROR - 2023-04-01 23:09:39 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-04-01 23:09:39 --> 404 Page Not Found: Configjson/index
ERROR - 2023-04-01 23:09:39 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-04-01 23:09:39 --> 404 Page Not Found: Api/search
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Debug/default
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Server-status/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Infophp/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Git/config
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Env/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: About/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Api/search
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: Configjson/index
ERROR - 2023-04-01 23:09:41 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-04-01 23:09:42 --> 404 Page Not Found: Env/index
ERROR - 2023-04-01 23:09:42 --> 404 Page Not Found: Git/config
ERROR - 2023-04-01 23:09:42 --> 404 Page Not Found: Server-status/index
ERROR - 2023-04-01 23:09:42 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-04-01 23:09:42 --> 404 Page Not Found: Infophp/index
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Debug/default
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Api/search
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: Configjson/index
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-04-01 23:09:43 --> 404 Page Not Found: About/index
ERROR - 2023-04-01 23:09:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-01 23:29:41 --> 404 Page Not Found: OStF/index

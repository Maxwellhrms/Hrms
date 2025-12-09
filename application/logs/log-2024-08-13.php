<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-13 15:21:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-08-13'
AND `mxesi_affect_to` >= '2024-08-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-08-13 17:03:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-08-13'
AND `mxesi_affect_to` >= '2024-08-13'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-08-13 17:16:20 --> Severity: error --> Exception: syntax error, unexpected 'int' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/maxwellhrms/public_html/application/third_party/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php 35
ERROR - 2024-08-13 17:18:10 --> Severity: error --> Exception: syntax error, unexpected 'int' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/maxwellhrms/public_html/application/third_party/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php 35
ERROR - 2024-08-13 17:18:40 --> Severity: error --> Exception: syntax error, unexpected 'int' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/maxwellhrms/public_html/application/third_party/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php 35
ERROR - 2024-08-13 17:18:42 --> Severity: error --> Exception: syntax error, unexpected 'int' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/maxwellhrms/public_html/application/third_party/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php 35
ERROR - 2024-08-13 17:19:19 --> Severity: error --> Exception: syntax error, unexpected 'bool' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST) /home/maxwellhrms/public_html/application/third_party/PhpSpreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php 41
ERROR - 2024-08-13 17:39:59 --> Severity: error --> Exception: Call to undefined method PHPExcel_Worksheet::setWidth() /home/maxwellhrms/public_html/application/controllers/Export_excell_spreadsheet.php 25

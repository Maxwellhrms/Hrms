<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-18 08:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2025-05-18'
AND `mxesi_affect_to` >= '2025-05-18'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2025-05-18 23:57:40 --> Severity: Warning --> filesize(): stat failed for /tmp/maxwell_sessionf0e937c13b5bd6ad0055cd7ba2cfc2bbf03998ed /home/maxwellhrms/public_html/system/libraries/Session/drivers/Session_files_driver.php 212
ERROR - 2025-05-18 23:57:40 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/maxwellhrms/public_html/system/core/Exceptions.php:271) /home/maxwellhrms/public_html/system/libraries/Session/Session.php 143

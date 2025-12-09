<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-02 07:23:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Common.php:131) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2024-12-02 07:23:16 --> Severity: Compile Error --> Cannot declare class Common, because the name is already in use /home/maxwellhrms/public_html/application/controllers/Common.php 131
ERROR - 2024-12-02 11:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-12-02'
AND `mxesi_affect_to` >= '2024-12-02'
AND FIND_IN_SET(, mxesi_emp_types) > 0

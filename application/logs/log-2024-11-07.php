<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-07 11:04:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' mxesi_emp_types) > 0' at line 9 - Invalid query: SELECT *
FROM `maxwell_esi_master`
WHERE `mxesi_status` = 1
AND `mxesi_div_id` IS NULL
AND `mxesi_state_id` IS NULL
AND `mxesi_branch_id` IS NULL
AND `mxesi_affect_from` <= '2024-11-07'
AND `mxesi_affect_to` >= '2024-11-07'
AND FIND_IN_SET(, mxesi_emp_types) > 0
ERROR - 2024-11-07 17:48:50 --> Query error: Column 'mx_loan_master_id' cannot be null - Invalid query: INSERT INTO `maxwell_loan_sal_log` (`mx_loan_emp_id`, `mx_loan_month`, `mx_loan_emi_amount`, `mx_loan_master_id`, `mx_loan_transaction_id`) VALUES ('M0753', '202410', 0, NULL, NULL)
ERROR - 2024-11-07 19:58:00 --> Query error: Column 'mx_loan_master_id' cannot be null - Invalid query: INSERT INTO `maxwell_loan_sal_log` (`mx_loan_emp_id`, `mx_loan_month`, `mx_loan_emi_amount`, `mx_loan_master_id`, `mx_loan_transaction_id`) VALUES ('M0386', '202410', 0, NULL, NULL)
ERROR - 2024-11-07 21:34:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/maxwellhrms/public_html/application/controllers/Common.php:131) /home/maxwellhrms/public_html/system/core/Common.php 570
ERROR - 2024-11-07 21:34:58 --> Severity: Compile Error --> Cannot declare class Common, because the name is already in use /home/maxwellhrms/public_html/application/controllers/Common.php 131

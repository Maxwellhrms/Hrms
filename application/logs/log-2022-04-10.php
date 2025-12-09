<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-10 15:54:20 --> Query error: Unknown column '$subquery' in 'where clause' - Invalid query: SELECT `mxpf_affect_from` as `max_affect_date`, `mxpf_id`
FROM `maxwell_pf_master`
WHERE `mxpf_comp_id` = '1'
AND `mxpf_status` = 1
AND `mxpf_affect_from` in($subquery)
ORDER BY `mxpf_affect_from` desc

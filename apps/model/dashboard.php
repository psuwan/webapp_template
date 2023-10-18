<?php

date_default_timezone_set('Asia/Bangkok');

$current_view = $config['PATH_TO_VIEW'] . DS . 'dashboard' . DS;
include_once $config['PATH_TO_DATA']  . 'data_machine.php';

switch (get('action')) {
    default:
    case 'view':
        $machNum = get('machine');
        if (empty($machNum)) {
            $machNum = 1;
        }
        $machDat = data4MachNum_array($machNum);
        $view = $current_view . 'machine.phtml';
        break;
}

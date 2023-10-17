<?php

date_default_timezone_set('Asia/Bangkok');

$current_view = $config['PATH_TO_VIEW'] . DS . 'dashboard' . DS;
include_once $config['DATA_PATH']  . 'data_machine.php';

switch (get('action')) {
    default:
    case 'view':
        switch (get('machine')) {
            case 'mch01':
                $view = $current_view . 'machine.phtml';
                break;
        }
        break;
}

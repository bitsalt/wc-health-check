<?php
require 'vendor/autoload.php';
require 'assets/conf.php';

$dir = '';
$subdir = false;

$headerText = 'WCPSS Employee Health Screening';

// set vars according to environment
if (in_array($env, $envArr)) {
    $headerText .= '&nbsp; &nbsp; <strong> &mdash; TESTING ENVIRONMENT &mdash;</strong>';
    $toAddr = 'cherwelldevhelpdesk@wcpss.net';
}

require 'header.php';

$alertMsg = '';
$alertWarn = false;

if (isset($_POST['token'])) {
    $healthFlag = false;
    $boolArrKeys = ['q_1', 'q_2', 'q_3', 'q_4', 'q_5', 'q_6'];
    foreach($_POST as $key => $post) {
        if(in_array($key, $boolArrKeys)) {
            if($post == 1) {
                $healthFlag = true;
            }
        }
        elseif ($key == 'q_7' && $post > 100.4) {
            $healthFlag = true;
        }

    }

    if ($healthFlag) {
        require 'failing.php';
    }
    else {
        require 'passing.php';
    }
} else {
    require 'main-form.php';
}
require 'footer.php';



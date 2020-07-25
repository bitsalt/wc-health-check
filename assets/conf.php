<?php
/**
 * Common code for both languages
 * Author: Jeff Moser
 * Date: 3/30/20
 * Time: 11:51 AM
 */

session_start();

$filepath = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

// set vars according to environment
$envArr = ['staformdevl.wcpss.net', 'staformtest.wcpss.net', 'staform.local']; // These are dev/test environments
$env = $_SERVER['HTTP_HOST']; // ...the actual environment
$toAddr = 'helpdesk@wcpss.net'; // Defaulting to the live email
$googleReCaptchaSiteKey = '6LemvbEZAAAAAHZ4rAxhmhPJTTQkz00KaQ8CCXiE';
$googleReCaptchaSecretKey = '6LemvbEZAAAAALYUU-y7y-4zHPe-lFBx0FihtiYB';

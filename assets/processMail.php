<?php
$headers = "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: Student Technology Assistance Form <noreply@wcpss.net>\r\n";
$headers .= "Bcc: mnilsen@wcpss.net\r\n";

$subj = 'SUPPORT NEEDED FROM STUDENT/PARENT ('.$_POST['school_select'].')';

// language switch
$language = 'English';
if ($_POST["language_select"] != 'English') {
    $language = 'Bilingual';
}

$msg = "IP Address: ".$_SERVER['REMOTE_ADDR']."<br>
Created on: ".date('m-d-Y H:i:s')."<br>
Student ID: ".$_POST["student_id"]."<br>
School: ".$_POST["school_select"]."<br>
Student FName: ".$_POST["student_first_name"]."<br>
Student LName: ".$_POST["student_last_name"]."<br>
Parent FName: ".$_POST["parent_first_name"]."<br>
Parent LName: ".$_POST["parent_last_name"]."<br>
Parent E-mail Address: ".$_POST["parent_email"]."<br>
Contact Number: ".$_POST["contact_number"]."<br>
Prefered Language: ".$_POST["language_select"]."<br>
Tech Support Language: ".$language."<br>
Description: ".$_POST["problem_text"];

mail($toAddr, $subj, $msg, $headers);

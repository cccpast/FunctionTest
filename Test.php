<?php
require_once __dir__ . "/Functions.php";

$date1 = "2018-01-01 00:00:00";
$date2 = "2018-01-02 01:11:21";
$date = Functions::diffDate($date1, $date2);
$hour = Functions::convertTime($date);
$_date = Functions::convertTime2($date1, $date2);
var_dump($date);
var_dump($hour);
var_dump($_date);

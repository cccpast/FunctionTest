<?php
require_once __dir__ . "/Functions.php";

$date1 = "2018-01-01 00:15:00";
$date2 = "2018-01-02 01:00:25";
$date = Functions::diffDate($date1, $date2);
$hour = Functions::convertTime($date);
var_dump($date);
var_dump($hour);

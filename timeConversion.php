<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
    $timeArray = explode(':', $s);
    $hour = $timeArray[0];
    $minute = $timeArray[1];
    $sec = $timeArray[2];
    $period = substr($sec, 2);
    $originalSec = rtrim($sec, $period);
    $newTime;
    if((0 <= $hour && $hour < 12) && ($period == 'AM')) {
        $newTime = $hour.":".$minute.":".$originalSec;
    }elseif ((0 <= $hour && $hour < 12) && ($period == 'PM')) {
        $newTime = 12+$hour.":".$minute.":".$originalSec;
    }elseif (($hour == 12) && ($period == 'AM')) {
        $newTime = "00".":".$minute.":".$originalSec;
    }elseif (($hour == 12) && ($period == 'PM')) {
        $newTime = $hour.":".$minute.":".$originalSec;
    }

    return $newTime;     



}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);

?>
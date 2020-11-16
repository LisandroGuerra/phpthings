<?php
function days_diff($date){
    $today = strtotime(date("Y-m-d"));
    $date = strtotime($date);
    $days_diff = (int)floor(($today - $date)/(60*60*24));
    return $days_diff;
}


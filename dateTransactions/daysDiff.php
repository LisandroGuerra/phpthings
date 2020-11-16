<?php
function dif_dias($data){
    $hoje = strtotime(date("Y-m-d"));
    $data = strtotime($data);
    $dif_dias = (int)floor(($hoje - $data)/(60*60*24));
    return $dif_dias;
}


<?php
// returns document numbers without special characters and punctuation
function clean($num){
$num = preg_replace('/[./-#_]/', '', $num);
   return $num;
}
?>
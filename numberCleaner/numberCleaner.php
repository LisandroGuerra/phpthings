<?php
// returns document numbers without special characters and punctuation
function limpa($num){
$num = preg_replace('/[./-#_]/', '', $num);
   return $num;
}
?>
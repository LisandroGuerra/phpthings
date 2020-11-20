<?php
// returns document numbers without special characters and punctuation
function clean($docNumber){
$docNumber = preg_replace('/[./-#_]/', '', $docNumber);
   return $docNumber;
}
?>
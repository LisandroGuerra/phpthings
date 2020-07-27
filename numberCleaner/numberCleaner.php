<?php
function limpa($num){
$num = preg_replace('/[.-]/', '', $num);
   return $num;
}
?>
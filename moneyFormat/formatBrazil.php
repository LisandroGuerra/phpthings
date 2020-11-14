<?php
// formats a number to Brazilian currency
function formatBRL($value){
    return number_format($value, 2, ',', '.');
}
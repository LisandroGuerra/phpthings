<?php
// returns the string without acentuation and in upcase
// header('Content-Type: text/html; charset=utf-8');
function normaliza($string){
			$special  =  'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
			$normal  =  'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
			$string = strtr($string, utf8_decode($special), $normal);
			$string = strtoupper($string);
			return utf8_decode($string);
		}
?>
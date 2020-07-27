<?php
header('Content-Type: text/html; charset=utf-8');
function normaliza($string){
			$acentos  =  'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
			$sem_acentos  =  'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
			$string = strtr($string, utf8_decode($acentos), $sem_acentos);
			$string = strtoupper($string);
			return utf8_decode($string);
		}
?>
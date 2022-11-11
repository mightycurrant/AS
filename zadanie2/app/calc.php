<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota_kredytu,&$il_rat,&$oprocentowanie){

	$kwota_kredytu = isset($_REQUEST ['kwota_kredytu']) ? $_REQUEST ['kwota_kredytu'] : null;
	$il_rat = isset($_REQUEST ['il_rat']) ? $_REQUEST ['il_rat'] : null;
	$oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
}

function validate(&$kwota_kredytu,&$il_rat,&$oprocentowanie,&$messages){
	if ( ! (isset($kwota_kredytu) && isset($il_rat) && isset($oprocentowanie))) {
		return false;
	}

	if ( $kwota_kredytu == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $il_rat == "") {
		$messages [] = 'Nie podano ilosci rat';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $kwota_kredytu )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $il_rat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Trzecia wartość nie jest liczbą zmiennoprzecinkowa';
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota_kredytu,&$il_rat,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	$odsetki = null;
	$kredyt = null;
	$odsetki = floatval($odsetki);
	$kredyt = floatval($kredyt);
	$kwota_kredytu = intval($kwota_kredytu);
	$il_rat = intval($il_rat);
	$oprocentowanie = floatval($oprocentowanie);
	
	if ($role == 'user'){
		if($kwota_kredytu < 50000) {
			$odsetki = $kwota_kredytu*($oprocentowanie/100)*30.5/365;
			$kredyt = $kwota_kredytu+($odsetki*$il_rat);
			$result = round($kredyt, 2);
		}
		else {
			$messages [] = 'Tylko administrator może obliczyc kwotę kredytu powyżej 50000 PLN';
		}
	}

	if ($role == 'admin'){
		$odsetki = $kwota_kredytu*($oprocentowanie/100)*30.5/365;
		$kredyt = $kwota_kredytu+($odsetki*$il_rat);
		$result = round($kredyt, 2);
	}
}

$odsetki = null;
$kredyt = null;
$kwota_kredytu = null;
$il_rat = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota_kredytu,$il_rat,$oprocentowanie);
if ( validate($kwota_kredytu,$il_rat,$oprocentowanie,$messages) ) {
	process($kwota_kredytu,$il_rat,$oprocentowanie,$messages,$result);
}
include 'calc_view.php';
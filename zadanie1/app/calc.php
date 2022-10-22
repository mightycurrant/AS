<?php
require_once dirname(__FILE__).'/../config.php';

$kwota_kredytu = $_REQUEST ['kwota_kredytu'];
$il_rat = $_REQUEST ['il_rat'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];


if ( ! (isset($kwota_kredytu) && isset($il_rat) && isset($oprocentowanie))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

if (empty( $messages )) {
	
	if (! is_numeric( $kwota_kredytu )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $il_rat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
}

if (empty ( $messages )) {
	$odsetki = '';
	$odsetki = floatval($odsetki);
	$kwota_kredytu = intval($kwota_kredytu);
	$il_rat = intval($il_rat);
	$oprocentowanie = floatval($oprocentowanie);
	
	$odsetki = ($kwota_kredytu*(($oprocentowanie/$kwota_kredytu)*100));
	$result = (($kwota_kredytu/$il_rat)+($odsetki))*$il_rat;
}
include 'calc_view.php';
<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){

	$form['kwota_kredytu'] = isset($_REQUEST ['kwota_kredytu']) ? $_REQUEST ['kwota_kredytu'] : null;
	$form['il_rat'] = isset($_REQUEST ['il_rat']) ? $_REQUEST ['il_rat'] : null;
	$form['oprocentowanie'] = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
}

function validate(&$form,&$infos,&$msgs){
	if ( ! (isset($form['kwota_kredytu']) && isset($form['il_rat']) && isset($form['oprocentowanie']))) return false;

	$infos [] = 'Przekazano parametry.';

	if ( $form['kwota_kredytu'] == "") $msgs [] = 'Nie podano kwoty kredytu';
	if ( $form['il_rat'] == "") $msgs [] = 'Nie podano ilosci rat';
	if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania';
	
	if (count ($msgs) == 0) {
		if (! is_numeric( $form['kwota_kredytu'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą całkowitą';
		if (! is_numeric( $form['il_rat'] )) $msgs [] = 'Druga wartość nie jest liczbą całkowitą';
		if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Trzecia wartość nie jest liczbą zmiennoprzecinkową';
	}

	if (count ($msgs) > 0) return false;
	else return true;
}

function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	$odsetki = null;
	$kredyt = null;
	$odsetki = floatval($odsetki);
	$kredyt = floatval($kredyt);

	$form['kwota_kredytu'] = intval($form['kwota_kredytu']);
	$form['il_rat'] = intval($form['il_rat']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
	
	$odsetki = $form['kwota_kredytu']*($form['oprocentowanie']/100)*30.5/365;
	$kredyt = $form['kwota_kredytu']+($odsetki*$form['il_rat']);
	$result = round($kredyt, 2);
	
}

$odsetki = null;
$kredyt = null;
$form = null;
$result = null;
$infos = array();
$msgs = array();

getParams($form);
if ( validate($form,$infos,$msgs) ){
	process($form,$infos,$msgs,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$msgs);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');
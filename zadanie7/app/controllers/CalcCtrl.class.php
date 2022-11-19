<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;
	private $result;

	 
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kwota_kredytu = getFromRequest('kwota_kredytu');
		$this->form->il_rat = getFromRequest('il_rat');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	
	public function validate() {
		if (! (isset ( $this->form->kwota_kredytu ) && isset ( $this->form->il_rat ) && isset ( $this->form->oprocentowanie ))) {
			return false;
		}

		
		if ($this->form->kwota_kredytu == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->il_rat == "") {
			getMessages()->addError('Nie podano ilosci rat');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		if (! getMessages()->isError()) {
			if (! is_numeric ( $this->form->kwota_kredytu )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->il_rat )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Druga wartość nie jest liczbą zmiennoprzecinkową');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->kwota_kredytu = intval($this->form->kwota_kredytu);
			$this->form->il_rat = intval($this->form->il_rat);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
			
			$this->result->odsetki = $this->form->kwota_kredytu*($this->form->oprocentowanie/100)*30.5/365;
			$this->result->kredyt = $this->form->kwota_kredytu+($this->result->odsetki*$this->form->il_rat);
			$this->result->result = round($this->result->kredyt, 2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze kredytowym');
		$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		getSmarty()->assign('page_header','Obiekty w PHP');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

		getSmarty()->display('CalcView.tpl');
	}
}
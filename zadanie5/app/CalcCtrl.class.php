<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;
	private $form;
	private $result;
	private $hide_intro;

	 
	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	public function getParams(){
		$this->form->kwota_kredytu = isset($_REQUEST ['kwota_kredytu']) ? $_REQUEST ['kwota_kredytu'] : null;
		$this->form->il_rat = isset($_REQUEST ['il_rat']) ? $_REQUEST ['il_rat'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	
	public function validate() {
		if (! (isset ( $this->form->kwota_kredytu ) && isset ( $this->form->il_rat ) && isset ( $this->form->oprocentowanie ))) {
			return false;
		} 
		else { 
			$this->hide_intro = true;
		}
		
		if ($this->form->kwota_kredytu == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->il_rat == "") {
			$this->msgs->addError('Nie podano ilosci rat');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		if (! $this->msgs->isError()) {
			if (! is_numeric ( $this->form->kwota_kredytu )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->il_rat )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Druga wartość nie jest liczbą zmiennoprzecinkową');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->kwota_kredytu = intval($this->form->kwota_kredytu);
			$this->form->il_rat = intval($this->form->il_rat);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
				
			$this->result->odsetki = null;
			$this->result->kredyt = null;
			$this->result->odsetki = floatval($this->odsetki);
			$this->result->kredyt = floatval($this->kredyt);
			
			$this->result->odsetki = $this->form->kwota_kredytu*($this->form->oprocentowanie/100)*30.5/365;
			$this->result->kredyt = $this->form->kwota_kredytu+($this->result->odsetki*$this->form->il_rat);
			$this->result->result = round($this->result->kredyt, 2);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.tpl');
	}
}

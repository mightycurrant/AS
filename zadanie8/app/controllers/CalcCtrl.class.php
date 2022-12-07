<?php namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use DateTime;
use PDOException;

class CalcCtrl {

	private $form;
	private $result;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function validateSave() {
		$this->form->kwota_kredytu = getFromRequest('kwota_kredytu',true,'Błędne wywołanie aplikacji');
		$this->form->il_rat = getFromRequest('il_rat',true,'Błędne wywołanie aplikacji');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie',true,'Błędne wywołanie aplikacji');
	
		if ( getMessages()->isError() ) return false;
	
		if (empty(trim($this->form->kwota_kredytu))) {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if (empty(trim($this->form->il_rat))) {
			getMessages()->addError('Nie podano ilosci rat');
		}
		if (empty(trim($this->form->oprocentowanie))) {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		if ( getMessages()->isError() ) return false;

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

		if ($this->validateSave()) {
				
			$this->form->kwota_kredytu = intval($this->form->kwota_kredytu);
			$this->form->il_rat = intval($this->form->il_rat);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
			
			if(inRole('admin')){
				$this->result->odsetki = $this->form->kwota_kredytu*($this->form->oprocentowanie/100)*30.5/365;
				$this->result->kredyt = $this->form->kwota_kredytu+($this->result->odsetki*$this->form->il_rat);
				$this->result->result = round($this->result->kredyt, 2);
				getMessages()->addInfo('Wykonano obliczenia.');
			}

			if(inRole('user')){
					if($this->form->kwota_kredytu < 50000) {
						$this->result->odsetki = $this->form->kwota_kredytu*($this->form->oprocentowanie/100)*30.5/365;
						$this->result->kredyt = $this->form->kwota_kredytu+($this->result->odsetki*$this->form->il_rat);
						$this->result->result = round($this->result->kredyt, 2);
						getMessages()->addInfo('Wykonano obliczenia.');
					}
					else{
						getMessages()->addError('Tylko administrator moze wykonac te operacje');
					}
			}

			try{
				$database = new \Medoo\Medoo ([
					'type' => 'mysql',
					'host' => 'localhost',
					'database' => 'kalk',
					'username' => 'root',
					'password' => '',
					'charset' => 'utf8',
					'collation' => 'utf8_polish_ci',
					'port' => 3306,
					'option' => [
						\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
						\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
					],
				]);
				
				if ($this->form->id == '') {
					$count = getDB()->count("wynik");
					if ($count <= 20) {
						$database->insert("wynik", [
							"kwota_kredytu" => $this->form->kwota_kredytu,
							"il_rat" => $this->form->il_rat,
							"oprocentowanie" => $this->form->oprocentowanie,
							"cala_kwota" => $this->result->result,
							"data" => date("Y-m-d H:i:s")
						]);
				} 
				else {
						getMessages()->addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->generateView();
						exit();
				}
			}
			getMessages()->addInfo('Pomyślnie zapisano rekord');
		
			} 
			catch(\PDOException $ex){
				getMessages() -> addError("DB Error ".$ex->getMessage());
			}

			forwardTo('results');

		}
		else {
			$this->generateView();
		}	
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze kredytowym');
		$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

		getSmarty()->display('CalcView.tpl');
	}
}
<?php namespace app\controllers;

use app\forms\ResultsSearchForm;
use PDOException;

class ResultsCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new ResultsSearchForm();
	}
		
	public function validate() {
		$this->form->kwota_kredytu = getFromRequest('sf_kwota_kredytu');
		
		return ! getMessages()->isError();
	}
	
	public function action_results(){
		$this->validate();

		$search_params = [];
		if ( isset($this->form->kwota_kredytu) && strlen($this->form->kwota_kredytu) > 0) {
			$search_params['kwota_kredytu[~]'] = $this->form->kwota_kredytu.'%';;
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}

		$where ["ORDER"] = "kwota_kredytu";

		try{
			$this->records = getDB()->select("wynik", [
					"wynik_id",
					"kwota_kredytu",
					"il_rat",
					"oprocentowanie",
					"cala_kwota",
					"data"
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		getSmarty()->assign('searchForm',$this->form);
		getSmarty()->assign('rekordy',$this->records);
		getSmarty()->display('ResultsList.tpl');
	}
}
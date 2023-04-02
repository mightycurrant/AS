<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CartSearchForm;

class CartListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new CartSearchForm();
	}
	
	 public function validateCart() {
        $this->form->plyta_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_cartNew() {
        if ($this->validateCart()) {
            $items = [];
            if (isset($this->form->plyta_id) && strlen($this->form->plyta_id) > 0) {
                $items['plyta_id[~]'] = $this->form->plyta_id;
            }

            $num_params = sizeof($items);
        if ($num_params > 1) {
            $where = ["AND" => &$items];
        } else {
            $where = &$items;
        }
        $where ["ORDER"] = "tytul_albumu";
            try {
                $this->records = App::getDB()->select("album", [
                    "plyta_id",
                    "nazwa_zespolu",
                    "tytul_albumu",
                    "rok_wydania",
                    "gatunek",
                    "formatt",
                    "cena"
                        ], $where);

                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }

            $this->generateView();
        }
        public function action_cartDelete() {
        
            

        }
        
        public function action_cartShow() {
            $this->generateView();
        }

    public function generateView() {
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('CartView.tpl');
    }
}
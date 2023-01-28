<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\AlbumEditForm;
use Medoo\Medoo;

class AlbumEditCtrl {

	private $form;

	public function __construct(){
		$this->form = new AlbumEditForm();
	}
	
	public function validateSave() {
		$this->form->plyta_id = ParamUtils::getFromPost('plyta_id',true,'Błędne wywołanie aplikacji');
	
		$v = new Validator();

        $this->form->nazwa_zespolu = $v->validateFromPost('nazwa_zespolu', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nazwę zespołu',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Nazwa zespołu powinna mieć od 2 do 50 znaków'
		]);
        $this->form->tytul_albumu = $v->validateFromPost('tytul_albumu', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj tytuł albumu',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Tytuł albumu powinno mieć od 2 do 50 znaków'
        ]);
        $this->form->rok_wydania = $v->validateFromPost('rok_wydania', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź rok wydania",
            'min_length' => 4,
            'max_length' => 4,
            'date_formatt' => 'Y',
            'validator_message' => "Niepoprawny formatt danych. Przykład: 2001"
        ]);
		$this->form->gatunek = $v->validateFromPost('gatunek', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj gatunek',
			'min_length' => 2,
			'max_length' => 50,
			'validator_message' => 'Gatunek powinien mieć od 2 do 50 znaków'
		]);
		$this->form->formatt = $v->validateFromPost('formatt', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj formatt',
			'min_length' => 2,
			'max_length' => 20,
			'validator_message' => 'formatt powinien mieć od 2 do 20 znaków'
		]);
		$this->form->cena = $v->validateFromPost('cena', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj cenę',
            'float' => true,
			'min_length' => 2,
			'max_length' => 20,
			'validator_message' => "Niepoprawny formatt ceny. Przykład: 50.99"
		]);
        
        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->plyta_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    if(inRole('admin')){
    public function action_albumNew() {
        $this->generateView();
    }}
	if(inRole('admin')){
    public function action_albumEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("album", [
                    "nazwa_zespolu",
                    "tytul_albumu",
                    "rok_wydania",
                    "gatunek",
                    "formatt",
                    "cena"
                ], [
                    "plyta_id" => $this->form->plyta_id
                ]);
                $this->form->nazwa_zespolu = $record['nazwa_zespolu'];
                $this->form->tytul_albumu = $record['tytul_albumu'];
                $this->form->rok_wydania = $record['rok_wydania'];
                $this->form->gatunek = $record['gatunek'];
                $this->form->formatt = $record['formatt'];
                $this->form->cena = $record['cena'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }
    }
    if(inRole('admin')){
    public function action_albumDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("album", [
                    "plyta_id" => $this->form->plyta_id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('albumList');
    }
    }
    if(inRole('admin')){
    public function action_albumSave() {
        if ($this->validateSave()) {
            try {
                if($this->form->plyta_id == NULL) {
                    $count = App::getDB()->count("album");
                    if ($count <= 20) {
                        //App::getDB()->query("INSERT INTO <album> (plyta_id, nazwa_zespolu, tytul_albumu, rok_wydania, gatunek, formatt, cena) VALUES (NULL, $this->form->nazwa_zespolu, $this->form->tytul_albumu, $this->form->rok_wydania, $this->form->gatunek, $this->form->formatt, $this->form->cena)")->fetchAll();
                        App::getDB()->insert("album", [
                            "nazwa_zespolu" => $this->form->nazwa_zespolu,
                            "tytul_albumu" => $this->form->tytul_albumu,
                            "rok_wydania" => $this->form->rok_wydania,
                            "gatunek" => $this->form->gatunek,
                            "formatt" => $this->form->formatt,
                            "cena" => $this->form->cena
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit(); 
                    }
                } else {
                    $count = App::getDB()->count("album");
                    App::getDB()->update("album", [
                        "nazwa_zespolu" => $this->form->nazwa_zespolu,
                        "tytul_albumu" => $this->form->tytul_albumu,
                        "rok_wydania" => $this->form->rok_wydania,
                        "gatunek" => $this->form->gatunek,
                        "formatt" => $this->form->formatt,
                        "cena" => $this->form->cena
                        ], [
                            "plyta_id" => $this->form->plyta_id
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('albumList');
        } else {
            $this->generateView();
        }
    }
    }
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('AlbumEdit.tpl');
    }
}
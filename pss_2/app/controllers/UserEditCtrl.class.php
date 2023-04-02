<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;

class UserEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function validateSave() {
        $this->form->user_id = ParamUtils::getFromRequest('user_id', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();

        $this->form->username = $v->validateFromPost('username', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nowy login',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Login powinien mieć od 2 do 50 znaków'
		]);
        $this->form->email = $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj email',
            'email' => true,
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Niepoprawny format email'
		]);
        $this->form->passwordd = $v->validateFromPost('passwordd', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nowe hasło',
            'min_length' => 8,
            'max_length' => 32,
            'validator_message' => 'Hasło powinno mieć od 8 do 32 znaków'
        ]);
        $this->form->passwordd2 = $v->validateFromPost('passwordd2', [
            'trim' => true,
            'required' => true,
            'required_message' => "Potwierdź nowe hasło",
            'min_length' => 8,
            'max_length' => 32,
            'validator_message' => 'Hasło nie jest takie samo'
        ]);
        if($this->form->passwordd != $this->form->passwordd2){
            Utils::addErrorMessage('Hasło nie zgadza sie');
            App::getMessages()->isError();
        }

        return !App::getMessages()->isError();
    }


    public function validateEdit() {
        $this->form->user_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userNew() {
        $this->generateView();
    }

    public function action_userEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("user", "*", [
                    "user_id" => $this->form->user_id
                ]);
                $this->form->username = $record['username'];
                $this->form->email = $record['email'];
                $this->form->passwordd = $record['passwordd'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_userDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("user", [
                    "user_id" => $this->form->user_id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('loginShow');
    }

    public function action_userSave() {
        if ($this->validateSave()) {
            try {
                if ($this->form->user_id == NULL) {
                    $count = App::getDB()->count("user");
                    if ($count <= 20) {
                        App::getDB()->insert("user", [
                            "username" => $this->form->username,
                            "email" => $this->form->email,
                            "passwordd" => $this->form->passwordd
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit();
                    }
                } else {
                    App::getDB()->update("user", [
                        "username" => $this->form->username,
                        "email" => $this->form->email,
                        "passwordd" => $this->form->passwordd
                            ], [
                        "user_id" => $this->form->user_id
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('loginShow');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }
}
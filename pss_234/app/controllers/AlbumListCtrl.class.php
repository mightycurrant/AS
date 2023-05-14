<?php namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\AlbumSearchForm;

class AlbumListCtrl {

	private $form;
	private $records;

	public function __construct(){
		$this->form = new AlbumSearchForm();
	}
		
	public function validate() {
        $this->form->tytul_albumu = ParamUtils::getFromRequest('sf_tytul_albumu');
        return !App::getMessages()->isError();
    }

    public function load_data() {
        $this->validate();
    
        // Initialize variables for pagination
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $limit = 10;
        $offset = ($page - 1) * $limit;
    
        $search_params = [];
        if (isset($this->form->tytul_albumu) && strlen($this->form->tytul_albumu) > 0) {
            $search_params['tytul_albumu[~]'] = $this->form->tytul_albumu . '%';
        }
    
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where["ORDER"] = "tytul_albumu";
        $where["LIMIT"] = [$offset, $limit];
    
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
            
            $total_records = App::getDB()->count("album", $where);
            
            $total_pages = ceil($total_records / $limit);
            
            $pagination = [
                'current_page' => $page,
                'total_pages' => $total_pages,
                'has_previous_page' => ($page > 1),
                'has_next_page' => ($page < $total_pages),
                'previous_page_link' => '?page=' . ($page - 1),
                'next_page_link' => '?page=' . ($page + 1)
            ];

        App::getSmarty()->assign('pagination', $pagination);
        App::getSmarty()->assign('page', $page);
        App::getSmarty()->assign('limit', $limit);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_albumList() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('AlbumListFullPage.tpl');
    }

    public function action_albumListPart() {
        $this->load_data();
        //App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('AlbumListTable.tpl');
    }

    public function action_tab() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->display('AlbumListFullPage.tpl');
    }
}
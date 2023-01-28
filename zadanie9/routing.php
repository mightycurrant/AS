<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('albumList');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('albumList',    'AlbumListCtrl');	
Utils::addRoute('albumListPart','AlbumListCtrl');	
Utils::addRoute('loginShow',    'LoginCtrl');	    
Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl',	    ['admin']);
Utils::addRoute('albumNew',     'AlbumEditCtrl',	['admin']);
Utils::addRoute('albumEdit',    'AlbumEditCtrl',	['admin']);
Utils::addRoute('albumSave',    'AlbumEditCtrl',	['admin']);
Utils::addRoute('albumDelete',  'AlbumEditCtrl',	['admin']);
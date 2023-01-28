<?php
$conf->debug = true;

$conf->server_name = 'localhost';
$conf->protocol = 'http';
//$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_root = '/zadanie9/public';

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'sklep';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';

$conf->db_port = '3306';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
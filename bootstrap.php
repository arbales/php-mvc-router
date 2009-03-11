<?php
require_once('autoload.php');
App::$site = $_SERVER['DOCUMENT_ROOT'];

require_once('system/utility.php');
require_once('config/routes.inc.php');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

session_start();

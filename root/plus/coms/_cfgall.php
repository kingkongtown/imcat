<?php
define('RUN_COMSADD', 1);
$_cbase['ucfg']['lang'] = '(auto)'; 
#$_cbase['skip']['_all_'] = true;
$_cbase['tpl']['tpl_dir'] = 'adm';
require dirname(dirname(dirname(__FILE__))).'/run/_init.php'; 
$lang = $_cbase['sys']['lang']; 

$_groups = read('groups');
$db = db(); 

safComm::urlFrom();
extract(basReq::sysVars());
$aurl = basReq::getUri(-2);


<?php
define('RUN_FRONT', 1);
//$_cbase['tpl']['tpc_on']  = 1; //是否开启模板缓存，true开启,false不开启 
$_cbase['tpl']['tpl_dir'] = 'demodir'; // 指定模板目录
$_cbase['sys']['lang'] = 'cn'; // 指定语言(或使用下一行)
//$_cbase['ucfg']['lang'] = '(auto)'; // (自动)可切换语言
//$_cbase['sys']['skin'] = 'flatly'; // 指定皮肤(或不要默认`min`,或使用下一行)
//$_cbase['ucfg']['skin'] = '(auto)'; // 可切换皮肤, 默认`min`, 
require dirname(__FILE__).'/_init.php';  
$vop = new vopShow();

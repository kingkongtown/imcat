<?php
(!defined('RUN_DOPA')) && die('No DopA');

$fs_do = req('fs_do');
$fs = basReq::arr('fs');
if(empty($fs_do)) $msg = lang('flow.dops_setop');
if(empty($fs)) $msg = lang('flow.dops_setitem');
$cnt = 0; $msgop = '';
foreach($fs as $id=>$v){ 
    if(in_array($fs_do,array('show','hidden'))){ 
        $cnt += $dop->opShow($id,$fs_do);
        $msgop = $fs_do=='show' ? lang('flow.dops_checked') : lang('flow.dops_hide');
    }elseif($fs_do=='del'){ 
        $cnt += $dop->opDelete($id);
        $msgop = lang('flow.dops_del');
    }elseif($fs_do=='(xxx)'){ 
        ;//
    }
}
$msg = "$cnt ".lang('flow.dops_okn',$msgop);

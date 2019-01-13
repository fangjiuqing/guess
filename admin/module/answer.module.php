<?php
namespace com\default_www;
use \re\rgx as RGX;

/**
 * 管理平台模块
 * $Id: index.module.php 819 2017-12-03 11:31:54Z reginx $
 */
class answer_module extends admin_module {

    /**
     * 历史竞猜
     * @return [type] [description]
     */
    public function history_action () {
        $list = RGX\OBJ('quiz_table')->get_all();
        $this->assign('list' , $list);
        $this->display('answer/history.tpl');
    }

}//class end
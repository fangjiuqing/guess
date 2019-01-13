<?php
namespace com\default_www;
use \re\rgx as RGX;

/**
 * 管理平台模块
 * $Id: index.module.php 819 2017-12-03 11:31:54Z reginx $
 */
class index_module extends admin_module {

    /**
     * 管理平台主页
     * @return [type] [description]
     */
    public function index_action () {
        $this->set_title('公众号竞猜管理平台');
        $this->assign('nav', RGX\navigation_helper::get($this->login));
        $this->display('index.tpl');
    }



}
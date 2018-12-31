<?php
namespace com\default_www;
use \re\rgx as RGX;

/**
 * index
 * $Id: index.module.php 819 2017-12-03 11:31:54Z fangwei $
 */
class index_module extends admin_module {

    /**
     * 管理平台主页
     * @return [type] [description]
     */
    public function index_action () {
        $this->display('index.tpl');
    }
}
<?php
namespace com\default_www;
use \re\rgx as RGX;

/**
 * 管理平台模块
 * $Id: index.module.php 819 2017-12-03 11:31:54Z reginx $
 */
class timu_module extends admin_module {

    /**
     * 管理平台主页
     * @return [type] [description]
     */
    public function index_action () {
        $list = RGX\OBJ('timu_table')->get_all();
        $this->assign('list' , $list);
        $this->display('timu/index.tpl');
    }

    /**
     * [add_action description]
     */
    public function add_action () {
        $id = intval($this->get('id'));
        if ( $id ) {
            $data = RGX\OBJ('timu_table')->where('tm_id = ' . $id)->get();
            $data['tm_answer'] = str_replace('#' , PHP_EOL , $data['tm_answer']);
            $this->assign('data' , $data);
        }
        $this->display('timu/add.tpl');
    }

    /**
     * [save_action description]
     * @return [type] [description]
     */
    public function save_action () {
        $data = $this->get('data' , 'p');

        if ( !empty($data) ) {
            $tab = RGX\OBJ('timu_table');

            $data['tm_answer']      = str_replace(PHP_EOL , '#' , $data['tm_answer']);

            $data['tm_create_time'] = time();
            if ( $tab->load($data) ) {
                $result = $tab->save();
                if ( $result['code'] == 0 ) {
                    $this->ajaxout(['code' => 0 , 'msg' => '保存成功']);
                }
            }else{
                var_dump($tab->get_error());
            }
        }
        $this->ajaxout(['code' => 1 , 'msg' => '保存失败']);
    }

}//class end
<?php
namespace com\default_wap;
use \re\rgx as RGX;

/**
 * 管理平台模块
 * $Id: index.module.php 819 2017-12-03 11:31:54Z reginx $
 */
class index_module extends base_module {

    /**
     * [__construct description]
     */
    public function __construct () {
        parent::__construct();
        // var_dump($_SESSION);die;
         if ( empty($_SESSION['user_info']) ) {
             //header('location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd55316e683616eda&redirect_uri=http%3A%2F%2Fwww.dadiandesign.com%2Fwx%2Fguess%2Fwap%2Findex.php%2Fwechat%2Foauth&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect');
             header('location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxd55316e683616eda&redirect_uri=http%3A%2F%2Fwww.dadiandesign.com%2Fwx%2Foauth_response.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect');
         }

         $this->login = $_SESSION['user_info'];
    }

    /**
     * 主页
     * @return [type] [description]
     */
    public function index_action () {
        $this->assign('page_title','参与竞猜');
        $data = RGX\OBJ('timu_table')->where("tm_status = 'active'")->order('tm_create_time desc')->limit(1)->get();
        $data['tm_answer'] = explode('#', $data['tm_answer']);
        $this->assign('data' , $data);
        $this->assign('user' , $_SESSION['user_info']);
        $this->display('guess/index.tpl');
    }

    /**
     * [history_action description]
     * @return [type] [description]
     */
    public function history_action () {
        $this->set_title('我的竞猜');
        $openid = $this->login['openid'] ? : '';
        $list = RGX\OBJ('quiz_table')->where("qz_openid = '{$openid}'")->get_all();
        $this->assign('list' , $list);
        $this->display('guess/history.tpl');
    }

    /**
     * [quiz_action 竞猜]
     * @return [type] [description]
     */
    public function quiz_action () {
        if ( !$this->login ) {
            $this->ajax_failure('获取用户授权信息失败');
        }
        $openid  = $this->login['openid'] ? : 0;
        $data    = $this->get('data' , 'p');
        $tab     = RGX\OBJ('quiz_table');
        $quiz    = $tab->where("`qz_openid` = '{$openid}' AND `qz_tm_id` = {$data['qz_tm_id']}")->limit(1)->get();
        if ( !empty($quiz) ) {
            $this->ajax_failure('不可重复参与竞猜');
        }

        $data['qz_openid']    =    $openid;
        $data['qz_nickname']  =    $this->login['nickname'];
        $data['qz_headimgurl']=    $this->login['headimgurl'];
        $data['qz_create_time']=    time();

        if ( $tab->load($data) ) {
            $result    =    $tab->save();

            if ( $result['code'] == 0 ) {
                $this->ajax_success('竞猜成功！' , [] , RGX\router::url('index-answered'));
            }
        }
    }

    /**
     * [answered_action description]
     * @return [type] [description]
     */
    public function answered_action () {
        $this->display('guess/answered.tpl');
    }
}//class end
<?php
namespace com\default_wap;
use \re\rgx as RGX;

/**
 * 管理平台模块
 * $Id: index.module.php 819 2017-12-03 11:31:54Z reginx $
 */
class wechat_module extends base_module {
    private $app_id       = 'wxd55316e683616eda';
    private $app_secret   = '0f207723e8b38bd7c5f3fe6f429227e1';

    /**
     * [oauth_action 授权]
     * @return [type] [description]
     */
    public function oauth_action () {
        # 1获取code
        $code = isset($_GET['code']) ? $_GET['code'] : '';
var_dump($code);die;
        if ( $code ) {
            // 每次都刷新最新的 缓存会产生40001 错误
            $url    =    'https://api.weixin.qq.com/sns/oauth2/access_token?appid=' . $this->app_id . '&secret=' . $this->app_secret . '&code=' . $code . '&grant_type=authorization_code';
            $token_row = json_decode($this->curl_request($url) ,true);

            # 3 获取用户信息
            # 先检查用户数据是否存在，不存在则进行获取
            $tab  = RGX\OBJ('user_info_table');
            $user = $tab->where("`openid` = '{$token_row[openid]}'")->order('create_time DESC')->limit(1)->get();//

            if ( empty($user) ) {
                $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='. $token_row['access_token'] .'&openid=' . $token_row['openid']. '&lang=zh_CN';
                $user = json_decode($this->curl_request($url) ,true);
                $user['privilege']   = serialize($user['privilege']);
                $user['create_time'] = time();
                if ( $tab->load($user) ) {
                    $tab->save();
                }
            }
            $this->set_login($user);
            // session_start();
            // $_SESSION['oauth'] = $user;
            $this->redirect('index');
        }
    }


    //参数1：访问的URL，参数2：post数据(不填则为GET)，参数3：提交的$cookies,参数4：是否返回$cookies
    public function curl_request( $url, $post='', $cookie='', $returnCookie = 0 ){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
        curl_setopt($curl, CURLOPT_REFERER, "https://api.weixin.qq.com");
        if($post) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        }
        if($cookie) {
            curl_setopt($curl, CURLOPT_COOKIE, $cookie);
        }
        curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        if (curl_errno($curl)) {
            return curl_error($curl);
        }
        curl_close($curl);
        if($returnCookie){
            list($header, $body) = explode("\r\n\r\n", $data, 2);
            preg_match_all("/Set\-Cookie:([^;]*);/", $header, $matches);
            $info['cookie']  = substr($matches[1][0], 1);
            $info['content'] = $body;
            return $info;
        }else{
            return $data;
        }
    }
}//class end
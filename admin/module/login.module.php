<?php
namespace com\default_www;
use \re\rgx as RGX;
// PASSED
/**
 * 管理登录
 * $Id: login.module.php 281 2017-08-29 11:38:33Z reginx $
 */
class login_module extends base_module {

    /**
     * 管理平台主页
     * @return [type] [description]
     */
    public function index_action () {
        if (!empty($this->login)) {
            $this->redirect('index');
        }
        if ($this->has('isajax', 'p')) {
            $this->submit($this->get('adm', 'p'));
        }
        $this->set_title('用户登录');
        $this->display('login.tpl');
    }


    /**
     * 创建密码及salt
     * @param  [type] $source [description]
     * @param  [type] $salt   [description]
     * @return [type]         [description]
     */
    public static function generate_passwd ($source, $salt = null) {
        $ret['salt'] = $salt ?: RGX\misc::randstr(6);
        $ret['passwd'] = md5(md5($source) . $ret['salt']);
        return $ret;
    }

    /**
     * 登录
     * @return [type] [description]
     */
    private function submit ($adm) {
        $last_verify = $this->sess_get('adm_login_verify');
        if ($last_verify > RGX\app::get_time() + 300 && false) {
            $geetest_challenge = $this->get('geetest_challenge', 'p');
            $geetest_validate  = $this->get('geetest_validate', 'p');
            $geetest_seccode   = $this->get('geetest_seccode', 'p');
            if (empty($geetest_challenge) || empty($geetest_validate) || empty($geetest_seccode)) {
                $this->ajax_failure('验证失败, 请完成滑动验证', 999);
            }

            $verify = RGX\geetest_helper::get_instance(1)->verify(
                $this->sess_get('geetest_alive'),
                $geetest_challenge,
                $geetest_validate,
                $geetest_seccode
            );
            if (!$verify) {
                $this->ajax_failure('验证失败, 请完成滑动验证', 999);
            }
            $this->sess_set('adm_login_verify', REQUEST_TIME);
        }

        if (empty($adm['admin_account'])) {
            $this->ajax_failure([
                'admin_account'     => '请输入登录账号'
            ]);
        }
        if (empty($adm['admin_passwd'])) {
            $this->ajax_failure([
                'admin_passwd'     => '请输入登录密码'
            ]);
        }

        $tab = RGX\OBJ('user_table');

        $row = $tab->where("(user_name = '{$adm[admin_account]}') OR (user_mobile = '{$adm[admin_account]}')")->get();

        if (empty($row)) {
            $this->ajax_failure(['admin_account' => '该账号不存在']);
        }

        $passwd = self::generate_passwd($adm['admin_passwd'], $row['user_salt'])['passwd'];
        if ($passwd != $row['user_passwd']) {
            $this->ajax_failure(['admin_passwd' => '您输入的密码不正确']);
        }

        $this->set_login($row);
        $this->ajax_success('登录成功', [], RGX\URL('index'));
    }

}// Class End
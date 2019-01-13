<?php
   // http://dev.rgx.re/wiki/config.html
   // @see rgx/class/config.class.php
   return array(
        'db'    => array(
            'pre'       => 'pre_',
            'type'      => 'mysql',
            'mysql'     => array(
                'default'   => 'host=127.0.0.1;port=3306;db=wx;user=wx;passwd=dAdian3212019;charset=utf8;profiling=1',
            ),
        ),
       'CACHE_VER'  => 1,
       'SYS_NAME'  => '公众号竞猜管理平台',
       'tpl'        => array(
          'style'     => 'style',
          '404_tpl'   => '404.tpl',
          'msg_tpl'   => 'msg.tpl',
          'ob'        => true,
          'native'    => false,
          'tpl_pre'   => '{',
          'tpl_suf'   => '}',
          'cmod'      => false,
          'charset'   => 'utf-8',
          'allow_php' => false
      ),
      'static_url'    => 'https://www.dadiandesign.com/wx/guess/static/',
      'app_url'       => 'https://www.dadiandesign.com/wx/guess/wap/',
    );

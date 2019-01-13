<?php
   // http://dev.rgx.re/wiki/config.html
   // @see rgx/class/config.class.php
   return [
        'db'    => [
            'pre'       => 'pre_',
            'type'      => 'mysql',
            'mysql'     => [
                'default'   => 'host=127.0.0.1;port=3306;db=wx;user=wx;passwd=dAdian3212019;charset=utf8;profiling=1',
            ],
        ],
       'CACHE_VER'  => 1,
       'SYS_NAME'  => '公众号竞猜管理平台',
       'tpl'        => [
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
      ],
      // 'sess'    => [
      //   'type'        => 'redis',
      //   'host'        => '127.0.0.1',
      //   'port'        => 6379,
      //   'db'          => 0,
      //   'ttl'         => 1800,
      // ],
      'static_url'    => 'https://www.dadiandesign.com/wx/guess/static/',
      'app_url'       => 'https://www.dadiandesign.com/wx/guess/admin/',
    ];

<?php
/*
  +-------------------------------------------------------
  + access_token 表模型
  + ------------------------------------------------------
  + @update 2019-01-08 22:53:53
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php build.php -t -d=/data/htdocs/guess/admin -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class access_token_table extends table {

    /*
      +--------------------------
      + 编码
      +--------------------------
    */
    protected $_charset = 'utf8';

    /*
      +--------------------------
      + 字段
      +--------------------------
    */
    protected $_fields = [
        'access_token' => [
            'name'               => 'access_token',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'access_token',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'expires_in' => [
            'name'               => 'expires_in',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => -2147483648,
            'max'                => 2147483647,
            'label'              => 'expires_in',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'refresh_token' => [
            'name'               => 'refresh_token',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'refresh_token',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'openid' => [
            'name'               => 'openid',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 250,
            'label'              => 'openid',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'scope' => [
            'name'               => 'scope',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'scope',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'create_time' => [
            'name'               => 'create_time',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => -2147483648,
            'max'                => 2147483647,
            'label'              => 'create_time',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
    ];

    /*
      +--------------------------
      + 主键
      +--------------------------
    */
    protected $_primary_key = [
        'key' => 'access_token',
        'inc' => false
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'access_token'    => '',
        'expires_in'      => 0,
        'refresh_token'   => '',
        'openid'          => '',
        'scope'           => '',
        'create_time'     => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'access_token'    => ['re\rgx\filter', 'char'],
        'expires_in'      => ['re\rgx\filter', 'int'],
        'refresh_token'   => ['re\rgx\filter', 'char'],
        'openid'          => ['re\rgx\filter', 'char'],
        'scope'           => ['re\rgx\filter', 'char'],
        'create_time'     => ['re\rgx\filter', 'int'],
    ];

    /*
      +--------------------------
      + 唯一性检测
      +--------------------------
    */
    public $unique_check = [
        
    ];

    /*
      +--------------------------
      + 自定义字段验证规则
      + @example 
           [
               // 字段名称
               'name'  => 'user_name',
               // 验证类型, 0 使用filter::$rule的规则进行验证
               //         1 使用正则表达式验证
               //         2 使用自定义方法验证
               'type'  => 0,
               // 若type为 0 则 rule 表示规则名称
               //         1 则 rule 为正则表达式 (/^\w+$/)
               //         2 则 rule 为自定义方法或函数 (['re\rgx\filter', 'char']] 或 'is_numeric')
               'rule'  => 'require',
               // 验证失败返回的文案
               // 若要使用语言变量, 则用#开头. (例如: #user name)
               'error' => '您输入的用户名格式有误'
           ]
      +--------------------------
    */
    public $validate = [];

}
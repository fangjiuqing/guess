<?php
/*
  +-------------------------------------------------------
  + user_info 表模型
  + ------------------------------------------------------
  + @update 2019-01-08 22:53:53
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php build.php -t -d=/data/htdocs/guess/admin -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class user_info_table extends table {

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
        'uid' => [
            'name'               => 'uid',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => -2147483648,
            'max'                => 2147483647,
            'label'              => 'uid',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'openid' => [
            'name'               => 'openid',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 200,
            'label'              => 'openid',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'nickname' => [
            'name'               => 'nickname',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 150,
            'label'              => 'nickname',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'sex' => [
            'name'               => 'sex',
            'type'               => 'int',
            'field_type'         => 'tinyint',
            'min'                => -128,
            'max'                => 127,
            'label'              => 'sex',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'province' => [
            'name'               => 'province',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => 'province',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'city' => [
            'name'               => 'city',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => 'city',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'country' => [
            'name'               => 'country',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => 'country',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'headimgurl' => [
            'name'               => 'headimgurl',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 300,
            'label'              => 'headimgurl',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'privilege' => [
            'name'               => 'privilege',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 1000,
            'label'              => 'privilege',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'unionid' => [
            'name'               => 'unionid',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => 'unionid',
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
        'language' => [
            'name'               => 'language',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 50,
            'label'              => 'language',
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
        'key' => 'uid',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'uid'         => 0,
        'openid'      => '',
        'nickname'    => '',
        'sex'         => 0,
        'province'    => '',
        'city'        => '',
        'country'     => '',
        'headimgurl'  => '',
        'privilege'   => '',
        'unionid'     => '',
        'create_time' => 0,
        'language'    => '',
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'uid'         => ['re\rgx\filter', 'int'],
        'openid'      => ['re\rgx\filter', 'char'],
        'nickname'    => ['re\rgx\filter', 'char'],
        'sex'         => ['re\rgx\filter', 'int'],
        'province'    => ['re\rgx\filter', 'char'],
        'city'        => ['re\rgx\filter', 'char'],
        'country'     => ['re\rgx\filter', 'char'],
        'headimgurl'  => ['re\rgx\filter', 'char'],
        'privilege'   => ['re\rgx\filter', 'char'],
        'unionid'     => ['re\rgx\filter', 'char'],
        'create_time' => ['re\rgx\filter', 'int'],
        'language'    => ['re\rgx\filter', 'char'],
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
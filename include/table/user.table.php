<?php
/*
  +-------------------------------------------------------
  + user 表模型
  + ------------------------------------------------------
  + @update 2019-01-08 22:53:53
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php build.php -t -d=/data/htdocs/guess/admin -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class user_table extends table {

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
        'user_id' => [
            'name'               => 'user_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'UID',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_name' => [
            'name'               => 'user_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 120,
            'label'              => 'user_name',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_mobile' => [
            'name'               => 'user_mobile',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 20,
            'label'              => 'user_mobile',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_passwd' => [
            'name'               => 'user_passwd',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 32,
            'label'              => 'user_passwd',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_salt' => [
            'name'               => 'user_salt',
            'type'               => 'char',
            'field_type'         => 'char',
            'min'                => 0,
            'max'                => 6,
            'label'              => 'user_salt',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_sex' => [
            'name'               => 'user_sex',
            'type'               => 'int',
            'field_type'         => 'tinyint',
            'min'                => 0,
            'max'                => 255,
            'label'              => '性别',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_birth' => [
            'name'               => 'user_birth',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => '生日',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_height' => [
            'name'               => 'user_height',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 5,
            'max'                => 1,
            'label'              => 'user_height',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_weight' => [
            'name'               => 'user_weight',
            'type'               => 'float',
            'field_type'         => 'decimal',
            'min'                => 5,
            'max'                => 1,
            'label'              => 'user_weight',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'user_open_id' => [
            'name'               => 'user_open_id',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 100,
            'label'              => '微信openid',
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
        'key' => 'user_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'user_id'     => 0,
        'user_name'   => '',
        'user_mobile' => '',
        'user_passwd' => '',
        'user_salt'   => '',
        'user_sex'    => 0,
        'user_birth'  => 0,
        'user_height' => 0,
        'user_weight' => 0,
        'user_open_id'=> '',
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'user_id'     => ['re\rgx\filter', 'int'],
        'user_name'   => ['re\rgx\filter', 'char'],
        'user_mobile' => ['re\rgx\filter', 'char'],
        'user_passwd' => ['re\rgx\filter', 'char'],
        'user_salt'   => ['re\rgx\filter', 'char'],
        'user_sex'    => ['re\rgx\filter', 'int'],
        'user_birth'  => ['re\rgx\filter', 'int'],
        'user_height' => ['re\rgx\filter', 'float'],
        'user_weight' => ['re\rgx\filter', 'float'],
        'user_open_id'=> ['re\rgx\filter', 'char'],
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
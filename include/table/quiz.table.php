<?php
/*
  +-------------------------------------------------------
  + quiz 表模型
  + ------------------------------------------------------
  + @update 2019-01-08 22:53:53
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php build.php -t -d=/data/htdocs/guess/admin -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class quiz_table extends table {

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
        'qz_id' => [
            'name'               => 'qz_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'qz_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_openid' => [
            'name'               => 'qz_openid',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 200,
            'label'              => 'qz_openid',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_nickname' => [
            'name'               => 'qz_nickname',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 150,
            'label'              => 'qz_nickname',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_headimgurl' => [
            'name'               => 'qz_headimgurl',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 300,
            'label'              => 'qz_headimgurl',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_tm_id' => [
            'name'               => 'qz_tm_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'qz_tm_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_tm_name' => [
            'name'               => 'qz_tm_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 300,
            'label'              => 'qz_tm_name',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_tm_answer' => [
            'name'               => 'qz_tm_answer',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 500,
            'label'              => 'qz_tm_answer',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'qz_create_time' => [
            'name'               => 'qz_create_time',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'qz_create_time',
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
        'key' => 'qz_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'qz_id'           => 0,
        'qz_openid'       => '',
        'qz_nickname'     => '',
        'qz_headimgurl'   => '',
        'qz_tm_id'        => 0,
        'qz_tm_name'      => '',
        'qz_tm_answer'    => '',
        'qz_create_time'  => 0,
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'qz_id'           => ['re\rgx\filter', 'int'],
        'qz_openid'       => ['re\rgx\filter', 'char'],
        'qz_nickname'     => ['re\rgx\filter', 'char'],
        'qz_headimgurl'   => ['re\rgx\filter', 'char'],
        'qz_tm_id'        => ['re\rgx\filter', 'int'],
        'qz_tm_name'      => ['re\rgx\filter', 'char'],
        'qz_tm_answer'    => ['re\rgx\filter', 'char'],
        'qz_create_time'  => ['re\rgx\filter', 'int'],
    ];

    /*
      +--------------------------
      + 唯一性检测
      +--------------------------
    */
    public $unique_check = [
        ['qz_openid', 'qz_tm_id']
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
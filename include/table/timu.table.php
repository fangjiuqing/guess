<?php
/*
  +-------------------------------------------------------
  + timu 表模型
  + ------------------------------------------------------
  + @update 2019-01-08 22:53:53
  + @desc 若修改了表结构, 请使用下面的命令更新模型文件
  + @cmd /bin/php build.php -t -d=/data/htdocs/guess/admin -f=1
  +-------------------------------------------------------
*/
namespace re\rgx;

class timu_table extends table {

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
        'tm_id' => [
            'name'               => 'tm_id',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'tm_id',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'tm_name' => [
            'name'               => 'tm_name',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 200,
            'label'              => 'tm_name',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'tm_answer' => [
            'name'               => 'tm_answer',
            'type'               => 'char',
            'field_type'         => 'text',
            'min'                => 0,
            'max'                => 65535,
            'label'              => 'tm_answer',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'tm_status' => [
            'name'               => 'tm_status',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 255,
            'label'              => 'tm_status',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'tm_create_time' => [
            'name'               => 'tm_create_time',
            'type'               => 'int',
            'field_type'         => 'int',
            'min'                => 0,
            'max'                => 4294967295,
            'label'              => 'tm_create_time',
            'allow_empty_string' => true,
            'allow_null'         => true
        ],
        'tm_bg_image' => [
            'name'               => 'tm_bg_image',
            'type'               => 'char',
            'field_type'         => 'varchar',
            'min'                => 0,
            'max'                => 300,
            'label'              => 'tm_bg_image',
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
        'key' => 'tm_id',
        'inc' => true
    ];

    /*
      +--------------------------
      + 字段默认值
      +--------------------------
    */
    public $defaults = [
        'tm_id'           => 0,
        'tm_name'         => '',
        'tm_answer'       => '',
        'tm_status'       => '',
        'tm_create_time'  => 0,
        'tm_bg_image'     => '',
    ];

    /*
      +--------------------------
      + 字段过滤规则
      +--------------------------
    */
    public $filter = [
        'tm_id'           => ['re\rgx\filter', 'int'],
        'tm_name'         => ['re\rgx\filter', 'char'],
        'tm_answer'       => ['re\rgx\filter', 'char'],
        'tm_status'       => ['re\rgx\filter', 'char'],
        'tm_create_time'  => ['re\rgx\filter', 'int'],
        'tm_bg_image'     => ['re\rgx\filter', 'char'],
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
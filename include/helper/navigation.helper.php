<?php
namespace re\rgx;
// PASSED
/**
 * 导航助手类
 * $Id: navigation.helper.php 951 2017-12-18 06:43:09Z fangwei $
 */
class navigation_helper extends rgx {
    public static $navs    =    [
        //管理主页
        [
            'name'   =>    '题目管理',
            'icon'   =>    'fa fa-home',
            'urls'    =>   [
                ['url' => 'timu-index', 'name' => '题目管理'],
                ['url' => 'timu-add', 'name'   => '新增题目'],
            ],
        ],

        //专利
        [
            'name'   =>    '历史竞猜',
            'icon'   =>    'fa fa-area-chart',
            'urls'    =>   [
                ['url' => 'answer-history' , 'name' => '历史竞猜'],
            ],
        ],
    ];

    /**
     * 根据当前登录用户获取导航菜单
     * @param  [type] $login [description]
     * @return [type]        [description]
     */
    public static function get ($login = []) {
        if ( $login['is_admin'] ) {
            return self::$navs + self::$admin_navs;
        }
        return self::$navs;
    }

    /**
     * [format description]
     * @method format
     * @param  array  $except [description]
     * @return [type] [description]
     */
    public static function format ($except = [] ) {
        $data    =    [];
        foreach( self::$navs as $k => $v ) {
            if ( $v['url'] ) {
                $data[$v['url']]    =    $v['name'];
            }
            if ( !empty($v['urls']) ) {
                foreach ( $v['urls'] as $sk => $sv ) {
                    $data[$sv['url']]    =    $sv['name'];
                }
            }
        }
        return $data;
    }
} //Class End
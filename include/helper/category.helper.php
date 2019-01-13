<?php
namespace re\rgx;

/**
 * 分类助手类
 * $Id: category.helper.php 958 2017-12-18 07:15:24Z fangwei $
 */
class category_helper extends rgx {

    /**
     * 证书
     */
    const TYPE_CERT     = 1;

    /**
     * 业务
     */
    const TYPE_SERV     = 2;

    /**
     * 资质
     */
    const TYPE_ENT      = 3;

    /**
     * 报告
     */
    const TYPE_REPORT   = 4;

    /**
     * 车辆
     */
    const TYPE_CAR      = 5;

    /**
     * 仪器仪表
     */
    const TYPE_EQU      = 6;

    /**
     * 房产
     */
    const TYPE_HOUSE    = 7;

    /**
     * 组织部门
     */
    const TYPE_DEPAERT  = 8;

    /**
     * 产品证书
     */
    const TYPE_PRODUCT = 9;

    /**
     * 分类类型
     * @var [type]
     */
    public static $type = [
        1   => '证书类型',
        2   => '业务类型',
        3   => '资质类型',
        4   => '报告类型',
        5   => '车辆类型',
        6   => '仪器仪表',
        7   => '房产类型',
        8   => '组织架构',
        9   => '产品证书',
    ];

    /**
     * 获取分类树
     * @param  [type]  $channel_id [description]
     * @param  [type]  $root_id    [description]
     * @param  integer $simple     [description]
     * @return [type]              [description]
     */
    public static function get_tree ($channel_id, $root_id = 0, $simple = 0) {
        return CACHE("category@tree@{$channel_id}-{$root_id}-{$simple}", function () use ($channel_id, $root_id, $simple) {
            return category_table::get_tree($channel_id, $root_id, $simple);
        }, 300);
    }

    /**
     * [get_list description]
     * @method get_list
     * @param  [type]   $type_id [description]
     * @param  integer  $root_id [description]
     * @return [type]   [description]
     */
    public static function get_list ($type_id , $root_id = 0) {
        return CACHE("category-list-{$type_id}-{$type_id}-{$root_id}-t", function () use ($type_id, $root_id) {
            return category_table::get_list($type_id, $root_id);
        }, 86400);
    }

    /**
     * [get_list description]
     * @method get_list
     * @param  [type]   $type_id [description]
     * @param  integer  $root_id [description]
     * @return [type]   [description]
     */
    public static function get_cert_types ($cache = false) {
        $func = function () {
            $ret = [];
            OBJ('category_table')->map(function ($row) use (&$ret) {
                $row['tags'] = $row['cat_desc'] ? explode('#', $row['cat_desc']) : [];
                if ($row['cat_parent'] == '0') {
                    $ret[$row['cat_id']] = $row;
                    $ret[$row['cat_id']]['subs'] = [];
                }
                else {
                    $ret[$row['cat_parent']]['subs'][$row['cat_id']] = $row;
                }
                return null;
            })->order('cat_level asc,cat_sort desc')->get_all([
                'cat_type'  => 1
            ]);
            return $ret;
        };
        return $cache ? CACHE("category-certtypes", $func, 86400) : $func();
    }

    /**
     * [get_list description]
     * @method get_list
     * @param  [type]   $type_id [description]
     * @param  integer  $root_id [description]
     * @return [type]   [description]
     */
    public static function get_ent_types ($cache = false) {
        $func = function () {
            $ret = [];
            OBJ('category_table')->map(function ($row) use (&$ret) {
                $row['tags'] = $row['cat_desc'] ? explode('#', $row['cat_desc']) : [];
                if ($row['cat_parent'] == '0') {
                    $ret[$row['cat_id']] = $row;
                    $ret[$row['cat_id']]['subs'] = [];
                }
                else {
                    $ret[$row['cat_parent']]['subs'][$row['cat_id']] = $row;
                }
                return null;
            })->order('cat_level asc')->get_all([
                'cat_type'  => 3
            ]);
            return $ret;
        };
        return $cache ? CACHE("category-certtypes", $func, 86400) : $func();
    }

    /**
     * [获取类型分类]
     * @method get_asset_types
     * @param  boolean         $cache [description]
     * @return [type]          [description]
     */
    public static function get_types ($type_id = 1, $cache = false) {
        $func = function () use ($type_id) {
            $ret = [];
            OBJ('category_table')->map(function ($row) use (&$ret) {
                $row['tags'] = $row['cat_desc'] ? explode('#', $row['cat_desc']) : [];
                if ($row['cat_parent'] == '0') {
                    $ret[$row['cat_id']] = $row;
                    $ret[$row['cat_id']]['subs'] = [];
                }
                else {
                    $ret[$row['cat_parent']]['subs'][$row['cat_id']] = $row;
                }
                return null;
            })->order('cat_level asc,cat_sort desc')->get_all([
                'cat_type'  => $type_id
            ]);
            return $ret;
        };
        return $cache ? CACHE("category@type-{$type_id}", $func, 86400) : $func();
    }

} //Class End
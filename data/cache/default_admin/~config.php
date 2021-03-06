<?php
/**
 * app admin config file 
 * @modified by RGX v1.0.0
 */
 return array (
  'app' => 
  array (
    'lang' => 'zh_cn',
    'timezone' => 8,
  ),
  'tpl' => 
  array (
    'style' => 'style',
    '404_tpl' => '404.tpl',
    'msg_tpl' => 'msg.tpl',
    'ob' => true,
    'native' => false,
    'tpl_pre' => '{',
    'tpl_suf' => '}',
    'cmod' => false,
    'charset' => 'utf-8',
    'allow_php' => false,
  ),
  'cache' => 
  array (
    'type' => 'file',
    'pre' => 'rgx_',
    'file' => 
    array (
    ),
  ),
  'route' => 
  array (
    'def_mod' => 'index',
    'def_act' => 'index',
    'ma_sep' => '/',
    'ap_sep' => '?',
    'pg_sep' => '&',
    'pp_sep' => '=',
    'suf' => '.html',
    'rewrite' => false,
    '404_tpl' => '404.tpl',
  ),
  'log' => 
  array (
    'type' => 'file',
    'file' => 
    array (
      'dev' => false,
    ),
  ),
  'db' => 
  array (
    'pre' => 'pre_',
    'type' => 'mysql',
    'mysql' => 
    array (
      'default' => 'host=127.0.0.1;port=3306;db=wx;user=wx;passwd=dAdian3212019;charset=utf8;profiling=1',
    ),
  ),
  'sess' => 
  array (
    'type' => 'php',
    'php' => 
    array (
      'ttl' => 7200,
    ),
  ),
  'CACHE_VER' => 1,
  'SYS_NAME' => '公众号竞猜管理平台',
  'static_url' => 'https://www.dadiandesign.com/wx/guess/static/',
  'app_url' => 'https://www.dadiandesign.com/wx/guess/admin/',
);
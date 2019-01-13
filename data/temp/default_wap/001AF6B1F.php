<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); unset($this);?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <title>历史竞猜</title>
    <script src="https://www.dadiandesign.com/wx/guess/wap/template/style/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.dadiandesign.com/wx/guess/wap/template/style/css/style.css" />
</head>

<body>
    <div class="top-nav" style="position: relative;">
        <a href="javascript:history.go(-1);" style="position: absolute; left: 6px;"><返回</a>

        <div class="text-center" style="color: #f7ca5e; font-weight: bold;">
            历史竞猜
        </div>
    </div> <?php if (empty($list)):?> <div class="no-data">
        暂无数据
    </div> <?php else:?> <ul class="history"> <?php unset($k, $v); $k_index = 0; foreach ((array)$list as $k => $v): $k_index ++;?> <li>
            <img class="left" src="<?php echo($v['qz_headimgurl']);?>">

            <div class="right">
                <p class="mb10">
                    <span class="title">答题时间:</span>
                    <span class="value"><?php echo(date('Y-m-d H:i:s' , $v['qz_create_time']));?></span>
                </p>
                <p class="mb10">
                    <span class="title">已达题目:</span>
                    <span class="value"><?php echo($v['qz_tm_name']);?></span>
                </p>
                <p class="mb10">
                    <span class="title">所选答案:</span>
                    <span class="value"><?php echo($v['qz_tm_answer']);?></span>
                </p>
            </div>
            <div style="float: none;clear: both"></div>
        </li> <?php endforeach;?> <?php endif;?></body>

</html>
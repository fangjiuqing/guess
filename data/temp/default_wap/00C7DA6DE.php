<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); unset($this);?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php echo($page_title ? : '竞猜');?></title>
    <script src="http://guess.d/wap/template/style/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://guess.d/wap/template/style/css/style.css" />


    <style type="text/css">
        body {
            background:url('http://guess.d/wap/template/style/images/answered.png') no-repeat;
            background-size: cover;
            background-color: #106051;
        }
    </style>
</head>

<body>
    <div class="top-nav">
    <div class="left">
        <p class="circle">
            <a><?php echo($login['nickname']);?></a>
        </p>
    </div>

    <div class="right">
        <p class="circle">
            <a href="<?php echo(RGX\router::url('index-history')); ?>">我的竞猜</a>
        </p>
    </div>
</div>
    <div class="content">

    </div>

    <script type="text/javascript">
        $(function() {

        });
    </script>
</body>

</html>
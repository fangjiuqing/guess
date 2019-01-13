<?php namespace com\default_wap;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); unset($this);?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php echo($page_title);?></title>
    <script src="http://guess.d/wap/template/style/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" http://guess.d/static/css/weui/jquery-weui.css" />
    <link rel="stylesheet" type="text/css" href=" http://guess.d/static/css/weui/lib/weui.min.css" />
    <link rel="stylesheet" type="text/css" href="http://guess.d/wap/template/style/css/style.css" />
    <style type="text/css">
        body {
            background:url('<?php echo($data[tm_bg_image]);?>') no-repeat;
            background-size: cover;
            background-color: #106051;
        }
    </style>
</head>

<body>
    <div class="top-nav">
        <div class="left">
            <p class="circle">
                <a>jonathan（大点儿...</a>
            </p>
        </div>

        <div class="right">
            <p class="circle">
                <a href="<?php echo(RGX\router::url('index-history')); ?>">我的竞猜</a>
            </p>
        </div>
    </div>
    <div class="content">
        <form action="<?php echo(RGX\router::url('index-quiz-~')); ?>" id="sform">
            <input type="hidden" name="data[qz_tm_id]" value="<?php echo($data['tm_id']);?>" id="qz_tm_id" />
            <input type="hidden" name="data[qz_tm_name]" value="<?php echo($data['tm_name']);?>" id="qz_tm_name" />
            <input type="hidden" name="data[qz_tm_answer]" id="qz_tm_answer" />
        </form>

        <ul class="question"> <?php unset($k, $v); $k_index = 0; foreach ((array)$data['tm_answer'] as $k => $v): $k_index ++;?> <li class="transform"> <?php echo($v);?> </li> <?php endforeach;?> </ul>

        <a class="transform submit-btn" type="submit" id="submit-answer">提交</a>
    </div>

    <script type="text/javascript" src=" http://guess.d/static/js/jquery-weui.js"></script>
    <script type="text/javascript">
        $(function() {
            var allow_submit = false;

            $('.question li').on('click' , function() {
                $('.question li').each(function (idx , ele) {
                    $(ele).removeClass('active');
                });

                $(this).addClass('active');
                $('#qz_tm_answer').val($(this).text());
                allow_submit = true;
            });

            //  提交
            $('#submit-answer').on('click' , function () {
                if ( allow_submit ) {
                    var sfrom = $('#sform');
                    var url   = sfrom.attr('action');
                    var data  = sfrom.serialize();
                    $.ajax({
                         url: url,
                         type: 'POST',
                         dataType: 'json',
                         data: data,
                         timeout: 1000,
                         cache: false,
                         success: function(res) { //成功执行方法
                            if ( res.code == 0 ) {
                                $.alert('请先选择答案！' , "警告" , function() {
                                    location.href = res.url;
                                });
                            }else{
                                $.alert(res.msg , "警告");
                            }
                         }
                     })
                }else {
                    $.alert('请先选择答案！' , "警告");
                }
            });
        });
    </script>
</body>

</html>
<?php namespace com\default_www;use re\rgx as RGX;!defined('IN_RGX') && exit('Access Denied'); unset($this);?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?php echo((is_array($_title) ? join('_', $_title) : $_title));?></title>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href=" http://guess.d/static/font-awesome/css/font-awesome.css?v=4.7.0" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/animate.min.css" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/bids.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript">
        var upload_image_url = '<?php echo(RGX\router::url('@upload-image')); ?>',
            DATA_URL    = 'http://www.dadiandesign.com/wx/guess/admin/data/',
            STATIC_URL  = ' http://guess.d/static/',
            UPLOAD_URL  = 'http://www.dadiandesign.com/wx/guess/admin/data/attachment/',
            _route      = <?php echo(json_encode($route, JSON_UNESCAPED_UNICODE));?>,
            _url        = '<?php echo($_MODULE);?>-<?php echo($_ACTION);?>',
            _filter     = <?php echo(json_encode($filter['values'], JSON_UNESCAPED_UNICODE));?>,
            filter      = <?php echo(json_encode($filter, JSON_UNESCAPED_UNICODE));?>;
    </script>
<link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/album.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <form action="<?php echo(RGX\router::url('@%s-save' , $_MODULE)); ?>" method="post" id="sform" class="form-horizontal">
            <input type="hidden" name="data[tm_id]" id="tm_id" value="<?php echo(intval($data['tm_id']));?>">

            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>
                                <i class="fa fa-cog"></i>
                                编辑/新增题目
                            </h5>
                            <button class="btn btn-sm btn-primary pull-right" type="submit">保存内容</button>
                        </div>
                        <div class="ibox-content">
                            <div class="row row-dashed">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">题目名称</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required name="data[tm_name]"  placeholder="题目名称" id="tm_name" value="<?php echo($data['tm_name'] ? : '');?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">题目状态</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="data[tm_status]">
                                                <option value="active" <?php if ($data['tm_status'] == 'active'):?> selected<?php endif;?>>激活</option>
                                                <option value="close" <?php if ($data['tm_status'] == 'close'):?> selected<?php endif;?>>关闭</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">背景图片地址</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="data[tm_bg_image]"  placeholder="背景图片地址，需要浏览器可直接访问" id="tm_bg_image" required value="<?php echo($data['tm_bg_image'] ? : '');?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">题目答案</label>
                                        <div class="col-sm-9">
                                            <textarea name="data[tm_answer]" class="form-control" rows="4"><?php echo($data['tm_answer'] ? : '');?></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src=" http://guess.d/static/js/jquery.min.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/content.min.js?v=1.0.0"></script>
<script src=" http://guess.d/static/dialog/lhgdialog.min.js?skin=discuz&amp;1"></script>
<script src=" http://guess.d/static/js/RGX.lib.min.js"></script>
<script src=" http://guess.d/static/js/rgx.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/common.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src=" http://guess.d/static/js/upload.js"></script>


    <script type="text/javascript">
        RGX.post('#sform');
    </script>
</body>
<!--</html>
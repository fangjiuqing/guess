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
    <link href="http://www.dadiandesign.com/wx/guess/static/font-awesome/css/font-awesome.css?v=4.7.0" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/animate.min.css" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/bids.css?v=1.0.0" rel="stylesheet">
    <script type="text/javascript">
        var upload_image_url = '<?php echo(RGX\router::url('@upload-image')); ?>',
            DATA_URL    = 'http://www.dadiandesign.com/wx/guess/admin/data/',
            STATIC_URL  = 'http://www.dadiandesign.com/wx/guess/static/',
            UPLOAD_URL  = 'http://www.dadiandesign.com/wx/guess/admin/data/attachment/',
            _route      = <?php echo(json_encode($route, JSON_UNESCAPED_UNICODE));?>,
            _url        = '<?php echo($_MODULE);?>-<?php echo($_ACTION);?>',
            _filter     = <?php echo(json_encode($filter['values'], JSON_UNESCAPED_UNICODE));?>,
            filter      = <?php echo(json_encode($filter, JSON_UNESCAPED_UNICODE));?>;
    </script>
<link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<!-- Data Tables -->
<link href="http://www.dadiandesign.com/wx/guess/admin/template/style/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<style type="text/css">
    .fixed-height {
        min-height: 329px;
    }
</style>
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins fixed-height">
                    <div class="ibox-title">
                        <h5>历史竞猜</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center" width="6%">序号</th>
                                    <th>用户昵称</th>
                                    <th>用户头像</th>
                                    <th>答题题目</th>
                                    <th>答题答案</th>
                                    <th>答题时间</th>
                                </tr>
                            </thead>

                            <tbody> <?php unset($k, $v); $k_index = 0; foreach ((array)$list as $k => $v): $k_index ++;?> <tr>
                                    <td class="text-center"><?php echo($v['qz_id']);?></td>
                                    <td> <?php echo($v['qz_nickname']);?> </td>
                                    <td>
                                        <img src="<?php echo($v['qz_headimgurl']);?>" style="width:64px;" />
                                    </td>
                                    <td><?php echo($v['qz_tm_name']);?></td>
                                    <td><?php echo($v['qz_tm_answer']);?></td>
                                    <td><?php echo(date('Y-m-d H:i:s' , $v['qz_create_time']));?></td>
                                </tr> <?php endforeach;?> </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal inmodal" id="add-fee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">新增题目</h4>
                <small class="font-bold">【Tips：背景图需要按照尺寸要求；题目答案一行一个】</small>
            </div>
            <div class="modal-body">
                <form action="<?php echo(RGX\router::url('timu-save-~')); ?>" method="POST" id="savefee" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-2 control-label">题目名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="data[tm_name]"  placeholder="题目名称" id="tm_name" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-2 control-label">题目状态</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="data[tm_status]">
                                    <option value="active">激活</option>
                                    <option value="close">关闭</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-2 control-label">背景图片</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="data[tm_bg_image]"  placeholder="背景图片地址，需要浏览器可直接访问" id="tm_bg_image" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-2 control-label">题目答案</label>
                            <div class="col-sm-10">
                                <textarea name="data[tm_answer]" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="save-fee-submit">保存</button>
            </div>
        </div>
    </div>
</div>

    <script src="http://www.dadiandesign.com/wx/guess/static/js/jquery.min.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/content.min.js?v=1.0.0"></script>
<script src="http://www.dadiandesign.com/wx/guess/static/dialog/lhgdialog.min.js?skin=discuz&amp;1"></script>
<script src="http://www.dadiandesign.com/wx/guess/static/js/RGX.lib.min.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/static/js/rgx.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/common.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="http://www.dadiandesign.com/wx/guess/static/js/upload.js"></script>


    <script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="http://www.dadiandesign.com/wx/guess/admin/template/style/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(function() {
            $(".dataTables").dataTable();
        });
    </script>
</body>

</html>

<?php
/**
 * 错误异常类
 * @copyright reginx.com
 * $Id: exception.class.php 5 2017-07-19 03:44:30Z reginx $
 */
namespace re\rgx;

class exception extends \Exception {
    
    /**
     * 异常描述
     * @var unknown
     */
    private $_msg = null;
    
    /**
     * 错误代码
     * @var unknown
     */
    private $_code = 0;
    
    /**
     * 是否日志记录
     * @var unknown
     */
    private $_log  = false;
    
    /**
     * 不存在 Code
     * @var unknown
     */
    const NOT_EXISTS = 1;
    
    /**
     * 不允许自动load Code
     * @var unknown
     */
    const AUTO_LOAD_NOT_ALLOWED = 2;
    
    /**
     * 无效的名称
     * @var integer
     */
    const INVALID_NAME = 3;
    
    /**
     * 无效的类型
     * @var integer
     */
    const INVALID_TYPE = 4;
    
    /**
     * 无效的正则表达式
     * @var unknown
     */
    const INVALID_REGEX = 5;
    
    /**
     * 无效的回调函数
     * @var integer
     */
    const INVALID_CALLBACK = 6;
    
    /**
     * 不支持
     * @var integer
     */
    const NOT_SUPPORT = 9;
    
    /**
     * IO 错误 (含权限相关)
     * @var unknown
     */
    const IO_ERROR = 10;
    
    /**
     * 配置错误
     * @var integer
     */
    const CONFIG_ERROR = 21;
    
    /**
     * SQL 查询错误
     * @var unknown
     */
    const SQL_QUERY_ERROR = 31;

    /**
     * 表模型错误
     * @var unknown
     */
    const TABLE_ERROR = 32;
    
    /**
     * 输出
     * {@inheritDoc}
     * @see Exception::__toString()
     */
    public function __toString () {
        if (RUN_MODE != 'debug') {
            ob_end_clean();
        }

        if (!IS_CLI) {
            header('X-Powered-By: RGX v' . RGX_VER);
            header('HTTP/1.1 500 Internal Server Error');
            $code = '';
            $temp = '<!DOCTYPE html><html><head><title>reginx error </title>' .
                     '<meta charset="utf-8"/>' .
                     '<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1" />' .
                     '<meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /><style type="text/css">body { background-color:' .
                     ' white; color: black;font: 12px Century Gothic, verdana, arial, sans-serif;text-align:left !important;}' .
                     ' #container { width: 100%;} #message {background-color:' .
                     ' #FFFFCC; } #bodytitle {vertical-align: top; } b{font-weight:normal}' .
                     ' .help  {font-size:12px; color: red;} .red {color: red;} .trace{font-size:11px;}' .
                     ' a:link { font-size:12px; color: red; } a:visited{font-size:11px; color: #4e4e4e; ' .
                     '} </style></head><body><table cellpadding="1" cellspacing="5" ' .
                     'id="container"><tr><td class="bodytext"><br/>error' .
                     ' messages: </td></tr><tr><td class="bodytext" id="message"><ul style="padding-top:3px\9;*padding-top:10px;"><li>' .
                     (is_array($this->_msg) ? join('</li><li>', $this->_msg) : $this->_msg) .
                     ' &nbsp;&nbsp;<a href="http://www.rgx.re/help/' .
                     $this->_code . '" target="_blank"' .
                     ' style="color:blue;text-decoration:none">' .
                     LANG('get help') . '</a></li></ul></td></tr>' . '<TRACE/>' .
                     '<tr><td class="help"><a href="' . APP_URL .
                     '">' . $_SERVER['HTTP_HOST'] . '</a> ' . LANG('error has been recorded') .
                     ' </td></tr></table></body></html>';
        }
        else {
            $temp  = PHP_EOL;
            $temp .= "+ ---------------------- RGX CLI ----------------------" . PHP_EOL;
            $temp .= "| @time\t" . date('Y-m-d H:i:s', app::get_time()) . PHP_EOL;
            $temp .= "| @uri\t" . getenv('request_uri') . PHP_EOL;
            $temp .= "| @message" . PHP_EOL;
            $temp .= "+ -----------------------------------------------------" . PHP_EOL;
            $temp .= (is_array($this->_msg) ? ("| # " . join(PHP_EOL . "| #", $this->_msg)) : ("| #" . $this->_msg)) . PHP_EOL;
            $temp .= "+ -----------------------------------------------------" . PHP_EOL;
            $temp .= PHP_EOL;
        }
        if (RUN_MODE == 'debug') {
            $trace = $this->getTrace();
            array_unshift($trace, [
                'file'  => $this->getFile(),
                'line'  => $this->getLine()
            ]);
            $str = IS_CLI ? ('trace information' . PHP_EOL) : '<tr><td class="bodytext"><br/>trace information: <br/><ul class="trace">';
            for ($i = 0; $i < sizeof($trace); $i ++) {
                $sfile = $trace[$i]['file'];
                if (empty($sfile) && $i >= 1) {
                    $sfile = $trace[$i-1]['file'];
                }
                $str .= '<li>[ ' . sprintf('#%02d', $i) . ' line:' .
                         sprintf('%05d', empty($trace[$i]['line']) ? 0 : $trace[$i]['line']) . ' ] ';
                $str .= ' ' . misc::relpath($sfile);
                $str .= ' ' . (empty($trace[$i]['class']) ? '' : $trace[$i]['class']);
                $str .= (empty($trace[$i]['type']) ? ' ' : $trace[$i]['type']);
                if ($trace[$i]['function']) {
                    $str .= (empty($trace[$i]['function']) ? '' : $trace[$i]['function']) .'()';
                }
                $str .= '</li>';
            }
            $temp = str_replace('<TRACE/>', $str . '</ul></td></tr>', $temp);
        }
        if ($this->_log) {
            LOGS($this->_log, $this->_msg, true, $trace);
        }
        exit($temp);
    }
    
    /**
     * 架构方法
     * @param unknown $message
     * @param number $code
     * @param string $log
     */
    public function __construct ($message = null, $code = 0, $log = false) {
        parent::__construct($message, $code);
        $this->_msg  = $message;
        $this->_code = $code;
        $this->_log  = $log;
    }
}
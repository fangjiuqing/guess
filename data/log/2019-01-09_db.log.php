<?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/index/index.html
 * @date 2019-01-09 00:09:23 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
#7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
#8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(timu_table,1,)
 # line:00028 file : APP:module/index.module.php re\rgx\OBJ(timu_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/index/index.html
 * @date 2019-01-09 00:09:23 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
#7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
#8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
#9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#11 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #11 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('timu_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/index.module.php(28): re\rgx\OBJ('timu_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\index_module->index_action()
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #11 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(timu_table,1,)
 # line:00028 file : APP:module/index.module.php re\rgx\OBJ(timu_table)
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=001dJvkX1MLjl01l4rjX1JpykX1dJvks&state=STATE
 * @date 2019-01-09 00:14:01 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00029 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=001dJvkX1MLjl01l4rjX1JpykX1dJvks&state=STATE
 * @date 2019-01-09 00:14:01 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00029 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=001dJvkX1MLjl01l4rjX1JpykX1dJvks&state=STATE
 * @date 2019-01-09 00:14:02 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(29): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00029 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=001dJvkX1MLjl01l4rjX1JpykX1dJvks&state=STATE
 * @date 2019-01-09 00:14:02 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00029 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061uWRwX0m89uU1tZUwX0Jw6xX0uWRwQ&state=STATE
 * @date 2019-01-09 00:17:56 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061uWRwX0m89uU1tZUwX0Jw6xX0uWRwQ&state=STATE
 * @date 2019-01-09 00:17:56 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061uWRwX0m89uU1tZUwX0Jw6xX0uWRwQ&state=STATE
 * @date 2019-01-09 00:17:56 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061uWRwX0m89uU1tZUwX0Jw6xX0uWRwQ&state=STATE
 * @date 2019-01-09 00:17:56 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061GXH7f12gbaA0yWu5f1BDw7f1GXH7U&state=STATE
 * @date 2019-01-09 00:18:15 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061GXH7f12gbaA0yWu5f1BDw7f1GXH7U&state=STATE
 * @date 2019-01-09 00:18:15 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061GXH7f12gbaA0yWu5f1BDw7f1GXH7U&state=STATE
 * @date 2019-01-09 00:18:15 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061GXH7f12gbaA0yWu5f1BDw7f1GXH7U&state=STATE
 * @date 2019-01-09 00:18:15 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=081wU4k32XUO3O08izl32dWTj32wU4k1&state=STATE
 * @date 2019-01-09 00:19:24 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=081wU4k32XUO3O08izl32dWTj32wU4k1&state=STATE
 * @date 2019-01-09 00:19:24 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=081wU4k32XUO3O08izl32dWTj32wU4k1&state=STATE
 * @date 2019-01-09 00:19:24 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=081wU4k32XUO3O08izl32dWTj32wU4k1&state=STATE
 * @date 2019-01-09 00:19:24 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=08137kLi18DxKu0cAILi1opqLi137kLH&state=STATE
 * @date 2019-01-09 00:20:51 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=08137kLi18DxKu0cAILi1opqLi137kLH&state=STATE
 * @date 2019-01-09 00:20:51 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=08137kLi18DxKu0cAILi1opqLi137kLH&state=STATE
 * @date 2019-01-09 00:20:52 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=08137kLi18DxKu0cAILi1opqLi137kLH&state=STATE
 * @date 2019-01-09 00:20:52 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061Utlea2cUoKL0oLEca2lXmea2Utleu&state=STATE
 * @date 2019-01-09 00:21:19 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061Utlea2cUoKL0oLEca2lXmea2Utleu&state=STATE
 * @date 2019-01-09 00:21:19 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = 'ogwi20c1estFSAX0PniS8pzUm6lY' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061Utlea2cUoKL0oLEca2lXmea2Utleu&state=STATE
 * @date 2019-01-09 00:21:19 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/wap/module/wechat.module.php(30): re\rgx\table->get()
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_wap\wechat_module->oauth_action()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /www/wwwroot/dadiandesign.com/wx/guess/wap/index.php(21): include('/www/wwwroot/da...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://localhost:8080/wx/guess/wap/
 * @url  /wx/guess/wap/index.php/wechat/oauth?code=061Utlea2cUoKL0oLEca2lXmea2Utleu&state=STATE
 * @date 2019-01-09 00:21:19 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY create_time DESC LIMIT 1) LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_user_info` 
 
WHERE 1 = 1 
 AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_user_info` 
     
    WHERE 1 = 1 
     AND (`openid` = '' ORDER BY create_time DESC LIMIT 1) LIMIT  1 
    ,,)
 # line:00030 file : APP:module/wechat.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\wechat_module->oauth_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://www.dadiandesign.com/wx/guess/admin/
 * @url  /wx/guess/admin/index.php/login.html
 * @date 2019-01-09 23:15:02 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
#7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
#8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(user_table,1,)
 # line:00076 file : APP:module/login.module.php re\rgx\OBJ(user_table)
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   183.160.120.147
 * @app  http://www.dadiandesign.com/wx/guess/admin/
 * @url  /wx/guess/admin/index.php/login.html
 * @date 2019-01-09 23:15:09 
 * @desc exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
Stack trace:
#0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
#1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
#2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
#3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
#4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
#5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
#6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
#7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
#8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
#9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
#10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
#11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
#12 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
    #12 {main},1,)
 # line:00078 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)' in /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php:74
    Stack trace:
    #0 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(74): PDO->__construct('mysql:host=127....', 'root', '')
    #1 /www/wwwroot/dadiandesign.com/wx/guess/rgx/extra/db/mysql.db.php(31): re\rgx\mysql_db->_connect()
    #2 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/database.class.php(48): re\rgx\mysql_db->__construct(Array)
    #3 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(87): re\rgx\database::get_instance(Array)
    #4 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/table.class.php(153): re\rgx\app::db()
    #5 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(253): re\rgx\table->__construct(NULL)
    #6 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/rgx.class.php(99): re\rgx\app::get_instance('user_table', true, NULL)
    #7 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(76): re\rgx\OBJ('user_table')
    #8 /www/wwwroot/dadiandesign.com/wx/guess/admin/module/login.module.php(20): com\default_www\login_module->submit(Array)
    #9 /www/wwwroot/dadiandesign.com/wx/guess/rgx/class/app.class.php(77): com\default_www\login_module->index_action()
    #10 /www/wwwroot/dadiandesign.com/wx/guess/rgx/rgx.php(157): re\rgx\app::init()
    #11 /www/wwwroot/dadiandesign.com/wx/guess/admin/index.php(22): include('/www/wwwroot/da...')
    #12 {main})
 # line:00031 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->_connect()
 # line:00048 file : RGX:class/database.class.php re\rgx\mysql_db->__construct([Array])
 # line:00087 file : RGX:class/app.class.php re\rgx\database::get_instance([Array])
 # line:00153 file : RGX:class/table.class.php re\rgx\app::db()
 # line:00253 file : RGX:class/app.class.php re\rgx\table->__construct()
 # line:00099 file : RGX:class/rgx.class.php re\rgx\app::get_instance(user_table,1,)
 # line:00076 file : APP:module/login.module.php re\rgx\OBJ(user_table)
 # line:00020 file : APP:module/login.module.php com\default_www\login_module->submit([Array])
 # line:00077 file : RGX:class/app.class.php com\default_www\login_module->index_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?>
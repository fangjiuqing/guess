<?php
/*
 * @ip   127.0.0.1
 * @app  http://guess.d/wap/
 * @url  /wap/index.php/index/quiz
 * @date 2019-01-08 21:24:01 
 * @desc exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/guess/rgx/extra/db/mysql.db.php:107
Stack trace:
#0 /data/htdocs/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
#1 /data/htdocs/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
#2 /data/htdocs/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
#3 /data/htdocs/guess/wap/module/index.module.php(41): re\rgx\table->get()
#4 /data/htdocs/guess/rgx/class/app.class.php(77): com\default_wap\index_module->quiz_action()
#5 /data/htdocs/guess/rgx/rgx.php(157): re\rgx\app::init()
#6 /data/htdocs/guess/wap/index.php(21): include('/data/htdocs/gu...')
#7 {main}
 * @extra Nil

 # line:00146 file : RGX:class/rgx.class.php re\rgx\file_log->write(exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/guess/wap/module/index.module.php(41): re\rgx\table->get()
    #4 /data/htdocs/guess/rgx/class/app.class.php(77): com\default_wap\index_module->quiz_action()
    #5 /data/htdocs/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /data/htdocs/guess/wap/index.php(21): include('/data/htdocs/gu...')
    #7 {main},1,)
 # line:00110 file : RGX:extra/db/mysql.db.php re\rgx\LOGS(db,exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5' in /data/htdocs/guess/rgx/extra/db/mysql.db.php:107
    Stack trace:
    #0 /data/htdocs/guess/rgx/extra/db/mysql.db.php(107): PDO->query('select  *  \nFRO...')
    #1 /data/htdocs/guess/rgx/extra/db/mysql.db.php(218): re\rgx\mysql_db->query('select  *  \nFRO...')
    #2 /data/htdocs/guess/rgx/class/table.class.php(358): re\rgx\mysql_db->get('select  *  \nFRO...', false, false)
    #3 /data/htdocs/guess/wap/module/index.module.php(41): re\rgx\table->get()
    #4 /data/htdocs/guess/rgx/class/app.class.php(77): com\default_wap\index_module->quiz_action()
    #5 /data/htdocs/guess/rgx/rgx.php(157): re\rgx\app::init()
    #6 /data/htdocs/guess/wap/index.php(21): include('/data/htdocs/gu...')
    #7 {main})
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_quiz` 
     
    WHERE 1 = 1 
     AND (`qz_openid` = '' AND `qz_tm_id` = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_quiz` 
     
    WHERE 1 = 1 
     AND (`qz_openid` = '' AND `qz_tm_id` = ) LIMIT  1 
    ,,)
 # line:00041 file : APP:module/index.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->quiz_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?><?php
/*
 * @ip   127.0.0.1
 * @app  http://guess.d/wap/
 * @url  /wap/index.php/index/quiz
 * @date 2019-01-08 21:24:01 
 * @desc 查询失败 「 1064#You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT  1' at line 5 」</li><li>查询语句 「 select  *  
FROM `pre_quiz` 
 
WHERE 1 = 1 
 AND (`qz_openid` = '' AND `qz_tm_id` = ) LIMIT  1 
 」
 * @extra Nil

 # line:00111 file : RGX:extra/db/mysql.db.php ()
 # line:00218 file : RGX:extra/db/mysql.db.php re\rgx\mysql_db->query(select  *  
    FROM `pre_quiz` 
     
    WHERE 1 = 1 
     AND (`qz_openid` = '' AND `qz_tm_id` = ) LIMIT  1 
    )
 # line:00358 file : RGX:class/table.class.php re\rgx\mysql_db->get(select  *  
    FROM `pre_quiz` 
     
    WHERE 1 = 1 
     AND (`qz_openid` = '' AND `qz_tm_id` = ) LIMIT  1 
    ,,)
 # line:00041 file : APP:module/index.module.php re\rgx\table->get()
 # line:00077 file : RGX:class/app.class.php com\default_wap\index_module->quiz_action()
 # line:00157 file : RGX:rgx.php re\rgx\app::init()

*/
?>
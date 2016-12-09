<?php
return array(


   'DEFAULT_MODULE'         =>      'Home', 
   'DEFAULT_CONTROLLER'     =>      'Store',
   'DEFAULT_ACTION'         =>      'index',                      // 默认操作名称
   'DB_TYPE'                =>      'mysql',    	 	             // 数据库类型
   'DB_HOST'                =>      'localhost', 	              // 服务器地址
   'DB_NAME'                =>      'b2b_tpshop',          	          // 数据库名
   'DB_USER'                =>      'root',      		             // 用户名
   'DB_PWD'                 =>      '',                           // 密码
   'DB_PREFIX'              =>      'yd_',    		          // 数据库表前缀
   'URL_MODEL'              =>      2,          		          //重写模式
   'SHOW_PAGE_TRACE'        =>      true,       		          //开启页面trace
   'URL_HTML_SUFFIX'        =>      'html',      		          //设置伪静态
   'TMPL_L_DELIM'    		    =>      '{',
   'TMPL_R_DELIM'    		    =>      '}',

   'VIEW_PATH'              =>    './mtpl/',  //模板位置  模板位置在主站
   'VIEW_PATHS'             =>    'http://www.b2b.com/Merchants_tpl/mobile/',  //获取主站的css和js 用
   'DOMAIN'                 =>    'http://www.b2b.com',  //主站链接
   'DEFAULT_THEME'          =>    'templates',      //模板主题


    'TOKEN_ON'              =>      true,                          // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'            =>      '__hash__',                    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'            =>      'md5',                         //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'           =>      true,                          //令牌验证出错后是否重置令牌 默认为true




);
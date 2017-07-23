<?php
return array(
//     '配置项'=>'配置值'
//     'DB_HOST'   => 'sqld-gz.bcehost.com:3306', //服务器地址
//     'DB_TYPE'   => 'mysql',     //数据库类型
//     'DB_NAME'   => 'bmpQzODyzlCcbFGFHQnR',      //数据库名称
//     'DB_USER'   => '21a6fa4708ce459daa2e4d9efdbc6e0f',      //数据库用户名
//     'DB_PWD'    => '251d423f9a2045b59d6229bc9e58aa48',          //数据库密码
//     'DB_PREFIX' => 'blog_',     //数据表前缀

    'URL_ROUTER_ON'   => true,    //开启路由
    'URL_HTML_SUFFIX' => 'html',    //设置伪静态
    'URL_ROUTE_RULES'=>array(
        'about' => 'Home/About/index',
        'life' => 'Home/Life/index',
        'life/p/:id' => 'Home/Life/index/m/Home/p/:1',
        'index' => 'Home/Index/index',
        'photo' => 'Home/Photo/index',
        'board' => 'Home/Board/index',
        'article/:id$' => 'Home/Life/article',
        'category/:id' => 'Home/Life/index?category=:1',
        'list' => 'Admin/life/list'
    ),
//        '配置项'=>'配置值'
    'DB_HOST'   => '127.0.0.1', //服务器地址
    'DB_TYPE'   => 'mysql',     //数据库类型
    'DB_NAME'   => 'blog',      //数据库名称
    'DB_USER'   => 'root',      //数据库用户名
    'DB_PWD'    => '',          //数据库密码
    'DB_PREFIX' => 'blog_',     //数据表前缀
//
    'TMPL_EXCEPTION_FILE'   =>  'Public/error/404.html',// 异常页面的模板文件
    'ERROR_PAGE'            =>  'Public/error/404.html', // 错误定向页面
);
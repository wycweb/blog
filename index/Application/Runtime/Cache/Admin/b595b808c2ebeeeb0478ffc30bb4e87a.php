<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>王艺超PHP个人博客后台管理</title>
    <link rel="stylesheet" type="text/css" href="/index/Public/Back/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/index/Public/Back/css/main.css"/>
    <script type="text/javascript" src="/index/Public/Back/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/index/Admin">首页</a></li>
                <li><a href="/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo $_SESSION['username'];?></a></li>
                <li><a href="/index/Admin/Admin/edit/id/<?php echo $_SESSION['id'];?>">修改密码</a></li>
                <li><a href="/index/Admin/Admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/index/Admin/Life/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="/index/Admin/Category/lst"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="/index/Admin/About/edit"><i class="icon-font">&#xe052;</i>关于我</a></li>
                        <li><a href="/index/Admin/Information/edit"><i class="icon-font">&#xe052;</i>网站基础信息</a></li>
                        <li><a href="/index/Admin/Admin/lst"><i class="icon-font">&#xe008;</i>管理员管理</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="/index/Admin/Life/add"><i class="icon-font">&#xe001;</i>新增文章</a>
                    <a href="/index/Admin/Category/lst"><i class="icon-font">&#xe005;</i>新增分类</a>
                </div>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
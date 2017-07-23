<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>慢生活-王艺超的PHP个人博客</title>
    <meta name="keywords" content="个人博客,王艺超个人博客,PHP个人博客,王艺超"/>
    <meta name="description" content="王艺超的个人博客，一位热衷于LAMP开发的大学生。享受生活的每一个细节，享受生活中的每一次感动，享受生活中的每一天。">
    <link href="/index/Public/css/base.css" rel="stylesheet">
    <link href="/index/Public/css/style.css" rel="stylesheet">
    <link href="/index/Public/css/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/index/Public/images/ico.ico" media="screen"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="/index/Public/js/modernizr.js"></script>
    <![endif]-->
    <script src="/index/Public/js/jquery-1.4.2.min.js"></script>
    <script>
        (function () {
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</head>
<body>
<div class="ibody">
    <header>
        <h1><?php echo ($information["title"]); ?></h1>
        <h2><?php echo ($information["describe"]); ?></h2>
        <div class="logo" style="background: url(/index/Uploads/<?php echo ($information["home_img"]); ?>) no-repeat #000 center;">
            <a href="/index/index.html"></a>
        </div>
        <nav id="topnav">
            <a href="/index/index.html">首页</a>
            <a href="/index/about.html">关于我</a>
            <a href="/index/life.html" id="topnav_current">慢生活</a>
            <a href="/index/photo.html">相册</a>
            <a href="/index/board.html">留言板</a>
        </nav>
    </header>
    <article>
        <h2 class="about_h">您现在的位置是：<a href="/index/index.html">首页</a>><a href="/index/life.html">慢生活</a>><a href="/index/category/<?php echo ($navName["cat_id"]); ?>.html"><?php echo ($navName["category"]); ?></a></h2>
        <div class="bloglist">
            <?php if(is_array($life)): foreach($life as $k=>$v): ?><div class="newblog">
                    <ul>
                        <h3><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></h3>
                        <div class="autor"><span>作者：<?php echo ($v["author"]); ?></span><span>分类：[<a
                                href="/index/category/<?php echo ($v["category_id"]); ?>.html"><?php echo ($v["category"]); ?></a>]</span><span>浏览（<a
                                href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["views"]); ?></a>）</span><span>评论（<a href="/index/category/<?php echo ($v["category_id"]); ?>.html">-</a>）</span></div>
                        <p><?php echo ($v["describe"]); ?><a href="/index/article/<?php echo ($v["id"]); ?>.html" class="readmore">全文</a></p>
                    </ul>
                    <figure><img src="/index/Uploads/<?php echo ($v["thumbnail"]); ?>"></figure>
                    <div class="dateview"><?php echo date('Y-m-d',$v['date']); ?></div>
                </div><?php endforeach; endif; ?>
        </div>
        <?php echo ($page); ?>
    </article>
    <aside>
        <div class="rnav">
            <?php if(is_array($category)): foreach($category as $k=>$v): ?><li class="rnav<?php echo ($v["cat_id"]); ?>"><a href="/index/category/<?php echo ($v["cat_id"]); ?>.html"><?php echo ($v["category"]); ?></a></li><?php endforeach; endif; ?>
        </div>
        <div class="ph_news">
            <h2>
                <p>点击排行</p>
            </h2>
            <ul class="ph_n">
                <?php if(is_array($clickArticle)): foreach($clickArticle as $k=>$v): if($k < 3): ?><li><span class="num<?php echo ($k+1); ?>"><?php echo ($k+1); ?></span><a
                                href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li>
                        <?php else: ?>
                        <li><span><?php echo ($k+1); ?></span><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a>
                        </li><?php endif; endforeach; endif; ?>
            </ul>
            <h2>
                <p>推荐文章</p>
            </h2>
            <ul>
                <?php if(is_array($commendArticle)): foreach($commendArticle as $k=>$v): ?><li><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            <h2>
                <p>最新评论</p>
            </h2>
            <ul class="pl_n">
                <!-- UYAN NEW COMMENT BEGIN -->
                <div id="uyan_newcmt_unit"></div>
                <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2129883"></script>
                <!-- 如果已经过加载此行JS，即可不用重复加载 -->
                <!-- UYAN NEW COMMENT END -->
            </ul>
            <!--<h2>-->
            <!--<p>最近访客</p>-->
            <!--<ul>-->
            <!--<img src="/index/Public/images/vis.jpg">&lt;!&ndash; 直接使用“多说”插件的调用代码 &ndash;&gt;-->
            <!--</ul>-->
            <!--</h2>-->
        </div>

        <div class="copyright">
            <ul>
                <p> Design by <a href="http://www.wycweb.com">王艺超</a></p>
                <p><a href="http://www.miitbeian.gov.cn" target="_blank"><?php echo ($information["icp"]); ?></a></p>
                </p>
            </ul>
        </div>
    </aside>
    <script src="/index/Public/js/silder.js"></script>
    <div class="clear"></div>
    <!-- 清除浮动 -->
</div>
<script>
    (function () {
        var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?7cbfb91faeba97246808925bb0a986e1" : "https://jspassport.ssl.qhimg.com/11.0.1.js?7cbfb91faeba97246808925bb0a986e1";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
</script>
</body>
</html>
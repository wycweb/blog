<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>王艺超的PHP个人博客-一个热衷于LAMP开发的学生</title>
  <meta name="keywords" content="个人博客,王艺超个人博客,PHP个人博客,王艺超" />
  <meta name="description" content="王艺超的个人博客，一位热衷于LAMP开发的大学生。该博客采用PHP语言开发，该个人博客将会记录博主平时学习中遇到的问题和解决问题的方法。同时该博客还会上传平时学习中弄的PHP小项目">
  <link href="/index/Public/css/base.css" rel="stylesheet">
  <link href="/index/Public/css/index.css" rel="stylesheet">
  <link href="/index/Public/css/media.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/index/Public/images/ico.ico" media="screen" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <!--[if lt IE 9]>
  <script src="/index/Public/js/modernizr.js"></script>
  <![endif]-->
  <script src="/index/Public/js/jquery-1.4.2.min.js"></script>
  <script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
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
      <a href="/index/index.html" id="topnav_current">首页</a>
      <a href="/index/about.html">关于我</a>
      <a href="/index/life.html">慢生活</a>
      <a href="/index/photo.html">相册</a>
      <a href="/index/board.html">留言板</a>
    </nav>
  </header>
  <article>
    <div class="banner" style="background: url(/index/Uploads/<?php echo ($information["banner_img"]); ?>) no-repeat center;">
      <ul class="texts">
          <?php echo ($information["banner_describe"]); ?>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php if(is_array($commendArticle)): foreach($commendArticle as $k=>$v): ?><div class="blogs">
          <h3><a href="article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></h3>
          <figure><img src="/index/Uploads/<?php echo ($v["thumbnail"]); ?>" ></figure>
          <ul>
            <p><?php echo ($v["describe"]); ?></p>
            <a href="article/<?php echo ($v["id"]); ?>.html" class="readmore">阅读全文&gt;&gt;</a>
          </ul>
          <p class="autor"><span>作者：<?php echo ($v["author"]); ?></span><span>分类：【<a href="/index/Home/Life/index/category/<?php echo ($v["category_id"]); ?>.html"><?php echo ($v["category"]); ?></a>】</span><span>浏览（<a href="article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["views"]); ?></a>）</span><span>评论（<a href="article/<?php echo ($v["id"]); ?>">-</a>）</span></p>
          <div class="dateview"><?php echo date('Y-m-d',$v['date']); ?></div>
        </div><?php endforeach; endif; ?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="/index/about.html" STYLE=" background: url(/index/Uploads/<?php echo ($information["person_photo"]); ?>) no-repeat;"><span>关于王艺超</span></a></div>
    <div class="topspaceinfo">
      <h1><?php echo ($information["person_title"]); ?></h1>
      <p><?php echo ($information["person_describe"]); ?></p>
    </div>
    <div class="about_c">
      <p>网名：<?php echo ($information["name"]); ?></p>
      <p>职业：<?php echo ($information["job"]); ?> </p>
      <p>籍贯：<?php echo ($information["address"]); ?></p>
      <p>电话：<?php echo ($information["phone"]); ?></p>
      <p>qq：<?php echo ($information["qq"]); ?></p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php if(is_array($newArticle)): foreach($newArticle as $k=>$v): ?><li><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
      <h2>
        <p class="tj_t2">点击排行</p>
      </h2>
      <ul>
        <?php if(is_array($clickArticle)): foreach($clickArticle as $k=>$v): ?><li><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="https://www.yangqq.com" target="_blank">杨青个人博客</a></li>
        <li><a href="https://user.qzone.qq.com/923659081/" target="_blank">王艺超的QQ空间</a></li>
      </ul>
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
    (function(){
       var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?7cbfb91faeba97246808925bb0a986e1":"https://jspassport.ssl.qhimg.com/11.0.1.js?7cbfb91faeba97246808925bb0a986e1";
       document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
    </script>
</body>
</html>
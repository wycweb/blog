<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo ($life["title"]); ?>-王艺超的PHP个人博客</title>
  <meta name="keywords" content="<?php echo ($life["title"]); ?>,个人博客,王艺超个人博客,PHP个人博客,王艺超" />
  <meta name="description" content="王艺超的个人博客，一位热衷于LAMP开发的大学生。享受生活的每一个细节，享受生活中的每一次感动，享受生活中的每一天。">
  <link href="/index/Public/css/base.css" rel="stylesheet">
  <link href="/index/Public/css/style.css" rel="stylesheet">
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
      <a href="/index/index.html">首页</a>
      <a href="/index/about.html">关于我</a>
      <a href="/index/life.html" id="topnav_current">慢生活</a>
      <a href="/index/photo.html">相册</a>
      <a href="/index/board.html">留言板</a>
    </nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/index/index.html">首页</a>><a href="/index/life.html">慢生活</a>><a href="/index/category/<?php echo ($navName["cat_id"]); ?>.html"><?php echo ($navName["category"]); ?></a></h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo ($life["title"]); ?></h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo date('Y-m-d',$life['date']); ?></span><span>编辑：<?php echo ($life["author"]); ?></span><span>浏览（<?php echo ($life["views"]); ?>）</span><span>评论（-）</span></p>
      <ul class="infos">
        <?php echo htmlspecialchars_decode($life['content']);?>
        <!--<?php echo ($life["content"]); ?>-->
      </ul>
      <div id="cloud-tie-wrapper" class="cloud-tie-wrapper"></div>
<script src="https://img1.cache.netease.com/f2e/tie/yun/sdk/loader.js"></script>
<script>
var cloudTieConfig = {
  url: document.location.href, 
  sourceId: "",
  productKey: "48b66694dccb4882873161716243e253",
  target: "cloud-tie-wrapper"
};
var yunManualLoad = true;
Tie.loader("aHR0cHM6Ly9hcGkuZ2VudGllLjE2My5jb20vcGMvbGl2ZXNjcmlwdC5odG1s", true);
</script>
      <div class="nextinfo">
        <?php
 if($prevTitle != null){ ?>
            <p>上一篇：<a href="/index/article/<?php echo ($prevTitle["id"]); ?>.html"><?php echo ($prevTitle["title"]); ?></a></p>
        <?php } ?>

        <?php
 if($nextTitle != null){ ?>
            <p>下一篇：<a href="/index/article/<?php echo ($nextTitle["id"]); ?>.html"><?php echo ($nextTitle["title"]); ?></a></p>
        <?php } ?>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <?php if(is_array($aboutArticle)): foreach($aboutArticle as $k=>$v): ?><li><a href="/index/article/<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
      </div>
    </div>
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
        <?php if(is_array($clickArticle)): foreach($clickArticle as $k=>$v): if($k < 3): ?><li><span class="num<?php echo ($k+1); ?>"><?php echo ($k+1); ?></span><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li>
            <?php else: ?>
            <li><span><?php echo ($k+1); ?></span><a href="/index/article/<?php echo ($v["id"]); ?>.html"><?php echo ($v["title"]); ?></a></li><?php endif; endforeach; endif; ?>
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
        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2129883"></script> <!-- 如果已经过加载此行JS，即可不用重复加载 -->
        <!-- UYAN NEW COMMENT END -->
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
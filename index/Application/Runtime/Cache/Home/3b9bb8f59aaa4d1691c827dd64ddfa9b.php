<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>关于我-王艺超的PHP个人博客</title>
  <meta name="keywords" content="个人博客,王艺超个人博客,PHP个人博客,王艺超" />
  <meta name="description" content="王艺超的个人博客，一位热衷于LAMP开发的大学生。我就是我 是颜色不一样的烟火">
  <link href="/index/Public/css/base.css" rel="stylesheet">
  <link href="/index/Public/css/about.css" rel="stylesheet">
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
      <a href="/index/about.html" id="topnav_current">关于我</a>
      <a href="/index/life.html">慢生活</a>
      <a href="/index/photo.html">相册</a>
      <a href="/index/board.html">留言板</a>
    </nav>
  </header>
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/index/index.html">首页</a>><a href="/index/about.html">关于我</a></h3>
    <div class="about">
      <h2>Just about me</h2>
      <ul>
        <?php echo htmlspecialchars_decode($about['describe']);?>
      </ul>
      <h2>About my blog</h2>
      <ul class="blog_a">
        <p>域  名：www.wycweb.com 创建于2016年06月25日 <a href="http://www.net.cn/domain/" class="blog_link" target="_blank">注册域名</a></p>
        <!--</a><a class="blog_link" href="http://koubei.baidu.com/womc/s/www.yangqq.com" target="_blank">邀你点评</a></p>-->
        <p>服务器：云虚拟主机 BCH标准型<a href="https://cloud.baidu.com/product/bch.html" class="blog_link" target="_blank">购买空间</a></p>
        <!--<a href="/jstt/web/2014-01-18/644.html" target="_blank" class="blog_link" >参考我的空间配置</a></p>-->
        <p>程  序：ThinkPHP3.2.3</p>
        <p>微信号：923659081</p>
        <p>说明：为了提高访问速度，本网站使用了静态缓存技术，部分数据不能及时更新！敬请谅解！</p>
      </ul>
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
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=69LZ2N3e0tvT2quamsWIhIY" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png"/></a></p>
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
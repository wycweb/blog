<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>相册-王艺超的PHP个人博客</title>
  <meta name="keywords" content="个人博客,王艺超个人博客,PHP个人博客,王艺超" />
  <meta name="description" content="王艺超的个人博客，一位热衷于LAMP开发的大学生。记录生活中的那些感动！">
  <link href="/index/Public/css/base.css" rel="stylesheet">
  <link href="/index/Public/css/about.css" rel="stylesheet">
  <link href="/index/Public/css/media.css" rel="stylesheet">
  <link href="/index/Public/css/album.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/index/Public/images/ico.ico" media="screen" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <!--[if lt IE 9]>
  <script src="/index/Public/js/modernizr.js"></script>
  <![endif]-->
  <script src="/index/Public/js/jquery-1.4.2.min.js"></script>
  <script src="/index/Public/js/waterfall.js"></script>
  <script src="/index/Public/js/animate.js"></script>
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
<!--相册蒙板-->
<div class="up" id="up">
    <div class="btn prev" id="prev">上一张</div>
    <div class="btn next" id="next">下一张</div>
    <span class="close" id="close">X</span>
    <div class="wrap-img" id="wrap_img">
        <img id="img" src="" alt="">
    </div>
</div>
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
      <a href="/index/life.html">慢生活</a>
      <a href="/index/photo.html" id="topnav_current">相册</a>
      <a href="/index/board.html">留言板</a>
    </nav>
  </header>
  <article id="article">
    <h3 class="about_h">您现在的位置是：<a href="/index/index.html">首页</a>><a href="/index/photo.html">相册</a></h3>
    <div class="about" id="about">
      <h2 align="center">相册功能的手机端显示有bug！</h2>
      <h2 align="center">功能正在完善······</h2>
      <div class="wrap" id="wrap">
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg0.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg1.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg2.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg3.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg4.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg5.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg6.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg7.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg8.jpg" alt="">
          </div>
        </div>
        <div class="frame">
          <div class="inner-pic">
            <img src="/index/Public/kobe/timg9.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="/index/Home/About" STYLE=" background: url(/index/Uploads/<?php echo ($information["person_photo"]); ?>) no-repeat;"><span>关于王艺超</span></a></div>
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
<!doctype html>
<html class="pixel-ratio-1">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的篮球圈</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">

  </head>
  <body>
    
<div class="page">
    <header class="bar bar-nav">
      <h1 class="title">篮球资讯</h1>
    </header>
  <nav class="bar bar-tab">
    <a class="tab-item active" href="#">
      <span class="icon icon-home"></span>
      <span class="tab-label">新闻</span>
    </a>
    <a class="tab-item" href="/ground">
      <span class="icon icon-browser"></span>
      <span class="tab-label">球场</span>
    </a>
    <a class="tab-item" href="/match">
      <span class="icon icon-star"></span>
      <span class="tab-label">联赛</span>
      <span class="badge">2</span>
    </a>
    <a class="tab-item" href="/home">
      <span class="icon icon-card"></span>
      <span class="tab-label">我的</span>
      <span class="badge">6</span>
    </a>
  </nav>
  <div class="content">
    <div class="page-index">

          <div class="card">
            <div class="card-content">
              <div class="list-block media-list">
                 <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <ul>
                    <li>
                      <a href="/news/<?php echo e($new->id); ?>" class="item-link item-content">
                        <div class="item-media"><img src="<?php echo e($new->image); ?>" style='width: 5rem;'></div>
                        <div class="item-inner">
                          <div class="item-title-row">
                            <div class="item-title"><?php echo e($new->title); ?></div>
                          </div>
                          <div class="item-subtitle">来源: <?php echo e($new->author); ?>   <?php echo e($new->visit); ?>次浏览</div>
                          <!-- <div class="item-text">此处是文本内容...</div> -->
                        </div>
                      </a>
                    </li>
                  </ul>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </div>
            </div>
          </div>

    </div> 
  </div>
</div>

    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script>
        $.init();
    </script>
  </body>
</html>

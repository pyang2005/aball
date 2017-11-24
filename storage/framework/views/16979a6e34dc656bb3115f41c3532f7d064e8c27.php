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
    <a class="button button-link button-nav pull-left" href="/news" data-transition='slide-out'>
      <span class="icon icon-left"></span>
      返回
    </a>
    <h1 class="title">球场信息</h1>
  </header>
  <nav class="bar bar-tab">
    <a class="tab-item" href="/news">
      <span class="icon icon-home"></span>
      <span class="tab-label">新闻</span>
    </a>
    <a class="tab-item   active" href="#">
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
  <div class="searchbar row">
    <div class="search-input col-80">
      <label class="icon icon-search" for="search"></label>
       <input type="text" id='city-picker' value="广东 深圳"> 
    </div>
    <a class="button button-fill button-primary col-20">搜索</a>
  </div>


    </div> 
  </div>
</div>

    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type="text/javascript" src="//g.alicdn.com/msui/sm/0.6.2/js/sm-city-picker.min.js" charset="utf-8"></script>
    <script>
        $.init();
    </script>
    <script>
      $("#city-picker").cityPicker({
        toolbarTemplate: '<header class="bar bar-nav">\
        <button class="button button-link pull-right close-picker">确定</button>\
        <h1 class="title">选择场地区域</h1>\
        </header>'
      });
    </script>
  </body>
</html>

﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>一杯香梨</title>
    <meta name="keywords" content="博客,个人网站,GeeYo,ThinkPHP,bootstrap">
    <meta name="description" content="这里是一杯香梨的个人网站，记录并分享着他想记录与分享的一切，可是他有点懒，更新的并不是那么频繁！">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="style/images/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="360-site-verification" content="9080cebca28f53d9fb200a9ef6d9c873" />
    <!-- Js -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <script src="style/js/jquery.min.js"></script>
    <script src="style/js/tether.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <link href="style/css/style.css" type="text/css" rel="stylesheet" />
    <script>
    (function(window) {
        var theUA = window.navigator.userAgent.toLowerCase();
        if ((theUA.match(/msie\s\d+/) && theUA.match(/msie\s\d+/)[0]) || (theUA.match(/trident\s?\d+/) && theUA.match(/trident\s?\d+/)[0])) {
            var ieVersion = theUA.match(/msie\s\d+/)[0].match(/\d+/)[0] || theUA.match(/trident\s?\d+/)[0];
            if (ieVersion < 10) {
                var str = "你的浏览器版本太low了\n已经和时代脱轨了 :(";
                var str2 = "推荐使用:<a href='https://www.baidu.com/s?ie=UTF-8&wd=%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8' target='_blank' style='color:red'>谷歌</a>," + "<a href='https://www.baidu.com/s?ie=UTF-8&wd=%E7%81%AB%E7%8B%90%E6%B5%8F%E8%A7%88%E5%99%A8' target='_blank' style='color:red'>火狐</a>," + "<a href='https://www.baidu.com/s?ie=UTF-8&wd=%E7%8C%8E%E8%B1%B9%E6%B5%8F%E8%A7%88%E5%99%A8' target='_blank' style='color:red'>猎豹</a>,其他双核急速模式";
                document.writeln("<pre style='text-align:center;color:#fff;background-color:#0cc; height:100%;border:0;position:fixed;top:0;left:0;width:100%;z-index:1234'>" +
                    "<h2 style='padding-top:200px;margin:0'><strong>" + str + "<br/></strong></h2><p>" +
                    str2 + "</p><h2 style='margin:0'><strong>如果你的使用的是双核浏览器,请切换到极速模式访问<br/></strong></h2></pre>");
                document.execCommand("Stop");
            };
        }
    })(window);
    </script>
</head>

<body>
    <!-- Header -->
    <?php
    include 'header.inc.php';
    ?>
    <!-- Body -->
    <section class="cd-hero">
        <ul class="cd-hero-slider autoplay">
            <li class="selected">
                <div class="cd-half-width">
                    <h2>香梨</h2>
                    <p>兴趣爱好</p>
                    <p>自我介绍</p>
                    <a class="cd-btn" href="about.php">查看详情</a>
                </div>
                <div class="cd-half-width cd-img-container">
                    <img src="style/images/temp.jpg" alt="香梨" title="香梨" />
                </div>
            </li>
            <li>
                <div class="cd-full-width">
                    <h2>观点与分享</h2>
                    <p>记录生活点滴，分享人生喜乐！</p>
                    <a class="cd-btn" href="blog.php" target="_blank">查看详情</a>
                </div>
            </li>
            <li class="cd-bg-video">
                <div class="cd-full-width">
                    <h2>志趣相投</h2>
                    <p>我们都一样热爱生活，记录生活，享受生活！</p>
                    <a class="cd-btn" href="friends.php">查看详情</a>
                </div>
                <div class="cd-bg-video-wrapper" data-video="Tpl/Individual/Style/index/video/video">
                </div>
            </li>
            <li>
                <div class="cd-full-width">
                    <h2>说走就走</h2>
                    <p>生活不止眼前的苟且，还有诗和远方的田野！</p>
                    <a class="cd-btn" href="tracks.php">查看详情</a>
                </div>
            </li>
        </ul>
        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                <ul>
                    <li class="selected">
                        <a class="glyphicon glyphicon-user" href="#0">简介</a>
                    </li>
                    <li>
                        <a class="glyphicon glyphicon-fire" href="#0">博客</a>
                    </li>
                    <li>
                        <a class="glyphicon glyphicon-record" href="#0">圈子</a>
                    </li>
                    <li>
                        <a class="glyphicon glyphicon-globe" href="#0">旅行</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <script src="style/js/main.js"></script>
    <!-- Footer -->
    <div class="clear"></div>
    <?php
        include 'footer.inc.php';
    ?>
    <div class="to-top">↑</div>
    <script src="style/js/GeeYo.js"></script>
    <script>
    var bheigh = $(window).height();
    var bheigh = bheigh - 115;
    $(".cd-hero").css('height', bheigh);
    $(window).resize(function() {
        var bheigh = $(window).height();
        var bheigh = bheigh - 115;
        $(".cd-hero").css('height', bheigh);
    });
    </script>
    <script charset="gbk" src="https://www.baidu.com/js/opensug.js"></script>
</body>

</html>

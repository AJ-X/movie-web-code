<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>indexdl</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/movie/Public/indexdl.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body><a name="top"></a><a href="#top" class="bodya"><img src="/movie/Public/img/returntop.png"></a>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h3 class="modal-title" id="myModalLabel">
                    娱票儿账户登陆
                </h3>
            </div>
            <div class="modal-body">
                <div class="modal-body-img">
                    <img src="/movie/Public/img/header_logo.png">
                </div>
                <form action="<?php echo U('login/login');?>" method="post">
                    <div class="input">
                        <input type="text" name="uname" placeholder="手机号">
                        <br>
                        <input type="password" name="password" placeholder="密码">
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="登陆">
                    </div>
                    <div class="other1">
                        <a href="">注册账号</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h3 class="modal-title" id="myModalLabel">
                    注册娱票儿账号
                </h3>
            </div>
            <div class="modal-body">
                <div class="modal-body-img">
                    <img src="/movie/Public/img/header_logo.png">
                </div>
                <form action="<?php echo U('login/register');?>" method="post">
                    <div class="input">
                        <input type="text" name="uname" placeholder="手机号">
                        <br>
                        <input type="password" name="password" placeholder="密码">
                        <input type="password" name="rpassword" placeholder="重复密码">
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="注册">
                    </div>
                    <div class="other2">
                        <a href="">已有账号，去登陆</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="body">
    <div class="header">
        <div class="header-top">
            <div class="header-top-left">
                <ul>
                    <li class="topfirst"><a href="">演出</a></li>
                    <li><a href="">电影</a></li>
                    <li><a href="">体育</a></li>
                </ul>
            </div>
            <div class="header-top-right">
                <ul>
                    <li id="bhd" onmouseover="mover();bckover()" onmouseout="mout();bckout()" 
                    ><div class="hd"><img src="/movie/Public/img/phone.png"><a href="javascript:return false;">手机娱票儿</a></div></li>
                    <li class="hd2"><a href="">演出场馆</a></li>
                    <li class="hd2"><a href="">票品验证</a></li>
                </ul>
                <p class="p">服务热线：4001-3388</p>
                <div class="bd" id= "bd" onmousemove="mover();bckover()"onmouseout="mout();bckout()"><img src="/movie/Public/img/erweima.png"></div>
            </div>          
        </div>
        <div class="header-container">
            <div class="header-logo">
                <img src="/movie/Public/img/header_logo.png">
            </div>
            <div class="header-input">
                <form action="">
                    <input type="text" placeholder="请输入艺人、演出、场馆…">
                    <button>搜索</button>
                </form>
            </div>
            <div class="header-user">
                <img src="/movie/Public/img/user.png">
                个人中心：<a href="<?php echo U('user/user');?>"><?php echo ($_SESSION['uname']); ?></a>
                <a href="<?php echo U('index/index');?>">退出</a>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-ct">
                <ul>
                    <li class="first" onmousemove="navmover()" onmouseout="navmout()"><a href="javascript:return false;">全部演出分类</a></li>
                    <li class="second"><a href="">演唱会</a></li>
                    <li class="third"><a href="">话剧音乐剧</a></li>
                    <li class="forth"><a href="">儿童亲子</a></li>
                    <li class="second"><a href="">音乐会</a></li>
                    <li class="forth"><a href="">展览活动</a></li>
                </ul>
            </div>
            <div class="header-nav-ft">
                <div id="navlt" class="header-nav-ft-lt" onmousemove="navmover()" onmouseout="navmout()">
                    <dl>
                        <dt><a href="">演唱会</a></dt>
                        <dt><a href="">话剧音乐剧</a></dt>
                        <dt><a href="">儿童亲子</a></dt>
                        <dt><a href="">音乐会</a></dt>
                        <dt><a href="">展览活动</a></dt>
                        <dt><a href="">舞蹈芭蕾</a></dt>
                        <dt><a href="">戏曲综艺</a></dt>
                        <dt><a href="">休闲娱乐</a></dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <img src="/movie/Public/img/bannerbg.jpg">
        <div class="change" id="change">
            <ul id="picture">
                <li><a href=""><img src="/movie/Public/img/1.jpg"></a></li>
                <li><a href=""><img src="/movie/Public/img/2.jpg"></a></li>
                <li><a href=""><img src="/movie/Public/img/3.jpg"></a></li>
                <li><a href=""><img src="/movie/Public/img/4.jpg"></a></li>
                <li><a href=""><img src="/movie/Public/img/5.jpg"></a></li> 
                <li><a href=""><img src="/movie/Public/img/6.jpg"></a></li>
            </ul>
            <ol id="list">
                <li class="on">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
            </ol>
        </div>
        <div class="container-right">
            <h3>特惠看</h3>
            <a href=""><img src="/movie/Public/img/conrt.jpg"></a>
            <a href="" class="rta1">[重庆]重庆亲子游览年票</a><br>
            <a href="" class="rta2">重庆亲子游览年票</a>
            <hr>
            <a href="" class="rta3" id="rata">[上海]2017-2018跨年版上海亲子年票</a>
            <a href="" class="rta4" id="rata">[西安]《2017年西安亲子游览年票》特惠</a>
            <a href="" class="rta5" id="rata">[成都]2017年成都亲子游览年票</a>
        </div>
        <div class="continer-hoter">
            <h3>近期热门</h3>
            <div class="conhot1">
                <a href="<?php echo U('movie/movie');?>"><img src="/movie/Public/img/hot1.jpg"></a>
                <div class="hota">
                    <a href="<?php echo U('movie/movie');?>">[呼和浩特]2017五月天 LIFE [ 人生无限公司 ] 巡回演唱会-呼和浩特站</a>
                </div>
            </div>
            <div class="conhot2">
                <a href=""><img src="/movie/Public/img/hot2.jpg"></a>
                <div class="hota">
                    <a href="">[武汉]2017 COCO 李玟18世界巡回演唱会-武汉站</a>
                </div>
            </div>
            <div class="conhot3">
                <a href=""><img src="/movie/Public/img/hot3.jpg"></a>
                <div class="hota">
                    <a href="">[北京]梁咏琪2017“好时辰”巡回演唱会—北京站(预售)</a>
                </div>
            </div>
            <div class="conhot4">
                <a href=""><img src="/movie/Public/img/hot4.jpg"></a>
                <div class="hota">
                    <a href="">[北京]Declan Galbraith 2017“Child Of Mind”巡回演唱会</a>
                </div>
            </div>
        </div>
        <div class="hotrt" id="hotrt">
            <ul>
                <li id="li1" class="li1" onmousemove="ltchange()"><span id="a1">最新资讯</span></li>
                <li id="li2" class="li2" onmousemove="rtchange()"><span id="a2">精彩专题</span></li>
            </ul>
            <div class="hotrtnone" id="hotrtnone">  
                    <a href=""><img src="/movie/Public/img/hotrt.jpg"></a>
                    <a href="" class="a1">[北京]喔呼够青年潮流嘉年华 -WooHoo Go 玩潮流就够了</a>
                    <a href="" class="a2">[上海]Live Spectacle 《NARUTO-火影忍者-》～晓之音～上海站</a>
                    <a href="" class="a3">[济南]木偶剧《嫦娥奔月》</a>
            </div>
            <div class="hotrtdown" id="hotrtdown">
                <a href="">票面真伪验证</a>
            </div>
        </div>
        <div class="containerad" id="ad">
            <a href=""><img src="/movie/Public/img/ad.jpg"></a>
        </div>
        <div class="containershow">
            <div class="showmid">
                <ul>
                    <li class="showli1"><a href="">演唱会</a></li>
                    <li class="showli2"><a href="">话剧音乐剧</a></li>
                    <li class="showli2"><a href="">儿童亲子</a></li>
                    <li class="showli2"><a href="">音乐会</a></li>
                    <li class="showli2"><a href="">展览活动</a></li>
                    <li class="showli2"><a href="">舞蹈芭蕾</a></li>
                    <li class="showli3"><a href="">全部演出></a></li>
                </ul>
            </div>
            <div class="showct">
                <div class="showct1">
                    <a href=""><img src="/movie/Public/img/ct1.jpg"></a>
                    <a href="">[济南]周杰伦2017"地表最强"世界巡回演唱会—济南站</a><br>
                    <span class="showdt">380</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct2">
                    <a href=""><img src="/movie/Public/img/ct2.jpg"></a>
                    <a href="">[北京]汪峰2017岁月巡回演唱会-北京鸟巢站（预售）</a><br>
                    <span class="showdt">280</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct3">
                    <a href=""><img src="/movie/Public/img/ct3.jpg"></a>
                    <a href="">[北京]“青年晚报”-许嵩2017北京演唱会（预售）</a><br>
                    <span class="showdt">180</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct4">
                    <a href=""><img src="/movie/Public/img/ct6.jpg"></a>
                    <a href=""> [天津]me现场 1022女声/李行亮&郝云演唱会 </a><br>
                    <span class="showdt">100</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct5">
                    <a href=""><img src="/movie/Public/img/ct7.jpg"></a>
                    <a href=""> [西安]五月天LIFE[人生无限公司]巡回演唱会 2017 MAYDAY LIFE TOUR 西安</a><br>
                    <span class="showdt">255</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct6">
                    <a href=""><img src="/movie/Public/img/ct8.jpg"></a>
                    <a href="">  [广州]周柏豪ONE STEP CLOSER PAKHO LIVE 2017广州演唱会</a><br>
                    <span class="showdt">380</span>
                    <span class="showtag">元起</span>
                </div>
                <div class="showct7">
                    <a href=""><img src="/movie/Public/img/ct9.jpg"></a>
                    <a href="">[银川]2017乐堡开躁音乐节 银川站</a><br>
                    <span class="showdt1">150</span>
                    <span class="showtag1">元起</span>
                </div>
                <div class="showct8">
                    <a href=""><img src="/movie/Public/img/ct10.jpg"></a>
                    <a href="">[麻江]蓝莓音乐节</a><br>
                    <span class="showdt2">130</span>
                    <span class="showtag2">元起</span>
                </div>
            </div>
            <div class="showrt">
                <div class="showrtheader">
                    <span>其余演出</span>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other1.jpg"></a>
                    <div class="otha">
                        <a href="">[北京]Little Inventors小小发明家儿童创意展 </a><br>
                        <span class="othas1">2017年5月28日~6月27日</span><br>
                        <span class="othas2">【蓝色港湾央美术馆】</span><br>
                        <span class="othas3">60</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other2.jpg"></a>
                    <div class="otha">
                        <a href="">[北京]RAV4荣放漫威复仇者联盟互动体验站</a><br>
                        <span class="othas1">2017年5月27日~6月30日</span><br>
                        <span class="othas2">朝阳公园08广场</span><br>
                        <span class="othas3">198</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other3.jpg"></a>
                    <div class="otha">
                        <a href="">[北京]teamLab：花舞森林与未来游乐园 </a><br>
                        <span class="othas1">2017年5月20日~10月10日</span><br>
                        <span class="othas2">【佩斯北京】</span><br>
                        <span class="othas3">80</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other4.jpg"></a>
                    <div class="otha">
                        <a href="">[北京]“复制时代”安迪·沃霍尔艺术展 </a><br>
                        <span class="othas1">2017年5月28日~8月28日</span><br>
                        <span class="othas2">【山水美术馆】</span><br>
                        <span class="othas3">20</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other5.jpg"></a>
                    <div class="otha">
                        <a href="">[上海]好奇柜 魔都首届博物艺术展 </a><br>
                        <span class="othas1">2017年4月16日~7月16日</span><br>
                        <span class="othas2">【上海朵云轩艺术中心】</span><br>
                        <span class="othas3">50</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
                <div class="other">
                    <a href=""><img src="/movie/Public/img/other6.jpg"></a>
                    <div class="otha">
                        <a href="">[北京]嘻哈包袱铺五棵松剧场相声专场 </a><br>
                        <span class="othas1">2017年6月3日~30日</span><br>
                        <span class="othas2">嘻哈包袱铺五棵松剧场</span><br>
                        <span class="othas3">60</span>
                        <span class="othas1">元起</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-down">
            <div class="condownhd">
                <h2>场馆推荐</h2>
                <a href="">全部场馆></a>
            </div>
            <div class="condownlt" onmouseover="hidemover()" onmouseout="hidemout()">
                <img src="/movie/Public/img/condownlt.jpg">
                <div class="condownhide" id="hide">
                    <a href="">北京保利影院</a><br>
                        <p>地址：东直门南大街14号保利大厦<br>
                    电话：010    65065345</p>
                </div>
            </div>
            <div class="condownrt" onmouseover="hide1mover()" onmouseout="hide1mout()">
                <img src="/movie/Public/img/condownrt.jpg">
                <div class="condownhide1" id="hide1">
                    <a href="">上海梅赛德斯奔驰文化中心</a><br>
                        <p>地址：世博大道1200号<br>
                    电话：4007339993    4007339993</p>
                </div>
            </div>
            <div class="condownhot">
                <div class="condhtp">
                    <h2>热销榜单</h2>
                </div>
                <div class="condhtd">
                    <a href=""><img src="/movie/Public/img/condhtd.jpg"></a>
                    <a href="" class="condhtda1">[南京]话剧《孤城》</a>
                    <p>乌镇戏剧节青年竞演单元参赛剧目<br>2017年6月13日~24日 19:30<br>“剧盒梦想”戏剧空间</p>
                </div>
            </div>
            <div class="later1">
                <h4>近期演出：</h4>
                <ul>
                    <li><a href="">[北京]话剧《明年此时》蒋雯丽 刘钧主演</a></li>
                    <li><a href="">[北京]交响也疯狂——大型互动交响音乐会</a></li>
                    <li><a href="">[北京]英国原版音乐剧《保镖》 THE BODYGUARD THE MUSICAL</a></li>
                    <li><a href="">[北京]台北新剧团 李宝春 精演新老戏《京昆戏说·长生殿》</a></li>
                </ul>
            </div>
            <div class="later2">
                <h4>近期演出：</h4>
                <ul>
                    <li><a href="">[上海]罗志祥2017 “CRAZY WORLD”世界巡回演唱会 –上海站</a></li>
                    <li><a href="">[上海]朴树“好好地II”2017中国巡回演唱会－上海站（预售）</a></li>
                    <li><a href="">[上海]2017“如果”田馥甄巡回演唱会PLUS 上海站</a></li>
                    <li><a href="">[上海]2017 COCO李玟18世界巡回演唱会-上海站（预售）</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footerconlt">
            <div class="footerconltimg">
                <img src="/movie/Public/img/footer_logo.png">
            </div>
            <div class="footerconltsp">
                <span class="instru1">微信电影票官网</span><br>
                <span class="instru2">在线占好座，覆盖影院全国第一</span>
            </div>
        </div>
        <div class="footerconct">
            <div class="footerconctimg">
                <img src="/movie/Public/img/phoneIcon.png">
            </div>
            <div class="footerconctsp">
                <span class="instru1">4001-338-888</span><br>
                <span class="instru2">9：00-21：00 | 全年无休</span>
            </div>
        </div>
        <div class="footerconrt">
            <div class="footerconrt1">
                <img src="/movie/Public/img/f_wpr_ecode.png" id="footerconrt1">
            </div>
            <div class="footerconrt2" onmouseover="footerchange1()" onmouseout="footerchange2()">
                <img src="/movie/Public/img/f_wx.png" id="footerconrt2">
            </div>
            <div class="footerconrt3">
                <img src="/movie/Public/img/f_app_ecode.png" id="footerconrt3">
            </div>
            <div class="footerconrt4" onmouseover="footerchange3()" onmouseout="footerchange4()">
                <img src="/movie/Public/img/f_wpr.png" id="footerconrt4">
            </div>
            <div class="footerconrt5">
                <span class="instru1">打开微信扫一扫</span>
            </div>
        </div>
        <div class="footerdown">
            <span>@北京微影时代科技有限公司版权所有　　京ICP备14034406号-2</span>
        </div>
    </div>
</div>
</body>
<script src="/movie/Public/index.js"></script>
</html>
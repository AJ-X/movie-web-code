<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>seat</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/movie/Public/seat.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
    			<div class="bd" id=	"bd" onmousemove="mover();bckover()"onmouseout="mout();bckout()"><img src="/movie/Public/img/erweima.png"></div>
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
    <form action="{U:(movie/seat)}" method="post">
    <div class="container">
        <ul>
            <li>
                <span id="1">1</span>
                <span id="2">2</span>
                <span id="3">3</span>
                <span id="4">4</span>
                <span id="5">5</span>
                <span id="6">6</span>
            </li>
            <li>
                <span id="7">7</span>
                <span id="8">8</span>
                <span id="9">9</span>
                <span id="10">10</span>
                <span id="11">11</span>
                <span id="12">12</span>
            </li>
            <li>
                <span id="13">13</span>
                <span id="14">14</span>
                <span id="15">15</span>
                <span id="16">16</span>
                <span id="17">17</span>
                <span id="18">18</span>
            </li>
            <li>
                <span id="19">19</span>
                <span id="29">20</span>
                <span id="21">21</span>
                <span id="22">22</span>
                <span id="23">23</span>
                <span id="24">24</span>
            </li>
            <li>
                <span id="25">25</span>
                <span id="26">26</span>
                <span id="27">27</span>
                <span id="28">28</span>
                <span id="29">29</span>
                <span id="30">30</span>
            </li>
            <li>
                <span id="31">31</span>
                <span id="32">32</span>
                <span id="33">33</span>
                <span id="34">34</span>
                <span id="35">35</span>
                <span id="36">36</span>
            </li>
        </ul>
        <div class="show">
            选座成功
        </div>
        <div class="buy">
                <input type="hidden" name="cid" value="<?php echo ($cid); ?>">
                <input type="hidden" name="uid" value="<?php echo session('id');?>">
            <input type="submit" value="购票">
        </div>
    </div>
    </form>
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
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/movie/Public/index.js"></script>
<script type="text/javascript">
    $(".container").find('span').click(function(){
        if ($(this).hasClass('active')) {
            $(this).css("background","#2ed2c1");
            $(this).removeClass('active');
        }
        else{
            
            $(this).css("background","#999");
            $(this).addClass('active');
        }
    })
</script>
</html>
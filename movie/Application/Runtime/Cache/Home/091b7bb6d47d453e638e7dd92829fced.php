<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/movie/Public/user.css">
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
                个人中心：<?php echo ($_SESSION['uname']); ?>
                <a href="<?php echo U('index/indexdl');?>">退出</a>
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
        <img src="/movie/Public/img/bannar02.jpg">
        <div class="conbk">
        	<img src="/movie/Public/img/defaultpic.gif.jpg">
        </div>
        <div class="conbkd">
        	<img src="/movie/Public/img/women.png">
        </div>
        <div class="conbkk">
        	<p>个人信息</p>
        </div>
        <div class="condd">
        	<span>购票详情</span>
        </div>
        <div class="condetail">
            <div class="condt">
            	<p>电影名称</p>
            </div>
            <div class="condt">
            	<p>放映影院</p>
            </div>
            <div class="condt">
            	<p>放映日期</p>
            </div>
            <div class="condt">
            	<p>开场时间</p>
            </div>
            <div class="condt">
            	<p>座位号码</p>
            </div>
        </div>
        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="condetail">           
                    <div class="condt">
                    <p><?php echo ($vo["name"]); ?></p>
                </div>
                <div class="condt">
                    <p><?php echo ($vo["cinema"]); ?></p>
                </div>
                <div class="condt">
                    <p><?php echo ($vo["date"]); ?></p>
                </div>
                <div class="condt">
                    <p><?php echo ($vo["time"]); ?></p>
                </div>
                <div class="condt">
                    <p><?php echo ($vo["seat"]); ?></p>
                </div>            
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
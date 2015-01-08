<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="static/css/manage.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />  
	<script type="text/javascript" src="static/js/a.js"></script>
	<title><?php echo $data["webname"]; ?> - 后台管理</title>

</head>
<body>
<!--顶部-->
<?php if(isset($_SESSION["user"]) && $_SESSION["user"] == "admin") { ?>
<div class="top_solid"></div>
	<div class="top">
		<div class="top_logo"><a href="#"><img src="static/images/logo1.png" width="35px"><img src="static/images/后台logo.png" width="200px"> </a>
		<div class="top_denglu"><p class="top_dlwenzi"> 欢迎您：<?php echo $_SESSION["user"]; ?> <a href="index.php?c=admin&a=out">退出</a></p></div></div>
		
	</div>

<!--中间左部-->
<div class="middle">
	<div class="middle_left">
		<div class="middle_dhbt" >
			<img src="static/images/gn.png" width="17px"><span>功能</span>
		</div>
	<div class="middle_cjdcbbj" id="middle_ys" onclick="gaibianyanse()">
		<div class="middle_cjdcb">
			<a href="#" id="ztys">
			<span>创建调查表</span>
			</a>
		</div>
	</div>
	<div class="middle_cjdcbbj" id="middle_ck" onclick="gaibianyanseck()">
		<div class="middle_cjdcb">
			<a href="#" id="ckztys">
			<span>查看调查表</span>
			</a>
		</div>
	</div>
	<div class="middle_middle">
		<div class="middle_dhbt" >
			<img src="static/images/sjfx.png" width="17px"><span>数据</span>
		</div>
	</div>
	<div class="middle_sjfxbj">
		<div class="middle_sjfx">
			<span>用户分析</span>
		</div>
	</div>
	<div class="middle_bottom">
		<p><span><a href="http://wpa.qq.com/msgrd?v=3&uin=1149373421&site=qq&menu=yes">在线客服</a></span> | 问题反馈</p>
		<p>7*24小时在线</p>
	</div>
	</div>


<!--中间右部-->
	<div class="middle_right"><iframe id="middle_rightid" height="100%" frameborder="0" width="100%" scrolling="auto" style="border:none;" src="default.html"></iframe></div>
	<div class="clean"></div>
</div>

<div class="bottom">
	<div class="bottom_top">
		<p>技术指导：陈朔  |  主要制作：冀登帅 </p>
		<p>陕西新华电脑软件学校 - 天猫运营与创业</p>
	</div>
</div>
<?php }else{ ?>
<div style="color:red">非法访问！！！！</div>
<?php } ?>
</body>
</html>
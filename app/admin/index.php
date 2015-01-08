<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="textml;charset=utf-8"/>
	<title>新华调查 - 后台管理登陆</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
</head>
<body>
<?php if(isset($_SESSION["user"]) && $_SESSION["user"] == "admin") { ?>
	<div>您已经成功登陆，无需重复登陆<a href="index.php?c=admin&a=manage">后台管理</a></div>
<?php }else{ ?>
<div class="vv">
	<div class="logo"><img class="l" src="static/images/logo1.png"><img class="dd" src="static/images/htlogo.png">
	<div class="ee">管理登陆</div>
	</div>
	<div class="ll">
		<form action="index.php?c=admin" method="post">
			<input name="username" type="text" placeholder=" username"  class="jj">
			<input name="password" type="password" placeholder=" password" class="jj">
			<input id="x"type="checkbox"><label for="x">使我保持登陆状态</label>
			<input type="submit" class="aa">
		</form>
<div class="kk"> xhzdk</div>
<?php } ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST["username"];
	$password = md5(md5($_POST["password"]));

	$result = $link->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$array = $result->fetch_array();

	if(count($array) > 0){
		$_SESSION["user"] = $username;
		echo "<script>location.href='index.php?c=admin&a=manage'</script>";
	}else{
		echo "<div class='error'>用户名或者密码错误！</div>";
		exit;
	}

}

?>
	</div>
</div>

</body>
</html>

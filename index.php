<meta charset="utf-8">
<?php

//加载配置文件
$data = include "common/config.php";

//连接数据库
$link = new mysqli($data["hostname"], $data["username"], $data["password"], $data["dataname"]);

if(empty($_GET["c"])){
	$control = "home";
}else{
	$control = $_GET["c"];
}

if(empty($_GET["a"])){
	$action = "index";
}else{
	$action = $_GET["a"];
}
include "app/".$control."/".$action.".php";
?>

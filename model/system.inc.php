<?php
define('BASE', $_SERVER['DOCUMENT_ROOT']);
define('SMARTY_CONFIG_PATH', "\shudian\admin\smarty\config\\");
require(BASE.SMARTY_CONFIG_PATH."smarty_ini.php");	//包含Smarty配置类
require("system.class.inc.php");	//包含数据库连接和操作类

$connobj=new ConnDB("mysql","localhost","root","lllldddd","dianshang");//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行连接操作，返回连接标识

$admindb=new AdminDB();//数据库操作类实例化

$seppage=new SepPage();//分页类实例化
?>
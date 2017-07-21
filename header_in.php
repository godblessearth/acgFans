<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACG-FANS BASE</title>
<script type="text/javascript" src="../../js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="../player/js/swfobject.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/reset.css">
<link rel="stylesheet" type="text/css" href="../../css/doorwebsite.css">
<link rel="stylesheet" type="text/css" href="../../css/comics_show.css">
<link rel="stylesheet" type="text/css" href="../../css/comics_show_content.css">
</head>
<div class="head">
	<div id="menuBox">
	<div id="menu">
		<div class="box"><p><span><?php echo "<a href='../load_regi/person.php' id='box_name'><strong>".$_COOKIE['cutename']."</strong></a>";?> のACG基地</span></P></div>
		<div class="box">
			<div class="person-dropdown"><p><a href="../load_regi/person.php">个人中心</a></p>
				<div class="dropdown-content">
				<ul>
				<li><p><a href="../load_regi/person.php">个人设置</a></p></li>
				<li><p><a href="../load_regi/quit.php">退出登录</a></p></li>
				</ul>
				</div>
			</div>
		</div>
		<div class="box"><p><a href="" target="_blank">充值</a></p></div>
		<div class="box"><p><a href="../index/index.php">返回首页</a></p></div>
	</div>
</div>
</div>
<body>
<style>
.box{
	margin-left:50px;
	float:left;
	height:35px;
	width:180px;
	
}
#box_name{
	font-size:15px;
}
.box p{
	text-align:center;
	margin:8px 0 0 0;
	height:35px;
	font-size:17px;
}
.person-dropdown{
	cursor:pointer;
	width:70px;
	position:relative;
}
.person-dropdown li p{
	margin:5px 0 0 0;
	height:20px;
}
.dropdown-content{
	height:55px;
	background:#fff;
	top:26px;
	width:100px;
	display:none;
	position:absolute;
}
.person-dropdown:hover .dropdown-content{
	display:block;
}
</style>
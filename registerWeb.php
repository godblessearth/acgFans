<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/reset.css">
<link rel="stylesheet" type="text/css" href="../../css/loadWeb.css">
<link rel="stylesheet" type="text/css" href="../../css/doorwebsite.css">
<title>ACG-funs 登陆</title>
</head>
<body>
<!--顶部导航-->
<div id="loadMenu">
	<div class="logo"><img src="../../pictures/1.1.1.png" width="100" height="100"></div>
	<div class="menulist">
		<span class="menulistNames">
				<a href="../index/index.php" target="_blank">主站</a>&nbsp|
				<a href="loadWeb.php">登陆</a>&nbsp|
				<a href="registerWeb.php" >注册</a>&nbsp|
		</span>
	</div>
</div>
<style>
.loadInput{
	width:300px;
	height:50px;
	text-align:center;
	font-size:20px;
	line-height:50px;
	margin-top:10px;
}
.loadInput input{
	height:30px;
}

</style>

<div id="container">
	<div id="pictures"><img class="picImg" src="../../pictures/1.7.jpg" width="100%" height="100%"></div>
	<div id="load">
		<div class="loadLogo"><h1>注册</h1></div>
		<hr/>
		<form action="regInsert.php" method="post">
		<div class="loadInput">
		<input type="text" placeholder=" 请设置帐号 不超过12字符" name="username" /> *</div>
		<div class="loadInput"><input type="password" placeholder=" 请设置6位数密码" name="password"/> *</div>
		<div class="loadInput"><input type="text" placeholder=" 您的手机号" name="phone" /> *</div>
		<div class="loadInput"><input type="text" placeholder=" 您的邮箱" name="email" /> *</div>
		<div class="loadInput"><input type="text" placeholder=" 请设置昵称 不超过12字符" name="cutename" /> *</div>
		<div class="frogetPass"><a href="loadWeb.html">忘记密码？></a></div>
		<div class="btnLoad"><input class="loading" type="submit" value="注册"/>
		</form>
			<a class="reg" href="loadWeb.php">登陆</a>
		</div>
	</div>
</div>
<!--底层-->
<div class="links">
	<div class="links_left">
		<p class="lintitle">友情链接</p>
		<hr>
		<p>
			<a href="http://www.baidu.com" target="_blank">百度</a>&nbsp 
			<a href="http://www.baidu.com" target="_blank">漫画之家</a>&nbsp  
			<a href="http://www.baidu.com" target="_blank">哔哩哔哩</a>&nbsp
			<a href="http://www.baidu.com" target="_blank">ACfun</a></p></br>
		<p>
			<a href="http://www.baidu.com" target="_blank">搜狐</a>&nbsp
			<a href="http://www.baidu.com" target="_blank">腾讯动漫</a>&nbsp
			<a href="http://www.baidu.com" target="_blank">土豆</a>&nbsp
			<a href="http://www.baidu.com" target="_blank">优酷视频</a></p>
	</div>
	<div class="links_center">
		<ul>
			<li><a href="http://www.baidu.com" target="_blank">关于我们</a></li>
			<li><a href="http://www.baidu.com" target="_blank">联系我们</a></li>
			<li><a href="http://www.baidu.com" target="_blank">客服解答</a></li>
			<li><a href="http://www.baidu.com" target="_blank">广告赞助</a></li>
		
		</ul>
		<ul>
			<li><a href="http://www.baidu.com" target="_blank">加入我们</a></li>
			<li><a href="http://www.baidu.com" target="_blank">版权申明</a></li>
			<li><a href="http://www.baidu.com" target="_blank">关于我们</a></li>
			<li><a href="http://www.baidu.com" target="_blank">关于我们</a></li>
		
		</ul>
	</div>
	<div class="links_right">
		<p>
			互联网ICP备案：
		</p>
		<p>
			免责申明：本站资源全部来自互联网，本站只做汇总收集工作。
		</p>
		<p>
			官方微信
		</p>
	</div>
</div>
</body>
</html>
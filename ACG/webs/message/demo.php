<?php
if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){
	include "../head/header_out.php";}
else{include "../head/header_in.php";}
?>
<!doctype html>
<html>
<head>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
</head>
<body>
<style>
ul{
	list-style-type:none;
	padding:0;
	margin:0;
}
.img{
	width:80%;
}
#textarea{
		list-style-type:none;
	padding:0;
	margin:10px 0 0 40px;
	width:300px;height:200px;text-align:left;
}
.mes{display:none;position:fixed;top:200px;background:url("bg5.jpg");left:30%;opacity:0.9}
.receiver_id{display:none;}
.receiver{display:none;}
.callback{display:none;}
</style>
<div class="img">
<img src="bg5.jpg" width="500" height="300">
<button class="msg">留言</button>
</div>

<div>
	<p>留言区</p>
	<ul class="messages">
	</ul>
</div>
<div class="mes">
	<form action="insert.php" method="post">
	<textarea id="textarea" placeholder="" name="content"></textarea>
	<input type="text" name="receiver"  class="receiver"/>
	<input type="text" name="receiver_id"  class="receiver_id"/>
	<input type="submit" name="submit" id="submit" value="提交留言"/>
	</form>
	<button id="cancle">取消</button>
</div>
<div class="submit">
	
</div>
<div id="new">
</div>
<script>
$(function (){
	$.ajax(
		{url:"show.php",
		success:function(response){
			$(".messages").html(response);
		}
	})	
})


/*
通过ajax连接数据库，显示所有留言-->输入留言，点击提交-->ajax连接edit.php-->edit.php连接数据库，插入留言内容，用户名，时间，
并生成id++ -->根据ID，将该留言echo在demo.php上-->输出JS，添加新的li，显示该留言信息；
数据库：user;
表单名：message；
字段：
	ID；
	username:
	content:
	time:
	
核心是，插入与显示分离，留言页面ajax使用post访问数据库表单user数据-->在页面输出数据-
		->输入留言内容-->点击提交-->提交表单数据至插入页面-->数据录入数据库-->跳转回留言页面




*/







</script>


</body>
</html>
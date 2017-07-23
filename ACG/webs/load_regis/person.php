<?php
if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){
	echo "<script>alert('密码已失效，请重新登录')</script>";
	echo "<script>location='loadWeb.php'</script>";
}//个人信息页面
else{include "../head/header_in.php";}
?>
<div class="person_content">
	<div class="person-leftlists">
		<ul>
			<li class="act"><span>上传视频</span></li>
			<li><span>修改密码</span></li>
			<li><span>修改昵称</span></li>
			<li><span>上传文件</span></li>
			<li><span>注册信息</span></li>
		</ul>
	</div>
	<div class="content-match">
		<div class="show">
		<style> .insert input{margin-top:10px;}</style>
			<div class="edit-box">
			<div class="edit">
			<form method="post"  action="../animates/animates_insert.php" class="insert" >
				<input type="text" name="videotitle" placeholder=" 文件名" ></br>
				<input type="text" name="videourl" placeholder=" 视频路径 默认/ACG/videos下" ></br>
				<input type="text" name="videopicture" placeholder=" 封面图片路径" ></br>
				<input type="text" name="videotype" placeholder=" 视频格式" ></br>
				<input type="submit" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="reset" class="button">
			</form>
			</div>
			</div>
		</div>
		<div class="hidden">
			<div class="edit-box">
				<div class="edit">
					<form action="person-edit.php" method="post">
						<input type="password" placeholder=" 输入新的密码" name="password1"/><br/>
						<input type="password" placeholder=" 确认新的密码"name="password2"/><br/>
						<input type="submit" value="修改" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="reset" value="重置" class="button">
					</form>
				</div>
			</div>
		</div>
		<div class="hidden">
		<div class="edit-box">
				<div class="edit">
					<form action="person-edit.php" method="post">
						<input type="text" placeholder=" 输入新昵称" name="cutename"/><br/>
						<input type="submit" value="修改" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="reset" value="重置" class="button">
					</form>
				</div>
			</div>
		</div>
		<div class="hidden">
		<style> .insert input{margin-top:10px;}</style>
			<div class="edit-box">
			<div class="edit">
			<form method="post"  action="../comics/comInsert.php" class="insert" >
				<input type="text" name="title" placeholder=" 文件名" ></br>
				<input type="text" name="url" placeholder=" 文件路径 默认/ACG/comics下" ></br>
				<input type="text" name="picture" placeholder=" 封面图片路径" ></br>
				<input type="text" name="length" placeholder=" 图片数量" ></br>
				<input type="text" name="imgtype" placeholder=" 图片格式" ></br>
				<input type="submit" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="reset" class="button">
			</form>
			</div>
			</div>
		</div>
		<div class="hidden">用户信息加载</div>
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
<style>
body{
	background:url(../../pictures/bg5.jpg) no-repeat;
}
ul{
	padding:0;
	margin:0;
}
.person_content{
	opacity:0.85;
	background:#fff;
	margin:10px 5% 120px 5%;
	width:90%;
	height:500px;
	overflow:hidden;
	border-radius:15px;
}
.person-leftlists{
	
	border-right:solid gray 2px;
	text-align:center;
	float:left;
	width:15%;
	margin-left:5%px;
}
.person-leftlists span{
	line-height:30px;

	margin:30px 0 0 0 ;
	height:40px;
	display:block;
}
.person-leftlists li{
	margin:30px 0 20px 20%;
	width:60%;
	height:40px;
}
.act{
	background:#F9DBE1;
	box-shadow:10px 10px #ddd;
	line-height:30px;
	border-radius:5px;
	
}
.person-leftlists li:hover{
	font-size:20px;
	box-shadow:10px 10px #ddd;
	line-height:30px;
	border-radius:5px;
	cursor:default;
}
.hidden{
	display:none;
}
.show{
	display:block;
}
.content-match{
	height:600px;
}
.content-match>div{
	
	margin:0 0 0 1%;
	float:left;
	width:79%;
	height:600px;

}
.edit-box{
	width:300px;
	margin:50px 0 0 300px;
}
.edit input{
	border:solid 1px black;
	border-radius:2px;
	height:30px;
	margin:20px 0 0 10px ;
}
.button{
	width:40px;
}

</style>
</body>
<script type="text/javascript" src="../../js/person.js"></script>
</html>


<?php
if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){
	include "../head/header_out.php";}
else{include "../head/header_in.php";}
?>
<!--内容导航-->
<div class="listBox">
	<div class="lists">
		<h1>
			<span><a href="index.php" >首页</a></span>
			<a href="../animates/animates_show.php" target="_blank">动画</a>|
			<a href="../comics/comics_show.php" target="_blank">漫画</a>|
	
		</h1>
	</div>	
</div>
<div class="headmain">
		<div id="headImgBox">
			<div class="headImgList">
				<ul class="headImages">
					<li><a href="d:acg/wamp/doorWeb/html/acg.html" target="_blank">
						<img id="headLineImages" src="../../pictures/1.1.jpg" width="100%" height="480"></a>
					</li>
				</ul>
				<ul class="headImgText">
					<li class="headImgListTextBac"><a href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
					<li><a  href="doorWeb.html">标题</a></li>
				
				</ul>
			</div>
				<button i="btnImgLeft"></button>
				<button i="btnImgRight"></button>
			
		</div>
</div>

<!--动画区-->
<div class="animenu">
	<ul>
		<li>
			<span>动画</span>
		</li>
	</ul>
</div>
<div class="animain">
	<div class="leftAni">
		<a href="#" target="_blank">
			<img class="leftImg" src="../../pictures/1.5.jpg" title="标题">
		<span class="titleLeftAni">大标题</span>
		</a>
	</div>
	<div class="middle">
		<div class="middleDl1_1">
			<div class="middleDt1">
				<a href="d:acg/wamp/doorWeb/html/playWeb.html" target="_blank">
					<img title="标题" src="../../pictures/1.5.jpg">
				</a>
			</div>
			<span class="middleDt1_2">
			<a  title="标题" href="d:acg/wamp/doorWeb/html/playWeb.html" target="_blank">标题 </a></span>
		</div>
		<div class="middleDl2_1">
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img src="../../pictures/1.5.jpg" ">
				</a>
			</div>
			<span class="middleDt2_2">
				<a href="http://www.baidu.com" target="_blank">标题 </a>
			</span>
		</div>
		<i class="clear"></i>
		<div class="middleDl3_1">
			<span class="middleDt3_2">
				<a href="http://www.baidu.com" target="_blank">标题 </a>
			</span>
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img src="../../pictures/1.5.jpg" >
				</a>
			</div>
		</div>
		<div class="middleDl4_1">
			<span class="middleDt4_2">
				<a href="http://www.baidu.com" target="_blank">标题 </a>
			</span>
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img src="../../pictures/1.5.jpg" >
				</a>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="rightTitle">
			<span>动画分类</span>
		</div>
		<ul >
			<li><a href="http://www.baidu.com" target="_blank">完结动画</a></li>
			<li><a href="http://www.baidu.com" target="_blank">正在连载</a></li>
			<li><a href="http://www.baidu.com" target="_blank">马猴烧酒</a></li>
			<li><a href="http://www.baidu.com" target="_blank">后宫日常</a></li>
			<li><a href="http://www.baidu.com" target="_blank">龙傲天</a></li>
			<li><a href="http://www.baidu.com" target="_blank">轻小说改</a></li>
			<li><a href="http://www.baidu.com" target="_blank">国产经典</a></li>
		</ul>
	</div>
</div>
<!--漫画区-->
<div class="commenu">
		<ul>
			<li><span>漫画</span></li>
		</ul>
	</div>
<div class="comics">
	<div class="leftCom">
		<a href="http://www.baidu.com" target="_blank">
			<img src="../../pictures/1.5.jpg" title="标题">
		<span class="titleLeftCom">标题</span>
		</a>
	</div>
	<div class="middle">
		<div class="middleDl1_1">
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img title="标题" src="../../pictures/1.5.jpg" >
				</a>
			</div>
			<span class="middleDt1_2">
			<a  title="标题" href="http://www.baidu.com" target="_blank">标题 </a><span>
		</div>
		<div class="middleDl2_1">
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img src="../../pictures/1.5.jpg" >
				</a>
			</div>
			<span class="middleDt2_2">
				<a href="http://www.baidu.com" target="_blank">标题</a>
			</span>
		</div>
		<i class="clear"></i>
		<div class="middleDl3_1">
			<span class="middleDt3_2">
				<a href="http://www.baidu.com" target="_blank">标题</a>
			</span>
			<div class="middleDt1">
				<a href="http://www.baidu.com" target="_blank">
					<img src="../../pictures/1.5.jpg" >
				</a>
			</div>
		</div>
		<div class="middleDl4_1">
		<span class="middleDt4_2">
			<a href="http://www.baidu.com" target="_blank">标题</a>
		</span>
		<div class="middleDt1">
			<a href="http://www.baidu.com" target="_blank">
				<img src="../../pictures/1.5.jpg">
			</a>
		</div>
	</div>
	</div>
	<div class="right">
		<div class="rightTitle">
			<span>漫画分类</span>
		</div>
		<ul>
			<li><a href="http://www.baidu.com" target="_blank">完结漫画</a></li>
			<li><a href="http://www.baidu.com" target="_blank">正在连载</a></li>
			<li><a href="http://www.baidu.com" target="_blank">马猴烧酒</a></li>
			<li><a href="http://www.baidu.com" target="_blank">后宫日常</a></li>
			<li><a href="http://www.baidu.com" target="_blank">龙傲天</a></li>
			<li><a href="http://www.baidu.com" target="_blank">轻小说</a></li>
			<li><a href="http://www.baidu.com" target="_blank">国产在线</a></li>
		</ul>
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
<script src="../../js/doorWeb.js"></script>
</html>

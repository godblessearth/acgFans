<?php
//作品内容分页模块
if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){
	include "../head/header_out.php";}
else{include "../head/header_in.php";}	//加载头部文件
include "config.php";
$ceil_length=$_GET['ceil_length'];	//$ceil_length为当前页最大序列值的作品序列值
if($ceil_length==""){		//对ceil_length进行存在判断，如为空，说明是第一次打开，默认值5，如不为空，则传入GET方法获取的值
	pages(5);
}
else{
	pages($ceil_length);
}
function pages($ceil_length){				//封装的函数，用于内容分页，整部作品的上下部切换
	$id=$_GET["id"];//保存当前链接ID
	$id_back=$id+1;//保存上一链接ID
	$id_next=$id-1;//保存下一链接ID
	$select="select * from content where id='$id'";
	$selectMax="select id from content where id=(select MAX(id) from content)";		//搜索id最大的字段的id
	mysql_query("set names 'utf8'");		//设置查询编码语言为utf8,必须放置在执行语句之前
	$result=mysql_query($select);		//获得id值链接的结果集
	$resultMax=mysql_query($selectMax);	//获得id最大值的结果集
	$row=mysql_fetch_assoc($result);	//将结果集加入一个数组，以方便提取各字段数据
	$rowMax=mysql_fetch_assoc($resultMax);//同上
	$max="{$rowMax['id']}";					//获得id最大值
	$imgtype="{$row['imgtype']}";			//获取图片格式
	$total_length="{$row['length']}";	//获取图片总数
	$total_pages=ceil($total_length/5);	//需要分页的总数
	$ceil_length=$ceil_length;			//获取外部传递的ceil_length参数，即每页图片数量上限
	$floor_length=$ceil_length-4;		//获取每页图片数量的下限
	$num=ceil($ceil_length/5);		//当前页数提示
	
	//左边固定功能区
	echo "<div id='fix'>";	
	echo "<a href='javascript:scroll(0,0)'><button class='head_button'> 回到顶部</button>";
	if($id>1&&$id<$max){                     //在最后一项和第一项之间的页面处理
		echo "<a href='animates_show_content.php?id=$id_back'><button class='head_button'>上一部</button></a>";
		echo "<a href='animates_show_content.php?id=$id_next'><button class='head_button'>下一部</button></a>";}
	elseif($id==1){							//最后一项作品页面
			echo "<a href='animates_show_content.php?id=$id_back'><button class='head_button'>上一部</button></a>";
			echo "<a href='animates_show.php'><button class='head_button'>到头了啦</button></a>";}
	elseif($id==$max){						//第一项作品页面
		echo "<a href='animates_show.php'><button class='head_button'>最新的啦</button></a>";
		echo "<a href='animates_show_content.php?id=$id_next'><button class='head_button'>下一部</button></a>";
	}
	echo "<button class='head_button'>第 $num 页</button>";
	echo "<a href='animates_show.php'><button class='head_button'>返回漫画区</button></a>";
	echo "</div>";
	
	//图片区
	echo "<div class='content'>";		
	echo "<div class='content_title'><h3>{$row['title']}</h3></div>";		//作品标题
	for ($i=$floor_length;$i<=$ceil_length&&$i<=$total_length;$i++){//total_length是判断循环量是否超过图片总数，防止最后一页出现未加载项			
			if($imgtype==jpg){					//判断格式为jpg，还是png
			echo "<div class='img_box'><img   src='{$row['url']}/1 ($i).jpg'></div>";}
				else{echo "<div class='img_box'><img   src='{$row['url']}/1 ($i).png'></div>";}
	}
	echo "</div>";
	
	//分页按钮需要的参数
	$num_up=$num-1;		//前一页
	$num_down=$num+1;	//下一个页面
	$num_end=$num+5;	//每页显示的页面链接数
	$up=$ceil_length-5;	//上一页按钮参数
	$down=$ceil_length+5;//下一页按钮参数
	$down_end=$total_length+5;//最后一页的判断条件
	$down_limit=$down-5;	//最后一页时的ceil_length极限值
	$end_pages=$total_pages*5;	//末页按钮参数
	echo "<div id='change_outer_box'>";
	echo "<div class='change_outer_box'>";
	echo "<div class='change_box_span'><span>一共 $total_pages 页</span></div>";
	echo "<div class='change_box_up'><a href='animates_show_content.php?ceil_length=5&id=$id'>首页</a></div>";
	if($up<=5){								//判断并设定上一页链接的ceil_length
	//上一页
		echo "<div class='change_box_up'><a href='animates_show_content.php?ceil_length=5&id=$id'>上一页</a></div>";}
	else{
		echo "<div class='change_box_up'><a href='animates_show_content.php?ceil_length=$up&id=$id'>上一页</a></div>";}
	
	//中间页面链接按钮
	//下面判断总分页数，下于6就全部打印页面链接。否则，按当前页面序列打印
	if($total_pages<=6){$j=5;
		for ($i=1;$i<=$total_pages;$i++){
		echo "<div class='change_box'><a href='animates_show_content.php?ceil_length=$j&id=$id' class='change'>$i</a></div>";
	$j+=5;}}
	else{
	if($num_up!=0){
	echo "<div class='change_box'><a href='animates_show_content.php?ceil_length=$up&id=$id' class='change'>$num_up</a></div>";}
	echo "<div class='change_box'><a href='animates_show_content.php?ceil_length=$ceil_length&id=$id' class='change'>$num</a></div>";
		$j=5;
		for ($i=$num_down;$i<=$num_end&&$i<=$total_pages;$i++){
		echo "<div class='change_box'><a href='animates_show_content.php?ceil_length=$down&id=$id' class='change'>$i</a></div>";
	$down+=5;}}
	//下一页
	if($down>=$down_end){					//判断并设定下一页链接的ceil_length
		echo "<div class='change_box_down'><a href='animates_show_content.php?ceil_length=$down_limit&id=$id'>下一页</a></div>";}
	else{
		echo "<div class='change_box_down'><a href='animates_show_content.php?ceil_length=$down&id=$id'>下一页</a></div>";}
		echo "<div class='change_box_down'><a href='animates_show_content.php?ceil_length=$end_pages&id=$id' class='change'>末页</a></div>";
	echo "</div>";
	echo "</div>";
	}

?>

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
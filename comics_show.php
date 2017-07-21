<?php
//作品列表分页模块
header('Content-Type:text/html;charset=utf-8');
if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){
	include "../head/header_out.php";}
else{include "../head/header_in.php";}
include "config.php";
date_default_timezone_set('PRC');
$ceil_length=$_GET['ceil_length'];
if($ceil_length==""){
	showpages(9);
}
else{
	showpages($ceil_length);
}
//获取最大ID，$max，然后ceil($max/9)获得需要的分页总数；需要GET传递的数值为ceil。
function showpages($ceil_length){			//封装的函数，用于作品列表展示分页
	$ceil_length=$ceil_length;
	$floor_length=$ceil_length-9;
	$select_limit="select * from content order by id desc limit $floor_length,$ceil_length";
	$selectMax="select id from content where id=(select MAX(id) from content)";	
	mysql_query("set names 'utf8'");
	$resultMax=mysql_query($selectMax);	//获得id最大值的结果集
	$rowMax=mysql_fetch_assoc($resultMax);
	$ceil_content=mysql_query($select_limit);
	$max="{$rowMax['id']}";							//数据中ID最大值，即数据总量
	//作品列表区
	echo "<div id='outer'>";
	while($row=mysql_fetch_assoc($ceil_content)){
		echo "<div class='show_img_box'>";
	echo "<div class='img_box_content'><a href='comics_show_content.php?id={$row['id']}' target='_blank'><img src='{$row['picture']}'></a><br/></div><div class='img_p_content'><a href='comics_show_content.php?id={$row['id']}' target='_blank'><p>{$row['title']}</p></a></div>";
		echo "</div>";
	}
	echo "</div>";
	
	//分页按钮需要的参数
	$total_pages=ceil($max/9);//需要分页的总数
	$up=$ceil_length-9;	//上一页按钮参数
	$down=$ceil_length+9;//下一页按钮参数
	$down_end=$max+9;//最后一页时的判断条件
	$down_limit=$down-9;	//最后一页时的ceil_length极限值
	$num=ceil($ceil_length/9);//当前页序列参数
	//分页过多时，动态显示分页按钮所需要的参数
	$num_up=$num-1;		//前一页
	$num_down=$num+1;	//下一个页面
	$num_end=$num+5;	//每页显示的页面链接数
	$end_pages=$total_pages*9;//末页按钮参数
	echo "<div id='change_outer_box'>";
	echo "<div class='change_outer_box'>";
	echo "<div class='change_box_span'><span>当前为第 $num 页</span></div>";
	echo "<div class='change_box_up'><a href='comics_show.php?ceil_length=9'>首页</a></div>";
	//上一页
	if($up<=9){								//判断并设定上一页链接的ceil_length
		echo "<div class='change_box_up'><a href='comics_show.php?ceil_length=9'>上一页</a></div>";}
	else{
		echo "<div class='change_box_up'><a href='comics_show.php?ceil_length=$up'>上一页</a></div>";}
		
	//中间分页按钮链接区
	if($total_pages<=6){   //如果需要的分页总数不大于6，直接循环echo链接按钮
		$j=9;
		for ($i=1;$i<=$total_pages;$i++){
		echo "<div class='change_box'><a href='comics_show.php?ceil_length=$j' class='change'>$i</a></div>";
		$j=$j+9;}
	}
	else{					//如果需要的分页总数大于6，则固定显示当前页，然后循环打印当前页之后的5个链接按钮。
		if($num_up!=0){		//防止出现第0页。第一页默认6个分页链接。第二页开始每页7个，此时当前页起到锚的作用，作为左右链接的起点
		echo "<div class='change_box'><a href='comics_show.php?ceil_length=$up' class='change'>$num_up</a></div>";}
		echo "<div class='change_box'><a href='comics_show.php?ceil_length=$ceil_length' class='change'>$num</a></div>";
			for ($i=$num_down;$i<=$num_end&&$i<=$total_pages;$i++){
			echo "<div class='change_box'><a href='comics_show.php?ceil_length=$down' class='change'>$i</a></div>";
		$down+=5;}
	}
	
	//下一页
	if($down>=$down_end){					//判断并设定下一页链接的ceil_length
		echo "<div class='change_box_down'><a href='comics_show.php?ceil_length=$down_limit'>下一页</a></div>";}
	else{
		echo "<div class='change_box_down'><a href='comics_show.php?ceil_length=$down'>下一页</a></div>";}
		echo "<div class='change_box_down'><a href='comics_show.php?ceil_length=$end_pages' class='change'>末页</a></div>";
	echo "</div>";
	echo "</div>";
		
}
?>
</body>
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
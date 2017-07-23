<?php
include 'config.php';
header('Content-Type:text/html;charset=utf-8');?>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<?php
date_default_timezone_set('PRC');
$select="select * from message order by id desc";
mysql_query("set names 'utf8'");
$result=mysql_query($select);
echo "<center>";
echo "<table border='1' cellsapcing='0' width='600'>";
echo "<tr>";
echo "<th>编号</th>";
echo "<th>发送者</th>";
echo "<th>接受者</th>";
echo "<th>留言内容</th>";
echo "<th>发布时间</th>";
echo "<th>回复</th>";
echo "</tr>";
while($row=mysql_fetch_assoc($result)){
	echo"<tr>";
	echo "<td>{$row['id']}</td>";
	echo "<td>{$row['sender']}</td>";
	echo "<td>{$row['receiver']}</td>";
	echo "<td>{$row['content']}</td>";
	echo "<td>{$row['time']}</td>";
	echo "<td><span class='callback'  value='{$row['id']}' >回复</span></td>";
	echo "</tr>";
	

}
echo "</table>";
echo "</center>";

?>
<script>
$(function(){
	//显示留言输入面板；传递必要的用户信息
	$(".callback").click(function (){					
		var show=$(".mes").css("display");
		var values=$(this).attr("value")
		var receivername=$(this).parent().siblings().eq(1).text();
		if(show=="none"){
			var top=200;
			$(".mes").css({"display":"block","top":top+"px"});
			$(".receiver_id").val(values);
			$(".receiver").val(receivername);
			$("#textarea").attr("placeholder","回复："+receivername);}	
	})
	//直接留言，非回复
	$(".msg").click(function(){
		var show=$(".mes").css("display");
		if(show=="none"){$(".mes").css({"display":"block","top":top+"px"});}
	})
	$("#cancle").click(function(){
		$(".mes").css("display","none");
	})
	//鼠标进入留言时，自动出现回复按钮
	$("tr").mouseenter(function (){
		$(this).find(".callback").css("display","block");
	})
	$("tr").mouseleave(function (){
		$(this).find(".callback").css("display","none");
	})
	
	
	
	
	
	
	
	
	
	
})
</script>
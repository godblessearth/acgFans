<?php
header('Content-Type:text/html;charset=utf-8');
mysql_connect("localhost","root","");
mysql_select_db("user1");
mysql_query("set names 'utf8'");
$title=$_POST['title'];
$url=$_POST['url'];
$picture=$_POST['picture'];
$length=$_POST['length'];
$imgtype=$_POST['imgtype'];
date_default_timezone_set('PRC');
$time=date("Y-m-d H:i:s");
if($title!=""&&$url!=""){
$sql="insert into content (title,url,picture,time,length,imgtype) values('$title','$url','$picture','$time','$length','$imgtype')";
mysql_query($sql);
echo "<script>alert('添加成功')</script>";
echo "<script>location='../load_regi/person.php'</script>";}
else{echo "<script>alert('内容不能为空')</script>";
echo "<script>location='../load_regi/person.php'</script>";}





?>
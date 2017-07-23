<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("user1");//必须去除BOM，否则被include时会提前输出，导致setcookie失败
mysql_query("set names 'utf8'");
?>
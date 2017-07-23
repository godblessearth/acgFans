<?php
//退出，清除cookie
setcookie("username","",time()-3600,"/"); 
setcookie("password","",time()-3600,"/");
echo "<script>location='../index/index.php'</script>";

?>
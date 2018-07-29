<?php 
setcookie( "cooklogin", "admin", time() + 36000 ); 
echo $_COOKIE["cooklogin"];
?>
<?php
session_start();
$_SESSION = array();
session_destroy();
echo 'ログアウトしました';
?>
<br><br><a href="login.php"> ログイン画面に戻る </a>


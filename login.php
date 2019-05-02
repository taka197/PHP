<?php
session_start();
if (isset($_SESSION['name'])) {
	echo $_SESSION['name'];
	echo  '<br><br><a href="logout.php"> ログアウト</a>';
} else {
	echo '<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
		</head>
		<body>
		<form method="POST" action="session.php">
		<p>メールアドレス</p><input type="text" name="mail" />
		<p>パスワード</p><input type="text" name="pass" />
		<input type="submit" value="送信" />
		</form>
		</body>
		</html>';
}
?>



<?php
if (isset ($_GET["data"])) {
	echo $_GET["data"];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GETメソッドを使った画面出力</title>
</head>
<body>
<label>あなたのお名前は？</label>
<form method="GET" action="test.php">
<input type="text" name="data" />
<input type="submit" value="送信" />
</form>
</body>
</html>

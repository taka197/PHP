<?php
$id = $_POST['id'];
$height = $_POST['height'];
$dsn = 'mysql:host=mysql1011.db.sakura.ne.jp;dbname=procir2_hasegawa';
$user = 'procir2';
$password = 'dbdb1234';

try {
	$dbh = new PDO($dsn, $user, $password);
	$sql1 = "SELECT * FROM user WHERE id='$id'";
	$res1 = $dbh->query($sql1);
	$count = $res1->rowCount();
	if ($count === 0) {
		echo 'レコードが存在しません';
	} else {
		if (preg_match('/^([0-9]{2})$|^([0-9]{3})$/', $height)) {
			$sql2 = "UPDATE user SET height='$height' WHERE id='$id'";
			$res2 = $dbh->query($sql2);
			echo 'データがアップデートされました';
		} else {
			echo '正しい数値を入力してください';
		}
	}
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}
?>

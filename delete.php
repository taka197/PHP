<?php
$id = $_POST['id'];
$dsn = 'mysql:host=mysql1011.db.sakura.ne.jp;dbname=procir2_hasegawa';
$user = 'procir2';
$password = 'dbdb1234';

if (!is_numeric($id)) {
	echo '数字を入力してください';
} else {
	try {
		$dbh = new PDO($dsn, $user, $password);
		$sql1 = "SELECT * FROM user WHERE id='$id'";
		$res1 = $dbh->query($sql1);
		$count = $res1->rowCount();
		if ($count === 0) {
			echo 'レコードが存在しません';
		} else {
			$sql2 = "DELETE FROM user WHERE id='$id'";
			$res2 = $dbh->query($sql2);
			echo 'データが削除されました';
		}
	} catch (PDOException $e) {
		var_dump($e->getMessage());
		exit;
	}
}
?>

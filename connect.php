<?php
$dsn = 'mysql:host=mysql1011.db.sakura.ne.jp;dbname=procir2_hasegawa';
$user = 'procir2';
$password = 'dbdb1234';

try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}

echo 'データベースに接続しました';
?>

<?php
$dsn = 'mysql:host=mysql1011.db.sakura.ne.jp;dbname=procir2_hasegawa';
$user = 'procir2';
$password = 'dbdb1234';

try {
	$dbh = new PDO($dsn, $user, $password);

	$sql = "SELECT * FROM user";

	$res = $dbh->query($sql);

	foreach ($res as $value) {
		echo $value['id'] . $value['name'] . $value['height'] . $value['birthday'] . "<br>";
	}

} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}
?>


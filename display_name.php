<?php
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$dsn = 'mysql:host=localhost;dbname=procir_hasegawa';
$user = 'hasegawa';
$password = 'wY8MeVfuJy';

try {
	$dbh = new PDO($dsn, $user, $password);
	$sql = "SELECT * FROM members WHERE mail='$mail' AND pass='$pass'";
	$res = $dbh->query($sql);
	$count = $res->rowCount();
	if ($count === 1) {
		$name = $res->fetch(PDO::FETCH_ASSOC);
		echo $name["name"];
	} else {
		echo 'メンバーが存在しません';
	}
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}
?>

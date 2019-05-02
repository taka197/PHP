<?php
$name = $_POST['name'];
$height = $_POST['height'];
$birthday = $_POST['birthday'];
$dsn = 'mysql:host=mysql1011.db.sakura.ne.jp;dbname=procir2_hasegawa';
$user = 'procir2';
$password = 'dbdb1234';

$errors = array();
if ($name === '') {
	$errors['name'] = '名前が入力されていません';
}

if ($height === '') {
	$errors['height'] = '身長が入力されていません';
}

if ($birthday === '') {
	$errors['birthday'] = '誕生日が入力されていません';
}

if ($errors) {
	foreach ($errors as $error) {
		echo $error . "<br>";
	}
} else {
	try {
		$dbh = new PDO($dsn, $user, $password);

		$sql = "INSERT INTO user (name, height, birthday
		) VALUES (
			'$name', '$height', '$birthday'
		)";
		$res = $dbh->query($sql);

		if ($res) {
			echo 'データが挿入されました';
		}
	} catch (PDOException $e) {
		var_dump($e->getMessage());
		exit;
	}
}
?>

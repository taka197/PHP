<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
</head>
<body>
<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if (is_numeric($num1) && is_numeric($num2)) {
  $ope = $_GET["ope"];
  switch ($ope) {
    case "+":
      $ans = $num1 + $num2;
      break;
    case "-":
      $ans = $num1 - $num2;
      break;
  case "×":
    $ans = $num1 * $num2;
      break;
  case "÷":
      if ($num1 == 0) {
        echo 'エラー(0以外の数字を入力してください)';
      } else {
        $ans = $num1 / $num2;
      }
      break;
  }

  echo $ans;
} else {
  echo '数字以外が含まれています';
}
?>
</body>
</html>


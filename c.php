<?php
for ($i = 1; $i <= 50; $i++) {
  echo $i;
  if ($i % 3 == 0 || strpos($i, '3')) {
    echo 'プロサー';
  }
  echo "</br>";
}
?>

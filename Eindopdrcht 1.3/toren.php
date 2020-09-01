
<?php
$hoogte = $_GET['hoogte'];
$breedte = $_GET['breedte'];
for ($x = 0; $x <= $hoogte; $x++) {
  for($i = 0; $i <= $breedte; $i++) {
    echo "*";
  }
    echo "<br>";

} ?>

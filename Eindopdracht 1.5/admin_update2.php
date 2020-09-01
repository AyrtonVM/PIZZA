<?php

$page_title = 'Administratie - product update slijterij';

include 'includes/header.php';
include 'includes/config.php';

$id = $_POST['id'];
$naam = $_POST['naam'];
$prijs = $_POST['prijs'];


$sql = 'UPDATE producten SET naam = "' . $naam . '", prijs = "' . $prijs . '" WHERE id = "' . $id . '"';

if ($conn->query( $sql ) ) {
  echo "Uw product is succesvol opgeslagen";
} else {
  echo "Uw product is niet weten toe te voegen";
}
echo '<br><a href="admin.php">Terug naar het overzicht</a> ';
include 'includes/footer.php';
 ?>

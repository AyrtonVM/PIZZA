<?php

$page_title = 'Administratie - product verwijderen slijterij';

include 'includes/header.php';
include 'includes/config.php';

$id = $_POST['id'];


$sql = 'DELETE FROM producten WHERE id = "' . $id . '"';

if ($conn->query( $sql ) ) {
  echo "Uw product is succesvol verwijderd";
} else {
  echo "Uw product is niet weten te verwijderen";
}
echo '<br><a href="admin.php">Terug naar het overzicht</a> ';
include 'includes/footer.php';
 ?>

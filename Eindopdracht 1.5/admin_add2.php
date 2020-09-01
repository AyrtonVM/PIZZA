<?php
$page_title = 'Administratie - product toevoegen slijterij';

include 'includes/header.php';
include 'includes/config.php';

echo '
<h1>Administratiepaneel - Sligro </h1>
';

$naam = $_POST['naam'];
$categorie = $_POST['categorie'];
$prijs = $_POST['prijs'];

$sql = "INSERT INTO `producten` (`naam`, `categorie`, `prijs`)
      VALUES ('" . $naam . "', '" . $categorie . "', '" . $prijs . "')";

if ($conn->query( $sql ) ) {
  echo "Uw product is succesvol gewijzigd";
} else {
  echo "Uw product is niet gewijzigd";
}
echo '<br><a href="admin.php">Terug naar het overzicht</a> ';
include 'includes/footer.php';
 ?>

<?php

  include 'includes/header.php';
  include 'includes/config.php';

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$adress = $_POST['adress'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$wachtwoord = $_POST['wachtwoord'];
$wachtwoord_bevestigen = $_POST['wachtwoord_bevestigen'];

if($wachtwoord != $wachtwoord_bevestigen) {
  echo "Uw wachtwoord komt niet overeen";
  exit();
}

$wachtwoord = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `klant` (`voornaam`, `achternaam`, `adress`, `postcode`, `woonplaats`, `email`, `telefoon`, `wachtwoord`)
      VALUES ('" . $voornaam . "', '" . $achternaam . "', '" . $adress . "', '" . $postcode . "', '" . $woonplaats . "', '" . $email . "', '" . $telefoon . "', '" . $wachtwoord . "')";

if ($conn->query( $sql ) ) {
  echo "Uw bestelling is geplaatst";
}
  include 'includes/footer.php';

?>

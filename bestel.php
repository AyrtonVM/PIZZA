<?php

  include 'includes/header.php';

  //echo '<pre>';
 // print_r($_POST);
  //echo '</pre>';  

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'slijterij';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
  echo "Verbinding mislukt";
  exit();
  }

  $errors = [];

  if( !isset($_POST['voornaam'] ) || $_POST['voornaam'] == '' )
  $errors['voornaam'] = true;

  if( !isset($_POST['achternaam'] ) || $_POST['achternaam'] == '' )
  $errors['achternaam'] = true;

  if( !isset($_POST['adres'] ) || $_POST['adres'] == '' )
  $errors['adres'] = true;

  if( !isset($_POST['postcode'] ) || $_POST['postcode'] == '' )
  $errors['postcode'] = true;

  if( !isset($_POST['woonplaats'] ) || $_POST['woonplaats'] == '' )
  $errors['woonplaats'] = true;

  if( !isset($_POST['telefoon'] ) || $_POST['telefoon'] == '' )
  $errors['telefoon'] = true;

  if( !isset($_POST['email'] ) || $_POST['email'] == '' )
  $errors['email'] = true;

  if( !isset($_POST['verzendwijze'] ) || $_POST['verzendwijze'] == '' )
  $errors['verzendwijze'] = true;

  if (count ($errors ) > 0) {
    echo '<p>U heeft niet alle benodigde velden ingevuld</p>';

    echo'<p> de volgende gegevens ontbreken</p>';
    foreach( $errors as $field => $bool) {
      echo '<li>' . $field . '</li>';
    }
    echo '</ul>';
    exit;
  }

  echo ''

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$adress = $_POST['adress'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$telefoon = $_POST['telefoon'];
$email = $_POST['email'];
$verzendwijze = $_POST['verzendwijze'];

if (isset ($_POST['wachtwoord'] ) )
$wachtwoord = $_POST['wachtwoord'];

if (isset ($_POST['wachtwoord_bevestigen'] ) )
$wachtwoord_bevestigen = $_POST['wachtwoord_bevestigen'];

if( isset ( $_SESSION['login'] ) ) {
  $klantnummer = $_SESSION['login']['klantnummer'];
} else {


if($wachtwoord != $wachtwoord_bevestigen) {
  echo "Uw wachtwoord komt niet overeen";
  exit();
}

$wachtwoord = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `klant` (`voornaam`, `achternaam`, `adress`, `postcode`, `woonplaats`, `email`, `telefoon`, `wachtwoord`)
      VALUES ('" . $voornaam . "', '" . $achternaam . "', '" . $adress . "', '" . $postcode . "', '" . $woonplaats . "', '" . $email . "', '" . $telefoon . "', '" . $wachtwoord . "')";

if ($conn->query( $sql ) ) {
  echo "Uw gegevens zijn succesvol opgeslagen";
  $klantnummer = $conn->insert_id;
}

}

if( isset( $klantnummer) ) {

}
  


$sql = "INSERT INTO `bestelling` ( `klant-klantnummer`, `verzendwijze`, )
        VALUES ( '" . $klantnummer . "', '" . $verzendwijze . "' )";

        if( $conn->query( $sql ) ) {
          echo "bestelling is succesvol aangemaakt, nu door met het opslaan van de bestelregels";
            $bestelnummer = $conn->insert_id;
            $producten = $_POST['aantal'];

            foreach( $producten as $prodcutnummer => $aantal ) {
              if ( $aantal > 0) {
                $sql = "INSERT INTO 'bestelregel' ( 'bestelnummer', 'productnummer', 'aantal'  )
                        VALUES ( '" . $bestelnummer . " ', '" . $productnummer . "', '" . $aantal. "')"

                $conn->query( $sql );
              }
            }

              echo "Uw bestelling is succesvol opgeslagen met bestelnummer" . $bestelnummer

        }











include 'includes/footer.php';
?>

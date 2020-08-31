<?php


include 'includes/header.php';
include 'includes/config.php';

$klant = ['voornaam' => '', 'achternaam' => '', 'adres' => '','postcode' => '','woonplaats' => '','email' => '','telefoon' => ''];
if( isset( $_SESSION['login'] ) )
  $klant = $_SESSION['login'];


?>


    <div class="container my-5">
      <h1>Drankenhandel Sligro</h1>

      <p>U bent ingelogd als: .....</p>

      <form action="bestel.php" method="POST">

      <div class="container">
        <div class="col">
        <h2>Bieren</h2>


<?php

$sql = 'SELECT * FROM product WHERE categorie = "bier"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo '
      <table class="table">
         <thead>
           <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
          </tr>
        </thead>
        <tbody>
';

 while($row = $result->fetch_assoc() ) {

     echo '
      <tr>
        <td>' . $row['product'] . '</td>
        <td>' . $row['prijs'] . '</td>
      <td><input type="number" min="0" name="aantal[' . $row['productnummer']. ']"></td>
     </tr> 
   ';
}

echo '</table>';

?>
      </div>
        <div class="col">
        <h2>Wijnen</h2>

<?php

        $sql = 'SELECT * FROM product WHERE categorie = "wijn"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo '
      <table class="table">
         <thead>
           <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
          </tr>
        </thead>
        <tbody>
';

 while($row = $result->fetch_assoc() ) {

     echo '
      <tr>
        <td>' . $row['product'] . '</td>
        <td>' . $row['prijs'] . '</td>
      <td><input type="number" min="0" name="aantal[' . $row['productnummer']. ']"></td>
     </tr> 
   ';
}

echo '</table>';

?>

        </div>

        <h3>Uw gegevens</h3>

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" required class="form-control" name="voornaam" value="<?= $klant['voornaam']?>" placeholder="voornaam">
      	  </div>
          <div class="form-group col-md-6">
            <input type="text" required class="form-control"name="achternaam" value="<?= $klant['achternaam']?>" placeholder="achternaam">
          </div>
        </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" required class="form-control"name="adress" value="<?= $klant['adres']?> placeholder="adress">
            </div>
            <div class="form-group col-md-2">
              <input type="text" required class="form-control"name="postcode" value="<?= $klant['postcode']?> placeholder="postcode">
            </div>
            <div class="form-group col-md-4">
              <input type="text" required class="form-control"name="woonplaats" value="<?= $klant['Woonplaats']?> placeholder="woonplaats">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" required class="form-control"name="email" value="<?= $klant['email']?> placeholder="email">
            </div>
            <div class="form-group col-md-6">
              <input type="text" required class="form-control"name="telefoon" value="<?= $klant['telefoon']?> placeholder="telefoon">
            </div>
          </div>

        <p><strong>Gewenste verzendwijze</strong></p>

        <div class="form-row">
          <div class="form-group col">
            <div class="form-check">
              <input class="form-check-input"type="radio" class="form-control" id="post" name="gender" value="post">
              <label class="form-check-label"for="post">post</label>
            </div>
            <div class="form-check">
              <input class="form-check-input"type="radio" class="form-control" id="afhalen" name="gender" value="afhalen">
              <label class="form-check-label"for="afhalen">afhalen</label>
            </div>
          </div>
        </div>

        <?php
          if (!isset( $_SESSION['login'] ) ) {
        ?>

        <p>Maak een account aan door hier onder een wachtwoord in te vullen</p>

        <div class="form-row">
          <div class="group-form col-md-6">
            <input type="password" class="form-control" name="wachtwoord" placeholder="Wachtwoord"><br>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" name="wachtwoord_bevestigen" placeholder="Bevestig wachtwoord"><br>
          </div>
        </div>
        <?php
          }
        ?>

          <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
      </form>
    </div>

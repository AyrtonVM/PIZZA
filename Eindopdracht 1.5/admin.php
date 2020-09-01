<?php
$page_title = 'Administratie slijterij';

include 'includes/header.php';

echo '
<h1>Administratiepaneel - Sligro </h1>
<p> Productenlijst</p>
<p><a href="admin_add.php" class="btn btn-primary"> Producten plaatsen</a></p>
';

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'slijterij';

$conn = new mysqli($hostname, $username, $password, $database);

if ( $conn->connect_error) {
die('Unavaible');
}

$sql = 'SELECT * FROM producten';
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo '
  <table class="table">
  <thead>
    <tr>
      <th>Naam</th>
      <th>Categorie</th>
      <th>Prijs</th>
      <th>Acties</th>
    </tr>
  </thead>
  <tbody>
  ';

    while($row = $result->fetch_assoc()) {

      //  echo "id: " . $row["id"]. " - Categorie: " . $row["categorie"]. " - Naam: " . $row["naam"]. ", Prijs: " . $row["prijs"]. "<br>"; }
      echo '
      <tr>
        <td>' . $row['naam'] . '</td>
        <td>' . $row['categorie'] . '</td>
        <td>' . $row['prijs'] . '</td>
        <td><a href="admin_update.php?id='. $row['id'] . '">Aanpassen </a><a href="admin_delete.php?id='. $row['id'] . '">Verwijderen</a></td>
      </tr>
      '; }
    echo '</tbody>
    </table>';
} else {
    echo '0 results';
}
$conn->close();

include 'includes/footer.php';

 ?>

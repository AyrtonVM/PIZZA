<?php

$page_title = 'Administratie - Product delete slijterij';

include 'includes/header.php';
include 'includes/config.php';

echo '
<h1>Administratiepaneel - Sligro </h1>
';


$id = $_GET['id'];

$sql = 'SELECT * FROM producten WHERE id = "' . $id . '" LIMIT 1';
$result = $conn->query($sql);

if ($result->num_rows == 0) {
  die('Product niet gevonden');
}

$row = $result->fetch_assoc();

//formulier

?>

<form action="admin_delete2.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id']; ?>">
  <h3>Product verwijderen</h3>
  <p>Weet u zeker dat u het product <strong><?php echo $row['naam']; ?></strong> wilt verwijderen?</p>
  <a href="admin.php" class="btn btn-primary">Annuleren</a>
  <button type="submit" class="btn btn-danger">Bevestigen</button>
</form>



<?php

include 'includes/footer.php';

 ?>

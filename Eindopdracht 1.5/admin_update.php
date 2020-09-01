<?php

$page_title = 'Administratie - Product update slijterij';

include 'includes/header.php';
include 'includes/config.php';

echo '
<h1>Administratiepaneel - Sligro </h1>
<p>Product updaten</p>
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

<form action="admin_update2.php" method="post">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
  <h3>Product gegevens</h3>

  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" value="<?php echo $row['naam'] ?>"name="naam" placeholder="naam">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <?php
      echo $row ['categorie'];
       ?>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control"name="prijs" value="<?php echo $row['prijs'] ?>" placeholder="prijs">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Product opslaan</button>
</form>



<?php

include 'includes/footer.php';

 ?>

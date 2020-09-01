<?php

$page_title = 'Administratie - Product toevoegen slijterij';

include 'includes/header.php';

echo '
<h1>Administratiepaneel - Sligro </h1>
<p>Product toevoegen</p>
';

//formulier

?>

<form action="admin_add2.php" method="post">
  <h3>Product gegevens</h3>

  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="naam" placeholder="naam">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <select class="form-control" name="categorie">
        <option value="categorie">bieren</option>
        <option value="wijnen">wijnen</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control"name="prijs" placeholder="prijs">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Product opslaan</button>
</form>



<?php

include 'includes/footer.php';

 ?>

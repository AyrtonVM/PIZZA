<?php
if ($result->num_rows > 0) {
echo '
<div class="form-group col-md-6">
<table class="table">
<thead>
  <h2 class="ml-1">' . $categorie . '</h2>
  <tr>
    <th class="col-md-1">Product</th>
    <th>Prijs</th>
    <th>Aantal</th>
  </tr>
</thead>
<tbody>
';

  while($row = $result->fetch_assoc()) {
    echo '
    <tr>
      <td>' . $row['naam'] . '</td>
      <td>' . $row['prijs'] . '</td>
      <td>   <input class="w-100"> </input</td>
    </tr>
    '; }
  echo '</tbody>
  </table>
  </div>';
} else {
  echo '0 results';
}
 ?>

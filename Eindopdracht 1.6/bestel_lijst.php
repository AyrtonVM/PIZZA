<?php
include 'includes/config.php';
$page_title = 'Administratie slijterij';

if ( $conn->connect_error) {
die('Unavaible');
}

$sql = 'SELECT * FROM producten WHERE categorie = "bieren"';
$result = $conn->query($sql);
$categorie = ("Bieren");
include 'includes/product_cat.php';

$sql = 'SELECT * FROM producten WHERE categorie = "wijnen"';
$result = $conn->query($sql);
$categorie = ("Wijnen");
include 'includes/product_cat.php';

 ?>

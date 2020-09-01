<?php

$page_title = "slijterij - Gastpaneel";

include 'includes/header.php';
include 'includes/config.php';

?>



<div class="bg-light container my-5 py-2">

      <h1 class="p-1 rounded bg-primary text-white">Slijterij stukinmn kraag</h1>

      <p>Maak hier uw bestelling op</p>
      <div class="form-row">
        <?php
          include'bestel_lijst.php'
        ?>
      </div>

          <h3>Uw gegevens</h3>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" name="voornaam" placeholder="Voornaam">
      	  </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control"name="achternaam" placeholder="Achternaam">
          </div>
        </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control"name="adress" placeholder="Adress">
            </div>

            <div class="form-group col-md-2">
              <input type="text" class="form-control"name="postcode" placeholder="Postcode">
            </div>

            <div class="form-group col-md-4">
              <input type="text" class="form-control"name="woonplaats" placeholder="Woonplaats">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control"name="email" placeholder="Email">
            </div>

            <div class="form-group col-md-6">
              <input type="text" class="form-control"name="telefoon" placeholder="Telefoon">
            </div>

          </div>

        <p><strong>Gewenste verzendwijze</strong></p>

        <div class="form-row">
          <div class="form-group col">
            <div class="form-check">

              <input class="form-check-input"type="radio" class="form-control" id="post" name="leverwijze" value="post">
              <label class="form-check-label"for="post">Post</label>
            </div>

            <div class="form-check">
              <input class="form-check-input"type="radio" class="form-control" id="afhalen" name="leverwijze" value="afhalen">
              <label class="form-check-label"for="afhalen">Afhalen</label>
            </div>

          </div>

        </div>

        <p>Maak een account aan door hier onder een wachtwoord in te vullen</p>

        <div class="form-row">

          <div class="group-form col-md-6">
            <input type="password" class="form-control" name="wachtwoord" placeholder="Wachtwoord"><br>
          </div>

          <div class="form-group col-md-6">
            <input type="password" class="form-control" name="wachtwoord_bevestigen" placeholder="Bevestig wachtwoord"><br>
          </div>

          <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
        </div>
      </form>

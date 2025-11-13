<?php
  $active = 'contact';
  $title = 'Contact';
  $style = "contact";

  $json = file_get_contents("cv.json");

  $cv = json_decode($json, true);

  include_once('./_partials/header.php')

?>
  
  <section class="brief">
    <h1><i class="fa-solid fa-envelope"></i>Contact</h1>
  </section>

  <main class="flex-column">
    <div class="card">
        <p><strong><i class="fa-solid fa-phone"></i>Téléphone :</strong> +33 6 88 34 54 88</p>
        <p><strong><i class="fa-solid fa-envelope"></i>E-mail :</strong> nico.ferr@hotmail.fr</p>
        <p><strong><i class="fa-solid fa-location-dot"></i>Adresse :</strong> 57200 Sarreguemines</p>
        <p><strong><i class="fa-solid fa-car-side"></i>Permis de conduire :</strong> Permis B - voiture personnelle</p>
        <p><strong><i class="fa-solid fa-person-walking-arrow-right"></i>Mobilité :</strong> Mobile en région</p>
    </div>
  </main>

  <?php include_once('./_partials/footer.php') ?>
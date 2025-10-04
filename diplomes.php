<?php
  $active = 'diplomes';
  $title = 'Diplômes';

  include_once('./_partials/header.php')

?>

    <section class="brief">
        <h1>Mes diplômes</h1>
    </section>

    <main class="diplomes">
        <a href="diplomes/Attestation Incubateur.jpg">
            <img src="diplomes/Attestation Incubateur.jpg"
                alt="Attestation Incubateur Metz Numeric School 2023" title="Attestation Incubateur Metz Numeric School 2023" />
        </a>
        <a href="diplomes/licencepro.jpg">
            <img src="diplomes/licencepro.jpg" alt="Licence Professionnelle IUT de Metz 2012" title="Licence Professionnelle IUT de Metz 2012"/>
        </a>
        <a href="diplomes/dut.jpg">
            <img src="diplomes/dut.jpg" alt="DUT Informatique IUT de Metz 2011" title="DUT Informatique IUT de Metz 2011" />
        </a>
    </main>

<?php include_once('./_partials/footer.php') ?>
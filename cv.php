<?php
  $active = 'cv';
  $title = 'CV';

  include_once('./_partials/header.php')

?>
  
  <section class="hero">
    <h1>Mon CV</h1>
    <!-- <p>Un style moderne et équilibré, à la fois clair et avec un peu plus de personnalité.</p> -->
  </section>

    <main class="main">
      <div id="pdf-container">
        <embed src="cv.pdf" type="application/pdf" width="100%" height="600px" />
      </div>
    </main>
    
  <?php include_once('./_partials/footer.php') ?>
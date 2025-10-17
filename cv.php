<?php
  $active = 'cv';
  $title = 'CV';
  $style = "cv";

  $json = file_get_contents("cv.json");

  $cv = json_decode($json, true);

  include_once('./_partials/header.php')

?>
  
  <section class="brief">
    <h1><i class="fa-solid fa-clipboard-list"></i> Mon CV</h1>
  </section>

  <div class="download">
    Télécharger :
    <div>
      <a href="./CV.jpg" download><i class="fa-solid fa-file-image"></i>JPG</a>
      <a href="./cv.pdf" download><i class="fa-solid fa-file-pdf"></i>PDF</a>
    </div>
  </div>

  <main id="cv-container">
    <div class="catchphrase"><?= $cv["catchphrase"] ?></div>

    <div class="tabs">
      <div class="tab active" data-tab="skills">Compétences</div>
      <div class="tab" data-tab="xp">Expériences</div>
      <div class="tab" data-tab="formation">Formation</div>
      <div class="tab" data-tab="other">Autres</div>
    </div>
    
    <!--------------------------
          Compétences
    ---------------------------->
    <div id="skills" class="tab-content active">
      <div class="flex skills">
        <?php
          foreach($cv["skills"] as $skill) {
            $good = $skill["level"] >= 7;
            $okay = $skill["level"] > 5;
            $medium = $skill["level"] > 3;

            $bg_color = $good ? "green" : ($okay ? "yellowgreen" : ($medium ? "orange" : "red"));
        ?>
            <div class="flex skill">
              <div class="flex skill-name"><?= $skill["name"] ?></div>
              <div class="skill-level">
                <span class="flex skill-color" style="width: <?= $skill["level"] ?>0% ;background-color: <?= $bg_color ?>;" >
                  <!-- <?= $skill["level"] ?>/10 -->
                </span>
              </div>
            </div>
        <?php
          }
        ?>
      </div>
    </div>
    
    <!--------------------------
          Expériences
    ---------------------------->
    <div id="xp" class="tab-content">
      <div class="flex-column cards">
        <?php foreach($cv["experiences"] as $exp) { ?>
          <article class="card">
            <h3><?= $exp["title"] ?></h3>
            <p><?= $exp["location"] ?> - <?= $exp["duration"] ?></p>
            <ul>
              <?php foreach($exp["missions"] as $mission) { ?>
                <li><?= $mission ?></li>
              <?php } ?>
            </ul>
          </article>
        <?php } ?>
      </div>
    </div>
    
    <!--------------------------
          Formation
    ---------------------------->
    <div id="formation" class="tab-content">
      <div class="flex-column cards">
        <?php foreach($cv["education"] as $formation) { ?>
          <article class="card">
            <h3><?= $formation["title"] ?></h3>
            <p><?= $formation["level"] ?> - <?= $formation["location"] ?> - <?= $formation["year"] ?></p>
          </article>
        <?php } ?>
      </div>
    </div>
    
    <!--------------------------
          Autres
    ---------------------------->
    <div id="other" class="tab-content">
      <div class="languages card">
        <h3>Langues</h3>
        <ul>
          <?php foreach ($cv["languages"] as $lang) : ?>
            <li><?= $lang["name"] ?> <?= $lang["level"] ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="soft-skills card">
        <h3>Soft skills</h3>
        <ul>
          <?php foreach ($cv["soft_skills"] as $soft_skill) : ?>
            <li><?= $soft_skill ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="hobbies card">
        <h3>Hobbies</h3>
        <ul>
          <?php foreach ($cv["hobbies"] as $hobby) : ?>
            <li><strong><?= $hobby["name"] ?></strong> (<?= implode(', ', $hobby["exemples"]) ?>)</li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>

  <script>
    // Récupère tous les onglets et les contenus
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Supprime la classe active de tous les onglets et contenus
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        // Active l’onglet cliqué
        tab.classList.add('active');

        // Active le contenu correspondant
        const target = document.getElementById(tab.dataset.tab);
        target.classList.add('active');
      });
    });
  </script>
  <?php include_once('./_partials/footer.php') ?>
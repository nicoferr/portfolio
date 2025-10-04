<?php
  $active = 'portfolio';
  $title = 'Portfolio';

  $json = file_get_contents("portfolio.json");

  $projects = json_decode($json, true);

  include_once('./_partials/header.php')
?>

<div class="wrap">
  <section class="brief">
      <h1>Portfolio</h1>
      <p>
        Diplômé d'une licence professionnelle de l'IUT de Metz en 2012, ma carrière professionnelle a été en dent de scie : difficulté à trouver une entreprise qui acceptait
        les jeunes sans expérience, ou qui acceptait de les accompagner dans le monde du travail. Des soucis de santé ne m'ont pas aidé à trouver une situation stable.
      </p>
      <p>
        J'ai utilisé mon temps libre pour découvrir différentes technologies de développement et effectuer de petits projets. Sur ce site, vous trouverez mes derniers projets en date.
      </p>
      <p>
        Je souhaite me spécialiser dans l'une de ces technologies, et suis très motivé pour en apprendre plus au niveau professionnel.
      </p>
  </section>

  <main class="cards">
    <?php foreach($projects as $project) { ?>
      <article class="card">
        <h3><?= $project["name"] ?></h3>
        <p><?= $project["description"] ?></p>
        <img src="<?= $project["image"]["path"] ?>" alt="<?= $project["image"]["alt"] ?>" title="<?= $project["image"]["alt"] ?>" />
        <div class="tags">
          <?php foreach($project["tags"] as $tag) { ?>
            <span class="tag"><?= $tag ?></span>
          <?php } ?>
        </div>
        <div class="actions">
            <a href="<?= $project["url"] ?>" class="link demo">Le site</a>
            <?php if(!empty($project["github"])) { ?>
              <a href="<?= $project["github"] ?>" class="link code">Code</a>
            <?php } ?>
        </div>
      </article>
    <?php } ?>
  </main>

</div>
<?php include_once('./_partials/footer.php') ?>

<?php
  $active = 'portfolio';
  $title = 'Portfolio';

  include_once('./_partials/header.php')

?>

<div class="wrap">
  <section class="hero">
      <h1>Portfolio</h1>
      <p>Un style moderne et équilibré, à la fois clair et avec un peu plus de personnalité.</p>
  </section>

  <main class="cards">
      <article class="card">
        <h3>LyricsNest</h3>
        <p>Site de sauvegarde de paroles, avec génération par IA possible.</p>
        <img src="screenshots/lyricsnest.png" alt="LyricsNest" title="LyricsNest" />
        <div class="tags">
            <span class="tag">Django</span>
            <span class="tag">IA</span>
            <span class="tag">Tailwind</span>
            <span class="tag">Responsive</span>
        </div>
        <div class="actions">
            <a href="https://www.lyricsnest.net" class="link demo">Le site</a>
            <a href="#" class="link code">Code</a>
        </div>
      </article>

      <article class="card">
        <h3>Un clin d'oeil pour Chiara</h3>
        <p>Sensibilisation au rétinoblastome.</p>
        <img src="screenshots/unclindoeilpourchiara.png" alt="Un clin d'oeil pour Chiara" title="Un clin d'oeil pour Chiara" />
        <div class="tags">
            <span class="tag">PHP</span>
            <span class="tag">Symfony 7</span>
            <span class="tag">EasyAdmin</span>
            <span class="tag">Responsive</span>
        </div>
        <div class="actions">
            <a href="https://www.unclindoeilpourchiara.fr" class="link demo">Le site</a>
            <a href="#" class="link code">Code</a>
        </div>
      </article>

      <article class="card">
        <h3>SHIFUMI</h3>
        <p>Jeu du shifumi en solo contre l'ordinateur ou 1 contre 1 avec un ami, deux règles possibles.</p>
        <img src="screenshots/shifumi.png" alt="SHIFUMI-RPC" title="SHIFUMI-RPC" />
        <div class="tags">
            <span class="tag">ReactJS</span>
            <span class="tag">NodeJS</span>
            <span class="tag">Socket.io</span>
            <span class="tag">Tailwind</span>
            <span class="tag">Responsive</span>
        </div>
        <div class="actions">
            <a href="https://www.shifumi-rpc.com" class="link demo">Le site</a>
            <a href="#" class="link code">Code</a>
        </div>
      </article>
  </main>

</div>
<?php include_once('./_partials/footer.php') ?>

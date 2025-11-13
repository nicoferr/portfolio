<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="code.png" type="image/x-icon">
  <title><?= $title ?> — Nicolas Ferrari</title>
  <link rel="stylesheet" href="styles/default.css?v=<?= time() ?>" />
  <?php if(isset($style) && !empty($style)) { ?>
    <link rel="stylesheet" href="styles/<?= $style ?>.css?v=<?= time() ?>" />
  <?php } ?>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <header>
        <div class="logo">Nicolas Ferrari - Développeur web</div>
        <nav>
            <a href="index.php" <?= $active == "portfolio" ? "class='active'" :  "" ?> ><i class="fa-solid fa-briefcase"></i>Portfolio</a>
            <a href="cv.php" <?= $active == "cv" ? "class='active'" :  "" ?>><i class="fa-solid fa-clipboard-list"></i>Mon CV</a>
            <a href="diplomes.php" <?= $active == "diplomes" ? "class='active'" :  "" ?>><i class="fa-solid fa-graduation-cap"></i>Mes diplômes</a>
            <a href="contact.php" <?= $active == "contact" ? "class='active'" :  "" ?>><i class="fa-solid fa-envelope"></i>Contact</a>
            <a class="linkedin" href="https://www.linkedin.com/in/nicolas-ferrari-dev"><i class="fa-brands fa-linkedin fa-3x"></i></a>
        </nav>
    </header>
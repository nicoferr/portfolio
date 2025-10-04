<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= $title ?> — Nicolas Ferrari</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <div class="logo">Nicolas Ferrari - Développeur web</div>
        <nav>
            <a href="index.php" <?= $active == "portfolio" ? "class='active'" :  "" ?> >Portfolio</a>
            <a href="cv.php" <?= $active == "cv" ? "class='active'" :  "" ?>>Mon CV</a>
            <a href="diplomes.php" <?= $active == "diplomes" ? "class='active'" :  "" ?>>Mes diplômes</a>
        </nav>
    </header>
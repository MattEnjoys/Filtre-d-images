<?php
require_once('lib/pdo.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <title>Test de filtre</title>
    <link rel="stylesheet"
          href="css/styles.css" />

    <script src="js/scripts.js"
            defer></script>
</head>

<body>
    <section id="filters">
        <div id="all">Tout</div>
        <div id="red">Rouge</div>
        <div id="black">Noir</div>
        <div id="green">Vert</div>
    </section>
    <div id="gallery">
        <?php
        foreach ($images as $image) {
            echo '<img src="' . $image["src"] . '" alt="' . $image["alt"] . '" data-' . $image["data"] . ' class="active gallery-image" />' . PHP_EOL;
        }
        ?>
    </div>
</body>

</html>
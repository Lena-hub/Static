<?php

// Affichage des convertions

require_once "Speedometer.php";


?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <h1>
<?php echo "10 km = ". Speedometer::convertKmToMiles(10)." miles" . "<br>"; ?>
    <h1>
</body>
</html>
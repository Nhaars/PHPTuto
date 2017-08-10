<!---------------------------------------------------------------------------------------------------------------------------------->
<?php include_once 'PDO.php'; ?>
<?php include_once 'connectionSQL.php'; ?>
<?php require_once 'require/menu.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->
<?php

  $query = $pdo->query("SELECT * FROM Texte WHERE id=19");
  $resultats = $query->fetch();
?>
<!---------------------------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J'apprend la programmation</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

  </head>
  <body>
<!---------------------------------------------------------------------------------------------------------------------------------->


<div class="small-4 small-centered columns">

  <div class="callout large">
  <h5>Je teste l'affichage de ma BDD!</h5>

  <p><?php echo $resultats['contend']; ?></p>
  <p>L'auteurs : <?php echo $resultats['auteurs']; ?></p>

  <a href="#">It's dangerous to go alone, take this.</a>
</div>


</div>



<!---------------------------------------------------------------------------------------------------------------------------------->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>

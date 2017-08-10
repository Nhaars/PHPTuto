<?php require_once 'PDO.php'; ?>
<!--Reception des données entrée dans ma page index----------------------------->

<?php

echo $_POST['nom']; //Reception de mon nom depuis l'index.

    $nom = $_POST ['nom']; //Transformation de mon "nom" en variable.

      if ($nom) {

    $pdo->query("INSERT INTO Test (id,pseudo) VALUES (NULL,'$nom')"); //Envoi de la variable contenant mon pseudo.

      }

      else {
        echo 'Aucun pseudo n est entrée!';
      }

 ?>

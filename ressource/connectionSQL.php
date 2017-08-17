<?php

//Selectionne les données de Mysql----------------------------------------------


      //$query = $pdo->query("SELECT * FROM Test WHERE id = 6");
      //  $resultats = $query->fetch();

      //  var_dump ($resultats);


//Inserer,modifié et supprimer des données dans MySQL via PHP-------------------


      //$pdo->query("INSERT INTO users (id,pseudo,genre,email) VALUES (NULL,'Nhaars','Homme','Gazoubo@gmail.com')"); //Ajoute donnée dans la colonne de ma bdd.
      //$pdo->query("UPDATE Test SET colonne = 'nouveau_contenu' WHERE id = 3"); //Modifie donnée dans la colonne de ma bdd.
      //$pdo->query("DELETE FROM Test WHERE id = 2"); //Supprime donnée dans la colonne de ma bdd.

//Protection d'injection SQL----------------------------------------------------


      //$pass = "lol";
      //$pass_hache = password_hash("$pass,PASSWORD_DEFAULT");

      //var_dump ($pass_hache);

      //$sql = "SELECT * FROM Test WHERE pseudo = $pdo->quote($pseudo) AND password = $pdo->quote($password)"; //Sécurise une requete SQL (String)


//Protection d'injection SQL----------------------------------------------------

 ?>

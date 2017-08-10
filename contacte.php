<?php

  if (!empty($_GET['type']) && !empty($_GET['code'])) {
    if ('error' == $_GET['type'])
    {
      if (1 == $_GET['code'])
       {
        $erreur = "Les champs ne sont pas remplis!";
        $message_erreur = $erreur;
       }

      elseif (2 == $_GET['code'])
      {
        $message_erreur = 'Une erreur a eu lieu durant l envoi de l email';
      }

      elseif ('success' == $_GET['type'])
       {
         $message_success = 'Le mail est parti!';
       }
    }
  }

 ?>
<!----------------------------------------------------------------------------->
<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<!----------------------------------------------------------------------------->

<body>

<br><br><br>


    <div class="row">



      <div class="small-4 small-centered columns"><form action="Enjoycontact.php" method="POST" class="log-in-form">



        <!---<div data-closable class="callout alert-callout-subtle alert">
            <strong>Attention!</strong><br>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
              <span aria-hidden="true">x</span>
            </button>-->


            <?php

              if (!empty($message_erreur))
              { //EMPTY vérifie le contenu de $message_erreur et affiche un message si elle est vide.
                echo '<p>' .$message_erreur. '</p>';
              }

              if (!empty($message_success))
              {
                echo '<p>' .$message_success. '</p>';
              }

              else {
                ?>



        <h4 class="text-center">Me contacter</h4>

        <label>
          <input type="text" id="sujet" name="sujet" placeholder="Sujet" required/>
        </label>

        <label>
           <textarea name="contenu" id="contenu" placeholder="Entrez votre contenu"></textarea>
        </label>


        <p><input type="submit" class="button success expanded" value="Envoi du formulaire"></input></p>
        <p class="text-center"><a href="#">Vous avez perdu votre mot de passe?</a></p>
      </form></div>
    </div>

              <?php
               }
               ?>
<!----------------------------------------------------------------------------->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

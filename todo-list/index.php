<!---------------------------------------------------------------------------------------------------------------------------------->
<?php require '/var/www/html/PHPTuto/require/menu.php'; ?>
<?php require '../todo-list/config/config.php' ?>
<?php require '../todo-list/config/database.fn.php' ?>
<?php require '../todo-list/config/todo.fn.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J'apprend la programmation</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">

  </head>
  <body>
<!---------------------------------------------------------------------------------------------------------------------------------->


<div class="small-4 small-centered columns">


  <?php
  $pdo = getPDOLink($config);

  $todos = findAllTodo($pdo);

  echo '<a href="add.php">Ajouter une tâche</a>';

  if (false !== $todos) {
      echo '<ul>';
      foreach ($todos as $todo) {
          echo '<li>';
              echo '<b>Todo id : '.$todo['id'].'</b>';
              echo '<ul>';
                  echo '<li>'.$todo['name'].'</li>';
                  echo '<li>'.$todo['content'].'</li>';
                  echo '<li><a href="edit.php?id='.$todo["id"].'">Edit</a> / <a href="delete.php?id='.$todo["id"].'">Delete</a></li>';
              echo '</ul>';
          echo '</li>';
      }
      echo '</ul>';
  } else {
      echo 'Aucune Tâche !';
  }
   ?>


</div>



<!---------------------------------------------------------------------------------------------------------------------------------->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>

  </body>
</html>

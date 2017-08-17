<!---------------------------------------------------------------------------------------------------------------------------------->
<?php include_once 'ressource/PDO.php'; ?>
<?php include_once 'ressource/connectionSQL.php'; ?>
<?php require_once 'require/menu.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->
<?php
  $query = $pdo->query("SELECT * FROM Texte ORDER BY `id` DESC LIMIT 1");
    $resultats1 = $query->fetch();
    $query = $pdo->query("SELECT * FROM Texte ORDER BY `id` DESC LIMIT 2");
      $resultats2 = $query->fetch();
      $query = $pdo->query("SELECT * FROM Texte ORDER BY `id` DESC LIMIT 3");
        $resultats3 = $query->fetch();
        $query = $pdo->query("SELECT * FROM Texte ORDER BY `id` DESC LIMIT 4");
          $resultats4 = $query->fetch();

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

<div class="row">
<div class="large-12 columns">

<h2>Un log Bac à sable<small>J'apprend PHP</small></h2>
<hr/>
</div>
</div>

<!------------------------------------------------------------------------------------------->
<div class="article-row-section">
  <div class="article-row-section-inner">

    <h2 class="article-row-section-header">News</h2>


    <a href="articles/article1.php" >
      <article class="article-row article-row-reversed">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>

        <div class="article-row-content">
          <h2 class="article-row-content-header"><?php echo $resultats1['titre']; ?></h2>

          <p class="article-row-content-description"><?php echo $resultats1['contend']; ?></p>

          <p class="article-row-content-author"><?php echo $resultats1['users']; ?></p>

          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>

        </div>
      </article>
    </a>

<!------------------------------------------------------------------------------------------->

    <a href="articles/article2.php" >
      <article class="article-row article-row-reversed">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>

        <div class="article-row-content">
          <h2 class="article-row-content-header"><?php echo $resultats2['titre']; ?></h2>

          <p class="article-row-content-description"><?php echo $resultats2['contend']; ?></p>

          <p class="article-row-content-author"><?php echo $resultats2['users']; ?></p>

          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>

        </div>
      </article>
    </a>
<!------------------------------------------------------------------------------------------->

    <a href="articles/article3.php" >
      <article class="article-row article-row-reversed">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>

        <div class="article-row-content">
          <h2 class="article-row-content-header"><?php echo $resultats3['titre']; ?></h2>

          <p class="article-row-content-description"><?php echo $resultats3['contend']; ?></p>

          <p class="article-row-content-author"><?php echo $resultats3['users']; ?></p>

          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>

        </div>
      </article>
    </a>


<!------------------------------------------------------------------------------------------->

        <a href="articles/article4.php" >
          <article class="article-row article-row-reversed">
            <div class="article-row-img">
              <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
            </div>

            <div class="article-row-content">
              <h2 class="article-row-content-header"><?php echo $resultats4['titre']; ?></h2>

              <p class="article-row-content-description"><?php echo $resultats4['contend']; ?></p>

              <p class="article-row-content-author"><?php echo $resultats4['users']; ?></p>

              <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>

            </div>
          </article>
        </a>


  </div>
</div>




</div>
</div>

<hr>

<ul class="pagination text-center" role="navigation" aria-label="Pagination" data-page="6" data-total="16">
  <li class="pagination-previous disabled">Antérieure <span class="show-for-sr">page</span></li>
  <li class="current"><span class="show-for-sr">Vous etes sur la page</span> 1</li>
  <li><a href="#" aria-label="Page 2">2</a></li>
  <li><a href="#" aria-label="Page 3">3</a></li>
  <li><a href="#" aria-label="Page 4">4</a></li>
  <li class="ellipsis" aria-hidden="true"></li>
  <li><a href="#" aria-label="Page 12">12</a></li>
  <li><a href="#" aria-label="Page 13">13</a></li>
  <li class="pagination-next"><a href="#" aria-label="Next page">Suivant <span class="show-for-sr">page</span></a></li>
</ul>




<br>
<br>
<!------------------------------------------------------------------------------------------->
<?php require 'footer.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>

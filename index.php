<!---------------------------------------------------------------------------------------------------------------------------------->
<?php include_once 'ressource/PDO.php'; ?>
<?php include_once 'ressource/connectionSQL.php'; ?>
<?php require_once 'require/menu.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->
<?php
  $query = $pdo->query("SELECT * FROM Texte WHERE id=1");
    $resultats1 = $query->fetch();

    $query = $pdo->query("SELECT * FROM Texte WHERE id=2");
      $resultats2 = $query->fetch();

      $query = $pdo->query("SELECT * FROM Texte WHERE id=3");
        $resultats3 = $query->fetch();

        $query = $pdo->query("SELECT * FROM Texte WHERE id=4");
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

<h2>//Le_blog_Bac_à_sable_de_Nhaars!//> <small>J'apprend PHP</small></h2>
<hr/>
</div>
</div>

<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->

<div class="row">

  <div class="large-9 columns" role="content">




    <article>
      <h3><a href="#">Teste d'articles</a></h3>
      <h6>Ecris par <a href="#"><?php echo $resultats1['auteurs']; ?></a> on August 12, 2017.</h6>

      <div class="row">
        <div class="large-6 columns">
          <p><?php echo $resultats1['contend']; ?></p>
        </div>


          <div class="large-6 columns">
            <img src="https://placehold.it/400x240&text=[img]"/>
          </div>

        </div>
      </article>



<hr/><!------------------------------------------------------------------------------------------->

  <article>
    <h3><a href="#">Teste d'articles</a></h3>
    <h6>Ecris par <a href="#"><?php echo $resultats2['auteurs']; ?></a> on August 12, 2017.</h6>

    <div class="row">
      <div class="large-6 columns">
        <p><?php echo $resultats2['contend']; ?></p>
      </div>


        <div class="large-6 columns">
          <img src="https://placehold.it/400x240&text=[img]"/>
        </div>

      </div>
    </article>

<hr/><!------------------------------------------------------------------------------------------->

    <article>
      <h3><a href="#">Teste d'articles</a></h3>
      <h6>Ecris par <a href="#"><?php echo $resultats3['auteurs']; ?></a> on August 12, 2017.</h6>

      <div class="row">
        <div class="large-6 columns">
          <p><?php echo $resultats3['contend']; ?></p>
        </div>


          <div class="large-6 columns">
            <img src="https://placehold.it/400x240&text=[img]"/>
          </div>

        </div>
      </article>
<hr/><!------------------------------------------------------------------------------------------->
      <article>
        <h3><a href="#">Teste d'articles</a></h3>
        <h6>Ecris par <a href="#"><?php echo $resultats3['auteurs']; ?></a> on August 12, 2017.</h6>

        <div class="row">
          <div class="large-6 columns">
            <p><?php echo $resultats3['contend']; ?></p>
          </div>


            <div class="large-6 columns">
              <img src="https://placehold.it/400x240&text=[img]"/>
            </div>

          </div>
        </article>


</div>

<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<aside class="large-3 columns">
<h5>Categories</h5>
<ul class="side-nav">
<li><a href="#">News</a></li>
<li><a href="#">Code</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Fun</a></li>
<li><a href="#">Weasels</a></li>
</ul>
<div class="panel">
<h5>Featured</h5>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
<a href="#">Read More &rarr;</a>
</div>
</aside>

</div>
<!------------------------------------------------------------------------------------------->

<footer class="row">
<div class="large-12 columns">
<hr/>
<div class="row">
<div class="large-6 columns">
<p>&copy; Copyright no one at all. Go to town.</p>
</div>
</div>
</div>
</footer>


<!---------------------------------------------------------------------------------------------------------------------------------->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>

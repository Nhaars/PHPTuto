<!---------------------------------------------------------------------------------------------------------------------------------->
<?php include_once 'PDO.php'; ?>
<?php include_once 'connectionSQL.php'; ?>
<?php require_once 'require/menu.php' ?>
<!---------------------------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

  </head>
  <body>
<!---------------------------------------------------------------------------------------------------------------------------------->


<div class="small-4 small-centered columns">


  <?php

    $mois = 8;
    $annee = 2017;
    $nombrejours = cal_days_in_month (CAL_GREGORIAN, $mois,$annee);
    $numerojours = (int) date("N" , mktime( 1, 1, 1, $mois, 1, $annee));
    $ligne = ceil(($nombrejours + (7 - ($nombrejours + 1 ))) / 7);
    $jouractuel = 1;
    $moisFR = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
    $numeromois = date("n", mktime(1,1,1,$mois,1,$annee));
    $calendrier = $moisFR [($numeromois-1)].' '.$annee;

   ?>


  <table>
  <thead>
    <tr><h3><?php echo $calendrier; ?></h3>
      <th></th>
      <th width="60">Lundi</th>
      <th width="60">Mardi</th>
      <th width="60">Mercredi</th>
      <th width="60">Jeudi</th>
      <th width="60">Vendredi</th>
      <th width="60">Samedi</th>
      <th width="60">Dimanche</th>
    </tr>
  </thead>
  <tbody>

    <?php

        for ($i=0;$i<$ligne;$i++)

          {
            echo '<tr>';
            echo '<th>Semaine ' .($i+1). '</th>';
              if (0 === $i)
              {
                  for ($d=1;$d<=7;$d++)
                  {
                    echo $d >= $numerojours ? '<td>'.
                    sprintf("%02d" ,$jouractuel++). '</td>' : '<td></td>';
                  }
              }

              else {
                  for ($d=1;$d<=7;$d++) {
                    echo $jouractuel <= $nombrejours ? '<td>'. sprintf("%02d", $jouractuel++).'</td>' : '<td></td>';
                  }
              }
echo '</tr>';
          }

     ?>


  </tbody>
</table>




</div>



<!---------------------------------------------------------------------------------------------------------------------------------->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>

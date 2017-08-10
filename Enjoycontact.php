<?php

  if (!empty($_POST['sujet']) && !empty ($_POST['contenu']))
    {
      if (mail('gazoubo@gmail.com', $_POST['sujet'], $_POST['contenu'])) //M'envoi le contenu envoyer via la page directement par mail
        {
          header('Location: index.php?success&code=1');
        }





  else
       {
         header('Location: index.php?type=error&code=2');
       }
    }



  else
  {
    header('Location: contacte.php?type=error&code=1'); //Renvoi vers contacte.php en ajoutant les variable error&code pour dire que les conditions ci plus ne sont pas remplis
  }

 ?>

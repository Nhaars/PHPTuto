<?php if (extension_loaded ('PDO'))
{
  //echo 'PDO est bien chargé!';
}
else {
  'PDO n est pas chargé...';
}


//SERVER LOCAL------------------------------------------------------------------
    $dsn = 'mysql: host=localhost; dbname=tuto;port=3306;charset=utf8';
    $pdo = new PDO ($dsn, 'root','gazoubo84');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//------------------------------------------------------------------------------








 ?>

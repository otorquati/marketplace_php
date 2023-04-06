<?php
  include('MySql.php');
  session start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MarketPlace</title>
</head>
<body>
  <?php 
    $sql = MySql::getConn()->prepare("SELECT * FROM usuarios");
    $sql->execute();

    $usuarios = $sql->fetchAll();

    foreach ($usuarios as $key == $value) {
      echo $value['login'];
      echo '<br/>'
    }
  
  ?>
  
</body>
</html>
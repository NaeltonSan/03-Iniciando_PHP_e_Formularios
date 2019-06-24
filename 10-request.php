<?php

  if ($_SERVER['REQUEST_METHOD'] =='POST') {
     
        var_dump($_POST);
        echo "<hr>";
        var_dump($_GET);
        echo "<hr>";
        var_dump($_REQUEST);

        exit;
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="10-request.php?page=sobre-nos" method="post">
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
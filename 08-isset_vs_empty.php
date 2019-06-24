<?php

//isset => o campo existe?
//empty => o campo esta vazio?

  if ($_SERVER['REQUEST_METHOD'] =='POST') {
     
    $nome1 = isset($_POST['nome1']); // false, este campo não existe
    var_dump($nome1);

    $nome  =  empty($_POST['nome']);
    var_dump($nome);

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
   
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
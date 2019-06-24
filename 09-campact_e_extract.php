<?php

  if ($_SERVER['REQUEST_METHOD'] =='POST') {

        var_dump($_POST); // é um array
     
        extract($_POST); //pega a chave do array e cria variaveis com o nome desta chave
        var_dump($nome,$idade);

        $data = compact('nome', 'idade'); //
        var_dump($data);
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
        <input type="text" name="idade">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
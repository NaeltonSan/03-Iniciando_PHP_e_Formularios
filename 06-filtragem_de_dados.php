<?php

  if ($_SERVER['REQUEST_METHOD'] =='POST') {

        $nome = $_POST['nome'] ?? null;
        $nome = trim($nome); //retira espaços
        $nome = stripslashes($nome);
        $nome = htmlspecialchars($nome, ENT_NOQUOTES);
        var_dump($nome);
        exit;
  }  
  /** htmlspecialchars
 * < => &lt
 * > => &gt
 * " => &quote
 * ' => &#039
 * & => &amp
 */
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
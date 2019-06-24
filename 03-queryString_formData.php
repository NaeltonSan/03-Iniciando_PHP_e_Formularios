<?php

  if ($_SERVER['REQUEST_METHOD'] =='POST') {
     
        echo "O formulrio foi enviado pelo: " . $_POST['nome']; // 'nome' veio do form name.
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

    <a href="/?alguem">Nome</a>

    <p>O <?php echo $_GET['alguem']; //     ?> clicou no link</p>

</body>
</html>
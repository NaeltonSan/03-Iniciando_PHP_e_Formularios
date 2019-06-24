<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_EMAIL);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        var_dump($nome);
        var_dump($idade);

        $filter_array = filter_input_array(INPUT_POST);
        var_dump($filter_array);
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
        <input type="text" name="nome"><br>
        <input type="text" name="idade">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
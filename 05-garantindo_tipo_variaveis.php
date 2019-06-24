<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   /* $idade = (isset($_POST['idade'])) ? $_POST['idade'] : null; */ // se a variavel 'idade' existir , retorna ela,
    //senão, retorna null
    // if (is_null($idade)) {
    //     die("voce não informou a sua idade");
    // }

    // null coalescing operator
    $idade = $_POST['idade'] ?? null;  
    if (is_null($idade) || $idade === '') {  // se for null ou string vazio
        die('INFORME A IDADE');
    }
    $idade = (int)$idade;
    if ($idade < 18) {
        die('Você é muito joven para o que este script determinaria');
    }
    $idade_string = (string)$idade;
    var_dump($idade_string, $idade);
    echo 'Ok, sua idade é ' . $idade;
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
    <form action="05-garantindo_tipo_variaveis.php" method="post">
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>adssadasddas</h1>

    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'sala';

    $conexao = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);

    $select = "SELECT * FROM alunos";

    $resultado = $conexao->query($select);

    $dados = $resultado->fetchAll();

    echo "<pre>";
    var_dump($dados);
    ?>
</body>

</html>
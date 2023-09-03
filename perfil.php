<?php

    session_start();
    if (!isset($_SESSION['user']))
        header('Location:login.php');

    $notas = $_SESSION['notas'];

    $palavras = 0;
    $caracteres = 0;
    foreach($notas as $nota){
        $caracteres += strlen($nota['text_editing']);
        $palavras += count(explode(' ' , $nota['text_editing']));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/perfil.css">
    <title>Perfil</title>
</head>
<body>
    <?php include("menu.php") ?>
    <h1>Seja bem vindo <?= $_SESSION['user'] ?></h1>
    <h3>Estatísticas</h3>
    <div class="container">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <h3 class="card-title">Quantidade de Notas</h3>
                <h1 class="card-text"><?= count($notas) ?></h1>
            </div>
        </div>
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <h3 class="card-title">Quantidade de Palavras</h3>
                <h1 class="card-text"><?= $palavras ?></h1>
            </div>
        </div>
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <h3 class="card-title">Quantidade de Caracteres</h3>
                <h1 class="card-text"><?= $caracteres ?></h1>
            </div>
        </div>
    </div>
</body>
</html>
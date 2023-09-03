
<?php

    session_start();
    if (isset($_SESSION['user']))
        header('Location:index.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - BN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">
</head>
    <body>
        <section class="form-section">
            <h1>Login</h1>
            <div class="form-wrapper">
                <form action="acao.php" method="post">
                    <div class="input-block">
                        <label for="login-email">Usuário</label>
                        <input type="text" id="login-email" name="user"/>
                    </div>
                    <div class="input-block">
                        <label for="login-password">Senha</label>
                        <input type="password" id="login-password" name="pass"/>
                    </div>
                    <button type="submit" value="login" class="btn btn-outline-warning" name="acao">Login</button>
                    <h6>ou</h6>
                    <a href="cadastro.html">Cadastre-se</a>
                </form>
            </div>
        </section>
    </body>
</html>

<?php
    session_start();
    if (!isset($_SESSION['user']))
    header("location:login.php");

    if(!isset($_SESSION['notas'])){
        $_SESSION['notas'] = [];
    }

    unset($_SESSION['editing']);

    if(isset($_POST['textname'])){
        $nota['textname'] = isset($_POST['textname']) ? $_POST['textname'] : "";
        $nota['text_color'] = isset($_POST['text_color']) ? $_POST['text_color'] : "";
        $nota['text_editing'] = isset($_POST['text_editing']) ? $_POST['text_editing'] : "";
        $nota['font'] = isset($_POST['font']) ? $_POST['font'] : "";
        $nota['boldinfo'] = isset($_POST['boldinfo']) ? $_POST['boldinfo'] : "";
        $nota['italicinfo'] = isset($_POST['italicinfo']) ? $_POST['italicinfo'] : "";
        $nota['underlineinfo'] = isset($_POST['underlineinfo']) ? $_POST['underlineinfo'] : "";
        $nota['fontSize'] = isset($_POST['fontSize']) ? $_POST['fontSize'] : "";
        $_SESSION['notas'][$nota['textname']] = $nota;
    }

    if(isset($_POST['remove'])){
        unset($_SESSION['notas'][$_POST['remove']]);
    }

    function generateCss($nota){
        $css = "";
        $css .= "color: " . $nota['text_color'] . ";";
        $css .= "font-family: " . $nota['font'] . ";";
        $css .= "font-weight: " . ($nota['boldinfo'] == 'true' ? 'bold' : 'normal') . ";";
        $css .= "font-style: " . ($nota['italicinfo'] == 'true' ? 'italic' : 'normal') . ";";
        $css .= "text-decoration: " . ($nota['underlineinfo'] == 'true' ? 'underline' : 'none') . ";";
        return $css;
    }

?>

<!DOCTYPE html>
  <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/indexa.css">
        <title>BN</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                
                <?php
                    include("menu.php");
                ?>
                <div class="newNote">
                    <a href="edicao.php" class="btn btn-outline-primary">Nova Nota</a>
                </div>
            </div>
            <div class="aside_left">

            </div>
            <div class="main">
                <div class="card_cards">
                <?php
                    foreach($_SESSION['notas'] as $nota) { 
                        ?>
                        <div class="card_notas">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $nota['textname'] ?></h5>
                                    <p class="card-text" id="cardtext" style="<?= generateCss($nota) ?>"><?= $nota['text_editing'] ?></p>
                                    <div class="EE">
                                        <form action="edicao.php" method="post">
                                            <input type="hidden" name="textname" value="<?= $nota['textname'] ?>">
                                            <input type="submit" value="Editar" class="btn btn-outline-warning">
                                        </form>
                                        <form action="" method="post">
                                            <input type="submit" value="Excluir" id="btnremove" class="btn btn-outline-danger">
                                            <input type="hidden" name="remove" value="<?= $nota['textname'] ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                </div>
            </div>
            <div class="aside_right">
            </div>
        </div>
    </body>
</html>
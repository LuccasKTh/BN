
<?php
    session_start();
    if (!isset($_SESSION['user']))
    header("location:login.php");

    $textname = $text_color = $text_editing = $font = $boldinfo = $italicinfo = $underlineinfo = "";
    $fontSize = 16;

    if (isset($_POST['textname'])) {
        $_SESSION['editing'] = $_POST['textname'];
    }

    if (isset($_SESSION['editing']) && isset($_SESSION['notas'][$_SESSION['editing']])) {
        $textname = $_SESSION['notas'][$_SESSION['editing']]['textname'];
        $text_color = $_SESSION['notas'][$_SESSION['editing']]['text_color'];
        $text_editing = $_SESSION['notas'][$_SESSION['editing']]['text_editing'];
        $font = $_SESSION['notas'][$_SESSION['editing']]['font'];
        $boldinfo = $_SESSION['notas'][$_SESSION['editing']]['boldinfo'];
        $italicinfo = $_SESSION['notas'][$_SESSION['editing']]['italicinfo'];
        $underlineinfo = $_SESSION['notas'][$_SESSION['editing']]['underlineinfo'];
        $fontSize = $_SESSION['notas'][$_SESSION['editing']]['fontSize'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title id="title"><?php
        echo $textname;
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/edicao.css">

</head>
    <body>
        <form action="index.php" method="post"> 
            <div class="container">
                <div class="header"> 
                    <?php
                        include("menu.php");
                    ?>
                </div>
                <div class="header_b">
                    <div class="div_text_editing">
                        <div class="biu">
                            <input type="button" name="bold" id="btnBold" onclick="textBold()" value="Bold" class="form-control">
                            <input type="button" name="italic" id="btnItalic" onclick="textItalic()" value="Italic" class="form-control">
                            <input type="button" name="underline" id="btnUnderline" onclick="textUnderline()" value="Underline" class="form-control">
                        </div>
                        <input type="hidden" name="boldinfo" id="boldinfo" value="<?= $boldinfo ?>">
                        <input type="hidden" name="italicinfo" id="italicinfo" value="<?= $italicinfo ?>">
                        <input type="hidden" name="underlineinfo" id="underlineinfo" value="<?= $underlineinfo ?>">
                    </div>
                    <div class="div_text_editing">
                        <div class="div_fontSize">

                            <input type="button" id="btnSize_less" value="-" name="btnSize_less" class="form-control">
                            <input type="text" name="fontSize" id="fontSize" value="<?= $fontSize ?>" class="form-control">
                            <input type="button" id="btnSize_more" value="+" name="btnSize_more" class="form-control">
                            
                            <input type="color" name="text_color" id="text_color_editing" value="<?= $text_color ?>" class="form-control">
                        </div>
                    </div>
                    <div class="div_text_editing">
                        <select name="font" class="form-control" id="input_font" onchange="selectFontStyle(this)">
                            <option value="Arial" name="font" style="font-family: Arial" <?php if($font == "Arial"){echo "selected";} ?>>Arial</option>
                            <option value="Comfortaa" name="font" style="font-family: Comfortaa" <?php if($font == "Comfortaa"){echo "selected";} ?>>Comfortaa</option>
                            <option value="Roboto" name="font" style="font-family: Roboto" <?php if($font == "Roboto"){echo "selected";} ?>>Roboto</option>
                            <option value="Pacifico" name="font"  style="font-family: Pacifico" <?php if($font == "Pacifico"){echo "selected";} ?>>Pacifico</option>
                            <option value="AmaticSC"name="font" style="font-family: AmaticSC" <?php if($font == "AmaticSC"){echo "selected";} ?>>AmaticSC</option>
                            <option value="Caveat" name="font" style="font-family: Caveat" <?php if($font == "Caveat"){echo "selected";} ?>>Caveat</option>
                            <option value="Lexend" name="font" style="font-family: Lexend" <?php if($font == "Lexend"){echo "selected";} ?>>Lexend</option>
                            <option value="Oswald" name="font" style="font-family: Oswald" <?php if($font == "Oswald"){echo "selected";} ?>>Oswald</option>
                            <option value="ZenDots" name="font" style="font-family: ZenDots" <?php if($font == "ZenDots"){echo "selected";} ?>>ZenDots</option>
                            <option value="Playfair" name="font" style="font-family: Playfair" <?php if($font == "Playfair"){echo "selected";} ?>>Playfair</option>
                            <option value="Nunito" name="font" style="font-family: Nunito" <?php if($font == "Nunito"){echo "selected";} ?>>Nunito</option>
                            <option value="MontserratAlternates" name="font" style="font-family: MontserratAlternates" <?php if($font == "MontserratAlternates"){echo "selected";} ?>>MontserratAlternates</option>
                            <option value="Montserrat" name="font" style="font-family: Montserrat" <?php if($font == "Montserrat"){echo "selected";} ?>>Montserrat</option>
                            <option value="Lora" name="font" style="font-family: Lora" <?php if($font == "Lora"){echo "selected";} ?>>Lora</option>
                            <option value="Lobster" name="font" style="font-family: Lobster" <?php if($font == "Lobster"){echo "selected";} ?>>Lobster</option>
                            <option value="Mountains of Christmas" name="font" style="font-family: Mountains of Christmas" <?php if($font == "Mountains of Christmas"){echo "selected";} ?>>Mountains of Christmas</option>
                        </select>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </div>
                </div>
                <div class="aside_left">

                </div>
                <div class="main">
                    <textarea name="text_editing" id="text_editing" style="color: <?= $text_color ?>; font-family: <?= $font ?>;"><?=$text_editing?></textarea>
                </div>
                <div class="aside_right">
                </div>
            </div>
        </form>
        <script src="./js/script.js"></script>
    </body>
</html>
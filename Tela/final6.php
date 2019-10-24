<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <?php
        include_once '../Base/header.php';
    ?>
    <title>Etica</title>
<body class="homeimg">
<main>
    <div class="row">
        <div class="center card col s10 offset-s1">
            <div class="row">
                <img src="../Img/enzodesesperado.png" style="height: 300px; width: auto;" alt="Imagem louca">
            </div>
            <div class="row left-align">
                <div class="col s10 offset-s1">
                    <p>Pelo fato de você não ter dado o dinheiro, o ator sai espalhando para todo mundo o que você fez... E isso te leva a falência...</p><br>
                </div>
            </div>
            <div class="row">
                <a href="dilema4.php" class="btn corPadrao2">Continuar</a>
            </div>
        </div>
    </div>
</main>
<?php
    include_once '../Base/footer.php';
?>
</body>
</html>


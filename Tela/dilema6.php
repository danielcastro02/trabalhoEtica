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
                <img src="../Img/enzodesesperado.png"  style="height: 300px; width: auto;" alt="Imagem louca">
            </div>
            <div class="row left-align">
                <div class="col s10 offset-s1">
                    <p>O ator continua com você desde que você de a parte que ganhou de maneira suja com o outro contrato para ele.<br>
                        E ai Enzo...</p><br>
                    <p><b>Você pode:</b></p>
                    <p>a) Concordar</p>
                    <p>b) Recusar</p>
                </div>
            </div>
            <div class="row">
                <a href="final5.php" class="btn corPadrao2">A</a>
                <a href="final6.php" class="btn corPadrao2">B</a>
            </div>
        </div>
    </div>
</main>
<?php
include_once '../Base/footer.php';
?>
</body>
</html>


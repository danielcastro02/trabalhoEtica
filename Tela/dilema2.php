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
                    <p>O seu ator mais experiente descobriu o que você fez e diz que vai quebrar a parceria com você!<br>
                    E o que você faz Enzo??</p><br>
                    <p><b>Você pode:</b></p>
                    <p>a) Ameaça expor o passado conturbado do ator.</p>
                    <p>b) Reconhece o erro e tenta se reconsiliar com o ator.</p>
                    <p>c) Manda ele a M%$¨#¨&.</p>
                </div>
            </div>
            <div class="row">
                <a href="dilema5.php" class="btn corPadrao2">A</a>
                <a href="dilema6.php" class="btn corPadrao2">B</a>
                <a href="final2.php" class="btn corPadrao2">C</a>
            </div>
        </div>
    </div>
</main>
<?php
include_once '../Base/footer.php';
?>
</body>
</html>


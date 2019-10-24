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
            <h5>oi eu sou o titulo</h5>
            <div class="row">
                <img src="../Img/bird.png" alt="Imagem louca">
            </div>
            <div class="row left-align">
                <div class="col s10 offset-s1">
                    <p>Em consequência das suas esolhas você foi a falência</p><br>
                    <p></p>
                    <p><b>a)</b> Fugir para o México e deiar sua dívida para sua esposa</p>
                    <p>b) Deixar a dívida e fugir com sua esposa para o México</p>
                    <p>c) Tirar um empréstimo para pagar a dívida e tenta recomeçar</p>
                </div>
            </div>
            <div class="row">
                <a href="final9.php" class="btn corPadrao2">A</a>
                <a href="final10.php" class="btn corPadrao2">B</a>
                <a href="final11.php" class="btn corPadrao2">C</a>
            </div>
        </div>
    </div>
</main>
<?php
    include_once '../Base/footer.php';
?>
</body>
</html>


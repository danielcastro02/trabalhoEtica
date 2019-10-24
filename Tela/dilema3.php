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
                    <p>O ator menos experiente aceita, ele não atua tão bem, e os produtores
                        questionam sua credibilidade</p><br>
                    <p>Tendo sua credibilidade questionada pelos produtores você:</p>
                    <p>a) Joga toda a culpa no ator e diz que não sabia que ele seria tão ruim</p>
                    <p>b) Abre mão de parte dos seus lucros para que os produtores fiquem mais calmos</p>
                </div>
            </div>
            <div class="row">
                <a href="final1.php" class="btn corPadrao2">A</a>
                <a href="dilema7.php" class="btn corPadrao2">B</a>
            </div>
        </div>
    </div>
</main>
<?php
    include_once '../Base/footer.php';
?>
</body>
</html>


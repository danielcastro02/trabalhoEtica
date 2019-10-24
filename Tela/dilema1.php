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
                    <p>Você recebe uma proposta para fazer um filme e você tem dois clientes, um deles é experiente
                        e outro não, você vai receber 10.000 reais por mês...</p><br>
                    <p><b>Você pode:</b></p>
                    <p>a) oferecer uma parte pequena aos seus clientes para que o menos experiente aceite
                        e você fique com mais dinheiro.</p>
                    <p>b) não falar com o cliente experiente e dizer ao inexperiente que você vai receber
                        5.000 e dar a ele 3.000.</p>
                    <p>c) oferecer aos seus clientes comissões normais e ver qual deles quer o trabalho.</p>
                </div>
            </div>
            <div class="row">
                <a href="dilema3.php" class="btn corPadrao2">A</a>
                <a href="dilema2.php" class="btn corPadrao2">B</a>
                <a href="dilema7.php" class="btn corPadrao2">C</a>
            </div>
        </div>
    </div>
</main>
<?php
    include_once '../Base/footer.php';
?>
</body>
</html>


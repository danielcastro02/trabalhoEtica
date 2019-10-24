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
    include_once './Base/header.php';
    ?>
    <title>Etica</title>
<body class="homeimg">
<main>
    <div class="row">
        <div class="center card col s10 offset-s1">
            <h5>Bem vindo a nossa histórinha</h5>
            <p>Olá, seja bem vindo!</p>
            <p>Agora você Enzo!</p>
            <p>Enzo é um empresário de cinama... Quase falido!</p>
            <p>Enzo é casado e não tem filhos</p>
            <p>Enzo é mexicano</p>
            <p>Enzo mora no Brasil a 12 anos</p>
            <p>Este é Enzo</p>
            <img src="./Img/enzo.png">
            <div class="row">
                <a class="btn corPadrao2" href="./Tela/dilema1.php">Continuar</a>
            </div>
        </div>
    </div>
</main>
<?php
include_once './Base/footer.php';
?>
</body>
</html>


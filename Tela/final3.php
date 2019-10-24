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
                <img src="../Img/enzomorto.png" style="height: 300px; width: auto;" alt="Imagem louca">
            </div>
            <div class="row left-align">
                <div class="col s10 offset-s1">
                    <p>Você postou tudo e teve sua vingança... Parabéns</p>
                    <p>Dias depois, você é esfaqueado pelas costas na porta de casa ao ir para o trabalho.</p>
                </div>
            </div>
            <div class="row">
                <a href="../index.php" class="btn corPadrao2">Desistir!</a>
                <a href="./dilema4.php" class="btn corPadrao2">Continuar!</a>
            </div>
        </div>
    </div>
</main>
<?php
include_once '../Base/footer.php';
?>
</body>
</html>


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
                    <p>Um certo tempo passou, parece que suas escolhas foram boas... Você se recuperou e agora tem dinheiro...</p>
                    <p>MAS! Seu ator experiente fez uma grande besteira e é pego pela polícia, ele estava dirigindo bêbado
                        e matou uma pessoa ao capotar o caro. ele liga para você pois não tem mais ninguém, você está na sala
                        de interrogatório e o policial junto do ator e do policial, policial este que curiosamente desligou o gravador.<br>
                        E ai Enzo...</p><br>
                    <p><b>Você pode:</b></p>
                    <p>a) Oferece suborno para que o ator seja liberado</p>
                    <p>b) Deixa que o ator sofra as consequências dos seus atos</p>
                </div>
            </div>
            <div class="row">
                <a href="final10.php" class="btn corPadrao2">A</a>
                <a href="final12.php" class="btn corPadrao2">B</a>
            </div>
        </div>
    </div>
</main>
<?php
include_once '../Base/footer.php';
?>
</body>
</html>


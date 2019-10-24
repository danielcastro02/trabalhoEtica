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
        <img src="../Img/gustavinho.png" id="gus" style="display: none; position: fixed; top: 50%; left: 50%; height: 150px; width: auto; z-index: 99999999;">
        <div class="center card col s10 offset-s1">
            <h5>oi eu sou o titulo</h5>
            <div class="row">
                <img src="../Img/bird.png" alt="Imagem louca">
            </div>
            <div class="row left-align">
                <div class="col s10 offset-s1">
                    <p>Mesmo com a ameaça de expor seu passado o ator experiente ainda quer quebar a parceria...</p><br>
                    <p>Tendo isso em vista você posta ou não os podres do ator na internet?</p>
                    <p>a) Sim</p>
                    <p>b) Não</p>
                    <p id="tal">b) Talvez...</p>
                </div>
            </div>
            <div class="row">
                <a href="final3.php" class="btn corPadrao2">A</a>
                <a href="final4.php" class="btn corPadrao2">B</a>
                <a href="#!" id="meybi" class="btn corPadrao2">C</a>
            </div>
        </div>
    </div>
</main>
<script>
    $("#meybi").click(
        function () {
            $("#gus").show();

            setTimeout(function(){
                $("#gus").hide();
            },50);
            setTimeout(function(){
                $("#gus").show();
            },100);
            setTimeout(function(){
                $("#gus").hide();
            },150);
            setTimeout(function(){
                $("#gus").show();
            },200);
            setTimeout(function(){
                $("#gus").hide();
            },250);
            setTimeout(function(){
                $("#gus").show();
            },300);
            setTimeout(function(){
                $("#gus").hide();
            },350);
            setTimeout(function(){
                $("#meybi").hide();
                $("#tal").hide();
            },400);
        }
    );

</script>
<?php
    include_once '../Base/footer.php';
?>
</body>
</html>


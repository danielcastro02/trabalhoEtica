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
        <p>Olá, </p>
    </div>
</div>
</main>
<?php
include_once './Base/footer.php';
?>
</body>
</html>


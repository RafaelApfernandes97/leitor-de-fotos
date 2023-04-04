<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ballet em Foco</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>



    <script src="js/script.js"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   


</head>

<body class="body">


    <header class="menu-nav">

        <div class="container">
            <nav class="navbar navbar-nav-scroll menu fixed-top">
                <div class="container-fluid">
                    <a class="  navbar-brand" style="color: rgb(255, 255, 255);" href="#"><img style="width: 170px;" src="img/logo-menu.png" alt=""></a>
                    <button style="border: none; background-color: black;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header" style="background-color: black;">
                            <a class="  navbar-brand" style="color: rgb(255, 255, 255);" href="#"><img style="width: 170px;" src="img/logo-menu.png" alt=""></a>
                            <button style="border: none; background-color: black;" type="button" class="btn btn-light" data-bs-dismiss="offcanvas" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg></button>

                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Valores
                                    </a>
                                    <ul class="dropdown-menu">
                                        <img src="img/preco.png" alt="">
                                    </ul>
                                </li>



                            </ul>

                        </div>
                        <img src="img/informacao.png" alt="">

                    </div>

                </div>
            </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    </header>
    

    <main class="main_banner">


        



        <div class="container coreografias">


           

            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 1';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=1"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 1</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 2';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=2"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 2</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 3';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=3"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 3</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 4';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=4"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 4</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 5';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=5"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 5</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 6';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=6"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 6</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 7';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=7"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 7</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 8';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=8"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 8</p> </div> </a> </div>';
            }             ?>

<?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 9';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=8"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 8</p> </div> </a> </div>';
            }             ?>
            
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 10';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=10"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 10</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 11';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=11"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 11</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 12';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=12"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 12</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 13';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=13"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 13</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 14';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=14"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 14</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 15';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=15"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 15</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 16';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=16"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 16</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 17';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=17"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 17</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 18';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=18"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 18</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 19';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=19"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 19</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 20';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=20"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 20</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 21';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=21"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 21</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 22';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=22"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 22</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 23';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=23"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 23</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 24';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=24"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 24</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 25';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=25"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 25</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 26';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=26"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 26</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 27';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=27"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 27</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 28';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=28"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 28</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 29';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=29"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 29</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 30';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=30"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 30</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 31';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=31"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 31</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 32';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=32"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 32</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 33';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=33"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 33</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 34';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=34"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 34</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 35';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=35"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 35</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 36';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=36"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 36</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 37';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=37"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 37</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 38';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=38"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 38</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 39';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=39"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 39</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 40';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=40"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 40</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 41';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=41"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 41</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 42';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=42"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 42</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 43';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=43"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 43</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 44';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=44"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 44</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 45';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=45"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 45</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 46';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=46"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 46</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 47';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=47"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 47</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 48';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=48"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 48</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 49';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=49"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 49</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 50';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=50"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 50</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 51';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=51"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 51</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 52';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=52"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 52</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 53';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=53"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 53</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 54';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=54"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 54</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 55';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=55"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 55</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 56';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=56"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 56</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 57';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=57"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 57</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 58';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=58"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 58</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 59';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=59"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 59</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 60';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=60"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 60</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 61';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=61"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 61</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 62';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=62"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 62</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 63';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=63"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 63</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 64';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=64"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 64</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 65';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=65"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 65</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 66';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=66"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 66</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 67';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=67"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 67</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 68';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=68"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 68</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 69';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=69"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 69</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 70';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=70"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 70</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 71';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=71"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 71</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 72';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=72"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 72</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 73';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=73"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 73</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 74';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=74"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 74</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 75';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=75"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 75</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 76';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=76"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 76</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 77';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=77"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 77</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 78';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=78"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 78</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 79';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=79"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 79</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 80';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=80"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 80</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 81';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=81"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 81</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 82';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=82"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 82</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 83';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=83"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 83</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 84';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=84"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 84</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 85';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=85"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 85</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 86';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=86"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 86</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 87';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=87"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 87</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 88';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=88"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 88</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 89';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=89"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 89</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 90';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=90"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 90</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 91';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=91"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 91</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 92';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=92"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 92</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 93';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=93"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 93</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 94';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=94"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 94</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 95';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=95"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 95</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 96';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=96"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 96</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 97';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=97"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 97</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 98';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=98"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 98</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 99';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=99"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 99</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 100';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=100"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 100</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 101';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=101"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 101</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 102';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=102"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 102</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 103';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=103"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 103</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 104';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=104"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 104</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 105';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=105"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 105</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 106';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=106"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 106</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 107';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=107"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 107</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 108';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=108"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 108</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 109';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=109"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 109</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 110';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=110"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 110</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 111';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=111"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 111</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 112';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=112"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 112</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 113';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=113"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 113</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 114';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=114"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 114</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 115';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=115"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 115</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 116';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=116"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 116</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 117';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=117"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 117</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 118';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=118"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 118</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 119';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=119"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 119</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 120';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=120"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 120</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 121';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=121"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 121</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 122';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=122"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 122</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 123';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=123"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 123</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 124';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=124"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 124</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 125';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=125"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 125</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 126';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=126"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 126</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 127';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=127"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 127</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 128';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=128"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 128</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 129';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=129"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 129</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 130';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=130"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 130</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 131';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=131"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 131</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 132';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=132"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 132</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 133';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=133"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 133</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 134';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=134"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 134</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 135';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=135"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 135</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 136';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=136"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 136</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 137';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=137"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 137</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 138';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=138"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 138</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 139';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=139"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 139</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 140';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=140"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 140</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 141';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=141"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 141</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 142';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=142"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 142</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 143';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=143"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 143</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 144';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=144"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 144</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 145';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=145"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 145</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 146';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=146"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 146</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 147';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=147"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 147</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 148';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=148"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 148</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 149';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=149"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 149</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 150';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=150"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 150</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 151';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=151"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 151</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 152';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=152"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 152</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 153';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=153"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 153</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 154';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=154"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 154</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 155';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=155"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 155</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 156';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=156"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 156</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 157';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=157"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 157</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 158';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=158"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 158</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 159';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=159"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 159</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 160';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=160"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 160</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 161';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=161"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 161</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 162';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=162"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 162</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 163';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=163"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 163</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 164';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=164"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 164</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 165';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=165"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 165</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 166';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=166"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 166</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 167';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=167"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 167</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 168';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=168"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 168</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 169';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=169"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 169</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 170';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=170"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 170</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 171';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=171"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 171</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 172';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=172"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 172</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 173';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=173"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 173</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 174';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=174"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 174</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 175';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=175"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 175</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 176';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=176"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 176</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 177';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=177"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 177</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 178';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=178"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 178</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 179';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=179"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 179</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 180';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=180"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 180</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 181';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=181"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 181</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 182';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=182"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 182</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 183';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=183"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 183</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 184';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=184"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 184</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 185';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=185"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 185</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 186';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=186"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 186</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 187';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=187"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 187</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 188';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=188"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 188</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 189';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=189"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 189</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 190';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=190"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 190</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 191';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=191"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 191</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 192';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=192"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 192</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 193';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=193"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 193</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 194';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=194"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 194</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 195';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=195"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 195</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 196';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=196"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 196</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 197';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=197"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 197</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 198';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=198"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 198</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 199';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=199"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 199</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 200';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=200"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 200</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 201';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=201"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 201</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 202';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=202"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 202</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 203';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=203"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 203</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 204';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=204"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 204</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 205';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=205"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 205</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 206';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=206"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 206</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 207';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=207"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 207</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 208';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=208"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 208</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 209';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=209"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 209</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 210';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=210"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 210</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 211';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=211"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 211</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 212';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=212"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 212</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 213';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=213"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 213</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 214';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=214"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 214</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 215';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=215"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 215</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 216';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=216"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 216</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 217';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=217"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 217</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 218';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=218"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 218</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 219';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=219"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 219</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 220';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=220"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 220</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 221';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=221"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 221</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 222';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=222"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 222</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 223';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=223"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 223</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 224';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=224"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 224</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 225';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=225"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 225</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 226';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=226"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 226</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 227';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=227"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 227</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 228';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=228"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 228</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 229';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=229"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 229</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 230';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=230"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 230</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 231';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=231"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 231</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 232';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=232"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 232</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 233';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=233"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 233</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 234';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=234"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 234</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 235';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=235"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 235</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 236';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=236"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 236</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 237';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=237"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 237</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 238';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=238"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 238</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 239';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=239"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 239</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 240';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=240"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 240</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 241';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=241"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 241</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 242';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=242"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 242</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 243';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=243"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 243</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 244';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=244"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 244</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 245';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=245"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 245</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 246';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=246"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 246</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 247';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=247"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 247</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 248';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=248"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 248</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 249';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=249"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 249</p> </div> </a> </div>';
            }             ?>
            <?php $caminho = 'COREOGRAFIAS/COREOGRAFIA 250';
            $arquivos = scandir($caminho);
            $imagens = array();
            foreach ($arquivos as $arquivo) {
                $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
                if ($arquivo != '.' && $arquivo != '..' && in_array($extensao, array('jpg', 'jpeg', 'png', 'gif'))) {
                    $imagens[] = $arquivo;
                }
            }
            if (!empty($imagens)) {
                $imagem_aleatoria = $imagens[array_rand($imagens)];
                echo  '<div class="card_coreografias"> <a class="link" href="coreografia.php?coreografia=250"> <img src="' . $caminho . '/' . $imagem_aleatoria . '" class="img-card" > <div class="card_titulo"><p                                class="nome_pasta">COREOGRAFIA 250</p> </div> </a> </div>';
            }             ?>






        </div>



    </main>

    <footer>
        <div class="footer">
            <div class="titulo_footer">
                <img style="width: 170px;" src="img/logo-menu.png" alt="">

            </div>

            <div class="link_footer">
                <a class="link-footer" href="https://wa.me/5511986879746"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg></a>
                <a class="link-footer" href="https://www.instagram.com/balletemfoco/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a>

            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
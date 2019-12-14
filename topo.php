<?php
session_start();
if (!isset($_SESSION['nome'])) { } else {
    $nome_usuario = $_SESSION['nome'];
    $id_usuario = $_SESSION['id_usuario'];
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Webuild </title>
    <link href="icon/css/fontawesome.css" rel="stylesheet">
    <link href="icon/css/brands.css" rel="stylesheet">
    <link href="icon/css/solid.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--<script type="text/javascript" src="js/script.js">-->

    </script>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-menu">
        <div class="container ">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo_webuild.png" class="" width="150" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon">
                </span> </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown  ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="categorias.php"> Categorias
                            </a>
                            <a class="dropdown-item" href="#"> Profissões </a>
                            <div class="dropdown-divider">
                            </div>
                            <?php if ($nome_usuario) { ?>
                                <a class="dropdown-item" href="perfil_cadastro.php"> Minha conta
                                </a>
                            <?php } ?>
                        </div>
                    </li>


                </ul>
                <!--Search-->
                <form method="GET" action="profissionais.php" id="procurar_profissional" class=" col-6 form-inline ml-6 mx-lg-5">
                    <span class="input-group-addon">
                        <input class="form-control mr-sm-2  " type="search" id="search" name="pesquisa" placeholder="Qual profissional você precisa?" aria-label="Pesquisar " required>

                        <button type="submit" id="btn-procurar" name="btn_procurar" class="btn-search">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </span>
                </form>


                <!--fim Search-->

                <div class=" d-flex justify-content-end  w-100">

                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown  ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <?php if ($nome_usuario) {
                                    echo $nome_usuario;
                                } else {
                                    echo "Visitante";
                                }
                                ?>


                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                                <?php if ($nome_usuario) { ?>
                                    <a class="dropdown-item" href="perfil_cadastro.php"> Minha conta </a>
                                    <a class="dropdown-item" href="endereco"> Perfil </a>
                                    <a class="dropdown-item" href="#"> Endereços </a>
                                    <a class="dropdown-item" href="#"> Serviços </a>



                                <?php } ?>




                                <div class="dropdown-divider"> </div>
                                <?php if ($nome_usuario) { ?>
                                    <a class="dropdown-item" href="perfil_cadastro.php"> Minha conta </a>
                                <?php } ?>
                            </div>
                        </li>


                    </ul>
                    <ul class="navbar-nav mr-3">

                        <li class="nav-item ">
                            <?php if ($nome_usuario) { ?>
                                <a class="btn-sm text-white px-4 py-2 mx-sm-2 rounded-pill btn-orange " href="sair.php">
                                    Sair

                                </a> <?php
                                        } else {  ?>
                                <a class="btn-sm text-white px-4 py-2 mx-sm-2 rounded-pill btn-orange " href="login.php">
                                    entrar

                                </a> <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!--modal
    <div class="row " id="modal">
        <div class="modal-box" id='resultado-pesquisa'>

        </div>
    </div>

    <p class="result" style="display:none;"> resultado</p>-->
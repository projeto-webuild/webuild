<?php
/**
 * auhor: helenilson Oliveira
 * data : 11/12/2019
 *
 * Descrition: Tela de login
 *
 */

// session_start();
// $_SESSION['horario'] = time();
// $_SESSION['visitante'] = md5(time());
// $_SESSION['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
// echo '<br> Request ';
// var_dump($_SESSION);
// echo '<br/> ' . time();
// echo '<br/> ';
// $timezone = new DateTimeZone('America/Sao_Paulo');
// $agora = new DateTime('now', $timezone);

// $date = date('d-m-Y H:i:s ');
// echo $date;
// // echo $date->format('d-m-Y H:i:s ');

// echo '<br> Request ';
// var_dump($_REQUEST);
// echo '<br> Server ';
// var_dump($_SERVER);
// echo '<br> Request ';
// var_dump($_SESSION);

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="icon/css/fontawesome.css" rel="stylesheet">
    <link href="icon/css/brands.css" rel="stylesheet">
    <link href="icon/css/solid.css" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <title>Welbuild | conectando pessoas para um bom serviços</title>


</head>

<body>
    <!--Menu da pagina-->
    <?php
require_once "topo.php";
?>
    <div class="container  mb-sm-1">

        <div class="row ">
            <div class="col-sm">

                <div class="py-2c h-100">
                    <div class="p-md-5 py-sm-1">

                        <h1 class="logomarca"> WE BUILD</h1>
                        <div class="descrit">
                            <p class="text-justify"> Conecta pessoas que querem um profissional para uma piquena ou
                                grande reforma ou para profissionais, ofertando
                                serviços no setor de construção civil criando uma oportunidade de trabalho. </p>

                            <p class="  text-justify" id="descricao-webuild">

                                <br>
                                voçê e um profissional? <a href="cadastrar.php">cadastre-se</a>
                            </p>
                        </div>
                        <div class="text-center">
                            <a class="btn-sm text-white px-4 py-2 my-0 text-center rounded-pill btn-orange " id="btn-d"
                                onclick='viewDescription()'> Saiba mais.</a>
                        </div>
                    </div>

                    <!-- Formulario principal da pesqisa Search
                    <div class="form-search ">

                        <form method="GET" action="search.php" id="procurar_profissional" class="col-md-10 col-sm-10 form-inline  f-search">
                            <span class="input-group-addon">
                                <input class="form-control  f-campo-serch" type="search" id="search" name="pesquisa" placeholder="Qual profissional você precisa?" aria-label="Pesquisar " required>

                                <button type="submit" id="btn-procurar" name="btn_procurar" class="btn-search f-btn-search">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </span>
                        </form>
                    </div>
                    fim formulario Search-->

                </div>



            </div>
            <div class="col-sm">
                <figure>
                    <img class="w-100" src="img/arte-pg-inicial.png" alt="">
                </figure>
            </div>


        </div>
    </div>
    <div class="container-fluid">
        <!--Conteudo principal-->
        <main>
            <div class="row ">
                <div class="col-md-12  containe-icon ">

                    <div class="estilo  " id="div1">
                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-pintor.svg" alt="Profissão pintor">
                            <p>Pintor</p>
                        </div>
                    </div>
                    <div class="estilo" id="div2">


                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-arquiteto.svg" alt="Profissão Arquiteto">
                            <p>Arquiteto</p>
                        </div>


                    </div>
                    <div class="estilo" id="div3">

                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-eletricista.svg" alt="Profissão Eletrici
                            sta">
                            <p>Eletricista</p>

                        </div>


                    </div>


                    <div class="estilo" id="div4">

                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-encanador.svg" alt="Profissão Encanador">
                            <p>Encanador</p>
                        </div>

                    </div>

                    <div class="estilo" id="div5">

                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-marceneiro.svg" alt="Profissão Marceneiro">
                            <p>Marceneiro</p>
                        </div>
                    </div>

                    <div class="estilo" id="div6">

                        <div class="icon_profissionais">
                            <img src="icon/icones-profissoes/icon-profissao-montador.svg"
                                alt="Profissão Montador de moveis">
                            <p>Montador</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap ml-25 ml-sm-25 justify-content-center  ">
                        <div class="estilo d-inline-block " id="div1">
                            <div class="icon_profissionais">
                                <img src="icon/icones-profissoes/icon-profissao-pedreiro.svg" alt="Profissão Pedreiro">
                                <p>Pedreiro</p>
                            </div>
                        </div>
                        <div class="estilo" id="div2">

                            <div class="icon_profissionais">
                                <img src="icon/icones-profissoes/carpinteiro.svg" alt="Profissão Carpinteiro">
                                <p>Carpinteiro</p>
                            </div>

                        </div>
                        <div class="estilo" id="div3">

                            <div class="icon_profissionais">
                                <img src="icon/icones-profissoes/icon-profissao-arquiteto.svg" alt="Profissão pintor">
                                <p>Pintor</p>
                            </div>

                        </div>

                        <div class="estilo" id="div4">

                            <div class="icon_profissionais">
                                <img src="icon/icones-profissoes/icon-profissao-arquiteto.svg" alt="Profissão pintor">
                                <p></p>
                            </div>

                        </div>

                        <div class="estilo" id="div5">
                            <div class="icon_profissionais">
                                <img src="icon/icones-profissoes/icon-profissao-arquiteto.svg" alt="Profissão pintor">
                                <p></p>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </main>
    </div>
    <!--rodape-->
    <footer>


    </footer>
    <script src="js/jquery.js">
    </script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
<script>
function viewDescription() {
    var des = document.querySelector('#descricao-webuild');
    var btn = document.querySelector("#btn-d");

    if (des.style.visibility == "visible") {
        des.style = "visibility:hidden;transition: height .4s ease; -webkit-transition: height .4s;height:0;";
        btn.innerText = "Saiba mais.";

    } else {
        des.style = ";visibility:visible;transition: height .4s ease; -webkit-trasition: height .4s;height:50px;";
        btn.innerText = "Fechar";



    }
}
</script>

</html>
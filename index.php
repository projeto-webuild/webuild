<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <title>Welbuild | conectando pessoas para um bom serviços</title>

</head>

<body>
    <!--Menu da pagina-->
    <?php require_once("topo.php"); ?>
    <!--slide-->
    <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-end " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="row  p-0 m-0 d-flex  border">
            <div class="col-6 p-5">
                <img src="" alt="">
                <p class="p-2">O site WeBuild ajuda a conectar oferta e demanda no setor de obras, reformas
                    e serviços.Oferecendo aos usuários a possibilidade de buscar profissionais
                    da área de construção civil da sua região para que possam ser contratado
                </p>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
            </div>
            <div class="col-md-6">

                <div class="carousel-inner    ">



                    <div class="carousel-item  active  ">

                        <img class="d-block  w-100" src="img/ilustracao-pag-incial.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/ilustracao-pag-incial.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/ilustracao-pag-incial.png" alt="Terceiro Slide">
                    </div>
                </div>


                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
    <!--fim slide-->
    <!--Conteudo principal-->
    <main>
        <div class="row border">
            <div class="col-md-12 d-flex circulos border">

                <div class="estilo d-inline-block " id="div1">
                    <div class="degrade"></div>
                </div>
                <div class="estilo" id="div2">



                </div>
                <div class="estilo" id="div3">



                </div>

                <div class="estilo" id="div4">



                </div>

                <div class="estilo" id="div5">


                </div>

                <div class="estilo" id="div6">


                </div>

            </div>
        </div>
    </main>

    <!--rodape-->
    <footer>


    </footer>
    <script src="js/jquery.js">
    </script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
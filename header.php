<!DOCTYPE html lang="pt-br">
<html>
    <head>

        <title>Auto Escola</title>
        <meta charset="UTF-8">
        <meta name="description" content="Sistema de Auto Escola">
        <meta name="keywords" content="Auto Escola, carro, moto, escola, dirigir, instrutor, direção, caminhão">
        <meta name="author" content="Francisco César, Pedro Henrique">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!--Arquivos CSS-->
        <link rel="stylesheet" href="<?php echo DIRCSS . "styles.css" ?>">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    </head>
    <?php
    $atual = "";
    ?>   
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">


                    <?php
                    if ($atual === "inicio") {
                        ?>


                        <li class="nav-item ">
                            <a class="nav-link active" href="../../../index.php">Início <span class="sr-only">(current)</span></a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="../../../index.php">Início <span class="sr-only">(current)</span></a>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if ($atual === "sobre") {
                        ?>

                        <li class="nav-item active">
                            <a class="nav-link" href="../../../pages/sobre.php">Sobre</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="../../../pages/sobre.php">Sobre</a>
                        </li>
                        <?php
                    }
                    ?>



                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>

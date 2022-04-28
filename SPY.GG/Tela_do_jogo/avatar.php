<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="avt1.css">
    <link rel="shortcut icon" href="logoR.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unlock&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6deb869c6a.js" crossorigin="anonymous"></script>
    <title>Avatar</title>
</head>

<body id="body">
    <div class="cima">
        <button class="volt"><i class="fa-solid fa-arrow-left-long"></i></button>
        <button class="conf"><i class="fa-solid fa-gears"></i></button>
    </div>

    <h1>Escolha seu Avatar!</h1>


    <div id="box">
        <form action="" method="post">
            <button value="d1" id="d1" name="d1">
                <div class="box1">

                    <img src="../Tela_do_jogo/detetives/dtt.svg" alt="detetive">
                    <legend>James Carriel </legend>
                </div>
            </button>
            <button value="d2" id="d2" name="d2">
                <div class="box1">

                    <img src="../Tela_do_jogo/detetives/dtt1.svg" alt="detetive2">
                    <legend>James Almeida</legend>
                </div>
            </button>
            <button value="d3" id="d3" name="d3">
                <div class="box1">
                    <img src="../Tela_do_jogo/detetives/dtt2.svg" alt="detetive3">
                    <legend>James Neri</legend>
                </div>
            </button>
            <button value="d4" id="d4" name="d4">
                <div class="box1">
                    <img src="../Tela_do_jogo/detetives/dtt3.svg" alt="detetive4">
                    <legend>James Mibe</legend>
                </div>
            </button>
        </form>
        <div class="slide">
            <button class="left" onclick="plusDivs(-1)"><i class="fa-solid fa-syringe"></i></button>
            <button class="right" onclick="plusDivs(+1)"><i class="fa-solid fa-syringe"></i></button>
        </div>

    </div>
    <?php

    if (isset($_POST['d1'])) {
        $conexao = mysqli_connect("localhost", "root", "", "projeto");
        $detetive = "1";

        $nome = $_SESSION['nome'];
        $selt = "SELECT * FROM usuario WHERE nome ='$nome'";
        $resultSelt = mysqli_query($conexao, $selt);

        while ($linha = mysqli_fetch_array($resultSelt)) {
            $id = $linha['id'];
            $_SESSION['IdUsuario'] = $id;
            $sql = "UPDATE usuario SET detetive = $detetive WHERE id = $id";
            $result = mysqli_query($conexao, $sql);


            if ($result) {
    ?>
                <div class="cont">
                <button class="p"><a href="tela_jogo.php"> Play</a>
                    </button>
                </div>
            <?php
            } else {
                echo "erro";
            }
        }
    }


    if (isset($_POST['d2'])) {
        $conexao = mysqli_connect("localhost", "root", "", "projeto");
        $detetive = "2";

        $nome = $_SESSION['nome'];
        $selt = "SELECT * FROM usuario WHERE nome ='$nome'";
        $resultSelt = mysqli_query($conexao, $selt);

        while ($linha = mysqli_fetch_array($resultSelt)) {
            $id = $linha['id'];
            $_SESSION['IdUsuario'] = $id;
            $sql = "UPDATE usuario SET detetive = $detetive WHERE id = $id";
            $result = mysqli_query($conexao, $sql);


            if ($result) {
            ?>
                <div class="cont">
                <button class="p"><a href="tela_jogo.php"> Play</a>
                    </button>
                </div>
            <?php
            } else {
                echo "erro";
            }
        }
    }

    if (isset($_POST['d3'])) {
        $conexao = mysqli_connect("localhost", "root", "", "projeto");
        $detetive = "3";

        $nome = $_SESSION['nome'];
        $selt = "SELECT * FROM usuario WHERE nome ='$nome'";
        $resultSelt = mysqli_query($conexao, $selt);

        while ($linha = mysqli_fetch_array($resultSelt)) {
            $id = $linha['id'];
            $_SESSION['IdUsuario'] = $id;
            $sql = "UPDATE usuario SET detetive = $detetive WHERE id = $id";
            $result = mysqli_query($conexao, $sql);


            if ($result) {
            ?>
                <div class="cont">
                <button class="p"><a href="tela_jogo.php"> Play</a>
                    </button>
                </div>
            <?php
            } else {
                echo "erro";
            }
        }
    }

    if (isset($_POST['d4'])) {
        $conexao = mysqli_connect("localhost", "root", "", "projeto");
        $detetive = "4";

        $nome = $_SESSION['nome'];

        $selt = "SELECT * FROM usuario WHERE nome ='$nome'";
        $resultSelt = mysqli_query($conexao, $selt);

        while ($linha = mysqli_fetch_array($resultSelt)) {

            $id = $linha['id'];
            $_SESSION['IdUsuario'] = $id;
            $sql = "UPDATE usuario SET detetive = $detetive WHERE id = $id";
            $result = mysqli_query($conexao, $sql);




            if ($result) {

            ?>
                <div class="cont">
                    <button class="p"><a href="tela_jogo.php"> Play</a>
                    </button>
                </div>
    <?php


            } else {
                echo "erro";
            }
        }
    }
    ?>



    <script>
        //Aqui começa o Java Script

        var slide = 1;
        showDivs(slide);

        function plusDivs(n) {
            showDivs(slide += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("box1");
            var y = document.getElementById("body");
            var fundos = ['linear-gradient(to bottom right, #19516b, #000000)',
                'linear-gradient(to bottom right, #591956, #000000)', 'linear-gradient(to bottom right, #714e29, #000000)',
                'linear-gradient(to bottom right, #856f5e, #000000)'
            ];
            if (n > x.length) {
                slide = 1
            }
            if (n < 1) {
                slide = x.length
            };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slide - 1].style.display = "block";
            y.style.backgroundImage = fundos[slide - 1];

        }
    </script>
</body>

</html>
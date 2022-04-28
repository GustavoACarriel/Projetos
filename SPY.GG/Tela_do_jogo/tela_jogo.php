<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_tela_jogo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>M's murder</title>
</head>

<body>
    <div class="container_all">
        <header>
            <h1>M's murder</h1>
            <div class="image">
                <a href="#"><img src="img/icons8-storytelling-30.png" alt=""></a>
                <a href="#"><img src="img/person_black_24dp.svg" alt=""></a>
            </div>
        </header>
        <section class="sct_dialogo">


            <?php

            session_start();
            // $sqlD = "SELECT * FROM dialogos";
            // $relustD = mysqli_query($conexao, $sqlD);
            $IdNovo = 1;
            function comecar($IdNovo)
            {


                $conexao = mysqli_connect("localhost", "root", "", "projeto");
                $sqlD = "SELECT * FROM dialogos WHERE IdDialogo = $IdNovo";
                $relustD = mysqli_query($conexao, $sqlD);
                $pers = 4;
                $sqlP = "SELECT * FROM personagens WHERE Idpersonagem =$pers ";
                $resultP = mysqli_query($conexao, $sqlP);
                while ($linhaJogo = mysqli_fetch_array($relustD)) {

                    while ($linhaP = mysqli_fetch_array($resultP)) {

                        $_SESSION['idDialogo'] = $linhaJogo['IdDialogo'];


            ?>

                        <div class=" container box1 ">
                            <form action='' method='post'>
                                <img src="img/<?php echo $linhaP['Fotopersonagem']; ?>" width="100px" alt="">
                                <label for=""><?php echo $linhaJogo['dialogo']; ?></label>
                                <input type='submit' name='comecar' id='comecar' value='comecar'>
                            </form>
                        </div>

                        <form action="tela_jogo.php" method="post">
                            <input type="submit" name="continuar" id="continuar" value="continuar">
                        </form>
            <?php

                        if (isset($_POST['comecar'])) {
                            $_SESSION['IdNovo'] = $IdNovo;
                            $_SESSION['pers'] = $pers;
                        }
                    }
                }
            }


            comecar($IdNovo);


            function continuar()
            {
                $conexao = mysqli_connect("localhost", "root", "", "projeto");
                $_SESSION['IdNovo']++;
                $IdC = $_SESSION['IdNovo'];

                $sqlD = "SELECT * FROM dialogos WHERE IdDialogo = $IdC";
                $resultD = mysqli_query($conexao, $sqlD);
                while ($linhaC = mysqli_fetch_array($resultD)) {

                    $ccc = $linhaC['IdPers'];
                    $sqlP = "SELECT * FROM personagens WHERE Idpersonagem = $ccc";
                    $resultP = mysqli_query($conexao, $sqlP);


                    while ($linhaP = mysqli_fetch_array($resultP)) {
                        echo $IdC . "/12 <br>";
                        echo " <img src='img/" . $linhaP['Fotopersonagem'] . " 'width='100px'>";
                        echo $linhaC['dialogo'];
                        // echo"<script>alert('ok');</script>";


                        if ($IdC == 13) {

                            header('location:' . "question.php");
                        }
                    }

                    // if($IdC =10){
                    //     echo"ssss";
                    // }
                }
            }

            continuar();
            ?>


        </section>
        <section class="sct_palpite">
            <div class="suspeitos">
                <div class="div_personagem">
                    <img src="img/Ana.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Fred.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Joao.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Joseph.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Meredith.svg" alt="">
                    <h4></h4>
                </div>
            
            </div>


            <div class="inocentes">
                <div class="div_personagem">
                    <img src="img/Ana.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Fred.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Joao.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Joseph.svg" alt="">
                    <h4></h4>
                </div>
                <div class="div_personagem">
                    <img src="img/Meredith.svg" alt="">
                    <h4></h4>
                </div>
           
            </div>
        </section>
    </div>
</body>

</html>
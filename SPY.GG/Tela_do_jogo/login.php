<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main>
        <h1>Login</h1>
        <div class="container">
            <div class="box">
            <form name="login" action="" method="post">
                    <h4>Email</h4>
                    <input type="email" id="email" name="email">
                    <h4>Senha</h4>
                    <div>
                        <input type="password" id="senha" name="senha">
                        <img src="olho-branco.svg" alt="" onclick="mostrar()" id="image" width="20px">
                    </div>
                    <button onclick="cadastrar()" name="logar" id="logar">Logar</button>
                </form>
            </div>
        </div>
        <div class="cad-log">
            <div>
                <h3>Não possui Cadastro?</h3>
                <a href="cadastro.php">Cadastrar</a>
            </div>
        </div>
    </main>
</body>
</html>
<script src="mostrar-senha.js"></script>
<script src="verificar-senhas.js"></script>

<?php
if (isset($_POST["logar"])) {
    $conexao = mysqli_connect('localhost', 'root', '', 'projeto');

    $Email = $_POST["email"];
    $Senha = $_POST["senha"];

    $sql = " SELECT * FROM cadastro WHERE Email='$Email'";
    
    $result = mysqli_query($conexao, $sql);
    $numlinha = mysqli_num_rows($result);

    if ($numlinha > 0) {
        while ($linha = mysqli_fetch_array($result)) {

            if ($Email == $linha['Email'] ){

            if ($Senha == $linha['Senha']){
                header('location:'."../Teladojogo/tela_jogo.php");
            }else{
                echo "senha incorreta";
            }

        }else{
            echo "não esta logado";
        }
    }
    }else{
        echo "email não registrado";
    }
}
 ?>
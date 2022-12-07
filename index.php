<?php
     if(isset($_POST['submit']))
     {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,cep,endereco,numero,bairro,cidade,estado) 
        VALUES ('$nome','$email','$cep','$endereco','$numero','$bairro','$cidade','$estado')");
     }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\style.css">
    <script src="index.js" type="module" defer></script>
    <title>Cadastro</title>
</head>
<body>
    <form action="" method="POST">
    <main class="container">
        <h1 class="title">Cadastro</h1>
        <div class="row">
            <div class="inputbox">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Nome</label>
            </div>
            <div class="inputbox">
                <input type="text" name="email" id="email"  required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="inputbox">
                <input type="number" name="cep" id="cep"  required>
                <label for="cep">CEP</label>
            </div>
            <div class="inputbox">
                <input type="text" name="endereco" id="endereco"  required>
                <label for="endereco">Endereço</label>
            </div>
            <div class="inputbox">
                <input type="text" name="numero" id="numero"  required>
                <label for="numero">Número</label>
            </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
            <div class="inputbox">
                <input type="text" name="bairro" id="bairro"  required>
                <label for="bairro">Bairro</label>
            </div>
            <div class="inputbox">
                <input type="text" name="cidade"id="cidade"  required>
                <label for="cidade">Cidade</label>
            </div>
            <div class="inputbox">
                <input type="text" name="estado" id="estado"  required>
                <label for="estado">Estado</label>
            </div>
        </div>
        <div class="row">
            <button type="submit" name="submit" id="btn">Salvar</button>
        </div>
    </main>
    </form>
    <footer>
      Vitor Cristino   &#169 2022
    </footer>
</body>
</html>
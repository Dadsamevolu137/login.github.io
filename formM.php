<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="unnamed.ico">
    <link rel="stylesheet" href="css/formM.css">
    <title>Login</title>
</head>
<body background="image.webp">
    <div class="Login">
        <div class="container">
        <fieldset>
            <div class="log">
            <h1>Faça seu login</h1>
                <div class="nome">
                    <input type="text" name="Nome" id="Nome" placeholder="Nome" class="inpUser">
                </div>
                <div class="email">
                    <input type="text" name="Email" id="Email" placeholder="Email" class="inpUser">
                </div>
                <div class="telefone">
                    <input type="text" name="Telefone" id="Telefone" placeholder="Telefone" class="inpUser">
                </div>
                <div class="cpf">
                    <input type="varchar" placeholder="CPF" name="Cpf" id="Cpf" class="inputUser">
                </div>
                <div class="cep">
                    <input type="text" name="Cep" id="Cep" placeholder="CEP" class="inpUser">
                </div>
                <h3>Gênero</h3>
                <div class="genero">
                        <select name="genero" id="Genero">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="P">Prefiro não dizer</option>
                        </select>
                </div>
                <div class="enviar">
                    <br>
                    <form enctype="multipart/form-data" action="" method="post">                            
                        <input type="submit" name="submit" id="submit">
                        <br>
                        </form>
                    </div>
                </div>
        </fieldset>
        </div>
    </div>
</body>
</html>
<?php
        if(isset($nome) || isset($email) || isset($telefone) || isset($cpf) || isset($cep) || isset($genero)){

        include_once('ConfigM.php');
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $telefone = $_POST['Telefone'];
        $cpf = $_POST['Cpf'];
        $cep = $_POST['Cep'];
        $genero = $_POST['Genero']; 

        $resulta = mysqli_query($conexao, "INSERT INTO login(Nome,Email,Telefone,Cpf,Cep,Genero)
        VALUES('$nome','$email','$telefone','$cpf','$cep','$genero')");
    }
?>
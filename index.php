<?php
if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repSenha = $_POST['repSenha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,repSenha)
VALUES('$nome','$email','$senha','$repSenha')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro 🔥</title>
</head>

<body>
    <div class="content">

        <form id="form" action="index.php" method="post">

            <div>
                <h1>Cadastro de usuário 🔥</h1>
                <input type="text" name="nome" placeholder="Digite seu nome" class="inputs required" id="nome" required oninput="nameValidate()">
                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>

            <div>
                <input type="email" name="email" placeholder="Digite seu melhor email" class="inputs required" id="email" required oninput="emailValidate()">
                <span class="span-required">Digite um email válido</span>
            </div>

            <div>
                <input type="password" name="senha" placeholder="Senha" class="inputs required" id="senha" required oninput="mainPasswordValidate()">
                <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>

            <div>
                <input type="password" name="repSenha" placeholder="Repita a sua senha" class="inputs required" id="repSenha" required oninput="comparePassword()">
                <span class="span-required">Senhas devem ser compatíveis</span>
            </div>

            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
            </div>

            <button type="submit" name="submit" id="submit" onclick="logar(); return true">Enviar</button>

    </div><br>

    </form>

    </div>

</body>
<script src="java.js"></script>

</html>
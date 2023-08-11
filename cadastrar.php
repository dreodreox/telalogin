<?php
 require_once('conexao/classes/Usuario.php');
 require_once('conexao/conexao.php');

    $database = new Conexao ();
    $db = $database -> getConnection();
    $usuario = new Usuario($db);

    if (isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        if($usuario->cadastrar($nome,$email,$senha,$confSenha)){
            echo "Cadstro realizado com sucesso";
    }else{
            echo "Erro ao cadstrar!";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <label for="">Nome de usuario</label>
        <input type="text" name="nome">
        <label for="">Email</label>
        <input type="email" name="Email">
        <label for="">Senha</label>
        <input type="password" name = "senha">
        <label for="">Confirmar senha</label>
        <input type="password" name ="confsenha">
        
        <button type = "submit" name="cadastrar">Cadastrar</button>


    </form>
    <a href="index.php">Voltar para tela de login</a>
</body>
</html>
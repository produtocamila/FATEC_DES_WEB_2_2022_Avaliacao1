<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'fatec' and $_POST['senha'] == 'araras'){
        $_SESSION['logado'] = TRUE;
        $_SESSION["usuario"] = 'Orlando Saraiva';
         header("location: inicio.php");
    } else {
        $_SESSION['logado'] = FALSE;
    }
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadsatro de títulos</title>
    <style>
         body{ font: 16px sans-serif; }
    </style>
</head>
<body>
    <div class="">
        <h3>Gestão de conteúdo Netflix</h3>
        <h1>Cadastro de títulos</h1>
        <p>Digite seu nome de usuário e senha para acessar o sistema.</p>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label class="campo">Usuário:</label><br>
                <input class="resposta" type="text" name="usuario" value="">
            </div><br>    
            <div>
                <label class="campo">Senha:</label><br>
                <input class="resposta" type="password" name="senha" value="">
            </div><br>
            <div class="cta">
                <input type="submit" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>
<?php
session_start();
if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
if (isset($_GET['titulo'])
    and isset($_GET['ano'])
    and isset($_GET['classificacao-indicativa'])) {
    $_GET['titulo'];
    $_GET['ano'];
    $_GET['classificacao-indicativa'];
    
   $filename = "tituloscadastrados.txt";
   if(!file_exists("tituloscadastrados.txt")){
       $handle = fopen("tituloscadastrados.txt", "w");
   } else {
       $handle = fopen("tituloscadastrados.txt", "a");
   }
   fwrite($handle, $_GET['titulo']."|".$_GET['ano']."|".$_GET['classificacao-indicativa']."\n");
   fflush($handle);
   fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadsatro de títulos</title>
    <style>
         body{font: 16px sans-serif;}
         .campo{font-size: 14px; font-weight: bold;}
         .resposta{height: 24px; width: 240px;}
         .cta{font-size: 16px;}
    </style>
</head>
<body>
    <div class="">
        <h3>Boas vindas, <?php echo ($_SESSION["usuario"]) ?></h3>
        <h1>Cadastro de títulos</h1>
        <p>Insira os dados nos campos abaixo. Cadastre um título de cada vez. </p><br>
        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="get">
        <div>
            <label class="campo">Título:</label><br>
            <input class="resposta" type="text" name="titulo" value="">
        </div><br>
        <!-- <div>
            <label class="campo">Tipo:</label><br>
            <input type="radio" id="serie" name="serie" value="serie"> <label for="serie">Série</label><br>
            <input type="radio" id="filme" name="filme" value="filme"> <label for="filme">Filme</label><br>
        </div><br> -->
        <div>
            <label class="campo">Ano:</label><br>
            <input class="resposta" type="text" name="ano" value="">
        </div><br>
        <div>
            <label class="campo">Classificação indicativa:</label><br>
            <input class="resposta" type="text" name="classificacao-indicativa" value="">
        </div><br>
        <div class="cta">
                <input type="submit" value="Cadastrar">
        </div><br><br><br>
        <div class="cta">
                <a href="logout.php" button>Sair</button>
        </div>       
<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    $conteudo = $_POST['conteudo'];
    $nome_do_arquivo_novo = $_POST['nome'];

    $arquivo_novo = fopen("$nome_do_arquivo_novo.txt", 'w');
    echo  '<p> Arquivo criado com sucesso ! </p>';
    //colocando o conteudo no arquivo txt criado
    if(fwrite($arquivo_novo, $conteudo)){
        echo "<p> Seu arquivo <strong> $nome_do_arquivo_novo.txt  </strong> foi criado com sucesso ! </p>";
    }else{
        echo "<p  style='color:red;'>Não foi possível colocar o conteúdo no arquivo criado. </p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=novo.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body{
        max-width: 100%;
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #551bb3;
        color: white;
    }
    p{
        padding: 20px;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    footer{
        width: 100%;
        background-color: #40223c;
        position: absolute;
        bottom: 0;
        padding: 30px;
    }
</style>
<body>
        <footer>
            <p>Página desenvolvida por <b>Mateus Dorvis&reg;&copy;</b></p>
        </footer>
</body>
</html>
<?php
//facendo uma barra de pesquisa simples com PHP
//DICIONARIO (ARRAY ASSOCIATIVA) DE LINKS
$urls = [
    'google'=> 'https://www.google.com',
    'youtube' => 'https://www.youtube.com',
    'facebook'=> 'https://www.facebook.com',
    'chagpt'=> 'https://www.chatgpt.com',
    'brasil escola' => 'https://www.brasilescola.com',
    'cnn' => 'https://www.cnn.com',

    ];
if($_SERVER['REQUEST_METHOD']=='POST'){
   if(isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])){
    $pesquisa = $_POST['pesquisa'];
    $url_encontrada = false;
    foreach($urls as $nome_url => $url){
        //se encontrou, pare o loop
            if($nome_url==strtolower($pesquisa)){ //deixa todas as letras minusculas para facilitar a vida
                echo "
                <p> Resultado da pesquisa : <a href='$url'  target='_blank'>".ucfirst($nome_url)."</a></p>
                ";#ucfirts deixa a primeira letra Maiuscula
                $url_encontrada = true;
                break;
            }
        }
    if(!$url_encontrada){
          echo 'Nome da url não  encontrada  !';
    }
   }
   else{
      echo 'Sem informações ainda !';
   }
}
else{
    echo 'Sem informações ainda...';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body{
    font-family: Arial, Helvetica, sans-serif;
   }
</style>
<body>
    <h1>Barra de pesquisa.</h1>
    <form action="estudo11.php" method="POST">
        <label for="pesquisa">Pesquise algo :</label>
        <input type="search" name="pesquisa" id="pesquisa" required>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
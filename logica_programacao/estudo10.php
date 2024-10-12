<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $img = $_FILES['img']['tmp_name'];
    echo "<img src='data:imagem_usuario/jpeg;base64," . base64_encode(file_get_contents($img)) . "' alt='Imagem' />";

  }


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de imagens</title>
</head>
<body>

    <form action="estudo10.php" method='POST' enctype="multipart/form-data">
        <label for="img">Insira sua imagem aqui :</label>
        <input type="file" name="img" id="img" accept="imagem_usuario/*">
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
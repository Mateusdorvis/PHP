<?php 
    $imagem = 'https://www.pixelstalk.net/wp-content/uploads/2016/07/Free-Amazing-Background-Images-Nature.jpg';
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $cor = $_POST['color']; //irá pegar o valor da cor escolhida no input
            $fontFamily = $_POST['selecionar'];//irá pegar o valor da opção escolhida
            $imagem =  $_POST['imagem'];
    }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!---Pegando a API do google fonts para assim pegar fontes prontas --->
    <link href="https://fonts.googleapis.com/css2?family=<?php echo str_replace(' ', '+', $fontFamily); ?>&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de uma edição de página com PHP</title>
   

</head>
<style>
    body{
        background-color: <?php echo isset($cor) ? $cor : 'white'; ?>;
        font-family: '<?php echo $fontFamily ?>',sans-serif;
    }
</style>
<body>
    
    <h1>Simulação de uma edição de uma página HTML com PHP</h1>
    <img src='<?php echo $imagem ?>' alt="">
    <form action="" method="post">
        <label for="imagem">Selecione uma imagem</label>
        <input type="file" name="imagem" id="imagem">
        <label for="cor">Escolha uma cor de fundo:</label>
        <input type="color" name="color" id="cor">
        <label for="selecionar">Selecione uma fonte específica.</label>
        <!--Seleção de fontes --->
        <select name="selecionar" id="selecionar">
            <option value="Roboto">Roboto</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Bebas Neue">Bebas Neue</option>
            <option value="Raleway">Raleway</option>
            <option value="Oswald">Oswald</option>
            <option value="Lato">Lato</option>
            <option value="Merriweather">Merriweather</option>
            <option value="Open">Open</option>
            <option value="Poppins">Poppins</option>
            <option value="Playfair Display">Playfair Display</option>
            <option value="Source Sans Pro">Source Sans Pro</option>
            <option value="Ubuntu">Ubuntu</option>
            <option value="Dancing Script">Dancing Script</option>
            <option value="Zilla Slab">Zilla Slab</option>
            <option value="Cabin">Cabin</option>
            <option value="Noto Sans">Noto Sans</option>
            <option value="Indie Flower">Indie Flower</option>
            <option value="Muli">Muli</option>
            <option value="Quicksand">Quicksand</option>
        </select>
        <input type="submit" value="Enviar ">
    </form>
    <script>
        var selecionar = document.getElementById('selecionar')
        
        for(let x = 0; x < selecionar.options.length ;x++){
            var font = selecionar.options[x].value
            selecionar.options[x].style.fontFamily = font
        }
    </script>
</body>
</html>
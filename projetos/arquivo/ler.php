<?php 
$carregar_conteudo_arquivo = '';
$arquivo_aberto = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //se não estiver vazio o post e estiver definido
    if(!empty($_POST['arquivo_aberto']) && isset($_POST['arquivo_aberto'])){
        $arquivo_aberto = $_POST['arquivo_aberto'];
        $carregar_conteudo_arquivo = file_get_contents($arquivo_aberto);
    }else{
        echo '<p> O seu arquivo modificado foi  salvo ! </p>';
    }
    if(!empty($_POST['nome_txt']) && isset($_POST['nome_txt'])){
        $file_modificado = fopen($_POST['nome_txt'], 'w');
        fwrite($file_modificado, $_POST['content_text']);
        header('Location: ler.html');
        exit();
    }else{
        echo "<p> O  arquivo : $arquivo_aberto ainda não foi salvo !</p> ";
    }

}else {
    echo '<p>Nenhuma informação por aqui...</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler e editar arquivo com PHP</title>
</head>
<style>
    body, html {
        max-width: 100%;
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #551bb3;
        color: white;
    }
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    textarea {
        padding: 20px;
        border-radius: 20px;
        max-width: 700px;
        max-height: 200px;
    }
    input {
        width: 200px;
        height: 30px;
        padding: 3px;
        border-radius: 20px;
    }
    input[type='submit'] {
        background-color: #21203f;
        border: 0;
        color: white;
        font-size: 15px;
    }
    a {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }
    form > label, form > textarea, form > input {
        display: block;
        margin: 5px;
    }
    body h1, body form{
        padding: 20px;
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
    <h1>Leitura e Edição de arquivo.</h1>
    <form action="ler.php" method='POST'>
        <input type="text" name="nome_txt" value="<?php echo htmlspecialchars($arquivo_aberto); ?>">
        <textarea name='content_text' cols='30' rows='10'><?php echo htmlspecialchars($carregar_conteudo_arquivo); ?></textarea>
        <input type="submit" value="Salvar a modificação" onclick="alert('Conteúdo salvo com sucesso !')">
    </form>
    <footer>
        <p>Página desenvolvida por <b>Mateus Dorvis&reg;&copy;</b></p>
    </footer>
</body>
</html>

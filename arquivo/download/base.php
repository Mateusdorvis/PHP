<?php
$url = 'https://wallpapercave.com/wp/rhxPdQZ.jpg'; // URL da imagem

// Verifica se a URL é acessível
if (filter_var($url, FILTER_VALIDATE_URL)) {
    $fileContent = file_get_contents($url);
    if ($fileContent !== false) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="imagem.jpg"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($fileContent));
        echo $fileContent; // Envia o conteúdo da imagem
        exit;
    } else {
        echo 'Erro ao baixar o arquivo.';
    }
} else {
    echo 'URL inválida.';
}
?>

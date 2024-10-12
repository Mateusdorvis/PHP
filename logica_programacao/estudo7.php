<?php
//criando uma página html com PHP

$html5 = '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Html criada pelo PHP</title>
</head>
<style>
   p{
    color : red;
   }
</style>
<body>
    <h1>Olá PHP ! Como vai</h1>
    <P>Esta página foi criada pelo PHP</P>
</body>
</html>

';
$novo_documento_html = new DOMDocument;
$novo_documento_html ->loadHTML($html5);
echo $novo_documento_html->saveHTML();

?>
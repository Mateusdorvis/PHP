<?php
//code html
$html = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo criado</title>
</head>
<body>
    <h1> Este arquivo html foi criado pelo <strong> PHP </strong></p>
</body>
</html>';
//code python
$python_code = "
code_php = '''<?php 

echo '<p> Este arquivo foi criado pela linguagem Python </p>';

?>'''
with open ('arquivo_php.php', 'w') as file:
       file.write(code_php) 

";
//arquivo html criado
$arquivo  = fopen('html_criado.html', 'w');
fwrite($arquivo, $html);
//arquivo python criado 
$arquivo_python = fopen('python_criado.py', 'w');
fwrite($arquivo_python, $python_code);
//msg de sucesso
echo 'Arquivo criado Mateus !';


?>

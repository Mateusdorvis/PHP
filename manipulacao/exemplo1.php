<?php
//MANIPULANDO UMA IMG

//definidno altura e larura da imagem 
$width = 500;
$height = 500;
//criando um plano, tipo um papel
$img =  imagecreatetruecolor($width, $height);

$backgroundColor = imagecolorallocate($img, 255,255,255);//cor do papel
$colorText = imagecolorallocate($img, 255, 0, 0) ; //cor do texto
//DETALHE, AS CORES DEVEM SER NO PADRÃO RGB
//colocando para que a imagem seja preenchida com a cor de fundo e com coordenadas.
$x = 0;
$y = 0;
imagefill($img, $x, $y, $backgroundColor);

$meuTexto = 'Olá PHP';//define o texto
imagestring($img, 5, 20, 20, $meuTexto, $colorText);//o tamanho da fonte da função imagestring é de 1 a 5.
//colocando a imagem no cabeçalho
header('Content-Type: image/png ');

//mostrando a imagem
imagepng($img);

//libera a memória, para assim ser exibida no navegador
imagedestroy($img);

?>


<?php
///Caregando uma imagem do meu pc
$minha_imagem = imagecreatefromjpeg('C:/xampp/htdocs/progr/php/oi.jpg');//pega a url da minha img do meu pc
//definindo uma cor de texto
$colorText = imagecolorallocate($minha_imagem, 255,255,255);

imagestring($minha_imagem, 2, 50, 50, 'Que paisagem linda !', $colorText);
header('Content-Type: image/jpg');
imagejpeg($minha_imagem);
imagedestroy($minha_imagem);

?>
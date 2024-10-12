<?php
$zip = new ZipArchive(); //chama a classe  ZipArchive, instanciando 


$texto = 'archive.txt'; //arquivo que será mais tarde adicionado no arquivo zip
$arquivo = $zip ->open('pasta.zip', ZipArchive::CREATE); //cria um arquivo zip
$zip->addFromString($texto, 'Olá mundo'); //adiciona o archive.txt e adciona um conteúdo dentro dele
$zip->close()  //fecha a classe 


?>
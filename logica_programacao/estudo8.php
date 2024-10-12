<?php
//criando uma página html do 0 com php

$novo_documento_html = new DOMDocument;
$tag_html = $novo_documento_html->createElement('html');//cria as tag html
$tag_body = $novo_documento_html->createElement('body');


$tag_p = $novo_documento_html->createElement('p');//cria as tag p
$tag_p->textContent = 'Página htm feito com PHP do 0';//gera um conteudo para a tag p


$tag_body->appendChild($tag_p);//adiciona filho
$tag_html->appendChild($tag_body);//adiciona filho
$novo_documento_html->appendChild($tag_html);//adiciona filho

echo $novo_documento_html->saveHTML();//carrega o arquivo html criado



?>


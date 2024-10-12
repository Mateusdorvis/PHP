<?php
//pegando a url
$url_site = 'C:\xampp\htdocs\progr\php\meu_localhsot\site.html';
//adicionando um novo conteúdo na url
if (file_put_contents($url_site, '<p> Novo conteúdo adicionado pelo PHP </p>', FILE_APPEND)!==false){
    echo 'CONTEÚDO ADICIONADO COM SUCESSO';
}
else{
    echo 'NÃO DEU CERTO !';
}
echo file_get_contents($url_site)
?>
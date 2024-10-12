<?php
//pegando a url
$url_site = 'C:\xampp\htdocs\progr\php\meu_localhsot\site.html';
$conteudo_pagina = file_get_contents($url_site);
if ($conteudo_pagina){
    echo $conteudo_pagina;//mostrando o conteúdo
}
else{
    echo 'Não possível carregar a página';
}
?>
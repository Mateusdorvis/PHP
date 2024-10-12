<?php
//pegando a url
$url_site = 'C:\xampp\htdocs\progr\php\meu_localhsot\site.html';
$conteudo_pagina = file_get_contents($url_site);
if ($conteudo_pagina){
    $mod_content = str_replace('Este conteúdo será modificado pelo PHP', 'conteúdo modificado pelo PHP',$conteudo_pagina);//modificando o conteúdo da página 
    echo $mod_content;
}
else{
    echo 'Não possível carregar a página';
}
?>
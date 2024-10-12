<?php 

$conteudo = file_get_contents('C:\xampp\htdocs\progr\php\meu_localhsot\site.html');
if($conteudo){
    $mod_content = str_replace('<p> Novo conteúdo adicionado pelo PHP </p>','<button onclick="alert("Olá PHP !")"> Clique em mim</button>',$conteudo);
    echo $mod_content;
}
else{
    echo 'Não foi possível !';
}


?>
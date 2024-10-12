<?php
//pegando a url do meu bog que criei há dois anos atrás
$url_blog = "https://blgdomateus.wordpress.com/";
$conteudo = file_get_contents($url_blog);//vendo o contéudo que tem no blog
if ($conteudo){
    echo '
<h1 style="font-Family: Times new roman;"> Olá mundo, este blog que eu fiz foi de há 4 anos atrás ! </h1>
';
    echo $conteudo;//renderiza o blog
}
else{
    echo 'Peço-lhe desculpas , pois não foi possível carregar o conteúdo !';
}

?>
<?php

//criação de uma função anonima
$ExibirNome = function($nome_usuario){
    return $nome_usuario;
};
echo $ExibirNome('Mateus');
?>
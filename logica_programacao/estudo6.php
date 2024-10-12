<?php
function funcao($func){
    $func();  //A função que colocarei como argumento será ativada por aqui...
    echo "Esta mensagem está sendo executada diretamente da função 'funcao' ";

}

function Mensagem(){
    echo "Esta mensagem está sendo executada diretamente da função Mensagem <br>";
}

funcao(Mensagem)//este método funciona mesmo o navegador mostrando o erro, de colocar uma função como parâmetro. o QUE ACONTECE AQUI? Quando coloco a função Mensagem na função funcao, a Mensagem será ativada dentro dela.


?>
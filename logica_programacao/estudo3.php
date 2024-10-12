<?php
#criação de funções COM $PARAMETROS
function Somar($parametro){
        return $parametro +5;
}
echo (Somar(30));

function exibirnome(string $nome){#aqui especifico que nome é string
        echo("Olá $nome");
}
exibirnome(1);
?>
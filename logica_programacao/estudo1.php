<?php
#loop de interação com forach
$array  = [1,2,3,4,4,5,6];
foreach ($array as $numero ) {//foreach é um loop dedicado a interar sobre arrays
    echo( "número $numero <br>"); #quebra a linha com <br> a cada interação
}

#partindo uma string como array
$string  = 'Olá PHP';
echo "<h1> Palavra $string </h1> ";
for($indice_caractere = 0; $indice_caractere <=7;$indice_caractere++){
    echo "
    índice  : $indice_caractere , valor : $string[$indice_caractere] <br> ";
}//o que está acontendo no for? O for vai interando sobre cada caractere da string, dessa forma, fatiando ela.

?>
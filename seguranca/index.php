<?php

$minha_senha = 'mateus';//minha senha

$senha_cript = password_hash($minha_senha, PASSWORD_BCRYPT, ['cost' =>12 ]); //método que criptografa a minha senha
 
if (password_verify('1234', $senha_cript)){
    echo 'senha encontrada'; //verifica se a senha que coloquei é igual 
}else{
   echo 'senha NÃO  encontrada';
}
?>

<?php
#verifica se o método é post
   if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome = htmlspecialchars($_POST['nome']);
    echo "Olá $nome ! Seja bem-vindo(a).";
   }
?>



<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){ //se o metodo do server for igual a POST (como foi definido lá no formulário do html)
    $nome = htmlspecialchars($_POST['nome']);
    $cidade_inicio = htmlspecialchars($_POST['origem']);  // utilizar htmlspecichars é recomendável para manter a segurança de um dado 
    $cidade_final = htmlspecialchars(($_POST['final']));
    $data_inicio = htmlspecialchars($_POST['ida']);
    $data_final = htmlspecialchars($_POST['volta']);


    $conexao =  new mysqli('localhost', 'mateus_dorvis', 'oi', 'formularios');
    $create_table = $conexao->prepare('
    CREATE TABLE IF NOT EXISTS viagem_php (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255),
            cidade_ida VARCHAR(255),
            cidade_volta VARCHAR(255),
            data_ida DATE,
            data_volta DATE
    );');
    $condicao = $create_table->execute() ? 'Tabela criada com sucesso ! <br>': 'Não consegui criar a tabela! <br>';
    echo($condicao);

    $condicao2 = $conexao->commit() ? 'Confirmei a criação da tabela no banco de dados ! <br>': 'Não foi possível confirmar a criação da tabela no banco de dados <br>!';
    echo($condicao2);

   
   #AGORA INSERINDO O USUÁRIO

   $prepara = $conexao->prepare('INSERT INTO viagem_php(nome, cidade_ida, cidade_volta, data_ida, data_volta) VALUES (?,?,?,?,?)');

   $prepara->bind_param('sssss', $nome, $cidade_inicio, $cidade_final, $data_inicio, $data_final);
   #s1 -nome, s2 - cidade, s3 cidadevolta, s4 - data ida, s5 data volta
   if ($prepara->execute()){
    echo 'Usuário (a) inserido (a) na tabela com sucesso !<br>';
   }
   else{
    echo 'Não foi possível inserir o usuário (a) na tabela!<br>';
   }
   $conexao->commit();//confirmação que coloquei o usuário cadastrado na tabela criada 
   $prepara->close(); #fecha a preparação
   $conexao->close(); //fecha a conexão com o banco de dados.
   echo "Olá  $nome ! Seus dados foram inseridos com sucesso ! <br> ";


}


?>
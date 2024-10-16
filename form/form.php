<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>
<style>
   body{
   background-image: linear-gradient(to left , #c3062c , #9d1d36);
   font-family: Arial, Helvetica, sans-serif;
   color: white;
}
</style>
<body>
    <h1>Sucesso</h1>
    <?php
       //é verdade que o método do formulario do html é do método POST
       if($_SERVER['REQUEST_METHOD']=='POST'){
        //pegando os dados do form.html
        $nome  = htmlspecialchars($_POST['nome_name']);
        $data  = htmlspecialchars($_POST['data_name']);
        $mensagem  = htmlspecialchars($_POST['texto_name']);
        //criando variaveis para conectar ao banco de dados
        $usuario = 'mateus_dorvis';
        $host = 'localhost';
        $database = 'formularios';
        $senha_usuario = '**********';
        $conexao = new mysqli($host, $usuario, $senha_usuario, $database);//conexão com o banco de dados
        //é verdade que a conexão deu erro? se sim 
        if ($conexao -> connect_error){
          echo 'conexão não foi sucedida';
        }
        //se for mentira fala conexão sucedida
        else{
          echo 'conexão sucedida';
          //prepara essa execução para mim
          $prepara = $conexao ->prepare("INSERT INTO formulario_php(nome, texto, data_nascimento) VALUES (?,?,?)");

          //insere os dados que o php pegou para mim na função blind_param , esses sss serve como referencia as colunas da tabela formulario.php
          $prepara->bind_param('sss', $nome, $mensagem, $data);
          //enquanto executa
          if ($prepara->execute()){
            echo("<P> Seja bem - vindo (a) $nome, seus dados  foram enviados com sucesso !");
          }
          else{
            echo "<p> Erro ao inserir seus dados </p> ".$prepara->error;//mostra o erro
          }
          //fecha a execução após os registros dos dados, como uma forma de confirmação
          $prepara->close();
          //fecha a conexão com o banco de dados
          $conexao->close();

        }
       }
    ?>
</body>
</html>

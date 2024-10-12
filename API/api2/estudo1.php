<?php
///carregando o conteúdo
header('Content-Type: application/json');

$metodo_request = $_SERVER['REQUEST_METHOD'];

if($metodo_request == 'POST'){
    $nome = $_POST['nome'];
    $idade  = $_POST['idade'];
    //verificando se existe o arquivo dados.json
    if(file_exists('dados.json')){
        #decodifica o código json para PHP e carrega o conteúdo do arquivo desejado
        $dados = json_decode(file_get_contents('dados.json'), true);#este true serve para dizer que a array é associativa
    }
    else{
        #se não tiver cria uma array
        $dados = [];
    }
    #faz calculo conforme os índice que há na array
    $id = count($dados)+1;
    #adiciona usuário novo na array
    $dados[] = ['ID' => $id, 'Dados' => ['Nome do usuário' => $nome, 'Idade' => $idade]];
    #coloca o usuário novo no arquivo
    file_put_contents('dados.json', json_encode($dados, JSON_PRETTY_PRINT));
    #mensagem de sucesso !
    echo json_encode(['Mensagem'=> "$nome seus dados foram coletados com sucesso !"])."\n";
    
}

if($metodo_request == 'GET'){
   echo file_get_contents('dados.json');
}

?>
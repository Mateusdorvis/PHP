<h1>Tabela</h1>

<?php
#declarção de classes
class Pessoa{
    #primeiro devo dizer para a lingua se tal atributo da classe será private, public ou protect
    public $idade;
    public $nome;
    public $profissao;
    public function __construct(int $idade, $nome, $profissao) {
        $this->nome_pessoa = $nome;
        $this->idade_pessoa = $idade;
        $this->profissao_pessoa = $profissao;
    }
    public function informacao(){
      
        echo("<html>
        <style>
        table{
            margin: 20px;
        }
        table, tr, th, td{
            border: 2px solid black;
            width: 200px;
        }
        </style>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Profissão</th>
            </tr>
            <tr>
                <td>$this->nome_pessoa</td>
                <td>$this->idade_pessoa</td>
                <td>$this->profissao_pessoa</td>
            </tr>
        </table>
    </html>");
    }
}
#a cada chamada desta classe cria uma tabela.
$pessoa  = new Pessoa(14, 'Mateus', 'Programador');
$pessoa->informacao(); #pegando o método da classe Pessoa

$jorge = new Pessoa(20, 'Jorge', 'Médico');
$jorge->informacao();



?>


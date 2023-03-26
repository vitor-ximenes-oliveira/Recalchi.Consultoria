<?php

/**
 * As classes DAO (Data Access Object) são responsáveis por executar os
 * SQL junto ao banco de dados.
 */
class PessoaDAO
{
    /**
     * Atributo (ou Propriedade) da classe destinado a armazenar o link (vínculo aberto)
     * de conexão com o banco de dados.
     */
    private $conexao;


     /**
     * Método construtor, sempre chamado na classe quando a classe é instanciada.
     * Exemplo de instanciar classe (criar objeto da classe):
     * $dao = new PessoaDAO();
     * Neste caso, assim que é instânciado, abre uma conexão com o MySQL (Banco de dados)
     * A conexão é aberta via PDO (PHP Data Object) que é um recurso da linguagem para
     * acesso a diversos SGBDs.
     */
    public function __construct(){
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        // (host) em qual porta o MySQL está operado e qual o nome do banco pretendido
        // Mais informações sobre DSN: https://www.php.net/manual/pt_BR/ref.pdo-mysql.connection.php
        $dsn = "mysql:host=localhost:3306;dbname=manage";

        // Criando a conexão e armazenado na propriedade definida para tal.
        // Veja o que é PDO: https://www.php.net/manual/pt_BR/intro.pdo.php
        $this->conexao = new PDO($dsn, 'root', '');
    }


    /**
     * Método que recebe um model e extrai os dados do model para realizar o insert
     * na tabela correspondente ao model. Note o tipo do parâmetro declarado.
     */
    public function insert_user(PessoaModel $model){
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare
        $sql = "INSERT INTO usuarios (user, nome, email, telefone, cnpj, senha, data_c,nivel_usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";


        // Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
        // Para saber mais sobre Preparated Statements, leia: https://www.codigofonte.com.br/artigos/evite-sql-injection-usando-prepared-statements-no-php
        $stmt = $this->conexao->prepare($sql);


        // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.
        $stmt->bindValue(1, $model->user);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->email);
        $stmt->bindValue(4, $model->cell);
        $stmt->bindValue(5, $model->cnpj);
        $stmt->bindValue(6, $model->senha);
        $stmt->bindValue(7, $model->data_c);        
        $stmt->bindValue(8, $model->nivel_usuario);        




         // Ao fim, onde todo SQL está montando, executamos a consulta.
        $stmt->execute();
    }

    /**
     * Método que recebe o Model preenchido e atualiza no banco de dados.
     * Note que neste model é necessário ter a propriedade id preenchida.
     */
    public function update( PessoaModel $model){

        //make the variants to get each field
        $user = $model->user;
        $nome = $model->nome;
        $telefone = $model->cell;
        $email = $model->email;
        $cnpj = $model->cnpj;
        $senha = $model->senha;
        $id = $model->id;
        var_dump($user);
        var_dump($nome);
        var_dump($telefone);
        var_dump($email);
        var_dump($cnpj);
        var_dump($senha);
        var_dump($id);


        $sql = "UPDATE usuarios SET user=:user, nome=:nome, email=:email, telefone=:telefone, cnpj=:cnpj, senha=:senha  WHERE idusuario=:id ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":id", $model->id);
        $stmt->bindParam(":user", $model->user);
        $stmt->bindParam(":nome", $model->nome);
        $stmt->bindParam(":telefone", $model->cell);
        $stmt->bindParam(":email", $model->email);
        $stmt->bindParam(":cnpj", $model->cnpj);
        $stmt->bindParam(":senha", $model->senha);
        $stmt->execute();
    }


    /**
     * Método que retorna todas os registros da tabela pessoa no banco de dados.
     */
    public function select(){
        $sql = "SELECT * FROM usuarios ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        // Retorna um array com as linhas retornadas da consulta. Observe que
        // o array é um array de objetos. Os objetos são do tipo stdClass e 
        // foram criados automaticamente pelo método fetchAll do PDO.
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    /**
     * Retorna um registro específico da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function selectById(int $id){
        include_once 'Model/PessoaModel.php';

        $sql = "SELECT * FROM usuarios WHERE idusuario = :id";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetchObject("PessoaModel"); // Retornando um objeto específico PessoaModel
    }


    /**
     * Remove um registro da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function delete(PessoaModel $model){
        $sql = "DELETE FROM usuarios WHERE idusuario = :id ";
        $id = $model->id;
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function selectUser(string $user){
        $sql = "SELECT * FROM usuarios WHERE user = :user";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":user", $user);
        $stmt->execute();
        $dados_do_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
       
        return $dados_do_usuario;

    }
    
}
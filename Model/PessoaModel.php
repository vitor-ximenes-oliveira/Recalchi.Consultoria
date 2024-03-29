<?php

/**
 * A camada model é responsável por transportar os dados da Controller até a DAO e vice-versa.
 * Também é atribuído a Model a validação dos dados da View e controle de acesso aos métodos
 * da DAO.
 */
class PessoaModel{
    /**
     * Declaração das propriedades conforme campos da tabela no banco de dados.
     * para saber mais sobre Propriedades de Classe, leia: https://www.php.net/manual/pt_BR/language.oop5.properties.php
     */
    public $id, $user, $nome, $email, $cell, $cnpj, $senha, $data_c, $nivel_usuario;

    public $user_login, $pass;


    /**
     * Propriedade que armazenará o array retornado da DAO com a listagem das pessoas.
     */
    public $rows;


    /**
     * Declaração do método save que chamará a DAO para gravar no banco de dados
     * o model preenchido.
     */
    public function save_us(){
        
        include  'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO

        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO(); 

            // Chamando o método insert que recebe o próprio objeto model
            // já preenchido
            $dao->insert_user($this);

               
    }

    public function saveUpdate(){
        
        include  'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO

        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO(); 

            // Chamando o método insert que recebe o próprio objeto model
            // já preenchido
            $dao->update($this);

               
    }



    public function validateLogin(string $user,  string $password){
        
        include  'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO

        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO(); 
        
        $findUser = $dao->selectUser($user);

        if($user == $findUser['user']) {
            if(password_verify($password, $findUser['senha'])){
                return true;
            }else{
                $erro = error_get_last();
                if ($erro) {
                    echo "Erro: " . $erro["message"];
                    return false;
                } else {
                    echo "Senha incorreta!!!";
                    return false;
                }
            }
        }else {
            echo "Usuário inserido esta incorreto!!!";
        }

    }

    public function getUserId(string $user){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        $findUser = $dao->selectUser($user);

        return $findUser['idusuario'];

    }
   

    /**
     * Método que encapsula a chamada a DAO e que abastecerá a propriedade rows;
     * Esse método é importante pois como a model é "vista" na View a propriedade
     * $rows será acessada e possibilitará listar os registros vindos do banco de dados
     */
    public function getAllRows(){
        include 'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO
        
        // Instância do objeto e conexão no banco de dados via construtor
        $dao = new PessoaDAO();

        // Abastecimento da propriedade $rows com as "linhas" vindas do MySQL
        // via camada DAO.
        $this->rows = $dao->select();
    }


    /**
     * Método que encapsula o acesso ao método selectById da camada DAO
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * a ser recuperado do MySQL, via camada DAO.
     */
    public function getById(int $id){
        include 'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO

        $dao = new PessoaDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO

        // Para saber mais operador ternário, leia: https://pt.stackoverflow.com/questions/56812/uso-de-e-em-php
        return ($obj) ? $obj : new PessoaModel(); // Operador Ternário

        /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }*/
    }


    /**
     * Método que encapsula o acesso a DAO do método delete.
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * que será excluido da tabela no MySQL, via camada DAO.
     */
    public function delete(){
        include 'DAO/PessoaDAO.php'; // Incluíndo o arquivo DAO

        $dao = new PessoaDAO();

            $dao->delete($this);
    }
}
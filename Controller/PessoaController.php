<?php

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
class PessoaController 
{
    /**
     * Os métodos index serão usados para devolver uma View.
     * Para saber mais sobre métodos estáticos, leia: https://www.php.net/manual/pt_BR/language.oop5.static.php
     */
    public static function index(){
        // Para saber mais sobre include , leia: https://www.php.net/manual/pt_BR/function.include.php
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.
        
        $model = new PessoaModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

        include 'View/modules/Pessoa/gerencia_user.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }


    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form(){
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.
        $model = new PessoaModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/

        include 'View/modules/Pessoa/login.php'; // Include da View. Note que a variável $model está disponível na View.
    }
    public static function home(){
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.
        
        include 'View/modules/Pessoa/home.php'; // Include da View. Note que a variável $model está disponível na View.
    }
    public static function logar(){            
        include 'Model/PessoaModel.php'; 
        // inclusão do arquivo model.
            $model = new PessoaModel();
            $user = $model->user_login =  $_POST['user'];
            $password = $model->pass = $_POST['pass'];
            $validarLogin = $model-> validateLogin($user,$password);

            //$idUser = $model->getUserId($user);
            //var_dump($idUser);
  
            if($validarLogin){
                session_start(); // Inicia a sessão
                $_SESSION['usuario'] = $user;
                $_SESSION['senha'] = $password;

                header("Location:/gestao");
                //return $userLogin;
                
            }else{
                echo "Erro ao realizar o login";
            }
    }

    public static function logout(){
        session_start(); // inicia a sessão
        session_destroy();
        header("Location:/login");
        exit();
    }

    public static function gestao(){
        include 'View/modules/serviços/gestao.php'; // Página Pde atendimento PJ

    }

    public static function usuarios(){
        include   'View/modules/Pessoa/gerencia_user.php';
    }

    public static function redirectEdit(){
        include 'View/modules/Pessoa/editUser.php';
    }

    public static function editUser(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->user =  $_POST['user_cad'];
        $model->nome = $_POST['nome_cad'];
        $model->email = $_POST['email_cad'];
        $model->cell = $_POST['cell_cad'];
        $model->cnpj = $_POST['cpf_cad'];
        $model->senha = password_hash($_POST['senha_cad'], PASSWORD_DEFAULT);
        $model->id=$_POST['id_cad'];

        $model->saveUpdate();

        header("Location:/app/usuarios");
       
    }

    public static function deleteUser(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->id = $_GET['id'];
        $model->delete();

        header("Location:/usuarios");


    }

    public static function servicos_pj(){
        include 'View/modules/serviços/home.php'; // Página Principal de serviços.

    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save_user(){
       include_once 'Model/PessoaModel.php'; // inclusão do arquivo model.

       

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $model = new PessoaModel();

       $model->user =  $_POST['user_cad'];
       $model->nome = $_POST['nome_cad'];
       $model->email = $_POST['email_cad'];
       $model->cell = $_POST['cell_cad'];
       $model->cnpj = $_POST['cpf_cad'];
       $model->senha = password_hash($_POST['senha_cad'], PASSWORD_DEFAULT);
       $model->data_c = date('YYYY-MM-DD HH:MM:SS');
       $model->nivel_usuario = 1;
       
       $model->save_us(); // chamando o método save da model.

       header( "Location:/home"); // redirecionando o usuário para outra rota.
    }

    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.

        $model = new PessoaModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }
}
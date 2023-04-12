<?php
    include 'DAO/PessoaDAO.php';

    $dao = new PessoaDAO();
    $id = $_GET['id'];
    $user =$dao->selectById($id);

    $usuario = $user->user;
    $nome = $user->nome;
    $email = $user->email;
    $telefone = $user->telefone;
    $cnpj = $user->cnpj;
    $senha = $user->senha;

?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Recalchi consultoria - Cadastro/Login</title>
       <link rel="stylesheet" type="text/css" href="/View/css/styles_form.css">
   </head>
   <body>
       <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE EDIÇÃO--> 
      <div id="cadastro">
      <form method="post" action="/editUser">
          <h1>Edição de Usuário</h1> 
          
          <p> 
            <label for="id_cad">ID Usuário</label>
            <input id="id_cad" name="id_cad" required="required" type="text" value="<?php echo $id ?>"/>
          </p>

          <p> 
            <label for="user_cad">Seu usuário</label>
            <input id="user_cad" name="user_cad" required="required" type="text" value="<?php echo $usuario ?>"/>
          </p>

          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" value="<?php echo $usuario ?>" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" value="<?php echo $nome ?>"/> 
          </p>
          <p> 
            <label for="cell_cad">Seu celular </label>
            <input id="cell_cad" name="cell_cad" required="required" type="number" value="<?php echo $telefone ?>"/>
          </p>
          <p> 
            <label for="cpf_cad">Seu cpf </label>
            <input id="cpf_cad" name="cpf_cad" required="required" type="number" value="<?php echo $cnpj ?>"/>
          </p>          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input type="password" id="senha_cad" name="senha_cad" required="required" value="<?php echo $senha ?>"/>
          </p>
          <p> 
            <input type="submit" name="submitc" value="Editar"/> 
          </p>
          
        </form>
      </div>
    </div>
  </div>
</body>
</html>
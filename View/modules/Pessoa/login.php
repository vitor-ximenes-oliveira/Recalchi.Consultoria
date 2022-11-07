<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Recalchi consultoria - Cadastro/Login</title>
       <link rel="stylesheet" href="login.css">
   </head>
   <body>
       <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" action="testlogin.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="user">Seu Usuário</label>
            <input id="user" name="user" required="required" type="text" placeholder="Tio17"/>
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input type="password" id="senha_login" name="senha_login"  minlength="8" required="required"  placeholder="1234" /> 
          </p>
          
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          
          <p> 
            <input type="submit" name="submitl" value="Logar" /> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO--> 
      <div id="cadastro">
        <form action="/app/save" method="POST"> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="user">Seu usuário</label>
            <input id="user_cad" name="user_cad" required="required" type="text" placeholder="Richard" />
          </p>

          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Richard Vickman" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Richardpro@gmail.com"/> 
          </p>
          <p> 
            <label for="cell_cad">Seu celular </label>
            <input id="cell_cad" name="cell_cad" required="required" type="senha" placeholder="11 98789-9797"/>
          </p>
          <p> 
            <label for="cpf_cad">Seu cpf </label>
            <input id="cpf_cad" name="cpf_cad" required="required" type="senha" placeholder="000000000.92"/>
          </p>          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input type="password" id="senha_cad" name="senha_cad" required="required" placeholder="1234"/>
          </p>
          <p> 
            <input type="submit" name="submitc" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
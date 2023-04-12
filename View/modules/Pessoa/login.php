
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
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" action="/login_logar"> 
          <h1>Login</h1> 
          <p> 
            <label for="user">Seu Usuário</label>
            <input id="user_log" name="user" required="required" type="text" placeholder="Tio17"/>
          </p>
          <p> 
            <label for="pass">Sua Senha</label>
            <input id="pass" name="pass" required="required" type="password" placeholder="ads$32"/>
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
      <form method="post" action="/save">
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="user_cad">Seu usuário</label>
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
            <input id="cell_cad" name="cell_cad" required="required" type="number" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}" title="Digite um telefone no formato (xx) xxxx-xxxx ou (xx) xxxxx-xxxx"/>
          </p>
          <p> 
            <label for="cpf_cad">Seu cnpj </label>
            <input id="cpf_cad" name="cpf_cad" required="required" type="number" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}" title="Digite um CPF no formato xxx.xxx.xxx-xx"/>
          </p>          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input type="password" id="senha_cad" name="senha_cad" required="required" placeholder="1234"/>
          </p>
          <p> 
            <input type="hidden" id="data_c" name="data_c" value="1/1/2023" />
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
<?php
    include 'Model/PessoaModel.php';

    $model = new PessoaModel();
    $model->getAllRows();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recalchi - Consultoria</title>
    <link rel="icon" href="logor.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/app/View/css/style_tab.css">
</head>
<body>
    <div class="headersection clear">
        <div class="midcontent">
            <div class="headerlogo left">
                <a class="logo" target="_blank" href="/app/View/module/Pessoa/logo.png">
                  <img src="https://i.ibb.co/mq6R9Sw/Logotipo-500x500-px.png" alt="Logotipo-500x500-px">
                 <span>RECALCHI MANAGE</span>
                </a>
            </div>

        </div>
    </div>

    
    <div class="bannersection">
        <div class="midcontent">
            <div class="bannercontent tc">
                <h3>Gerenciamento de Usuários</h3>
                <br>
                <table class="table-fill">
                    <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">User</th>
                            <th class="text-left">Nome</th>
                            <th class="text-left">E-mail</th>
                            <th class="text-left">Tell</th>
                            <th class="text-left">CPF/CNPJ</th>
                            <th class="text-left">Senha</th>
                            <th class="text-left"></th>
                            <th class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php foreach ($model->rows as $usuarios) { ?>
                            <tr>
                                <td><?php echo $usuarios->idusuario; ?></td>
                                <td><?php echo $usuarios->user; ?></td>
                                <td><?php echo $usuarios->nome; ?></td>
                                <td><?php echo $usuarios->email; ?></td>
                                <td><?php echo $usuarios->telefone; ?></td>
                                <td><?php echo $usuarios->cnpj; ?></td>
                                <td><?php echo $usuarios->senha; ?></td>
                                <td><a href='/app/redirectEdit?id=<?php echo $usuarios->idusuario; ?>' class="fa fa-pencil" aria-hidden="true"></a></td>
                                <td><a href='/app/deleteUser?id=<?php echo $usuarios->idusuario; ?>' class="fa fa-trash" aria-hidden="true"></i></td>
                                
                            </tr>
                        <?php } ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="footer tc tt">
        <p>&copy; copyright 2022 RECALCHI MANAGE - all rights reserved</p>
    </div>
</body>
</html>
<?php

    // session_start();
    // //print_r ($_SESSION);
    // if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) ==  true)) 
    // {
    //     unset($_SESSION['user']);
    //     unset($_SESSION['senha']);
    //     header ('location: DAO/PessoaDAO.php';
    // }
    // $logado = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recalchi - Manage</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/View/css/style.css">

    <script type="text/javascript" src="js/home.js"></script>

</head>
<body>

    <div class="headersection clear">
        <div class="midcontent">
            <div class="headerlogo left">
                <a class="logo" target="_blank" href="home.php">
                    <img src="https://i.ibb.co/PxptZWx/logo.png" alt="">
                    <span>Recalchi Manage</span>
                </a>
            </div>
            <div class="headermenu left">
                <div class="primarymenu">
                    <ul>
                        
                        <li><a href="#">Sobre nós</a></li>
                        
                        <li><a href="#">Seviços<i class="fa fa-sort-desc" aria-hidden="true"></i><a>
                        
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#">Consultoria  Particular</a></li>
                            <li><a href="#">Consultoria  Corporativa</a></li>
                            <li><a href="#">Fluxo para Investimentos</a></li>
                        </ul>
                        <li><a href="#">Gerenciamento<i class="fa fa-sort-desc" aria-hidden="true"></i><a>
                        
                        <ul>
                            <li><a href="gerenciamento.php">Usuarios</a></li>
                        </ul>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
                 <div class="headerbutton left">
                    <!-- <?php
                        echo "<h3>Bem vindo <p>$logado</p></h3>";
                    ?>     -->
                <a class="headerbtn" href="sair.php">Sair</a>
            </div>
        </div>
    </div>
    <div class="bannersection">
        <div class="midcontent">
            <div class="bannercontent tc">
                <h2>Transforme os resultados da sua empresa com preços eficazes</h2>
                <h3>O melhor serviços de gestão admnistrativa de custo do Brasil</h3><br>
                <h3>Utilize as melhores técnicas de precificação ao seu negócio</h3><br>

                <a  class="defaultbtn" href="orçamentos/orçamentos.php">Solicite um Orçamento</i> </a>
               
            </div>
        </div>
    </div>

       <div class="servicesection">
        <div class="midcontent">
            <div class="sectiontitle tc">
            <h1>Como a MANAGE traz valor</h1>
            <p>Atendimento completo para suas finanças</p>
            </div>
            <div class="servicebox left">
                    <div class="serviceicon">

                    </div>
                    <div class="servicecontent">
                        <h3>Melhor Precificação</h3>
                        </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                    </div>
                    <div class="servicecontent">
                        <h3>Resultados Escaláveis Incríveis</h3>
                        </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                    </div>
                    <div class="servicecontent">
                        <h3>Flexibilidade no atendimento</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="blogsection">
        <div class="midcontent">
            <div class="blogtitle clear">
                <div class="bheading left">
                     </div>
                <div class="btcontent right">
                <h1>Pesquisa Online de Preços</h1><br>
                    <p>Accurate employee tile tracking software for reporting, invoicing and painless payroll. Trusted by over 2,000 businesses in more than 70 countries.</p>
                    <a  class="defaultbtn" href="orçamentos/orçamentos.php">Solicite um Orçamento</i> </a>

                </div>
            </div>
            <div class="blogitem clear">
                <div class="blogpostitem left">
                    <img src="https://i.ibb.co/48KNhnL/02.jpg" alt="">
                    <div class="blogpostcontent">
                        <h3>Reporting</h3>
                        <p>Highly flaxibe reports to analyze time the way you want</p>
                    </div>
                </div>
                <div class="blogpostitem right">
                    <img src="https://i.ibb.co/gSQb8C4/03.jpg" alt="">
                    <div class="blogpostcontent">
                        <h3>Reporting</h3>
                        <p>Highly flaxibe reports to analyze time the way you want</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contactsection">
        <div class="midcontent">
                
    </div>
    </div>
            <div class="footer tc tt">
                <p>&copy; copyright 2020 by isa ahmed - all rights reserved</p>
            </div>
        </div>
    </div>
</body>
</html>
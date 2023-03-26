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

    session_start();
    if(!isset($_SESSION["usuario_logado"]))
        header("Location: /app/");

    if(isset($_GET["sair"])) {
        unset($_SESSION["usuario_logado"]);
        header("Location: /app/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recalchi - Consultoria</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/app/View/css/style_n.css">

    <script type="text/javascript" src="js/home.js"></script>

</head>
<body>

    <div class="headersection clear">
        <div class="midcontent">
            <div class="headerlogo left">
                <a class="logo" target="_blank" href="home.php">
                <img src="https://i.ibb.co/mq6R9Sw/Logotipo-500x500-px.png" alt="Logotipo-500x500-px">
                    <span>RECALCHI MANAGE</span>
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
                            <li><a href="/app/usuarios">Usuarios</a></li>
                        </ul>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
                 <div class="headerbutton left">
                    <?php
                        echo "<h3>Bem vindo <p>$user_s</p></h3>";
                    ?>    
                <a class="headerbtn" href="sair.php">Sair</a>
            </div>
        </div>
    </div>
    <div class="bannersection">
        <div class="midcontent">
            <div class="bannercontent tc">
                <h2>Etapas da sua Consultoria Financeira</h2>
                <h3>Acompanhe com cada detalhe de seu atendimento</h3>
                <a  class="defaultbtn" href="orçamentos/orçamentos.php">  Orçamento</a>
                <a class="defaultbtn" href="objetivos/objetivos.php"> </i> Objetivos</a>
                <a class="defaultbtn" href="#">  Investimentos</a>
                <a class="defaultbtn" href="#">  Tributação</a>
                <a class="defaultbtn" href="#"> Herança</a>                
            </div>
        </div>
    </div>

    <canvas id="myChart"></canvas>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.js"></script>
    <script src="js/home.js"></script> 


       <div class="servicesection">
        <div class="midcontent">
            <div class="sectiontitle tc">
            <h1>Entenda melhor cada processo</h1>
            <p>Atendimento completo para suas finanças</p>
            </div>
            <div class="serviceitem clear">
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
                        <p>Accurate and simple time tracking. Task-based estimation</p>
                    </div>
                </div>
                <div class="servicebox left">
                    <div class="serviceicon">
                        <span><i class="fa fa-laptop" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="servicecontent">
                        <h3>Time Tracking</h3>
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
                    <h2>O que há de novo?</h2>
                </div>
                <div class="btcontent right">
                    <p>Accurate employee tile tracking software for reporting, invoicing and painless payroll. Trusted by over 2,000 businesses in more than 70 countries.</p>
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
            <div class="contactrow clear">
                <div class="contentleftmap left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29666.537883140976!2d-76.99845506034164!3d39.00381239343047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7cf4e666ae927%3A0x8433a865b29adf!2sSilver%20Spring%2C%20MD!5e1!3m2!1sen!2sus!4v1598585776242!5m2!1sen!2sus" width="100%" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>  
                <div class="contentrightform right">
                    <h4>Contact us</h4>
                    <p>Contact us if you have any questions and we will contact you. We appreciate user feedback and be sure to take into account your wishes.</p>
                     <div class="footercontactform clear">
                    <form action="#">
                        <input type="email" placeholder="E-mail Address" class="defaultinput w100">
                        <input type="text" placeholder="Name" class="defaultinput w50">
                        <input type="number" placeholder="Your Phone" class="defaultinput w50">
                        <textarea class="defautinput w100" placeholder="Message"></textarea>
                        <button type="submit" class="submitbtn"> Send </button>
                    </form>
                     </div>
                </div>  
            </div>
            <div class="footer tc tt">
                <p>&copy; copyright 2020 by isa ahmed - all rights reserved</p>
            </div>
        </div>
    </div>
</body>
</html>
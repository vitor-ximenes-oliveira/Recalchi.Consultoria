<?php

include 'Controller/PessoaController.php';

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch($url)
{

    case '/app/':
        {
            include 'View/modules/Pessoa/index.html';
        }
    break;

    case '/app/home/':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
    break;

    case '/app/login':
        
        PessoaController::form();
    break;

    case '/app/login_logar':
        
        PessoaController::logar();
    break;


    case '/app/gestao':
        
        PessoaController::gestao();
    break;
    case '/app/campanha':
        
        PessoaController::serviços_pj();
    break;

    case '/app/login_pj':
        PessoaController::form_pj();
    break;

    case '/app/save':
        PessoaController::save_user();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}
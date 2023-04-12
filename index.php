<?php

include 'Controller/PessoaController.php';

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch($url)
{

    case '/':
        {
            include 'View/modules/Pessoa/index.html';
        }
    break;


    case '/login':
        
        PessoaController::form();
    break;

    case '/login_logar':

        PessoaController::logar();
    break;
    case '/logout':
        PessoaController::logout();
    break;

    case '/gestao':
        
        PessoaController::gestao();
    break;

    case '/usuarios':
        PessoaController::usuarios();
    break;

    case  '/redirectEdit':
        PessoaController::redirectEdit();
    break;
    case '/editUser':
        PessoaController::editUser();
    break;
    case '/deleteUser':
        PessoaController::deleteUser();
    break;
    case '/campanha':
        
        PessoaController::servicos_pj();
    break;

    case '/home':
        PessoaController::home();
    break;

    case '/save':
        PessoaController::save_user();
    break;

    case '/delete':
        PessoaController::delete();
    break;

    default:
        PessoaController::form();
    break;
}
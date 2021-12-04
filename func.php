<?php

function carrega_pagina() {
    (isset($_GET['page'])) ? $pagina = $_GET['page'] : $pagina = 'home';
    if (file_exists('content/' . $pagina . '.php')):
        require_once('content/' . $pagina . '.php');
    else:
        require_once('content/home.php');
    endif;
}

function titulos() {
    (isset($_GET['page'])) ? $pagina = $_GET['page'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $titulo = <<<'TAG'
Fantasy GAA League
TAG;
            break;
        case 'login':
            $titulo = <<<'TAG'
Member Login - Fantasy GAA League
TAG;
            break;
        case 'leagues':
            $titulo = <<<'TAG'
Leagues - Fantasy GAA League
TAG;
            break;
              
        case 'players':
            $titulo = <<<'TAG'
Players - Fantasy GAA League
TAG;
            break;
    
        case 'member':
            $titulo = <<<'TAG'
Member Area - Fantasy GAA League
TAG;
            break;
    
       case 'scoreboard':
            $titulo = <<<'TAG'
Scoreboard - Fantasy GAA League
TAG;
            break;
       case 'teamManager':
            $titulo = <<<'TAG'
TeamManager - Fantasy GAA League
TAG;
            break;
       case 'resources':
            $titulo = <<<'TAG'
Resourses - Fantasy GAA League
TAG;
            break;
       case 'register':
            $titulo = <<<'TAG'
Create Your Account - Fantasy GAA League
TAG;

            break;
        case 'about':
            $titulo = <<<'TAG'
About us - Fantasy GAA League
TAG;
     
            break;
        case 'login':
            $titulo = <<<'TAG'
LOGIN HERE - Fantasy GAA League
TAG;

            break;
    
            case 'adminPanel':
            $titulo = <<<'TAG'
Admin Panel - Fantasy GAA League
TAG;

            break;
    



    endswitch;
    return $titulo;
}
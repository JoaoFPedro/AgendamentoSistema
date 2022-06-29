<?php
#Caminhos absolutos - Configurações constantes do sistema
$dirInt = ""; //Caso o programa esteja numa pasta interna do servidor. Ex: /sistema


define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");//Diretorio da pagina "url"
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";//Se tiver "/" na ultima letra do DOCUMENT_ROOT não inclui nada, se nao tiver, incluir "/"
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");//Constante para incluir arquivos


#Banco de Dados
define('HOST', 'localhost');
define('DB', 'sistemaagendamento');
define('USER', 'root');
define('PASS', '');


#Incluir arquivos
//Incluindo o composer que será utilizado em todo o sistema. Incluindo aqui já valiada para todo o sistema
include(DIRREQ.'Agendamento/lib/composer/vendor/autoload.php');

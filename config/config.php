<?php
#arquivos e diretórios raizes
$PastaInterna = "/MVC/";

define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}{$PastaInterna}");

if (substr($_SERVER['DOCUMENT_ROOT'], -1 == "/")) 
{
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}
else
{
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}
#DIRETÓRIOS ESPECIFICOS
define('DIRIMAGE', DIRPAGE . "public/img/");
define('DIRCSS', DIRPAGE . "public/css/");
define('DIRJS', DIRPAGE . "public/js/");

#ACESSO AO BANCO DE DADOS
define('HOST', 'localhost');
define('DB', 'sistema');
define('USER', 'root');
define('PASS', '');

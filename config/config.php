<?php

#Arquivos diretórios raízes
$pasta_interna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$pasta_interna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$pasta_interna}");
}

#Diretórios Específicos
define('DIRIMG', DIRPAGE . "img/");
define('DIRCSS', DIRPAGE . "libs/css/");
define('DIRJS', DIRPAGE . "libs/js/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "auto");
define('USER', "root");
define('PASS', "");

<?php

#Arquivos diretórios raízes
$pasta_interna = "AutoEscolaNovo/";
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
define('DIRCLASS', DIRPAGE . "classes");
define('DIRDAO', DIRPAGE . "dao");

#Acesso ao banco de dados
define('DIRDB', DIRREQ . 'banco/');

define('HOST', "localhost");
define('DB', "autoescola");
define('USER', "root");
define('PASS', "");

function auto_load() {
    
    
    include_once DIRCLASS . '*.class.php';
    
    
    include_once DIRDAO . '*.class.php';
}


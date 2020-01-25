<?php 
use Code\Model\Produto;
use Code\Controller\{HomeController, Produto as ProdutoController};

require __DIR__ . '/../vendor/autoload.php';

/* function myAutoload($classe)
{
    $pastaBase = __DIR__ . '/../src/';
    $classe = str_replace('\\', '/', $classe) . '.php';
    $classe = $pastaBase . $classe;
    
    if(file_exists($classe)) {
        require $classe;
    }
    
}

spl_autoload_register('myAutoload'); */

$produto = new Produto();
$controller = new HomeController();
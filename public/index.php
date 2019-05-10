<?php 
header("Content-Type: text/html; charset=utf-8");

require_once("../src/vendor/autoload.php");
require_once("../config/config.php");


// use App\Teste;
use Src\Traits\TraitUrlParser;
use Src\Classes\ClassRoutes;

// class Teste extends ClassRoutes {
//     // use TraitUrlParser;
//     public function __construct()
//     {
//         $url = $this->getRota();
//         var_dump($url);
//     }
// }


// $n = new App\Model\Connection();

// var_dump($n->doConnection());
$teste = new App\Dispatch();
// var_dump($teste->getRota());
//  echo "<br>DIRREQ => ".DIRREQ.'<br>'.DIRPAGE.'<br>'.DIRIMAGE.'<br>'.DIRCSS.'<br>'.DIRJS;
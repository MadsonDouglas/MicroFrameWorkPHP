<?php 
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle('Inicio');
        $this->setDescription('Site voltado para educação');
        $this->setKeywords('Vitoria - Sistema de Apoio a Educação de Crianças com Síndrome de Down');
        $this->setDir('home/');
        $this->renderLayout();
    }

    // public function a ($par,$par1,$par2){
    //     echo " Função a com parametros = $par , $par1 , $par2 ";
    // }

    // public function b ($par1){
    //     echo " Função b com parametro = $par1";
    // }
}
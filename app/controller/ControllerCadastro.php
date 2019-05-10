<?php 
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerCadastro extends ClassRender implements InterfaceView{

    public function __construct()
    {
        $this->setTitle('cadastro');
        $this->setDescription('Site voltado para educação');
        $this->setKeywords('Vitoria - Sistema de Apoio a Educação de Crianças com Síndrome de Down');
        $this->setDir('cadastro/');
        $this->renderLayout();
    }
}
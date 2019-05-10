<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerNotFound extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle('Erro');
        $this->setDescription('Você acessou um link inválido');
        $this->setKeywords('Vitoria - Sistema de Apoio a Educação de Crianças com Síndrome de Down');
        $this->setDir('error/');
        $this->renderLayout();
    }
}

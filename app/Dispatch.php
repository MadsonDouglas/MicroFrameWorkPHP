<?php
#Arquivo dispachante
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{ 
    private $Method;
    private $Param = [];
    private $Obj;

    public function __construct()
    {
        self::addController();
    }

    #this method is used to add a controller for URL
    private function addController()
    {
        $RotaController = $this->getRota();
        $NameSpace = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameSpace();
        if (isset($this->parserURL()[1])) {
            self::addMethod();
        }
    }

    #This method is used for add a function in URL
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parserURL()[1])) {
            $this->setMethod("{$this->parserURL()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
    }

    #This method is used to add param for URL
    private function addParam()
    {
        $ContArray = count($this->parserURL());
        if ($ContArray > 2) {
            foreach ($this->parserURL() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->Param += [$key => $value]);
                }
            }
        }
    }

    #getters and setters
    protected function getMethod()
    {
        return $this->Method;
    }

    public function setMethod($value)
    {
        $this->Method = $value;
    }

    protected function getParam()
    {
        return $this->Param;
    }

    public function setParam($value)
    {
        $this->Param = $value;
    }
}

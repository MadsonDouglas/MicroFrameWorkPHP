<?php
#criando rotas no nosso sistema
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{

    use TraitUrlParser;
    private $Rota;

    #retorno da rota
    public function getRota()
    {
        $Url = $this->parserURL();
        $I = $Url[0];

        $this->Rota = array(
            '' => 'ControllerHome',
            'home' => 'ControllerHome',
            'cadastro' => 'ControllerCadastro',
            'login' => 'ControllerLogin',
        );
        if (array_key_exists($I, $this->Rota)) {
            if (file_exists(DIRREQ . "/app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return 'ControllerHome';
            }
        } else {
            return 'ControllerNotFound';
        }
    }
}

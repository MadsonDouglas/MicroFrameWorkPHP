<?php
namespace Src\Classes;

class ClassRender
{
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    #this function is used to render Layout
    public function renderLayout()
    {
        include_once DIRREQ . 'app/view/Layout.php';
    }
    #This function is used to add head for exemplo meta tags
    public function addHead()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/Head.php")) {
            include DIRREQ . "app/view/{$this->getDir()}/Head.php";
        }
    }
    #this method is used to add a Header for exemplo cabeçalhos
    public function addHeader()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/Header.php")) {
            include DIRREQ . "app/view/{$this->getDir()}/Header.php";
        }
    }
    #this function is used to add Main contents
    public function addMain()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/Main.php")) {
            include DIRREQ . "app/view/{$this->getDir()}/Main.php";
        }
    }
    #this function is used to add footer contents of site
    public function addFooter()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/Footer.php")) {
            include DIRREQ . "app/view/{$this->getDir()}/Footer.php";
        }
    }

    public function addJS()
    {
        if(file_exists(DIRREQ."app/view/{$this->getDir()}/JS.php")){
            include DIRREQ . "app/view/{$this->getDir()}/JS.php";
        }
    }

    #Getters and Setters
    public function getDir()
    {return $this->Dir;}

    public function setDir($value)
    {$this->Dir = $value;}

    public function getTitle()
    {return $this->Title;}

    public function setTitle($value)
    {$this->Title = $value;}

    public function getDescription()
    {return $this->Description;}

    public function setDescription($value)
    {$this->Description = $value;}

    public function getKeywords()
    {return $this->Keywords;}

    public function setKeywords($value)
    {$this->Keywords = $value;}
}

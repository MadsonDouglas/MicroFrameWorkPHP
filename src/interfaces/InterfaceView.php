<?php 
namespace Src\Interfaces;
interface InterfaceView{
    public function setDir($value);
    public function setTitle($value);
    public function setDescription($value);
    public function setKeywords($value);
    public function renderLayout();
}
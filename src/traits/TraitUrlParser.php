<?php 
    namespace Src\Traits;
    trait TraitUrlParser{
        #função que divide a url em um array
        public function parserURL()
        {
            return explode('/',rtrim($_GET['url']), FILTER_SANITIZE_URL);
        }
    }
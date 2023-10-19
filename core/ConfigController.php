<?php

namespace Core;

class ConfigController
{
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;

    public function __construct()
    {
        if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            var_dump($this->url);

            $this->clearUrl();

            $this->urlArray = explode("/", $this->url);
            var_dump($this->urlArray);

            if(isset($this->urlArray[0])){
                var_dump($this->urlArray[0]);
                $this->urlController = $this->slugController($this->urlArray[0]);
            }else{
                $this->urlController = "Home";
            }

        }else{
            $this->urlController = "Home";
        }

        
    }

    private function clearUrl()
    {
        $this->url = strip_tags($this->url);
        $this->url = trim($this->url);
        $this->url = rtrim($this->url, "/");
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
       $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    private function slugController($slugController)
    {
        $this->urlSlugController = strtolower($slugController);
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        $this->urlSlugController = ucwords($this->urlSlugController);
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    public function loadPage(){
        $classLoad = '\\App\\Controllers\\' . $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }
}
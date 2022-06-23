<?php
class Singleton
{
 
    private $settings = [];
    private static $_instance; // L'attribut qui stockera l'instance unique
 
    /**
    * La méthode statique qui permet d'instancier ou de récupérer l'instance unique
    **/
    public static function getInstance($article)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config($article);
        }
        return self::$_instance;
    }
 
    /**
    * Le constrcuteur avec sa logique est privé pour émpêcher l'instanciation en dehors de la classe
    **/
    private function __construct($article)
    {
        $this->settings = require($article);
    }
 
    /**
    *  Permet d'obtenir la valeur de la configuration
    *  @param $key string clef à récupérer
    *  @return mixed
    **/
    public function get($key)
    {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }
 
}
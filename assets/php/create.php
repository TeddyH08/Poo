<?php

class Personnage {
    private $vie;
    private $atk;
    private $def;
    private $vit;
    private $classe;
    private $nom;


    public function __construct(){
        $this->vie = 0;
        $this->atk = 0;
        $this->def = 0;
        $this->vit = 0;
        $this->classe = "";
        $this->nom = "";
    }

    public function mort() {
        return $this->vie <= 0;
    }
}

class Mage extends Personnage {
    public function __construct($classe, $nom){
        $this->vie = 100;
        $this->atk = 50;
        $this->def = 20;
        $this->vit = 12;
        $this->classe = $classe;
        $this->nom = $nom;
    }
}

class Guerrier extends Personnage {
    public function __construct($classe, $nom){
        $this->vie = 150;
        $this->atk = 30;
        $this->def = 50;
        $this->vit = 10;
        $this->classe = $classe;
        $this->nom = $nom;
    }
}

?>
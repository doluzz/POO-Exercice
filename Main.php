<?php

Class Main {

    public $name;
    public $mass;

    public function __construct($name, $mass){
        $this->name = $name;
        $this->mass = $mass;

    }

    public function nameAndMass(){

        echo "Main contient " . $this->name  . " et " . $this->mass;
        echo '<br>';
    }

}
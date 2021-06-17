<?php
require_once('API.php');
require_once("Main.php");



class Planet extends Main
{
    

    public function __construct(
        $name,
        $mass
        )
        { 
            parent::__construct($name,$mass);
        }

        
    public function GetNamePlanet($id){
        $api = new API;
        echo "La planete numéro " . $id . ", se nomme = ";
        echo $api->GetNamePlanet($id);
    }


}

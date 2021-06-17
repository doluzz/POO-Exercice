<?php
require_once("Main.php");
require_once("API.php");

class People extends Main
{
    
    public function __construct($name,$mass)
    { 
        parent::__construct($name,$mass);
    }
        
    public function GetEyeColor($id){
        $api = new API;
        echo $api->GetEyeColor($id);
    }

    public function modifyEyeColor($id,$newColor){
        $api = new API;
        $eyecolor = $api->GetFullInfoPeople($id)['eye_color'];
        echo "<br>";
        echo "l'ancienne couleur des yeux était : " .$eyecolor;

        $eyecolor = $newColor;
        echo "<br>";
        echo 'La nouvelle couleur des yeux est : ' . $eyecolor;

    }


}
